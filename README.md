# PHP extend for Czech calendar.

![alt text](https://github.com/lukashron/calendar/blob/master/screenshot.png?raw=true)

Installation
------------
```
composer require lukashron/calendar
```

Example
-------
```php
$myCalendar = new \LukasHron\Calendar\CalendarManager();

$myCalendar->addCalendar(new \LukasHron\Calendar\Country\Czech\Holidays());
$myCalendar->addCalendar(new \LukasHron\Calendar\Country\Czech\Namedays());
$myCalendar->addCalendar(new \LukasHron\Calendar\Country\Czech\Internationaldays());

dump($myCalendar->getYear());
dump($myCalendar->getLabels());
dump($myCalendar->getFullCalendar());
dump($myCalendar->findByDate('1.1.2022'));
```

Calendar manager method
-----------------------
Setting calendar year `setYear(int $year): void`

Get calendar year `getYear(): int`

Add calendar - instance of CalendarInterface `addCalendar(CalendarInterface $calendar): void`

Get full calendar array `getFullCalendar(): array`

Get all labels in calendar `getLabels(): array`

Find day by month and day number `findByMonthAndDayNumber(int $month, int $day)`

Find day by date `findByDate($date)`

Implemented calendars
---------------------
[CZECH]
- Holidays
- Name days
- International days


www.lukashron.cz