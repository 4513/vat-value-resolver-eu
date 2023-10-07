<?php

declare(strict_types=1);

namespace MiBo\VAT\ValueResolvers\Tests;

use MiBo\VAT\ValueResolvers\EUValueResolver;
use MiBo\VAT\VAT;
use PHPUnit\Framework\TestCase;
use function is_string;

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
 *
 * @coversDefaultClass \MiBo\VAT\ValueResolvers\EUValueResolver
 */
final class ResolverTest extends TestCase
{
    /**
     * @small
     *
     * @covers ::__construct
     * @covers ::getValueOfVAT
     *
     * @param class-string<\Throwable>|int|float $expected
     * @param \MiBo\VAT\VAT $vat
     *
     * @return void
     *
     * @dataProvider \MiBo\VAT\ValueResolvers\Tests\DataProvider::noneRate()
     * @dataProvider \MiBo\VAT\ValueResolvers\Tests\DataProvider::anyRate()
     * @dataProvider \MiBo\VAT\ValueResolvers\Tests\DataProvider::combinedRate()
     * @dataProvider \MiBo\VAT\ValueResolvers\Tests\DataProvider::invalidVatRate()
     * @dataProvider \MiBo\VAT\ValueResolvers\Tests\DataProvider::missingDates()
     * @dataProvider \MiBo\VAT\ValueResolvers\Tests\DataProvider::unknownCountry()
     * @dataProvider \MiBo\VAT\ValueResolvers\Tests\DataProvider::dataForSVK()
     */
    public function testResolving(string|int|float $expected, VAT $vat): void
    {
        if (is_string($expected)) {
            $this->expectException($expected);
        }

        $result = $this->getResolver()->getValueOfVAT($vat);

        $this->assertEquals($expected, $result);
    }

    private function getResolver(): EUValueResolver
    {
        return new EUValueResolver();
    }
}
