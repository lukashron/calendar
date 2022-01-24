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

if (! require_once __DIR__ . '/vendor/autoload.php') {
    die('Using`composer install`');
}

try {

    $myCalendar = new \LukasHron\Calendar\CalendarManager();

    $myCalendar->addCalendar(new \LukasHron\Calendar\Country\Czech\Holidays());
    $myCalendar->addCalendar(new \LukasHron\Calendar\Country\Czech\Namedays());
    $myCalendar->addCalendar(new \LukasHron\Calendar\Country\Czech\Internationaldays());

    dump($myCalendar->getYear());
    dump($myCalendar->getLabels());
    dump($myCalendar->getFullCalendar());
    dump($myCalendar->findByDate('1.1.2022'));

} catch (Exception $exception) {

    echo $exception->getMessage();
    exit;

}