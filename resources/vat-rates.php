<?php

declare(strict_types=1);

use Carbon\Carbon;
use MiBo\VAT\Enums\VATRate;

return [
    'BEL' => [
        Carbon::create(2020, 1, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1996, 1, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 1,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1994, 1, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 20.5,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 1,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1992, Carbon::APRIL, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 19.5,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 1,
        ],
        Carbon::create(1983, 1, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 6,
            VATRate::SUPER_REDUCED->name  => 1,
            VATRate::PARKING->name        => 17,
        ],
        Carbon::create(1982, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name      => 17,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 1,
        ],
        Carbon::create(1981, Carbon::JULY, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name => 17,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1978, 1, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1971, 1, 1, 0, 0, 0, 'Europe/Brussels')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 6,
        ],
    ],
    'BGR' => [
        Carbon::create(2021, Carbon::APRIL, 1, 0, 0, 0, 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2007, 1, 1, 0, 0, 0, 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1999, 1, 1, 0, 0, 0, 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
        ],
        Carbon::create(1996, Carbon::JULY, 1, 0, 0, 0, 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
        ],
        Carbon::create(1994, Carbon::APRIL, 1, 0, 0, 0, 'Europe/Sofia')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'CZE' => [
        Carbon::create(2024, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(2015, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 15,
            VATRate::SECOND_REDUCED->name => 10,
        ],
        Carbon::create(2013, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 15,
        ],
        Carbon::create(2012, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 14,
        ],
        Carbon::create(2010, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2008, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2004, Carbon::MAY, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1995, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1993, 1, 1, 0, 0, 0, 'Europe/Prague')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'DNK' => [
        Carbon::create(1992, 1, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
        ],
        Carbon::create(1980, Carbon::JUNE, 30, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
        ],
        Carbon::create(1978, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 20.25,
        ],
        Carbon::create(1977, Carbon::OCTOBER, 3, 0, 0, 0,'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
        Carbon::create(1976, Carbon::MARCH, 1, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
        ],
        Carbon::create(1975, Carbon::SEPTEMBER, 29, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 9.25,
        ],
        Carbon::create(1970, Carbon::JUNE, 29, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
        ],
        Carbon::create(1968, Carbon::APRIL, 1, 0, 0, 0,'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 12.5,
        ],
        Carbon::create(1967, Carbon::JULY, 3, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
        ],
    ],
    'DEU' => [
        Carbon::create(2007, 1, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1998, Carbon::APRIL, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1993, 1, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1983, Carbon::JULY, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 14,
            VATRate::REDUCED->name  => 7,
        ],
        Carbon::create(1979, Carbon::JULY, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 13,
            VATRate::REDUCED->name  => 6.5,
        ],
        Carbon::create(1978, 1, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 12,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1968, Carbon::JULY, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 11,
            VATRate::REDUCED->name  => 5.5,
        ],
        Carbon::create(1968, 1, 1, 0, 0, 0, 'Europe/Copenhagen')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'EST' => [
        Carbon::create(2025, Carbon::SEPTEMBER, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name       => 24,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 9,
        ],
        Carbon::create(2025, 1, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 9,
        ],
        Carbon::create(2024, 1, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2009, Carbon::JULY, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2009, 1, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2000, 1, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1993, 1, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
        Carbon::create(1991, 1, 1, 0, 0, 0, 'Europe/Tallinn')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
        ],
    ],
    'IRL' => [
        Carbon::create(2012, 1, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SECOND_REDUCED->name => 9,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2011, Carbon::JULY, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SECOND_REDUCED->name => 9,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2010, 1, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2008, Carbon::DECEMBER, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21.5,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2005, 1, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.8,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2004, 1, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.4,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2003, 1, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13.5,
            VATRate::SUPER_REDUCED->name  => 4.3,
            VATRate::PARKING->name        => 13.5,
        ],
        Carbon::create(2002, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4.3,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(2001, 1, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4.3,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(2000, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4.2,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1999, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 4,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1998, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 3.6,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1997, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 3.3,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1996, 1, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 2.8,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1993, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SUPER_REDUCED->name  => 2.5,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1992, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::SUPER_REDUCED->name  => 2.7,
            VATRate::PARKING->name        => 16,
        ],
        Carbon::create(1991, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12.5,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::SUPER_REDUCED->name  => 2.7,
            VATRate::PARKING->name        => 12.5,
        ],
        Carbon::create(1990, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::SUPER_REDUCED->name  => 2.3,
        ],
        Carbon::create(1989, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 2,
        ],
        Carbon::create(1988, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 1.4,
        ],
        Carbon::create(1987, Carbon::MAY, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SUPER_REDUCED->name  => 1.7,
        ],
        Carbon::create(1986, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SUPER_REDUCED->name  => 2.4,
        ],
        Carbon::create(1985, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Dublin')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 2.2,
        ],
    ],
    'GRC' => [
        Carbon::create(2016, Carbon::JUNE, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 24,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(2015, Carbon::JULY, 20, 0, 0, 0,'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(2011,1, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6.5,
        ],
        Carbon::create(2010, Carbon::JULY, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 11,
            VATRate::SECOND_REDUCED->name => 5.5,
        ],
        Carbon::create(2010, Carbon::MARCH, 15, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2005, Carbon::APRIL, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 4.5,
        ],
        Carbon::create(1990, Carbon::APRIL, 28, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 4,
        ],
        Carbon::create(1988,1, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 16,
            VATRate::REDUCED->name        => 6,
            VATRate::SECOND_REDUCED->name => 3,
        ],
        Carbon::create(1987,1, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 6,
            VATRate::SECOND_REDUCED->name => 3,
        ],
    ],
    'ESP' => [
        Carbon::create(2012, Carbon::SEPTEMBER, 1, 0, 0, 0, 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 21,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(2010, Carbon::JULY, 1, 0, 0, 0, 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 18,
            VATRate::REDUCED->name       => 8,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 16,
            VATRate::REDUCED->name       => 7,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1993,1, 1, 0, 0, 0, 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name      => 15,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
        ],
        Carbon::create(1992, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1992,1, 1, 0, 0, 0, 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name => 13,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1986,1, 1, 0, 0, 0, 'Europe/Madrid')->getTimestamp() => [
            VATRate::STANDARD->name => 12,
            VATRate::REDUCED->name  => 6,
        ],
    ],
    'FRA' => [
        Carbon::create(2014,1, 1, 0, 0, 0, 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5.5,
            VATRate::SUPER_REDUCED->name  => 2.1,
        ],
        Carbon::create(2012,1, 1, 0, 0, 0, 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name       => 19.6,
            VATRate::REDUCED->name        => 7,
            VATRate::SECOND_REDUCED->name => 5.5,
            VATRate::SUPER_REDUCED->name  => 2.1,
        ],
        Carbon::create(2000, Carbon::APRIL, 1, 0, 0, 0, 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name      => 19.6,
            VATRate::REDUCED->name       => 5.5,
            VATRate::SUPER_REDUCED->name => 2.1,
        ],
        Carbon::create(1995, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name      => 20.6,
            VATRate::REDUCED->name       => 5.5,
            VATRate::SUPER_REDUCED->name => 2.1,
        ],
        Carbon::create(1991, Carbon::JULY, 29, 0, 0, 0, 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name      => 18.6,
            VATRate::REDUCED->name       => 5.5,
            VATRate::SUPER_REDUCED->name => 2.1,
        ],
        Carbon::create(1989,1, 1, 0, 0, 0, 'Europe/Paris')->getTimestamp() => [
            VATRate::STANDARD->name       => 18.6,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 5.5,
            VATRate::SUPER_REDUCED->name  => 2.1,
        ],
    ],
    'HRV' => [
        Carbon::create(2014,1, 1, 0, 0, 0, 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2013,1, 1, 0, 0, 0, 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2009, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2006,1, 1, 0, 0, 0, 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1998, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Zagreb')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
        ],
    ],
    'ITA' => [
        Carbon::create(2016,1, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::SUPER_REDUCED->name  => 4,
        ],
        Carbon::create(2013, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 22,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(2011, Carbon::SEPTEMBER, 17, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 21,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1997, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 20,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1995, Carbon::FEBRUARY, 24, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 10,
            VATRate::SUPER_REDUCED->name => 4,
            VATRate::PARKING->name       => 16,
        ],
        Carbon::create(1994,1, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 4,
            VATRate::PARKING->name       => 13,
        ],
        Carbon::create(1993, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 4,
            VATRate::PARKING->name       => 12,
        ],
        Carbon::create(1991, Carbon::MAY, 13, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 9,
            VATRate::SUPER_REDUCED->name  => 4,
        ],
        Carbon::create(1989,1, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 4,
        ],
        Carbon::create(1988, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 19,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 2,
        ],
        Carbon::create(1984, Carbon::DECEMBER, 20, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name      => 18,
            VATRate::REDUCED->name       => 9,
            VATRate::SUPER_REDUCED->name => 2,
        ],
    ],
    'CYP' => [
        Carbon::create(2014, Carbon::JANUARY, 13, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2013, Carbon::JANUARY, 14, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::MARCH, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name       => 17,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2005, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2002, Carbon::JULY, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 13,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2000, Carbon::JULY, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1993, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 8,
        ],
        Carbon::create(1992, Carbon::JULY, 1, 0, 0, 0, 'Europe/Athens')->getTimestamp() => [
            VATRate::STANDARD->name => 5,
        ],
    ],
    'LVA' => [
        Carbon::create(2018,1, 1, 0, 0, 0, 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::JULY, 1, 0, 0, 0, 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(2011,1, 1, 0, 0, 0, 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(2009,1, 1, 0, 0, 0, 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2004, Carbon::MAY, 1, 0, 0, 0, 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2003,1, 1, 0, 0, 0, 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(1995, Carbon::MAY, 1, 0, 0, 0, 'Europe/Riga')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'LTU' => [
        Carbon::create(2009, Carbon::SEPTEMBER, 1, 0, 0, 0, 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2009,1, 1, 0, 0, 0, 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2001,1, 1, 0, 0, 0, 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2000, Carbon::MAY, 1, 0, 0, 0, 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1997,1, 1, 0, 0, 0, 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
        Carbon::create(1994, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(1994, Carbon::MAY, 1, 0, 0, 0, 'Europe/Vilnius')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'LUX' => [
        Carbon::create(2024,1, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 17,
            VATRate::REDUCED->name       => 8,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 14,
        ],
        Carbon::create(2023,1, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 16,
            VATRate::REDUCED->name       => 7,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 13,
        ],
        Carbon::create(2015,1, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 17,
            VATRate::REDUCED->name       => 8,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 14,
        ],
        Carbon::create(1993,1, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 15,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
            VATRate::PARKING->name       => 12,
        ],
        Carbon::create(1992,1, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 15,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
        ],
        Carbon::create(1983, Carbon::JULY, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 12,
            VATRate::REDUCED->name       => 6,
            VATRate::SUPER_REDUCED->name => 3,
        ],
        Carbon::create(1971,1, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name      => 10,
            VATRate::REDUCED->name       => 5,
            VATRate::SUPER_REDUCED->name => 2,
        ],
        Carbon::create(1970,1, 1, 0, 0, 0, 'Europe/Luxembourg')->getTimestamp() => [
            VATRate::STANDARD->name       => 8,
            VATRate::SUPER_REDUCED->name  => 4,
        ],
    ],
    'HUN' => [
        Carbon::create(2012,1, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 27,
            VATRate::REDUCED->name        => 18,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2009, Carbon::JULY, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 18,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2006, Carbon::SEPTEMBER, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2006,1, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 15,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2004,1, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 15,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 12,
        ],
        Carbon::create(1993, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1993,1, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1988,1, 1, 0, 0, 0, 'Europe/Budapest')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 15,
        ],
    ],
    'MLT' => [
        Carbon::create(2011,1, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 7,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2004,1, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/Rome')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'NLD' => [
        Carbon::create(2019,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2012, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 21,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(2001,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1992, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1989,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 18.5,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1986, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1984,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1976,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 4,
        ],
        Carbon::create(1973,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 4,
        ],
        Carbon::create(1971,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 14,
            VATRate::REDUCED->name  => 4,
        ],
        Carbon::create(1969,1, 1, 0, 0, 0, 'Europe/Amsterdam')->getTimestamp() => [
            VATRate::STANDARD->name => 12,
            VATRate::REDUCED->name  => 4,
        ],
    ],
    'AUT' => [
        Carbon::create(2016,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 10,
            VATRate::PARKING->name        => 13,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
            VATRate::PARKING->name  => 12,
        ],
        Carbon::create(1992,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1984,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
            VATRate::PARKING->name  => 32,
        ],
        Carbon::create(1981,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name       => 18,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 8,
            VATRate::PARKING->name        => 30,
        ],
        Carbon::create(1978,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 8,
            VATRate::PARKING->name  => 30,
        ],
        Carbon::create(1976,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 8,
        ],
        Carbon::create(1973,1, 1, 0, 0, 0, 'Europe/Vienna')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 8,
        ],
    ],
    'POL' => [
        Carbon::create(2011,1, 1, 0, 0, 0, 'Europe/Warsaw')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 8,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2000, Carbon::SEPTEMBER, 4, 0, 0, 0, 'Europe/Warsaw')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 7,
            VATRate::SECOND_REDUCED->name => 3,
        ],
        Carbon::create(1993, Carbon::JULY, 5, 0, 0, 0, 'Europe/Warsaw')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 7,
        ],
    ],
    'PRT' => [
        Carbon::create(2011,1, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::PARKING->name        => 13,
        ],
        Carbon::create(2010, Carbon::JULY, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::PARKING->name        => 13,
        ],
        Carbon::create(2008, Carbon::JULY, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(2005, Carbon::JULY, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 21,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(2002, Carbon::JUNE, 5, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
            VATRate::PARKING->name        => 12,
        ],
        Carbon::create(1996, Carbon::JULY, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name       => 17,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 17,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1992, Carbon::MARCH, 24, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1988, Carbon::FEBRUARY, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 17,
            VATRate::REDUCED->name  => 8,
        ],
        Carbon::create(1986,1, 1, 0, 0, 0, 'Europe/Lisbon')->getTimestamp() => [
            VATRate::STANDARD->name => 16,
            VATRate::REDUCED->name  => 8,
        ],
    ],
    'ROU' => [
        Carbon::create(2017,1, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2016,1, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 20,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2010,1, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 24,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2008, Carbon::DECEMBER, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 9,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2004,1, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(2000,1, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
        ],
        Carbon::create(1998, Carbon::FEBRUARY, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 11,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
            VATRate::REDUCED->name  => 9,
        ],
        Carbon::create(1993, Carbon::JULY, 1, 0, 0, 0, 'Europe/Bucharest')->getTimestamp() => [
            VATRate::STANDARD->name => 18,
        ],
    ],
    'SVN' => [
        Carbon::create(2020,1, 1, 0, 0, 0, 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 9.5,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2012, Carbon::JULY, 1, 0, 0, 0, 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name => 22,
            VATRate::REDUCED->name  => 9.5,
        ],
        Carbon::create(2002,1, 1, 0, 0, 0, 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 8.5,
        ],
        Carbon::create(1999, Carbon::JULY, 1, 0, 0, 0, 'Europe/Ljubljana')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 8,
        ],
    ],
    'SVK' => [
        Carbon::create(2025,1, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 19,
            VATRate::SECOND_REDUCED->name => 5,
        ],
        Carbon::create(2011,1, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2010, Carbon::MAY, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name       => 19,
            VATRate::REDUCED->name        => 10,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(2007,1, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(2004,1, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 19,
        ],
        Carbon::create(2003,1, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 14,
        ],
        Carbon::create(1999, Carbon::JULY, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 10,
        ],
        Carbon::create(1996,1, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1993, Carbon::AUGUST, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 6,
        ],
        Carbon::create(1993,1, 1, 0, 0, 0, 'Europe/Bratislava')->getTimestamp() => [
            VATRate::STANDARD->name => 23,
            VATRate::REDUCED->name  => 5,
        ],
    ],
    'FIN' => [
        Carbon::create(2024, Carbon::SEPTEMBER, 1, 0, 0, 0, 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 25.5,
            VATRate::REDUCED->name        => 14,
            VATRate::SECOND_REDUCED->name => 10,
        ],
        Carbon::create(2013,1, 1, 0, 0, 0, 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 24,
            VATRate::REDUCED->name        => 14,
            VATRate::SECOND_REDUCED->name => 10,
        ],
        Carbon::create(2010, Carbon::JULY, 1, 0, 0, 0, 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 23,
            VATRate::REDUCED->name        => 13,
            VATRate::SECOND_REDUCED->name => 9,
        ],
        Carbon::create(2009, Carbon::OCTOBER, 1, 0, 0, 0, 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 8,
        ],
        Carbon::create(1998,1, 1, 0, 0, 0, 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 17,
            VATRate::SECOND_REDUCED->name => 8,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 17,
            VATRate::SECOND_REDUCED->name => 12,
            VATRate::SUPER_REDUCED->name  => 6,
        ],
        Carbon::create(1994, Carbon::JUNE, 1, 0, 0, 0, 'Europe/Helsinki')->getTimestamp() => [
            VATRate::STANDARD->name       => 22,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
            VATRate::SUPER_REDUCED->name  => 5,
        ],
    ],
    'SWE' => [
        Carbon::create(1996,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(1993, Carbon::JULY, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 21,
            VATRate::SECOND_REDUCED->name => 12,
        ],
        Carbon::create(1993,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 21,
        ],
        Carbon::create(1992,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name => 25,
            VATRate::REDUCED->name  => 18,
        ],
        Carbon::create(1990, Carbon::JULY, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 13.64,
            VATRate::SECOND_REDUCED->name => 4.17,
        ],
        Carbon::create(1996,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(1996,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name       => 25,
            VATRate::REDUCED->name        => 12,
            VATRate::SECOND_REDUCED->name => 6,
        ],
        Carbon::create(1983,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 23.46,
            VATRate::REDUCED->name       => 12.87,
            VATRate::SUPER_REDUCED->name => 3.95,
        ],
        Carbon::create(1981, Carbon::NOVEMBER, 16, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 21.51,
            VATRate::REDUCED->name       => 11.88,
            VATRate::SUPER_REDUCED->name => 3.67,
        ],
        Carbon::create(1980, Carbon::SEPTEMBER, 8, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 23.46,
            VATRate::REDUCED->name       => 12.87,
            VATRate::SUPER_REDUCED->name => 3.95,
        ],
        Carbon::create(1977, Carbon::JUNE, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 20.63,
            VATRate::REDUCED->name       => 11.43,
            VATRate::SUPER_REDUCED->name => 3.54,
        ],
        Carbon::create(1971,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 17.65,
            VATRate::REDUCED->name       => 9.89,
            VATRate::SUPER_REDUCED->name => 3.09,
        ],
        Carbon::create(1969,1, 1, 0, 0, 0, 'Europe/Stockholm')->getTimestamp() => [
            VATRate::STANDARD->name      => 11.11,
            VATRate::REDUCED->name       => 6.38,
            VATRate::SUPER_REDUCED->name => 2.04,
        ],
    ],
    'GBR' => [
        Carbon::create(2011, Carbon::JANUARY, 4, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 20,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2010,1, 1, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(2008, Carbon::DECEMBER, 1, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1997, Carbon::SEPTEMBER, 1, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 5,
        ],
        Carbon::create(1995,1, 1, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::REDUCED->name  => 8,
        ],
        Carbon::create(1994, Carbon::APRIL, 1, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
            VATRate::PARKING->name  => 8,
        ],
        Carbon::create(1991, Carbon::APRIL, 1, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 17.5,
        ],
        Carbon::create(1979, Carbon::JUNE, 18, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 15,
        ],
        Carbon::create(1974, Carbon::JULY, 29, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 8,
        ],
        Carbon::create(1973, Carbon::APRIL, 1, 0, 0, 0, 'Europe/London')->getTimestamp() => [
            VATRate::STANDARD->name => 10,
        ],
    ],
];
