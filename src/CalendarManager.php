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
use Exception;

class CalendarManager
{
    /** @var int */
    private int $year;

    /** @var array */
    private array $calendars = [];


    /**
     * Init calendar year
     */
    public function __construct()
    {
        $this->year = (int)date('Y');
    }


    /**
     * Manual set calendar year.
     *
     * @param int $year
     * @return void
     * @throws CalendarManagerException
     */
    public function setYear(int $year): void
    {
        if ($year > 0) {
            $this->year = $year;
        } else {
            throw new CalendarManagerException('SetYear: set year param must be non-zero integer.');
        }
    }


    /**
     * Get calendar year.
     *
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }


    /**
     * Add an existing calendar.
     *
     * @param CalendarInterface $calendar
     * @return void
     * @throws CalendarException
     */
    public function addCalendar(CalendarInterface $calendar): void
    {
        if (isset($this->calendars[$calendar->label()])) {
            throw new CalendarException(
                sprintf('Calendar "%s" already exists.', $calendar->label())
            );
        }

        $this->calendars[$calendar->label()] = $calendar;
    }


    /**
     * Get all register calendar labels.
     *
     * @return array
     */
    public function getLabels(): array
    {
        return array_keys($this->calendars);
    }


    /**
     * @throws CalendarException
     */
    private function calendarMergeEvents(int $month, int $day, string $label, array $events, array $calendar): array
    {
        // Create day
        if (!isset($calendar[$month][$day][$label])) {
            $calendar[$month][$day][$label] = $events;

        } elseif (is_array($calendar[$month][$day][$label])) {
            $calendar[$month][$day][$label] = array_merge($calendar[$month][$day][$label], $events);

        } else {
            throw new CalendarException('Unsupported calendar event type');
        }

        return $calendar;
    }


    /**
     * @throws CalendarException
     */
    private function calendarEventsWalker(string $label, array $calendar, array $composition): array
    {
        // List of months
        foreach ($calendar as $monthNumber => $month) {

            // List of days
            foreach ($month as $dayNumber => $events) {
                $composition = $this->calendarMergeEvents($monthNumber, $dayNumber, $label, $events, $composition);
            }
        }

        return $composition;
    }


    /**
     * Returns a completely compiled calendar.
     *
     * @return array
     * @throws CalendarException
     */
    public function getFullCalendar(): array
    {
        $composition = [];

        /** @var CalendarInterface $calendar */
        foreach ($this->calendars as $calendar) {

            $composition = $this->calendarEventsWalker(
                $calendar->label(),
                $calendar->getFixed(),
                $composition
            );

            $composition = $this->calendarEventsWalker(
                $calendar->label(),
                $calendar->getFloating($this->year),
                $composition
            );

        }

        ksort($composition);

        return $composition;
    }


    /**
     * @throws CalendarException
     */
    public function findByMonthAndDayNumber(int $month, int $day): array
    {
        $composition = [];

        /** @var CalendarInterface $calendar */
        foreach ($this->calendars as $calendar) {

            if (isset($calendar->getFixed()[$month][$day])) {
                $composition = $this->calendarMergeEvents(
                    $month,
                    $day,
                    $calendar->label(),
                    $calendar->getFixed()[$month][$day],
                    $composition
                );
            }

            if (isset($calendar->getFloating($this->year)[$month][$day])) {
                $composition = $this->calendarMergeEvents(
                    $month,
                    $day,
                    $calendar->label(),
                    $calendar->getFloating($this->year)[$month][$day],
                    $composition
                );
            }

        }

        return $composition;
    }


    /**
     * @param $date
     * @return array|false
     * @throws CalendarManagerException
     * @throws Exception
     */
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