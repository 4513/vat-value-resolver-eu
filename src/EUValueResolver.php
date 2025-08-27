<?php

declare(strict_types=1);

namespace MiBo\VAT\ValueResolvers;

use InvalidArgumentException;
use MiBo\VAT\Contracts\ValueResolver;
use MiBo\VAT\VAT;
use OutOfBoundsException;
use OutOfRangeException;

/**
 * Class EUValueResolver
 *
 * @package MiBo\VAT\ValueResolvers
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
final class EUValueResolver implements ValueResolver
{
    /** @var array<non-empty-string, array<int, array<string, int|float>>> */
    private array $vatRates;

    public function __construct()
    {
        $this->vatRates = include __DIR__ . '/../resources/vat-rates.php';
    }

    /**
     * @inheritDoc
     *
     * @throws \OutOfRangeException If the country code is not part of this resolver.
     * @throws \OutOfBoundsException If the date for the country is not part of this resolver.
     * @throws \InvalidArgumentException If the VAT rate for the country and the date did not exist.
     *
     * @phpcs:disable SlevomatCodingStandard.Complexity.Cognitive.ComplexityTooHigh
     */
    public function getValueOfVAT(VAT $vat): float|int
    {
        if ($vat->isNone() || $vat->isAny() || $vat->isCombined()) {
            return 0;
        }

        $ccCode = $this->countryAlpha2ToAlpha3($vat->getCountryCode());

        if (!key_exists($ccCode, $this->vatRates)) {
            throw new OutOfRangeException('Unknown country code ' . $vat->getCountryCode());
        }

        $date  = $vat->getDate()->getTimestamp();
        $rates = $this->vatRates[$ccCode];

        foreach ($rates as $validSince => $VATs) {
            if ($date < $validSince) {
                continue;
            }

            if (!key_exists($vat->getRate()->name, $VATs)) {
                throw new InvalidArgumentException(
                    strtr(
                        'Unknown VAT rate :rate for country :country for date :date',
                        [
                            ':country' => $vat->getCountryCode(),
                            ':date'    => $vat->getDate()->format('Y-m-d'),
                            ':rate'    => $vat->getRate()->name,
                        ]
                    )
                );
            }

            return $VATs[$vat->getRate()->name];
        }

        throw new OutOfBoundsException(
            strtr(
                'Unknown VAT rate :rate for country :country for date :date',
                [
                    ':country' => $vat->getCountryCode(),
                    ':date'    => $vat->getDate()->format('Y-m-d'),
                    ':rate'    => $vat->getRate()->name,
                ]
            )
        );
    }

    /**
     * Changes the resource file for the VAT rates.
     *
     * @param string $resource
     *
     * @return void
     */
    public function setResourceFile(string $resource): void
    {
        $this->vatRates = include $resource;
    }

    /**
     * @param string $alpha2
     *
     * @return string
     */
    private function countryAlpha2ToAlpha3(string $alpha2): string
    {
        return match ($alpha2) {
            'AT' => 'AUT',
            'BE' => 'BEL',
            'BG' => 'BGR',
            'CY' => 'CYP',
            'CZ' => 'CZE',
            'DE' => 'DEU',
            'DK' => 'DNK',
            'EE' => 'EST',
            'EL' => 'GRC',
            'ES' => 'ESP',
            'FI' => 'FIN',
            'FR' => 'FRA',
            'HR' => 'HRV',
            'HU' => 'HUN',
            'IE' => 'IRL',
            'IT' => 'ITA',
            'LT' => 'LTU',
            'LU' => 'LUX',
            'LV' => 'LVA',
            'MT' => 'MLT',
            'NL' => 'NLD',
            'PL' => 'POL',
            'PT' => 'PRT',
            'RO' => 'ROU',
            'SE' => 'SWE',
            'SI' => 'SVN',
            'SK' => 'SVK',
            default => $alpha2,
        };
    }
}
