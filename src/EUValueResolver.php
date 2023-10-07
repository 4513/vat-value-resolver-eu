<?php

declare(strict_types=1);

namespace MiBo\VAT\ValueResolvers;

use Carbon\Carbon;
use InvalidArgumentException;
use MiBo\VAT\Contracts\ValueResolver;
use MiBo\VAT\Enums\VATRate;
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
        $this->vatRates = [
            'BEL' => [
                Carbon::create(2020)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                    VATRate::PARKING->name        => 12,
                ],
                Carbon::create(1996)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                    VATRate::SUPER_REDUCED->name  => 1,
                    VATRate::PARKING->name        => 12,
                ],
                Carbon::create(1994)->getTimestamp() => [
                    VATRate::STANDARD->name       => 20.5,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                    VATRate::SUPER_REDUCED->name  => 1,
                    VATRate::PARKING->name        => 12,
                ],
                Carbon::create(1992, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19.5,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                    VATRate::SUPER_REDUCED->name  => 1,
                ],
                Carbon::create(1983)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 6,
                    VATRate::SUPER_REDUCED->name  => 1,
                    VATRate::PARKING->name        => 17,
                ],
                Carbon::create(1982, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name      => 17,
                    VATRate::REDUCED->name       => 6,
                    VATRate::SUPER_REDUCED->name => 1,
                ],
                Carbon::create(1981, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 17,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1978)->getTimestamp() => [
                    VATRate::STANDARD->name => 16,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1971)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 6,
                ],
            ],
            'BGR' => [
                Carbon::create(2021, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(2007)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 7,
                ],
                Carbon::create(1999)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                ],
                Carbon::create(1996, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                ],
                Carbon::create(1994, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                ],
            ],
            'CZE' => [
                Carbon::create(2015)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 15,
                    VATRate::SECOND_REDUCED->name => 10,
                ],
                Carbon::create(2013)->getTimestamp() => [
                    VATRate::STANDARD->name => 21,
                    VATRate::REDUCED->name  => 15,
                ],
                Carbon::create(2012)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 14,
                ],
                Carbon::create(2010)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(2008)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(2004, Carbon::MAY)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name => 23,
                    VATRate::REDUCED->name  => 5,
                ],
            ],
            'DNK' => [
                Carbon::create(1992)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                ],
                Carbon::create(1980, Carbon::JUNE, 30)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                ],
                Carbon::create(1978, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 20.25,
                ],
                Carbon::create(1977, Carbon::OCTOBER, 3)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                ],
                Carbon::create(1976, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                ],
                Carbon::create(1975, Carbon::SEPTEMBER, 29)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                    VATRate::REDUCED->name  => 9.25,
                ],
                Carbon::create(1970, Carbon::JUNE, 29)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                ],
                Carbon::create(1968, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name => 12.5,
                ],
                Carbon::create(1967, Carbon::JULY, 3)->getTimestamp() => [
                    VATRate::STANDARD->name => 10,
                ],
            ],
            'DEU' => [
                Carbon::create(2007)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 7,
                ],
                Carbon::create(1998, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name => 16,
                    VATRate::REDUCED->name  => 7,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                    VATRate::REDUCED->name  => 7,
                ],
                Carbon::create(1983, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 14,
                    VATRate::REDUCED->name  => 7,
                ],
                Carbon::create(1979, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 13,
                    VATRate::REDUCED->name  => 6.5,
                ],
                Carbon::create(1978)->getTimestamp() => [
                    VATRate::STANDARD->name => 12,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1968, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 11,
                    VATRate::REDUCED->name  => 5.5,
                ],
                Carbon::create(1968)->getTimestamp() => [
                    VATRate::STANDARD->name => 10,
                    VATRate::REDUCED->name  => 5,
                ],
            ],
            'EST' => [
//                Carbon::create(2024)->getTimestamp() => [
//                    VATRate::STANDARD->name => 22,
//                    VATRate::REDUCED->name  => 9,
//                ],
                Carbon::create(2009, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(2009)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(2000)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                ],
                Carbon::create(1991)->getTimestamp() => [
                    VATRate::STANDARD->name => 10,
                ],
            ],
            'IRL' => [
                Carbon::create(2012)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 13.5,
                    VATRate::SECOND_REDUCED->name => 9,
                    VATRate::SUPER_REDUCED->name  => 4.8,
                    VATRate::PARKING->name        => 13.5,
                ],
                Carbon::create(2011, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 13.5,
                    VATRate::SECOND_REDUCED->name => 9,
                    VATRate::SUPER_REDUCED->name  => 4.8,
                    VATRate::PARKING->name        => 13.5,
                ],
                Carbon::create(2010)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 13.5,
                    VATRate::SUPER_REDUCED->name  => 4.8,
                    VATRate::PARKING->name        => 13.5,
                ],
                Carbon::create(2008, Carbon::DECEMBER)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21.5,
                    VATRate::REDUCED->name        => 13.5,
                    VATRate::SUPER_REDUCED->name  => 4.8,
                    VATRate::PARKING->name        => 13.5,
                ],
                Carbon::create(2005)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 13.5,
                    VATRate::SUPER_REDUCED->name  => 4.8,
                    VATRate::PARKING->name        => 13.5,
                ],
                Carbon::create(2004)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 13.5,
                    VATRate::SUPER_REDUCED->name  => 4.4,
                    VATRate::PARKING->name        => 13.5,
                ],
                Carbon::create(2003)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 13.5,
                    VATRate::SUPER_REDUCED->name  => 4.3,
                    VATRate::PARKING->name        => 13.5,
                ],
                Carbon::create(2002, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 4.3,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(2001)->getTimestamp() => [
                    VATRate::STANDARD->name       => 20,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 4.3,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(2000, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 4.2,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(1999, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 4,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(1998, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 3.6,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(1997, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 3.3,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(1996)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 2.8,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(1993, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SUPER_REDUCED->name  => 2.5,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(1992, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SECOND_REDUCED->name => 10,
                    VATRate::SUPER_REDUCED->name  => 2.7,
                    VATRate::PARKING->name        => 16,
                ],
                Carbon::create(1991, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12.5,
                    VATRate::SECOND_REDUCED->name => 10,
                    VATRate::SUPER_REDUCED->name  => 2.7,
                    VATRate::PARKING->name        => 12.5,
                ],
                Carbon::create(1990, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 10,
                    VATRate::SUPER_REDUCED->name  => 2.3,
                ],
                Carbon::create(1989, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 5,
                    VATRate::SUPER_REDUCED->name  => 2,
                ],
                Carbon::create(1988, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 5,
                    VATRate::SUPER_REDUCED->name  => 1.4,
                ],
                Carbon::create(1987, Carbon::MAY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SUPER_REDUCED->name  => 1.7,
                ],
                Carbon::create(1986, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SUPER_REDUCED->name  => 2.4,
                ],
                Carbon::create(1985, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 5,
                    VATRate::SUPER_REDUCED->name  => 2.2,
                ],
            ],
            'GRC' => [
                Carbon::create(2016, Carbon::JUNE)->getTimestamp() => [
                    VATRate::STANDARD->name       => 24,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 6,
                ],
                Carbon::create(2015, Carbon::JULY, 20)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 6,
                ],
                Carbon::create(2011)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 6.5,
                ],
                Carbon::create(2010, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 11,
                    VATRate::SECOND_REDUCED->name => 5.5,
                ],
                Carbon::create(2010, Carbon::MARCH, 15)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2005, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 4.5,
                ],
                Carbon::create(1990, Carbon::APRIL, 28)->getTimestamp() => [
                    VATRate::STANDARD->name       => 18,
                    VATRate::REDUCED->name        => 8,
                    VATRate::SECOND_REDUCED->name => 4,
                ],
                Carbon::create(1988)->getTimestamp() => [
                    VATRate::STANDARD->name       => 16,
                    VATRate::REDUCED->name        => 6,
                    VATRate::SECOND_REDUCED->name => 3,
                ],
                Carbon::create(1987)->getTimestamp() => [
                    VATRate::STANDARD->name       => 18,
                    VATRate::REDUCED->name        => 6,
                    VATRate::SECOND_REDUCED->name => 3,
                ],
            ],
            'ESP' => [
                Carbon::create(2012, Carbon::SEPTEMBER)->getTimestamp() => [
                    VATRate::STANDARD->name      => 21,
                    VATRate::REDUCED->name       => 10,
                    VATRate::SUPER_REDUCED->name => 4,
                ],
                Carbon::create(2010, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name      => 18,
                    VATRate::REDUCED->name       => 8,
                    VATRate::SUPER_REDUCED->name => 4,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name      => 16,
                    VATRate::REDUCED->name       => 7,
                    VATRate::SUPER_REDUCED->name => 4,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name      => 15,
                    VATRate::REDUCED->name       => 6,
                    VATRate::SUPER_REDUCED->name => 3,
                ],
                Carbon::create(1992, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1992)->getTimestamp() => [
                    VATRate::STANDARD->name => 13,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1986)->getTimestamp() => [
                    VATRate::STANDARD->name => 12,
                    VATRate::REDUCED->name  => 6,
                ],
            ],
            'FRA' => [
                Carbon::create(2014)->getTimestamp() => [
                    VATRate::STANDARD->name       => 20,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 5.5,
                    VATRate::SUPER_REDUCED->name  => 2.1,
                ],
                Carbon::create(2012)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19.6,
                    VATRate::REDUCED->name        => 7,
                    VATRate::SECOND_REDUCED->name => 5.5,
                    VATRate::SUPER_REDUCED->name  => 2.1,
                ],
                Carbon::create(2000, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name      => 19.6,
                    VATRate::REDUCED->name       => 5.5,
                    VATRate::SUPER_REDUCED->name => 2.1,
                ],
                Carbon::create(1995, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name      => 20.6,
                    VATRate::REDUCED->name       => 5.5,
                    VATRate::SUPER_REDUCED->name => 2.1,
                ],
                Carbon::create(1991, Carbon::JULY, 29)->getTimestamp() => [
                    VATRate::STANDARD->name      => 18.6,
                    VATRate::REDUCED->name       => 5.5,
                    VATRate::SUPER_REDUCED->name => 2.1,
                ],
                Carbon::create(1989)->getTimestamp() => [
                    VATRate::STANDARD->name       => 18.6,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 5.5,
                    VATRate::SUPER_REDUCED->name  => 2.1,
                ],
            ],
            'HRV' => [
                Carbon::create(2014)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2013)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2012, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(2009, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name => 23,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(2006)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(1998, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                ],
            ],
            'ITA' => [
                Carbon::create(2016)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 5,
                    VATRate::SUPER_REDUCED->name  => 4,
                ],
                Carbon::create(2013, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name      => 22,
                    VATRate::REDUCED->name       => 10,
                    VATRate::SUPER_REDUCED->name => 4,
                ],
                Carbon::create(2011, Carbon::SEPTEMBER, 17)->getTimestamp() => [
                    VATRate::STANDARD->name      => 21,
                    VATRate::REDUCED->name       => 10,
                    VATRate::SUPER_REDUCED->name => 4,
                ],
                Carbon::create(1997, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name      => 20,
                    VATRate::REDUCED->name       => 10,
                    VATRate::SUPER_REDUCED->name => 4,
                ],
                Carbon::create(1995, Carbon::FEBRUARY, 24)->getTimestamp() => [
                    VATRate::STANDARD->name      => 19,
                    VATRate::REDUCED->name       => 10,
                    VATRate::SUPER_REDUCED->name => 4,
                    VATRate::PARKING->name       => 16,
                ],
                Carbon::create(1994)->getTimestamp() => [
                    VATRate::STANDARD->name      => 19,
                    VATRate::REDUCED->name       => 9,
                    VATRate::SUPER_REDUCED->name => 4,
                    VATRate::PARKING->name       => 13,
                ],
                Carbon::create(1993, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name      => 19,
                    VATRate::REDUCED->name       => 9,
                    VATRate::SUPER_REDUCED->name => 4,
                    VATRate::PARKING->name       => 12,
                ],
                Carbon::create(1991, Carbon::MAY, 13)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 9,
                    VATRate::SUPER_REDUCED->name  => 4,
                ],
                Carbon::create(1989)->getTimestamp() => [
                    VATRate::STANDARD->name      => 19,
                    VATRate::REDUCED->name       => 9,
                    VATRate::SUPER_REDUCED->name => 4,
                ],
                Carbon::create(1988, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name      => 19,
                    VATRate::REDUCED->name       => 9,
                    VATRate::SUPER_REDUCED->name => 2,
                ],
                Carbon::create(1984, Carbon::DECEMBER, 20)->getTimestamp() => [
                    VATRate::STANDARD->name      => 18,
                    VATRate::REDUCED->name       => 9,
                    VATRate::SUPER_REDUCED->name => 2,
                ],
            ],
            'CYP' => [
                Carbon::create(2014, Carbon::JANUARY, 13)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2013, Carbon::JANUARY, 14)->getTimestamp() => [
                    VATRate::STANDARD->name       => 18,
                    VATRate::REDUCED->name        => 8,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2012, Carbon::MARCH)->getTimestamp() => [
                    VATRate::STANDARD->name       => 17,
                    VATRate::REDUCED->name        => 8,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2005, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(2002, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 13,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(2000, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 10,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1993, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 8,
                ],
                Carbon::create(1992, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 5,
                ],
            ],
            'LVA' => [
                Carbon::create(2018)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2012, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 21,
                    VATRate::REDUCED->name  => 12,
                ],
                Carbon::create(2011)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                    VATRate::REDUCED->name  => 12,
                ],
                Carbon::create(2009)->getTimestamp() => [
                    VATRate::STANDARD->name => 21,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(2004, Carbon::MAY)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(2003)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(1995, Carbon::MAY)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                ],
            ],
            'LTU' => [
                Carbon::create(2009, Carbon::SEPTEMBER)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2009)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2001)->getTimestamp() => [
                    VATRate::STANDARD->name       => 18,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2000, Carbon::MAY)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1997)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                ],
                Carbon::create(1994, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(1994, Carbon::MAY)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                ],
            ],
            'LUX' => [
                Carbon::create(2024)->getTimestamp() => [
                    VATRate::STANDARD->name      => 17,
                    VATRate::REDUCED->name       => 8,
                    VATRate::SUPER_REDUCED->name => 3,
                    VATRate::PARKING->name       => 14,
                ],
                Carbon::create(2023)->getTimestamp() => [
                    VATRate::STANDARD->name      => 16,
                    VATRate::REDUCED->name       => 7,
                    VATRate::SUPER_REDUCED->name => 3,
                    VATRate::PARKING->name       => 13,
                ],
                Carbon::create(2015)->getTimestamp() => [
                    VATRate::STANDARD->name      => 17,
                    VATRate::REDUCED->name       => 8,
                    VATRate::SUPER_REDUCED->name => 3,
                    VATRate::PARKING->name       => 14,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name      => 15,
                    VATRate::REDUCED->name       => 6,
                    VATRate::SUPER_REDUCED->name => 3,
                    VATRate::PARKING->name       => 12,
                ],
                Carbon::create(1992)->getTimestamp() => [
                    VATRate::STANDARD->name      => 15,
                    VATRate::REDUCED->name       => 6,
                    VATRate::SUPER_REDUCED->name => 3,
                ],
                Carbon::create(1983, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name      => 12,
                    VATRate::REDUCED->name       => 6,
                    VATRate::SUPER_REDUCED->name => 3,
                ],
                Carbon::create(1971)->getTimestamp() => [
                    VATRate::STANDARD->name      => 10,
                    VATRate::REDUCED->name       => 5,
                    VATRate::SUPER_REDUCED->name => 2,
                ],
                Carbon::create(1970)->getTimestamp() => [
                    VATRate::STANDARD->name       => 8,
                    VATRate::SUPER_REDUCED->name  => 4,
                ],
            ],
            'HUN' => [
                Carbon::create(2012)->getTimestamp() => [
                    VATRate::STANDARD->name       => 27,
                    VATRate::REDUCED->name        => 18,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2009, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 18,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2006, Carbon::SEPTEMBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(2006)->getTimestamp() => [
                    VATRate::STANDARD->name       => 20,
                    VATRate::REDUCED->name        => 15,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2004)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 15,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 12,
                ],
                Carbon::create(1993, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1988)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 15,
                ],
            ],
            'MLT' => [
                Carbon::create(2011)->getTimestamp() => [
                    VATRate::STANDARD->name       => 18,
                    VATRate::REDUCED->name        => 7,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2004)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                    VATRate::REDUCED->name  => 5,
                ],
            ],
            'NLD' => [
                Carbon::create(2019)->getTimestamp() => [
                    VATRate::STANDARD->name => 21,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(2012, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 21,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(2001)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1992, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 17.5,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1989)->getTimestamp() => [
                    VATRate::STANDARD->name => 18.5,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1986, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1984)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1976)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 4,
                ],
                Carbon::create(1973)->getTimestamp() => [
                    VATRate::STANDARD->name => 16,
                    VATRate::REDUCED->name  => 4,
                ],
                Carbon::create(1971)->getTimestamp() => [
                    VATRate::STANDARD->name => 14,
                    VATRate::REDUCED->name  => 4,
                ],
                Carbon::create(1969)->getTimestamp() => [
                    VATRate::STANDARD->name => 12,
                    VATRate::REDUCED->name  => 4,
                ],
            ],
            'AUT' => [
                Carbon::create(2016)->getTimestamp() => [
                    VATRate::STANDARD->name       => 20,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 10,
                    VATRate::PARKING->name        => 13,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 10,
                    VATRate::PARKING->name  => 12,
                ],
                Carbon::create(1992)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(1984)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 10,
                    VATRate::PARKING->name  => 32,
                ],
                Carbon::create(1981)->getTimestamp() => [
                    VATRate::STANDARD->name       => 18,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 8,
                    VATRate::PARKING->name        => 30,
                ],
                Carbon::create(1978)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 8,
                    VATRate::PARKING->name  => 30,
                ],
                Carbon::create(1976)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 8,
                ],
                Carbon::create(1973)->getTimestamp() => [
                    VATRate::STANDARD->name => 16,
                    VATRate::REDUCED->name  => 8,
                ],
            ],
            'POL' => [
                Carbon::create(2011)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 8,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2000, Carbon::SEPTEMBER, 4)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                    VATRate::REDUCED->name        => 7,
                    VATRate::SECOND_REDUCED->name => 3,
                ],
                Carbon::create(1993, Carbon::JULY, 5)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                    VATRate::REDUCED->name  => 7,
                ],
            ],
            'PRT' => [
                Carbon::create(2011)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 6,
                    VATRate::PARKING->name        => 13,
                ],
                Carbon::create(2010, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 6,
                    VATRate::PARKING->name        => 13,
                ],
                Carbon::create(2008, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 20,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 5,
                    VATRate::PARKING->name        => 12,
                ],
                Carbon::create(2005, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 21,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 5,
                    VATRate::PARKING->name        => 12,
                ],
                Carbon::create(2002, Carbon::JUNE, 5)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 5,
                    VATRate::PARKING->name        => 12,
                ],
                Carbon::create(1996, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 17,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name => 17,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1992, Carbon::MARCH, 24)->getTimestamp() => [
                    VATRate::STANDARD->name => 16,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1988, Carbon::FEBRUARY)->getTimestamp() => [
                    VATRate::STANDARD->name => 17,
                    VATRate::REDUCED->name  => 8,
                ],
                Carbon::create(1986)->getTimestamp() => [
                    VATRate::STANDARD->name => 16,
                    VATRate::REDUCED->name  => 8,
                ],
            ],
            'ROU' => [
                Carbon::create(2017)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2016)->getTimestamp() => [
                    VATRate::STANDARD->name       => 20,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2010)->getTimestamp() => [
                    VATRate::STANDARD->name       => 24,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2008, Carbon::DECEMBER)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 9,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2004)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(2000)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                ],
                Carbon::create(1998, Carbon::FEBRUARY)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                    VATRate::REDUCED->name  => 11,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                    VATRate::REDUCED->name  => 9,
                ],
                Carbon::create(1993, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 18,
                ],
            ],
            'SVN' => [
                Carbon::create(2020)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                    VATRate::REDUCED->name        => 9.5,
                    VATRate::SECOND_REDUCED->name => 5,
                ],
                Carbon::create(2012, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 22,
                    VATRate::REDUCED->name  => 9.5,
                ],
                Carbon::create(2002)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 8.5,
                ],
                Carbon::create(1999, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 8,
                ],
            ],
            'SVK' => [
                Carbon::create(2011)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(2010, Carbon::MAY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 19,
                    VATRate::REDUCED->name        => 10,
                    VATRate::SECOND_REDUCED->name => 6,
                ],
                Carbon::create(2007)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(2004)->getTimestamp() => [
                    VATRate::STANDARD->name => 19,
                ],
                Carbon::create(2003)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 14,
                ],
                Carbon::create(1999, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name => 23,
                    VATRate::REDUCED->name  => 10,
                ],
                Carbon::create(1996)->getTimestamp() => [
                    VATRate::STANDARD->name => 23,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1993, Carbon::AUGUST)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 6,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name => 23,
                    VATRate::REDUCED->name  => 5,
                ],
            ],
            'FIN' => [
                Carbon::create(2013)->getTimestamp() => [
                    VATRate::STANDARD->name       => 24,
                    VATRate::REDUCED->name        => 14,
                    VATRate::SECOND_REDUCED->name => 10,
                ],
                Carbon::create(2010, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 23,
                    VATRate::REDUCED->name        => 13,
                    VATRate::SECOND_REDUCED->name => 9,
                ],
                Carbon::create(2009, Carbon::OCTOBER)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 8,
                ],
                Carbon::create(1998)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                    VATRate::REDUCED->name        => 17,
                    VATRate::SECOND_REDUCED->name => 8,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                    VATRate::REDUCED->name        => 17,
                    VATRate::SECOND_REDUCED->name => 12,
                    VATRate::SUPER_REDUCED->name  => 6,
                ],
                Carbon::create(1994, Carbon::JUNE)->getTimestamp() => [
                    VATRate::STANDARD->name       => 22,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                    VATRate::SUPER_REDUCED->name  => 5,
                ],
            ],
            'SWE' => [
                Carbon::create(1996)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                ],
                Carbon::create(1993, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 21,
                    VATRate::SECOND_REDUCED->name => 12,
                ],
                Carbon::create(1993)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 21,
                ],
                Carbon::create(1992)->getTimestamp() => [
                    VATRate::STANDARD->name => 25,
                    VATRate::REDUCED->name  => 18,
                ],
                Carbon::create(1990, Carbon::JULY)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 13.64,
                    VATRate::SECOND_REDUCED->name => 4.17,
                ],
                Carbon::create(1996)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                ],
                Carbon::create(1996)->getTimestamp() => [
                    VATRate::STANDARD->name       => 25,
                    VATRate::REDUCED->name        => 12,
                    VATRate::SECOND_REDUCED->name => 6,
                ],
                Carbon::create(1983)->getTimestamp() => [
                    VATRate::STANDARD->name      => 23.46,
                    VATRate::REDUCED->name       => 12.87,
                    VATRate::SUPER_REDUCED->name => 3.95,
                ],
                Carbon::create(1981, Carbon::NOVEMBER, 16)->getTimestamp() => [
                    VATRate::STANDARD->name      => 21.51,
                    VATRate::REDUCED->name       => 11.88,
                    VATRate::SUPER_REDUCED->name => 3.67,
                ],
                Carbon::create(1980, Carbon::SEPTEMBER, 8)->getTimestamp() => [
                    VATRate::STANDARD->name      => 23.46,
                    VATRate::REDUCED->name       => 12.87,
                    VATRate::SUPER_REDUCED->name => 3.95,
                ],
                Carbon::create(1977, Carbon::JUNE)->getTimestamp() => [
                    VATRate::STANDARD->name      => 20.63,
                    VATRate::REDUCED->name       => 11.43,
                    VATRate::SUPER_REDUCED->name => 3.54,
                ],
                Carbon::create(1971)->getTimestamp() => [
                    VATRate::STANDARD->name      => 17.65,
                    VATRate::REDUCED->name       => 9.89,
                    VATRate::SUPER_REDUCED->name => 3.09,
                ],
                Carbon::create(1969)->getTimestamp() => [
                    VATRate::STANDARD->name      => 11.11,
                    VATRate::REDUCED->name       => 6.38,
                    VATRate::SUPER_REDUCED->name => 2.04,
                ],
            ],
            'GBR' => [
                Carbon::create(2011, Carbon::JANUARY, 4)->getTimestamp() => [
                    VATRate::STANDARD->name => 20,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(2010)->getTimestamp() => [
                    VATRate::STANDARD->name => 17.5,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(2008, Carbon::DECEMBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1997, Carbon::SEPTEMBER)->getTimestamp() => [
                    VATRate::STANDARD->name => 17.5,
                    VATRate::REDUCED->name  => 5,
                ],
                Carbon::create(1995)->getTimestamp() => [
                    VATRate::STANDARD->name => 17.5,
                    VATRate::REDUCED->name  => 8,
                ],
                Carbon::create(1994, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name => 17.5,
                    VATRate::PARKING->name  => 8,
                ],
                Carbon::create(1991, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name => 17.5,
                ],
                Carbon::create(1979, Carbon::JUNE, 18)->getTimestamp() => [
                    VATRate::STANDARD->name => 15,
                ],
                Carbon::create(1974, Carbon::JULY, 29)->getTimestamp() => [
                    VATRate::STANDARD->name => 8,
                ],
                Carbon::create(1973, Carbon::APRIL)->getTimestamp() => [
                    VATRate::STANDARD->name => 10,
                ],
            ],
        ];
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

        if (!key_exists($vat->getCountryCode(), $this->vatRates)) {
            throw new OutOfRangeException('Unknown country code ' . $vat->getCountryCode());
        }

        $date  = $vat->getDate()->getTimestamp();
        $rates = $this->vatRates[$vat->getCountryCode()];

        foreach ($rates as $validSince => $VATs) {
            if ($date < $validSince) {
                continue;
            }

            if (!key_exists($vat->getRate()->name, $VATs)) {
                throw new InvalidArgumentException(
                    strtr(
                        'Unknown VAT rate :rate for country :country for date :date',
                        [
                            ':rate'    => $vat->getRate()->name,
                            ':country' => $vat->getCountryCode(),
                            ':date'    => $vat->getDate()->format('Y-m-d'),
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
                    ':rate'    => $vat->getRate()->name,
                    ':country' => $vat->getCountryCode(),
                    ':date'    => $vat->getDate()->format('Y-m-d'),
                ]
            )
        );
    }
}
