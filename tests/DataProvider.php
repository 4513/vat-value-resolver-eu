<?php

declare(strict_types=1);

namespace MiBo\VAT\ValueResolvers\Tests;

use Carbon\Carbon;
use InvalidArgumentException;
use MiBo\Taxonomy\Contracts\ProductTaxonomy;
use MiBo\VAT\Enums\VATRate;
use MiBo\VAT\VAT;
use OutOfBoundsException;
use OutOfRangeException;

/**
 * Class DataProvider
 *
 * @package MiBo\VAT\ValueResolvers\Tests
 *
 * @author Michal Boris <michal.boris27@gmail.com>
 *
 * @since 0.1
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise.
 */
final class DataProvider
{
    /**
     * @return array<string, array{0: int<0, 0>, 1: \MiBo\VAT\VAT}>
     */
    public static function noneRate(): array
    {
        return [
            '#1 None SVK'                      => [
                0,
                VAT::get('SVK', VATRate::NONE, self::createClassification('A011111'), Carbon::now()),
            ],
            '#2 None SVK with date 2022-01-01' => [
                0,
                VAT::get(
                    'SVK',
                    VATRate::NONE,
                    self::createClassification('A011111'),
                    Carbon::create(2022)
                ),
            ],
            '#3 None XXX with date 2022-01-01' => [
                0,
                VAT::get(
                    'XXX',
                    VATRate::NONE,
                    self::createClassification('A011111'),
                    Carbon::create(2022)
                ),
            ],
        ];
    }

    /**
     * @return array<string, array{0: int<0, 0>, 1: \MiBo\VAT\VAT}>
     */
    public static function anyRate(): array
    {
        return [
            '#1 Any SVK'                      => [
                0,
                VAT::get('SVK', VATRate::ANY, self::createClassification('A011111'), Carbon::now()),
            ],
            '#2 Any SVK with date 2022-01-01' => [
                0,
                VAT::get(
                    'SVK',
                    VATRate::ANY,
                    self::createClassification('A011111'),
                    Carbon::create(2022)
                ),
            ],
            '#3 Any XXX with date 2022-01-01' => [
                0,
                VAT::get(
                    'XXX',
                    VATRate::ANY,
                    self::createClassification('A011111'),
                    Carbon::create(2022)
                ),
            ],
        ];
    }

    /**
     * @return array<string, array{0: int<0, 0>, 1: \MiBo\VAT\VAT}>
     */
    public static function combinedRate(): array
    {
        return [
            '#1 Combined SVK'                      => [
                0,
                VAT::get('SVK', VATRate::COMBINED, self::createClassification('A011111'), Carbon::now()),
            ],
            '#2 Combined SVK with date 2022-01-01' => [
                0,
                VAT::get(
                    'SVK',
                    VATRate::COMBINED,
                    self::createClassification('A011111'),
                    Carbon::create(2022)
                ),
            ],
            '#3 Combined XXX with date 2022-01-01' => [
                0,
                VAT::get(
                    'XXX',
                    VATRate::COMBINED,
                    self::createClassification('A011111'),
                    Carbon::create(2022)
                ),
            ],
        ];
    }

    /**
     * @return array<string, array{0: class-string<\Throwable>, 1: \MiBo\VAT\VAT}>
     */
    public static function unknownCountry(): array
    {
        return [
            '#1 Unknown country, standard'                     => [
                OutOfRangeException::class,
                VAT::get('XXX', VATRate::STANDARD, self::createClassification('A011111'), Carbon::now()),
            ],
            '#2 Unknown country, reduced'                      => [
                OutOfRangeException::class,
                VAT::get('XXX', VATRate::REDUCED, self::createClassification('A011111'), Carbon::now()),
            ],
            '#3 Unknown country, super reduced'                => [
                OutOfRangeException::class,
                VAT::get('XXX', VATRate::SUPER_REDUCED, self::createClassification('A011111'), Carbon::now()),
            ],
            '#4 Unknown country, second reduced'               => [
                OutOfRangeException::class,
                VAT::get('XXX', VATRate::SECOND_REDUCED, self::createClassification('A011111'), Carbon::now()),
            ],
            '#5 Unknown country, parking'                      => [
                OutOfRangeException::class,
                VAT::get('XXX', VATRate::PARKING, self::createClassification('A011111'), Carbon::now()),
            ],
            '#6 Not implemented country (CHI), standard'       => [
                OutOfRangeException::class,
                VAT::get('CHI', VATRate::STANDARD, self::createClassification('A011111'), Carbon::now()),
            ],
            '#7 Not implemented country (CHI), reduced'        => [
                OutOfRangeException::class,
                VAT::get('CHI', VATRate::REDUCED, self::createClassification('A011111'), Carbon::now()),
            ],
            '#8 Not implemented country (CHI), super reduced'  => [
                OutOfRangeException::class,
                VAT::get('CHI', VATRate::SUPER_REDUCED, self::createClassification('A011111'), Carbon::now()),
            ],
            '#9 Not implemented country (CHI), second reduced' => [
                OutOfRangeException::class,
                VAT::get('CHI', VATRate::SECOND_REDUCED, self::createClassification('A011111'), Carbon::now()),
            ],
            '#10 Not implemented country (CHI), parking'       => [
                OutOfRangeException::class,
                VAT::get('CHI', VATRate::PARKING, self::createClassification('A011111'), Carbon::now()),
            ],
        ];
    }

    /**
     * @return array<string, array{0: class-string<\Throwable>, 1: \MiBo\VAT\VAT}>
     */
    public static function invalidVatRate(): array
    {
        return [
            '#1 SVK, missing Second reduced' => [
                InvalidArgumentException::class,
                VAT::get(
                    'SVK',
                    VATRate::SECOND_REDUCED,
                    self::createClassification('A011111'),
                    Carbon::create(2023)
                ),
            ],
            '#2 SVK, missing Parking'        => [
                InvalidArgumentException::class,
                VAT::get(
                    'SVK',
                    VATRate::PARKING,
                    self::createClassification('A011111'),
                    Carbon::create(2023)
                ),
            ],
            '#3 SVK, missing Super reduced'  => [
                InvalidArgumentException::class,
                VAT::get(
                    'SVK',
                    VATRate::SUPER_REDUCED,
                    self::createClassification('A011111'),
                    Carbon::create(2023)
                ),
            ],
            '#4 GBR, missing Reduced'        => [
                InvalidArgumentException::class,
                VAT::get(
                    'GBR',
                    VATRate::REDUCED,
                    self::createClassification('A011111'),
                    Carbon::create(1974)
                ),
            ],
            '#5 SWE, missing Second reduced' => [
                InvalidArgumentException::class,
                VAT::get(
                    'SWE',
                    VATRate::SECOND_REDUCED,
                    self::createClassification('A011111'),
                    Carbon::create(1981, Carbon::NOVEMBER, 19)
                ),
            ],
            '#6 FIN, missing Super reduced'  => [
                InvalidArgumentException::class,
                VAT::get(
                    'FIN',
                    VATRate::SUPER_REDUCED,
                    self::createClassification('A011111'),
                    Carbon::create(1998, Carbon::FEBRUARY, 10)
                ),
            ],
        ];
    }

    /**
     * @return array<string, array{0: class-string<\Throwable>, 1: \MiBo\VAT\VAT}>
     */
    public static function missingDates(): array
    {
        return [
            '#1 SVK, before its existence' => [
                OutOfBoundsException::class,
                VAT::get(
                    'SVK',
                    VATRate::SECOND_REDUCED,
                    self::createClassification('A011111'),
                    Carbon::create(1991)
                ),
            ],
            '#2 SVN'                       => [
                OutOfBoundsException::class,
                VAT::get(
                    'SVN',
                    VATRate::PARKING,
                    self::createClassification('A011111'),
                    Carbon::create(1970)
                ),
            ],
            '#3 ROU'                       => [
                OutOfBoundsException::class,
                VAT::get(
                    'ROU',
                    VATRate::SUPER_REDUCED,
                    self::createClassification('A011111'),
                    Carbon::create(1993, Carbon::JUNE, 29)
                ),
            ],
            '#4 MLT'                       => [
                OutOfBoundsException::class,
                VAT::get(
                    'MLT',
                    VATRate::STANDARD,
                    self::createClassification('A011111'),
                    Carbon::create(1971)
                ),
            ],
        ];
    }

    /**
     * @return array<string, array{0: class-string<\Throwable>|int<0, 0>, 1: \MiBo\VAT\VAT}>
     */
    public static function dataForSVK(): array
    {
        return [
            '2010-12-31 Second Reduced' => [
                6,
                VAT::get(
                    'SVK',
                    VATRate::SECOND_REDUCED,
                    self::createClassification('A01'),
                    Carbon::create(2010, Carbon::DECEMBER, 31)
                ),
            ],
            '2023-01-01 Standard'       => [
                20,
                VAT::get(
                    'SVK',
                    VATRate::STANDARD,
                    self::createClassification('A'),
                    Carbon::create(2023)
                ),
            ],
            '2023-12-31 Reduced'        => [
                10,
                VAT::get(
                    'SVK',
                    VATRate::REDUCED,
                    self::createClassification('A01'),
                    Carbon::create(2023, Carbon::DECEMBER, 31)
                ),
            ],
            '2023-12-31 Second Reduced' => [
                InvalidArgumentException::class,
                VAT::get(
                    'SVK',
                    VATRate::SECOND_REDUCED,
                    self::createClassification('A02'),
                    Carbon::create(2023, Carbon::DECEMBER, 31)
                ),
            ],
            '2023-12-31 Standard'       => [
                20,
                VAT::get(
                    'SVK',
                    VATRate::STANDARD,
                    self::createClassification('A'),
                    Carbon::create(2023, Carbon::DECEMBER, 31)
                ),
            ],
        ];
    }

    /**
     * @internal
     *
     * @param string $class
     *
     * @return \MiBo\Taxonomy\Contracts\ProductTaxonomy
     */
    public static function createClassification(string $class): ProductTaxonomy
    {
        return new class ($class) implements ProductTaxonomy {
            // @phpcs:disable SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
            public function __construct(private string $class)
            {
            }

            public function getCode(): string
            {
                return $this->class;
            }

            public function is(string|ProductTaxonomy $code): bool
            {
                return false;
            }

            public function belongsTo(string|ProductTaxonomy $code): bool
            {
                return false;
            }

            public function wraps(string|ProductTaxonomy $code): bool
            {
                return false;
            }

            public static function isValid(string $code): bool
            {
                return true;
            }

            // @phpcs:enable SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
        };
    }
}
