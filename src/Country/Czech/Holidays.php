<?php
/*
 * This file is part of the Calendar package.
 *
 * (c) Lukas Hron <info@lukashron.cz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace LukasHron\Calendar\Country\Czech;

use DateTime;
use LukasHron\Calendar\CalendarException;
use LukasHron\Calendar\CalendarInterface;

class Holidays implements CalendarInterface
{
    /**
     * Fixed date holidays.
     *
     * Array structure:
     *  Month                   [array]
     *      => Day              [array]
     *          => Holiday name [array]
     */
    private const FIXED_HOLIDAYS = [
        1 => [
            1 => [
                'Nový rok',
                'Den obnovy samostatného českého státu'
            ]
        ],
        5 => [
            1 => ['Svátek práce'],
            8 => ['Den vítězství']
        ],
        7 => [
            5 => ['Den slovanských věrozvěstů Cyrila a Metoděje'],
            6 => ['Den upálení mistra Jana Husa']
        ],
        9 => [
            28 => ['Den české státnosti']
        ],
        10 => [
            28 => ['Den vzniku samostatného československého státu']
        ],
        11 => [
            17 => ['Den boje za svobodu a demokracii']
        ],
        12 => [
            24 => ['Štědrý den'],
            25 => ['První svátek vánoční'],
            26 => ['Druhý svátek vánoční']
        ]
    ];

    public function label(): string
    {
        return 'czech-holidays';
    }

    public function getFloating(int $year): array
    {
        if (! function_exists('easter_date')) {
            throw new CalendarException('Function easter_date is not exists.');
        }

        $output = [];

        $easter = (new DateTime())->setTimestamp(easter_date($year));

        $easter->modify('previous Friday');
        $output[(int)$easter->format('m')][(int)$easter->format('d')] = ['Velký pátek'];

        $easter->modify('next Monday');
        $output[(int)$easter->format('m')][(int)$easter->format('d')] = ['Velikonoční pondělí'];

        return $output;
    }

    public function getFixed(): array
    {
        return self::FIXED_HOLIDAYS;
    }
}