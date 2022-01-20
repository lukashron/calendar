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

use DateTime;

class CalendarManager
{
    private int $year;
    private array $calendarLabels = [];
    private array $calendar = [];

    public function __construct()
    {
        $this->year = (int) date('Y');
    }

    public function setYear(int $year): void
    {
        if ($year > 0) {
            $this->year = $year;
        } else {
            throw new CalendarManagerException('SetYear: set year param must be non-zero integer.');
        }
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function addEvent(int $month, int $day, string $label, $event): void
    {
        if (! isset($this->calendar[$month][$day][$label])) {
            $this->calendar[$month][$day] = [$label => $event];
        } else {
            if (is_array($this->calendar[$month][$day][$label])) {
                if (is_array($event)) {
                    $this->calendar[$month][$day][$label] = array_merge($this->calendar[$month][$day][$label], $event);
                } else {
                    $this->calendar[$month][$day][$label][] = $event;
                }
            } else {
                if (is_array($event)) {
                    $event[] = $this->calendar[$month][$day][$label];
                    $this->calendar[$month][$day][$label] = $event;
                } else {
                    $this->calendar[$month][$day][$label] = [$this->calendar[$month][$day][$label], $event];
                }
            }
        }

        if (! isset($this->calendarLabels[$label])) {
            $this->calendarLabels[$label] = 0;
        } else {
            $this->calendarLabels[$label]++;
        }
    }

    public function addEventsFromArray(string $label, array $eventsArray): void
    {
        foreach ($eventsArray as $numberMonth => $month) {
            foreach ($month as $numberDay => $dayEvent) {
                $this->addEvent($numberMonth, $numberDay, $label, $dayEvent);
            }
        }
    }

    public function addCalendar(CalendarInterface $events): void
    {
        $this->addEventsFromArray($events->label(), $events->getFixed());
        $this->addEventsFromArray($events->label(), $events->getFloating($this->year));
    }

    public function getLabels(): array
    {
        return $this->calendarLabels;
    }

    public function getFullCalendar(): array
    {
        return $this->calendar;
    }

    public function findByMonthAndDayNumber(int $month, int $day)
    {
        if (isset($this->calendar[$month][$day])) {
            return $this->calendar[$month][$day];
        }
        return null;
    }

    public function findByDate($date)
    {
        if (is_string($date)) {
            $date = new DateTime($date);

        } elseif (! $date instanceof DateTime) {
            throw new CalendarManagerException('FindByDate: "date" parameter must be string or instance of DateTime');
        }

        if ($this->year !== (int)$date->format('Y')) {
            return false;
        }

        return $this->findByMonthAndDayNumber(
            (int) $date->format('m'),
            (int) $date->format('d')
        );
    }
}