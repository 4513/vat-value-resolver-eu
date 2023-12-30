<?php

declare(strict_types=1);

use Carbon\Carbon;
use MiBo\VAT\Enums\VATRate;

return [
    'BEL' => [
        Carbon::create(2020, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1996, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 1,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1994, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 20.5,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 1,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1992, Carbon::APRIL, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 19.5,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 1,
        ],
        Carbon::create(1983, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 6,
            VATRate::SUPER_REDUCED->name  => 1,
            VATRate::PARKING->name        => 17,
        ],
        Carbon::create(1982, Carbon::MARCH, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name      => 17,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 1,
        ],
        Carbon::create(1981, Carbon::JULY, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name => 17,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1978, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1971, tz: 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 6,
        ],
    ],
    'BGR' => [
        Carbon::create(2021, Carbon::APRIL, tz: 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2007, tz: 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1999, tz: 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
        ],
        Carbon::create(1996, Carbon::JULY, tz: 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
        ],
        Carbon::create(1994, Carbon::APRIL, tz: 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'CZE' => [
        Carbon::create(2024, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(2015, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 15,
            VATRate::SECOND_REDUCED->name => 10,
        ],
        Carbon::create(2013, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 15,
        ],
        Carbon::create(2012, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 14,
        ],
        Carbon::create(2010, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2008, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2004, Carbon::MAY, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1995, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1993, tz: 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'DNK' => [
        Carbon::create(1992, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
        ],
        Carbon::create(1980, Carbon::JUNE, 30, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
        ],
        Carbon::create(1978, Carbon::OCTOBER, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 20.25,
        ],
        Carbon::create(1977, Carbon::OCTOBER, 3, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
        Carbon::create(1976, Carbon::MARCH, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
        ],
        Carbon::create(1975, Carbon::SEPTEMBER, 29, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 9.25,
        ],
        Carbon::create(1970, Carbon::JUNE, 29, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
        ],
        Carbon::create(1968, Carbon::APRIL, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 12.5,
        ],
        Carbon::create(1967, Carbon::JULY, 3, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
        ],
    ],
    'DEU' => [
        Carbon::create(2007, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1998, Carbon::APRIL, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1993, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1983, Carbon::JULY, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 14,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1979, Carbon::JULY, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 13,
            VATRate::REDUCED->name  => 6.5,
        ],
        Carbon::create(1978, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 12,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1968, Carbon::JULY, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 11,
            VATRate::REDUCED->name  => 5.5,
        ],
        Carbon::create(1968, tz: 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'EST' => [
        Carbon::create(2024, tz: 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2009, Carbon::JULY, tz: 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2009, tz: 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2000, tz: 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1993, tz: 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
        Carbon::create(1991, tz: 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
        ],
    ],
    'IRL' => [
        Carbon::create(2012, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SECOND_REDUCED->name => 9,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2011, Carbon::JULY, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SECOND_REDUCED->name => 9,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2010, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2008, Carbon::DECEMBER, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21.5,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2005, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2004, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.4,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2003, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.3,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2002, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4.3,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(2001, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4.3,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(2000, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4.2,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1999, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1998, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 3.6,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1997, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 3.3,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1996, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 2.8,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1993, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 2.5,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1992, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::SUPER_REDUCED->name  => 2.7,
            VATRate::PARKING->name        => 16,
        ],
        Carbon::create(1991, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::SUPER_REDUCED->name  => 2.7,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1990, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::SUPER_REDUCED->name  => 2.3,
        ],
        Carbon::create(1989, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 2,
        ],
        Carbon::create(1988, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 1.4,
        ],
        Carbon::create(1987, Carbon::MAY, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SUPER_REDUCED->name  => 1.7,
        ],
        Carbon::create(1986, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SUPER_REDUCED->name  => 2.4,
        ],
        Carbon::create(1985, Carbon::MARCH, tz: 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 2.2,
        ],
    ],
    'GRC' => [
        Carbon::create(2016, Carbon::JUNE, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 24,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(2015, Carbon::JULY, 20, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(2011, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6.5,
        ],
        Carbon::create(2010, Carbon::JULY, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 11,
            VATRate::SECOND_REDUCED->name => 5.5,
        ],
        Carbon::create(2010, Carbon::MARCH, 15, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2005, Carbon::APRIL, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 4.5,
        ],
        Carbon::create(1990, Carbon::APRIL, 28, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 4,
        ],
        Carbon::create(1988, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 16,
            VATRate::REDUCED->name        => 6,
            VATRate::SECOND_REDUCED->name => 3,
        ],
        Carbon::create(1987, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 6,
            VATRate::SECOND_REDUCED->name => 3,
        ],
    ],
    'ESP' => [
        Carbon::create(2012, Carbon::SEPTEMBER, tz: 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 21,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(2010, Carbon::JULY, tz: 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 18,
            VATRate::REDUCED->name       => 8,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1995, tz: 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 16,
            VATRate::REDUCED->name       => 7,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1993, tz: 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 15,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
        ],
        Carbon::create(1992, Carbon::AUGUST, tz: 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1992, tz: 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name => 13,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1986, tz: 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name => 12,
            VATRate::REDUCED->name  => 6,
        ],
    ],
    'FRA' => [
        Carbon::create(2014, tz: 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5.5,
            VATRate::SUPER_REDUCED->name  => 2.1,
        ],
        Carbon::create(2012, tz: 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name       => 19.6,
            VATRate::REDUCED->name        => 7,
            VATRate::SECOND_REDUCED->name => 5.5,
            VATRate::SUPER_REDUCED->name  => 2.1,
        ],
        Carbon::create(2000, Carbon::APRIL, tz: 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name      => 19.6,
            VATRate::REDUCED->name       => 5.5,
            VATRate::SUPER_REDUCED->name => 2.1,
        ],
        Carbon::create(1995, Carbon::AUGUST, tz: 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name      => 20.6,
            VATRate::REDUCED->name       => 5.5,
            VATRate::SUPER_REDUCED->name => 2.1,
        ],
        Carbon::create(1991, Carbon::JULY, 29, tz: 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name      => 18.6,
            VATRate::REDUCED->name       => 5.5,
            VATRate::SUPER_REDUCED->name => 2.1,
        ],
        Carbon::create(1989, tz: 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name       => 18.6,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 5.5,
            VATRate::SUPER_REDUCED->name  => 2.1,
        ],
    ],
    'HRV' => [
        Carbon::create(2014, tz: 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2013, tz: 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::MARCH, tz: 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2009, Carbon::AUGUST, tz: 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2006, tz: 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1998, Carbon::AUGUST, tz: 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
        ],
    ],
    'ITA' => [
        Carbon::create(2016, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 4,
        ],
        Carbon::create(2013, Carbon::OCTOBER, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 22,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(2011, Carbon::SEPTEMBER, 17, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 21,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1997, Carbon::OCTOBER, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 20,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1995, Carbon::FEBRUARY, 24, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
            VATRate::PARKING->name       => 16,
        ],
        Carbon::create(1994, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 4,
            VATRate::PARKING->name       => 13,
        ],
        Carbon::create(1993, Carbon::OCTOBER, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 4,
            VATRate::PARKING->name       => 12,
        ],
        Carbon::create(1991, Carbon::MAY, 13, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 9,
            VATRate::SUPER_REDUCED->name  => 4,
        ],
        Carbon::create(1989, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1988, Carbon::AUGUST, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 2,
        ],
        Carbon::create(1984, Carbon::DECEMBER, 20, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 18,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 2,
        ],
    ],
    'CYP' => [
        Carbon::create(2014, Carbon::JANUARY, 13, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2013, Carbon::JANUARY, 14, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::MARCH, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 17,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2005, Carbon::AUGUST, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2002, Carbon::JULY, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 13,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2000, Carbon::JULY, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1993, Carbon::OCTOBER, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 8,
        ],
        Carbon::create(1992, Carbon::JULY, tz: 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 5,
        ],
    ],
    'LVA' => [
        Carbon::create(2018, tz: 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::JULY, tz: 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(2011, tz: 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(2009, tz: 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2004, Carbon::MAY, tz: 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2003, tz: 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(1995, Carbon::MAY, tz: 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'LTU' => [
        Carbon::create(2009, Carbon::SEPTEMBER, tz: 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2009, tz: 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2001, tz: 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2000, Carbon::MAY, tz: 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1997, tz: 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
        Carbon::create(1994, Carbon::AUGUST, tz: 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(1994, Carbon::MAY, tz: 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'LUX' => [
        Carbon::create(2024, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 17,
            VATRate::REDUCED->name       => 8,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 14,
        ],
        Carbon::create(2023, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 16,
            VATRate::REDUCED->name       => 7,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 13,
        ],
        Carbon::create(2015, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 17,
            VATRate::REDUCED->name       => 8,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 14,
        ],
        Carbon::create(1993, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 15,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 12,
        ],
        Carbon::create(1992, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 15,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
        ],
        Carbon::create(1983, Carbon::JULY, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 12,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
        ],
        Carbon::create(1971, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 10,
            VATRate::REDUCED->name       => 5,
            VATRate::SUPER_REDUCED->name => 2,
        ],
        Carbon::create(1970, tz: 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name       => 8,
            VATRate::SUPER_REDUCED->name  => 4,
        ],
    ],
    'HUN' => [
        Carbon::create(2012, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 27,
            VATRate::REDUCED->name        => 18,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2009, Carbon::JULY, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 18,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2006, Carbon::SEPTEMBER, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2006, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 15,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2004, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 15,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(1995, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(1993, Carbon::AUGUST, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1993, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1988, tz: 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 15,
        ],
    ],
    'MLT' => [
        Carbon::create(2011, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 7,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2004, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1995, tz: 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'NLD' => [
        Carbon::create(2019, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2012, Carbon::OCTOBER, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(2001, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1992, Carbon::OCTOBER, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1989, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 18.5,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1986, Carbon::OCTOBER, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1984, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1976, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 4,
        ],
        Carbon::create(1973, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 4,
        ],
        Carbon::create(1971, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 14,
            VATRate::REDUCED->name  => 4,
        ],
        Carbon::create(1969, tz: 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 12,
            VATRate::REDUCED->name  => 4,
        ],
    ],
    'AUT' => [
        Carbon::create(2016, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::PARKING->name        => 13,
        ],
        Carbon::create(1995, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
            VATRate::PARKING->name  => 12,
        ],
        Carbon::create(1992, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1984, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
            VATRate::PARKING->name  => 32,
        ],
        Carbon::create(1981, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 8,
            VATRate::PARKING->name        => 30,
        ],
        Carbon::create(1978, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 8,
            VATRate::PARKING->name  => 30,
        ],
        Carbon::create(1976, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 8,
        ],
        Carbon::create(1973, tz: 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 8,
        ],
    ],
    'POL' => [
        Carbon::create(2011, tz: 'Europe/Warsaw')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2000, Carbon::SEPTEMBER, 4, tz: 'Europe/Warsaw')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 7,
            VATRate::SECOND_REDUCED->name => 3,
        ],
        Carbon::create(1993, Carbon::JULY, 5, tz: 'Europe/Warsaw')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 7,
        ],
    ],
    'PRT' => [
        Carbon::create(2011, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::PARKING->name        => 13,
        ],
        Carbon::create(2010, Carbon::JULY, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::PARKING->name        => 13,
        ],
        Carbon::create(2008, Carbon::JULY, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(2005, Carbon::JULY, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(2002, Carbon::JUNE, 5, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1996, Carbon::JULY, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 17,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(1995, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 17,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1992, Carbon::MARCH, 24, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1988, Carbon::FEBRUARY, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 17,
            VATRate::REDUCED->name  => 8,
        ],
        Carbon::create(1986, tz: 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 8,
        ],
    ],
    'ROU' => [
        Carbon::create(2017, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2016, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2010, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 24,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2008, Carbon::DECEMBER, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2004, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2000, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
        ],
        Carbon::create(1998, Carbon::FEBRUARY, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 11,
        ],
        Carbon::create(1995, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(1993, Carbon::JULY, tz: 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'SVN' => [
        Carbon::create(2020, tz: 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 9.5,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::JULY, tz: 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 9.5,
        ],
        Carbon::create(2002, tz: 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 8.5,
        ],
        Carbon::create(1999, Carbon::JULY, tz: 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 8,
        ],
    ],
    'SVK' => [
        //                Carbon::create(2024, tz: 'Europe/Bratislava')->getTimestamp() => [
        //                    VATRate::STANDARD->name => 22,
        //                    VATRate::REDUCED->name  => 10,
        //                ],
        Carbon::create(2011, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2010, Carbon::MAY, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(2007, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2004, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
        ],
        Carbon::create(2003, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 14,
        ],
        Carbon::create(1999, Carbon::JULY, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1996, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1993, Carbon::AUGUST, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1993, tz: 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'FIN' => [
        Carbon::create(2013, tz: 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 24,
            VATRate::REDUCED->name        => 14,
            VATRate::SECOND_REDUCED->name => 10,
        ],
        Carbon::create(2010, Carbon::JULY, tz: 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 9,
        ],
        Carbon::create(2009, Carbon::OCTOBER, tz: 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 8,
        ],
        Carbon::create(1998, tz: 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 17,
            VATRate::SECOND_REDUCED->name => 8,
        ],
        Carbon::create(1995, tz: 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 17,
            VATRate::SECOND_REDUCED->name => 12,
            VATRate::SUPER_REDUCED->name  => 6,
        ],
        Carbon::create(1994, Carbon::JUNE, tz: 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 5,
        ],
    ],
    'SWE' => [
        Carbon::create(1996, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(1993, Carbon::JULY, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 21,
            VATRate::SECOND_REDUCED->name => 12,
        ],
        Carbon::create(1993, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 21,
        ],
        Carbon::create(1992, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 18,
        ],
        Carbon::create(1990, Carbon::JULY, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 13.64,
            VATRate::SECOND_REDUCED->name => 4.17,
        ],
        Carbon::create(1996, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(1996, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(1983, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 23.46,
            VATRate::REDUCED->name       => 12.87,
            VATRate::SUPER_REDUCED->name => 3.95,
        ],
        Carbon::create(1981, Carbon::NOVEMBER, 16, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 21.51,
            VATRate::REDUCED->name       => 11.88,
            VATRate::SUPER_REDUCED->name => 3.67,
        ],
        Carbon::create(1980, Carbon::SEPTEMBER, 8, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 23.46,
            VATRate::REDUCED->name       => 12.87,
            VATRate::SUPER_REDUCED->name => 3.95,
        ],
        Carbon::create(1977, Carbon::JUNE, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 20.63,
            VATRate::REDUCED->name       => 11.43,
            VATRate::SUPER_REDUCED->name => 3.54,
        ],
        Carbon::create(1971, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 17.65,
            VATRate::REDUCED->name       => 9.89,
            VATRate::SUPER_REDUCED->name => 3.09,
        ],
        Carbon::create(1969, tz: 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 11.11,
            VATRate::REDUCED->name       => 6.38,
            VATRate::SUPER_REDUCED->name => 2.04,
        ],
    ],
    'GBR' => [
        Carbon::create(2011, Carbon::JANUARY, 4, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2010, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2008, Carbon::DECEMBER, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1997, Carbon::SEPTEMBER, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1995, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 8,
        ],
        Carbon::create(1994, Carbon::APRIL, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::PARKING->name  => 8,
        ],
        Carbon::create(1991, Carbon::APRIL, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
        ],
        Carbon::create(1979, Carbon::JUNE, 18, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
        ],
        Carbon::create(1974, Carbon::JULY, 29, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 8,
        ],
        Carbon::create(1973, Carbon::APRIL, tz: 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
        ],
    ],
];
