# PHP extend for Czech calendar.

Installation
------------
```
composer require lukashron/calendar
```

Example
-------
```php
$myCalendar = new \LukasHron\Calendar\CalendarManager();
$myCalendar->addCalendar(
    new \LukasHron\Calendar\Czech\Holidays()
);

dump($myCalendar->getYear());
dump($myCalendar->getFullCalendar());
dump($myCalendar->findByDate('1.1.2022'));
```

Calendar manager method
-----------------------
Setting calendar year `setYear(int $year): void`

Get calendar year `getYear(): int`

Add custom event to calendar `addEvent(int $month, int $day, string $label, $event): void`

Add custom events to calendar from array `addEventsFromArray(string $label, array $eventsArray): void`

Add calendar - instance of CalendarInterface `addCalendar(CalendarInterface $events): void`

Get full calendar array `getFullCalendar(): array`

Get all labels in calendar `getLabels(): array`

Find day by month and day number `findByMonthAndDayNumber(int $month, int $day)`

Find day by date `findByDate($date)`

Implemented calendars
---------------------
[CZECH] Holidays


www.lukashron.cz