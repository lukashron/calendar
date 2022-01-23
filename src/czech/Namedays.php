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

namespace LukasHron\Calendar\Czech;

use LukasHron\Calendar\CalendarInterface;

class Namedays implements CalendarInterface
{
    private const NAMES = [
        1 => [
            1 => 'Mečislav',
            2 => 'Karina',
            3 => 'Radmila',
            4 => 'Diana',
            5 => 'Dalimil',
            6 => 'Kašpar',
            7 => 'Vilma',
            8 => 'Čestmír',
            9 => 'Vladan',
            10 => 'Břetislav',
            11 => 'Bohdana',
            12 => 'Pravoslav',
            13 => 'Edita',
            14 => 'Radovan',
            15 => 'Alice',
            16 => 'Ctirad',
            17 => 'Drahoslav',
            18 => 'Vladislav',
            19 => 'Doubravka',
            20 => 'Ilona a Sebastian',
            21 => 'Běla',
            22 => 'Slavomír',
            23 => 'Zdeněk',
            24 => 'Milena',
            25 => 'Miloš',
            26 => 'Zora',
            27 => 'Ingrid',
            28 => 'Otýlie',
            29 => 'Zdislava',
            30 => 'Robin',
            31 => 'Marika'
        ],
        2 => [
            1 => 'Hynek a Jasmína',
            2 => 'Nela',
            3 => 'Blažej',
            4 => 'Jarmila',
            5 => 'Dobromila',
            6 => 'Vanda',
            7 => 'Veronika',
            8 => 'Milada',
            9 => 'Apolena',
            10 => 'Mojmír',
            11 => 'Božena',
            12 => 'Slavěna',
            13 => 'Věnceslav',
            14 => 'Valentýn',
            15 => 'Jiřina',
            16 => 'Ljuba',
            17 => 'Miloslava',
            18 => 'Gizela',
            19 => 'Patrik',
            20 => 'Oldřich',
            21 => 'Lenka a Eleonora',
            22 => 'Petr',
            23 => 'Svatopluk',
            24 => 'Matěj a Matyáš',
            25 => 'Liliana',
            26 => 'Dorota a Božetěch',
            27 => 'Alexandr',
            28 => 'Lumír',
            29 => 'Horymír'
        ],
        3 => [
            1 => 'Bedřich a Bedřiška',
            2 => 'Anežka',
            3 => 'Kamil',
            4 => 'Stela',
            5 => 'Kazimír',
            6 => 'Miroslav',
            7 => 'Tomáš',
            8 => 'Gabriela',
            9 => 'Františka',
            10 => 'Viktorie',
            11 => 'Anděla a Angelika',
            12 => 'Řehoř',
            13 => 'Růžena',
            14 => 'Matylda, Rút a Vlastibor',
            15 => 'Ida',
            16 => 'Elena a Herbert',
            17 => 'Vlastimil',
            18 => 'Eduard',
            19 => 'Josef',
            20 => 'Světlana',
            21 => 'Radek',
            22 => 'Leona a Lea',
            23 => 'Ivona',
            24 => 'Gabriel',
            25 => 'Marián',
            26 => 'Emanuel',
            27 => 'Dita',
            28 => 'Soňa',
            29 => 'Taťána',
            30 => 'Arnošt',
            31 => 'Kvido'
        ],
        2 => [
            1 => 'Hugo',
            2 => 'Erika',
            3 => 'Richard',
            4 => 'Ivana',
            5 => 'Miroslava',
            6 => 'Vendula a Venuše',
            7 => 'Hermína',
            8 => 'Ema',
            9 => 'Dušan a Dušana',
            10 => 'Darja',
            11 => 'Izabela',
            12 => 'Julius',
            13 => 'Aleš',
            14 => 'Vincenc',
            15 => 'Anastázie',
            16 => 'Irena',
            17 => 'Rudolf',
            18 => 'Valérie',
            19 => 'Rostislav',
            20 => 'Marcela',
            21 => 'Alexandra',
            22 => 'Evžénie',
            23 => 'Vojtěch',
            24 => 'Jiří',
            25 => 'Marek',
            26 => 'Oto',
            27 => 'Jaroslav',
            28 => 'Vlastislav',
            29 => 'Robert',
            30 => 'Blahoslav'
        ],

        5 => [
            1 => 'Pamela',
            2 => 'Zikmund',
            3 => 'Alexej',
            4 => 'Květoslav',
            5 => 'Klaudie',
            6 => 'Radoslav',
            7 => 'Stanislav',
            8 => 'Zlatan',
            9 => 'Ctibor',
            10 => 'Blažena',
            11 => 'Svatava',
            12 => 'Pankrác',
            13 => 'Servác',
            14 => 'Bonifác',
            15 => 'Žofie a Sofie',
            16 => 'Přemysl',
            17 => 'Aneta',
            18 => 'Nataša',
            19 => 'Ivo',
            20 => 'Zbyšek',
            21 => 'Monika',
            22 => 'Emil',
            23 => 'Vladimír',
            24 => 'Jana a Vanesa',
            25 => 'Viola',
            26 => 'Filip',
            27 => 'Valdemar',
            28 => 'Vilém',
            29 => 'Maxim',
            30 => 'Ferdinand',
            31 => 'Kamila'
        ],
        6 => [
            1 => 'Laura',
            2 => 'Jarmil',
            3 => 'Tamara',
            4 => 'Dalibor',
            5 => 'Dobroslav',
            6 => 'Norbert',
            7 => 'Iveta',
            8 => 'Medard',
            9 => 'Stanislava',
            10 => 'Gita a Margita',
            11 => 'Bruno',
            12 => 'Antonie',
            13 => 'Antonín',
            14 => 'Roland',
            15 => 'Vít',
            16 => 'Zbyněk',
            17 => 'Adolf',
            18 => 'Milan',
            19 => 'Leoš a Leo',
            20 => 'Květa a Květuše',
            21 => 'Alois a Aloisie',
            22 => 'Pavla',
            23 => 'Zdeňka',
            24 => 'Jan',
            25 => 'Ivan',
            26 => 'Adriana a Adrian',
            27 => 'Ladislav',
            28 => 'Lubomír',
            29 => 'Petr a Pavel',
            30 => 'Šárka'
        ],
        7 => [
            1 => 'Jaroslava',
            2 => 'Patricie',
            3 => 'Radomír',
            4 => 'Prokop',
            5 => 'Cyril a Metoděj',
            6 => 'Spytihněv',
            7 => 'Bohuslava',
            8 => 'Nora',
            9 => 'Drahoslava a Drahuše',
            10 => 'Libuše a Amálie',
            11 => 'Olga a Helga',
            12 => 'Bořek',
            13 => 'Markéta',
            14 => 'Karolína',
            15 => 'Jindřich',
            16 => 'Luboš',
            17 => 'Martina',
            18 => 'Drahomíra',
            19 => 'Čeněk',
            20 => 'Ilja a Eliáš',
            21 => 'Vítězslav',
            22 => 'Magdaléna',
            23 => 'Libor',
            24 => 'Kristýna',
            25 => 'Jakub',
            26 => 'Anna a Anita',
            27 => 'Věroslav',
            28 => 'Viktor a Alina',
            29 => 'Marta',
            30 => 'Bořivoj',
            31 => 'Ignác'
        ],

        8 => [
            1 => 'Oskar',
            2 => 'Gustav',
            3 => 'Miluše',
            4 => 'Dominik a Dominika',
            5 => 'Kristián',
            6 => 'Oldřiška',
            7 => 'Lada',
            8 => 'Soběslav',
            9 => 'Roman',
            10 => 'Vavřinec',
            11 => 'Zuzana',
            12 => 'Klára',
            13 => 'Alena',
            14 => 'Alan',
            15 => 'Hana',
            16 => 'Jáchym',
            17 => 'Petra',
            18 => 'Helena a Jelena',
            19 => 'Ludvík',
            20 => 'Bernard',
            21 => 'Johana a Jovana',
            22 => 'Bohuslav',
            23 => 'Sandra',
            24 => 'Bartoloměj',
            25 => 'Radim',
            26 => 'Luděk',
            27 => 'Otakar',
            28 => 'Augustýn',
            29 => 'Evelína',
            30 => 'Vladěna',
            31 => 'Pavlína'
        ],
        9 => [
            1 => 'Linda a Samuel',
            2 => 'Adéla',
            3 => 'Bronislav a Bronislava',
            4 => 'Jindřiška a Rozálie',
            5 => 'Boris',
            6 => 'Boleslav',
            7 => 'Regína',
            8 => 'Mariana',
            9 => 'Daniela',
            10 => 'Irma',
            11 => 'Denisa a Denis',
            12 => 'Marie a Mia',
            13 => 'Lubor',
            14 => 'Radka',
            15 => 'Jolana',
            16 => 'Ludmila a Lola',
            17 => 'Naděžda',
            18 => 'Kryštof',
            19 => 'Zita',
            20 => 'Oleg',
            21 => 'Matouš',
            22 => 'Darina',
            23 => 'Berta',
            24 => 'Jaromír a Jaromíra',
            25 => 'Zlata',
            26 => 'Andrea',
            27 => 'Jonáš',
            28 => 'Václav a Václava',
            29 => 'Michal a Michael',
            30 => 'Jeroným'
        ],

        10 => [
            1 => 'Igor',
            2 => 'Olívie a Oliver',
            3 => 'Bohumil',
            4 => 'František',
            5 => 'Eliška',
            6 => 'Hanuš',
            7 => 'Justýna',
            8 => 'Věra',
            9 => 'Sára a Štefan',
            10 => 'Marina',
            11 => 'Andrej',
            12 => 'Marcel',
            13 => 'Renáta',
            14 => 'Agáta',
            15 => 'Tereza',
            16 => 'Havel',
            17 => 'Hedvika',
            18 => 'Lukáš',
            19 => 'Michaela',
            20 => 'Vendelín',
            21 => 'Brigita',
            22 => 'Sabina',
            23 => 'Teodor',
            24 => 'Nina',
            25 => 'Beáta',
            26 => 'Erik',
            27 => 'Šarlota',
            28 => 'Alfréd',
            29 => 'Silvie',
            30 => 'Tadeáš',
            31 => 'Štěpánka'
        ],

        11 => [
            1 => 'Felix',
            2 => 'Tobiáš',
            3 => 'Hubert',
            4 => 'Karel a Karla',
            5 => 'Miriam',
            6 => 'Liběna',
            7 => 'Saskie',
            8 => 'Bohumír',
            9 => 'Bohdan',
            10 => 'Evžen',
            11 => 'Martin',
            12 => 'Benedikt',
            13 => 'Tibor',
            14 => 'Sáva',
            15 => 'Leopold',
            16 => 'Otmar',
            17 => 'Mahulena',
            18 => 'Romana',
            19 => 'Alžběta',
            20 => 'Nikola a Nikolas',
            21 => 'Albert',
            22 => 'Cecílie',
            23 => 'Klement',
            24 => 'Emílie',
            25 => 'Kateřina',
            26 => 'Artur',
            27 => 'Xenie',
            28 => 'René',
            29 => 'Zina',
            30 => 'Ondřej'
        ],

        12 => [
            1 => 'Iva',
            2 => 'Blanka',
            3 => 'Svatoslav',
            4 => 'Barbora',
            5 => 'Jitka',
            6 => 'Mikuláš',
            7 => 'Ambrož',
            8 => 'Květoslava',
            9 => 'Vratislav a Vratislava',
            10 => 'Julie',
            11 => 'Dana a Danuše',
            12 => 'Simona',
            13 => 'Lucie',
            14 => 'Lýdie',
            15 => 'Radana',
            16 => 'Albína',
            17 => 'Daniel',
            18 => 'Miloslav',
            19 => 'Ester',
            20 => 'Dagmar',
            21 => 'Natálie',
            22 => 'Šimon',
            23 => 'Vlasta',
            24 => 'Adam a Eva',
            26 => 'Štěpán',
            27 => 'Žaneta',
            28 => 'Bohumila',
            29 => 'Judita',
            30 => 'David',
            31 => 'Silvestr'
        ]
    ];

    public function label(): string
    {
        return 'name';
    }

    public function getFloating(int $year): array
    {
        return [];
    }

    public function getFixed(): array
    {
        return self::NAMES;
    }
}