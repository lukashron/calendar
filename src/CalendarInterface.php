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

namespace LukasHron\Calendar;

interface CalendarInterface
{
    public function label(): string;
    public function getFloating(int $year): array;
    public function getFixed(): array;
}