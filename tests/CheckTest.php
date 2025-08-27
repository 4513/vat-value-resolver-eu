<?php

declare(strict_types = 1);

namespace MiBo\VAT\ValueResolvers\Tests;

use Carbon\Carbon;
use MiBo\VAT\Enums\VATRate;
use MiBo\VAT\ValueResolvers\EUValueResolver;
use MiBo\VAT\VAT;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Large;
use PHPUnit\Framework\Attributes\Medium;
use PHPUnit\Framework\TestCase;

/**
 * Class CheckTest
 *
 * @package MiBo\VAT\ValueResolvers\Tests
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 1.0
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
#[CoversNothing]
#[Large]
final class CheckTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\DataProvider('getCountryCodes')]
    public function testThatCountryIsUpToDate(string $countryCode): void
    {
        $client = new \SoapClient('https://ec.europa.eu/taxation_customs/tedb/ws/VatRetrievalService.wsdl');

        try {
            $response = $client->retrieveVatRates(['memberStates' => [$countryCode]]);
        } catch (\SoapFault $e) {
            self::markTestSkipped('Service is not available: ' . $e->getMessage());
        }

        $responseData = $response->vatRateResults;

        self::assertIsArray($responseData);

        $responseData = $this->formatSoapResultIntoSimpleArray($responseData);

        self::assertVatRates($countryCode, $responseData);

    }

    public static function assertVatRates(string $countryCode, array $actualRates): void
    {
        $resolver = new EUValueResolver();

        foreach ($actualRates as $rate) {
            $calculatedRate = self::getExpectedVatRate($calculatedRate ?? null, $rate);
            $vat = VAT::get(
                $countryCode,
                $calculatedRate,
                DataProvider::createClassification($countryCode . $rate),
                Carbon::now()
            );

            $value = $resolver->getValueOfVAT($vat);

            self::assertEquals($rate, $value);
        }
    }

    private static function getExpectedVatRate(?VATRate $previous, float|int $currentValue): VATRate
    {
        if ($previous === null) {
            return VATRate::STANDARD;
        }

        if ($previous === VATRate::STANDARD && $currentValue >= 5) {
            return VATRate::REDUCED;
        }

        if ($previous === VATRate::REDUCED && $currentValue >= 5) {
            return VATRate::SECOND_REDUCED;
        }

        if ($previous !== VATRate::SUPER_REDUCED && $currentValue < 5) {
            return VATRate::SUPER_REDUCED;
        }

        throw new \RuntimeException('asd??' . $currentValue);
    }

    private function formatSoapResultIntoSimpleArray(array $responseData): array
    {
        $result = [];

        foreach ($responseData as $resultItem) {
            $value = $resultItem->rate->value;

            if ($value === null) {
                continue;
            }

            $formatted = number_format($value, 2, '.', '');

            if ($formatted === '0.00') {
                continue;
            }

            $result[$formatted] = $value;
        }

        usort($result, static fn ($a, $b): int => $b <=> $a);

        return $result;
    }

    public static function getCountryCodes(): array
    {
        return [
//            ['AT'],
            ['BE'],
            ['BG'],
//            ['CY'],
            ['CZ'],
            ['DE'],
            ['DK'],
            ['EE'],
//            ['EL'],
//            ['ES'],
            ['FI'],
//            ['FR'],
            ['HR'],
            ['HU'],
            ['IE'],
            ['IT'],
            ['LT'],
//            ['LU'],
            ['LV'],
//            ['MT'],
            ['NL'],
            ['PL'],
//            ['PT'],
//            ['RO'],
            ['SE'],
            ['SI'],
            ['SK'],
        ];
    }

    public function testNothing(): void
    {
        self::expectNotToPerformAssertions();
        return;
        $ccList = [
            'AT',
            'BE',
            'BG',
            'CY',
            'CZ',
            'DE',
            'DK',
            'EE',
            'EL',
            'ES',
            'FI',
            'FR',
            'HR',
            'HU',
            'IE',
            'IT',
            'LT',
            'LU',
            'LV',
            'MT',
            'NL',
            'PL',
            'PT',
            'RO',
            'SE',
            'SI',
            'SK',
        ];
        $cl = new \SoapClient('https://ec.europa.eu/taxation_customs/tedb/ws/VatRetrievalService.wsdl');
        $li = [];

        foreach ($ccList as $cc) {
            try {
                $a = $cl->retrieveVatRates(['memberStates' => [$cc]])->vatRateResults;
            } catch (\SoapFault $e) {
                var_export($cc);
                var_export($e->getMessage());
                continue;
            }
            $actualPerCountry = [];

            foreach ($a as $result) {
                $val = $result->rate->value;
                if ($val === null) {
                    continue;
                }
                $vt  = number_format($val, 2, '.', '');

                if ($vt === '0.00') {
                    continue;
                }

                $actualPerCountry[$vt] = $val;
            }

            sort($actualPerCountry);

            $li[$cc] = $actualPerCountry;
        }

        var_export($li);

        self::expectNotToPerformAssertions();
    }
}
