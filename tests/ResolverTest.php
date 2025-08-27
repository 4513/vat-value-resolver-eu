<?php

declare(strict_types=1);

namespace MiBo\VAT\ValueResolvers\Tests;

use MiBo\VAT\ValueResolvers\EUValueResolver;
use MiBo\VAT\VAT;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\TestCase;

/**
 * Class ResolverTest
 *
 * @package MiBo\VAT\ValueResolvers\Tests
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
#[CoversClass(EUValueResolver::class)]
#[Small]
final class ResolverTest extends TestCase
{
    #[DataProviderExternal(DataProvider::class, 'noneRate')]
    #[DataProviderExternal(DataProvider::class, 'anyRate')]
    #[DataProviderExternal(DataProvider::class, 'combinedRate')]
    #[DataProviderExternal(DataProvider::class, 'invalidVatRate')]
    #[DataProviderExternal(DataProvider::class, 'missingDates')]
    #[DataProviderExternal(DataProvider::class, 'unknownCountry')]
    #[DataProviderExternal(DataProvider::class, 'dataForSVK')]
    public function testResolving(string|int|float $expected, VAT $vat): void
    {
        if (\is_string($expected)) {
            self::expectException($expected);
        }

        $resolver = $this->getResolver();

        $resolver->setResourceFile(__DIR__ . '/../resources/vat-rates.php');

        $result = $resolver->getValueOfVAT($vat);

        self::assertEquals($expected, $result);
    }

    private function getResolver(): EUValueResolver
    {
        return new EUValueResolver();
    }
}
