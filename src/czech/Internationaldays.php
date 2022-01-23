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

class Internationaldays implements CalendarInterface
{
    private const INTERNATIONALDAYS = [
        1 => [
            1 => 'Světový den míru',
            4 => 'Světový den Braillova písma',
            21 => 'Mezinárodní den objímání',
            24 => 'Mezinárodní den vzdělání',
            26 => 'Mezinárodní den celníků',
            27 => 'Mezinárodní den památky obětí holocaustu',
            28 => 'Den ochrany osobních údajů',
            31 => 'Den dětí ulice'
        ],
        2 => [
            2 => 'Světový den mokřadů',
            4 => [
                'Světový den boje proti rakovině',
                'Mezinárodní den lidského bratrství'
            ],
            6 => 'Mezinárodní den nulové tolerance ženské obřízce',
            10 => 'Světový den luštěnin',
            11 => [
                'Světový den nemocných',
                'Mezinárodní den žen a dívek ve vědě'
            ],
            12 => ['Den červené ruky', 'Darwinův den'],
            13 => 'Světový den rádia',
            15 => 'Mezinárodní visegrádský den',
            20 => 'Světový den sociální spravedlnosti',
            21 => [
                'Mezinárodní den mateřského jazyka',
                'Mezinárodní den průvodců cestovního ruchu',
                'Mezinárodní den boje proti kolonialismu'
            ],
            22 => [
                'Evropský den obětí zločinu',
                'Den zamyšlení'
            ],
            29 => 'Mezinárodní den boje proti vzácným chorobám'
        ],
        3 => [
            1 => [
                'Mezinárodní den civilní ochrany',
                'Den nulové diskriminace'
            ],
            2 => 'Mezinárodní den zásnub',
            3 => 'Světový den divoké přírody',
            8 => 'Mezinárodní den žen',
            11 => [
                'Evropský den mozku',
                'Evropský den památky obětem terorismu'
            ],
            14 => [
                'Den pí',
                'Mezinárodní den akcí pro řeky a proti přehradám'
            ],
            15 => [
                'Mezinárodní den proti policejní brutalitě',
                'Světový den spotřebitelských práv'
            ],
            20 => [
                'Světový den štěstí',
                'Světový den frankofonie',
                'Světový den divadla pro děti a mládež',
                'Světový den vrabců'
            ],
            21 => [
                'Světový den Downova syndromu',
                'Světový den poezie',
                'Mezinárodní den za odstranění rasové diskriminace',
                'Mezinárodní den loutkového divadla',
                'Mezinárodní den lesů',
                'Nourúz',
                'Světový den zeměměřičů'
            ],
            22 => [
                'Světový den vody',
                'Světový den mimů'
            ],
            23 => 'Světový den meteorologie',
            24 => [
                'Světový den boje proti tuberkulóze',
                'Mezinárodní den za právo na pravdu o hrubém porušování lidských práv a na důstojnost obětí'
            ],
            25 => [
                'Mezinárodní den nenarozeného dítěte',
                'Mezinárodní den památky obětí otroctví a transatlantického obchodu s otroky',
                'Mezinárodní den solidarity se zadržovanými a nezvěstnými členy mírových misí'
                ,
                26 => 'Světový den boje proti epilepsii (Purple Day)',
                27 => 'Světový den divadla'
            ],
        ],
        4 => [
            1 => 'Mezinárodní den ptactva',
            2 => [
                'Mezinárodní den dětské knihy',
                'Světový den zvýšení povědomí o autismu'
            ],
            3 => 'Mezinárodní den spodního prádla',
            4 => [
                'Mezinárodní den proti nášlapným minám',
                '(Světový) Den vitamínu C',
                'Světový den krys',
                'Mezinárodní den mrkve'
            ],
            5 => 'Mezinárodní den svědomí',
            6 => 'Mezinárodní den sportu za rozvoj a mír',
            7 => [
                'Světový den zdraví',
                'Vzpomínka na genocidu ve Rwandě'
            ],
            8 => 'Mezinárodní den Romů',
            10 => 'Mezinárodní den sourozenců',
            11 => [
                'Mezinárodní den solidarity osvobození politických vězňů',
                'Světový den Parkinsonovy choroby'
            ],
            12 => 'Mezinárodní den kosmonautiky',
            14 => 'Světový den monitoringu diabetiků',
            16 => 'Světový den hlasu',
            17 => 'Světový den hemofilie',
            18 => [
                'Mezinárodní den památek a sídel',
                'Mezinárodní den radioamatérů'
            ],
            19 => 'Světový den investičních fondů',
            20 => [
                'Světový den marihuany',
                'Den čínského jazyka'
            ],
            21 => 'Světový den kreativity a inovací',
            22 => [
                '(Mezinárodní) Den Země',
                'Mezinárodní den žen v ICT'
            ],
            23 => [
                'Světový den knihy a autorského práva',
                'Den anglického jazyka',
                'Světový den španělského jazyka'
            ],
            24 => [
                'Mezinárodní den skautů a skautek',
                'Světový den laboratorních zvířat',
                'Mezinárodní den boje proti kolonialismu (Anti-Colonialism Day)'
            ],
            25 => [
                'Světový den boje proti malárii',
                'větový den delegátů'
            ],
            26 => 'Světový den duševního vlastnictví',
            27 => 'Světový den grafiky',
            28 => 'Světový den bezpečnosti a ochrany zdraví při práci',
            29 => [
                'Mezinárodní den tance',
                'Mezinárodní den imunologie'
            ],
            30 => 'Mezinárodní den jazzu'
        ],
        5 => [
            1 => 'Svátek práce',
            2 => 'Světový den tuňáků',
            3 => [
                'Mezinárodní den svobody tisku',
                'Mezinárodní den Arganie'
            ],
            4 => [
                'Mezinárodní den hasičů',
                'Den Star Wars'
            ],
            5 => [
                'Mezinárodní den porodních asistentek',
                'Mezinárodní den hygieny rukou',
                'Evropský den pro rovnoprávnost osob se zdravotním postižením'
            ],
            6 => 'Mezinárodní den proti dietám',
            8 => [
                'Vzpomínkový den na ty, kdo ztratili svůj život během druhé světové války',
                'Světový den Červeného kříže'
            ],
            9 => 'Den Evropy',
            12 => [
                'Mezinárodní den ošetřovatelek a zároveň',
                'Mezinárodní den podpory nemocných s chronickým únavovým syndromem',
                'Mezinárodní den informovanosti o fibromyalgii'
            ],
            13 => [
                'Mezinárodní den Falun Dafa',
                'Světový den koktejlů'
            ],
            15 => [
                'Mezinárodní den rodiny',
                'Světový den proti mozkové mrtvici',
                'Mezinárodní den odpůrců vojenské služby'
            ],
            17 => [
                'Světový den telekomunikací a informační společnosti',
                'Mezinárodní den proti homofobii',
                'Světový den hypertenze'
            ],
            18 => 'Mezinárodní den muzeí',
            20 => 'Světový den včel',
            21 => [
                'Mezinárodní den kachliček',
                'Světový den kulturní rozmanitosti',
                'Mezinárodní den čaje'
            ],
            22 => 'Mezinárodní den biologické rozmanitosti',
            23 => 'Světový den želv',
            24 => 'Evropský den parků',
            25 => [
                'Geek Pride Day',
                'Den Afriky',
                'Mezinárodní den ztracených dětí',
                'Ručníkový den'
            ],
            28 => 'Světový den her',
            29 => 'Mezinárodní den příslušníků mírových operací OSN',
            31 => 'Světový den bez tabáku'
        ],
        6 => [
            1 => [
                'Mezinárodní den dětí',
                'Světový den rodičů',
                'Světový den mléka',
                'Světový den bezpečnosti potravin'
            ],
            2 => 'Mezinárodní den prostitutek',
            3 => [
                'Světový den jízdního kola',
                'Evropský den jízdních kol'
            ],
            4 => 'Mezinárodní den dětí, které se staly obětí agrese',
            5 => [
                'Světový den životního prostředí',
                'Mezinárodní den boje proti nezákonnému, nehlášenému a neregulovanému rybolovu'
            ],
            6 => 'Den ruského jazyka',
            7 => 'Světový den rorýsů',
            8 => [
                'Světový den oceánů',
                'Světový den boje proti nádorům mozku['
            ],
            9 => 'Mezinárodní den archivů',
            10 => 'Světový den secese',
            12 => 'Světový den proti dětské práci',
            14 => 'Světový den dárců krve',
            15 => [
                'Světový den proti násilí na seniorech',
                'Světový den větru'
            ],
            16 => 'Den afrického dítěte',
            17 => 'Mezinárodní den proti rozšiřování pouští a sucha',
            18 => [
                'Autistický den hrdosti',
                'Udržitelný den v astronomii'
            ],
            20 => 'Světový den uprchlíků',
            21 => [
                'Světový den hudby', 'Mezinárodní den triček',
                'Mezinárodní den trpaslíků',
                'Mezinárodní den skateboardingu',
                'Mezinárodní den jógy'
            ],
            22 => 'Mezinárodní den bez kalhotek',
            23 => [
                'OSN pro den veřejné služby',
                'Mezinárodní den vdov'
            ],
            25 => 'Den námořníků',
            26 => [
                'Mezinárodní den boje proti zneužívání drog a nezákonnému obchodování s nimi',
                'Mezinárodní den podpory obětem násilí'
            ],
            27 => [
                'Světový den rybářství',
                'Den malých a středních podniků'
            ],
            29 => 'Mezinárodní den tropů',
            30 => [
                'Mezinárodní den asteroidů',
                'Mezinárodní den parlamentarismu'
            ]
        ],
        7 => [
            2 => [
                'Světový den UFO',
                'Mezinárodní den proti zapomínání'
            ],
            6 => 'Světový den polibku',
            11 => 'Světový den populace',
            18 => 'Mezinárodní den Nelsona Mandely',
            20 => 'Mezinárodní den šachu',
            28 => 'Světový den boje proti žloutence',
            29 => 'Mezinárodní den tygrů',
            30 => 'Mezinárodní den přátelství'
        ],
        8 => [
            2 => 'Den suchého zipu',
            6 => [
                'Světový den boje za zákaz jaderných zbraní',
                'SMezinárodní den boje lékařů za mír'
            ],
            8 => 'Mezinárodní den ženského orgasmu',
            9 => 'Mezinárodní den původního obyvatelstva',
            12 => 'Mezinárodní den mládeže',
            13 => 'Den leváků',
            15 => 'Mezinárodní den energy drinků',
            16 => 'Mezinárodní den rumu',
            19 => 'Světový den humanitárních pracovníků',
            23 => [
                'Mezinárodní den památky obětí obchodu s otroky',
                'Evropský den památky obětí stalinismu a nacismu'
            ],
            28 => 'Evropská noc pro netopýry',
            29 => [
                'Evropská noc pro netopýry',
                'Mezinárodní den proti jaderným zkouškám'
            ],
            30 => 'Mezinárodní den obětí násilného zmizení'
        ],
        9 => [
            5 => 'Mezinárodní den charity[109]',
            7 => 'Mezinárodní den čistého ovzduší za modrou oblohu',
            8 => 'Mezinárodní den gramotnosti',
            9 => 'Evropský den recyklace baterií',
            10 => 'Světový den prevence sebevražd',
            12 => 'Mezinárodní den spolupráce jih-jih',
            13 => 'Mezinárodní den čokolády',
            14 => 'Evropský den židovské kultury',
            15 => [
                'Mezinárodní den demokracie',
                'Celosvětový úklidový den'
            ],
            16 => [
                'Mezinárodní den ochrany ozónové vrstvy',
                'Den církevního školství',
                'Evropský týden mobility'
            ],
            20 => 'Den malování mandal',
            21 => [
                'Mezinárodní den míru',
                'Mezinárodní den Alzheimerovy choroby'
            ],
            22 => '(Světový/Evropský) den bez aut',
            26 => [
                'Světový den antikoncepce[114]',
                'Evropský den jazyků',
                'Mezinárodní den za úplné odstranění jaderných zbraní'
            ],
            27 => 'Světový den cestovního ruchu (Světový den turismu)',
            28 => [
                'Světový den boje proti vzteklině[117]',
                'Mezinárodní den boje za bezpečný potrat'
            ],
            29 => 'Světový den srdce',
            30 => 'Mezinárodní den překladu (též „překladatelů“)'
        ],
        10 => [
            1 => [
                'Mezinárodní den seniorů',
                'Mezinárodní den kávy',
                'Mezinárodní den lékařů',
                'Světový den cyklistiky',
                'Světový den vegetariánství',
                'Mezinárodní den hudby'
            ],
            2 => [
                'Světový den nenásilí',
                'Světový den hospodářských zvířat'
            ],
            4 => [
                'Mezinárodní den zvířat',
                'Světový den lidských sídel'
            ],
            5 => 'Světový den učitelů',
            8 => 'Mezinárodní den boje proti popáleninám',
            9 => 'Světový den pošty',
            10 => [
                'Světový den duševního zdraví',
                'Světový den proti trestu smrti'
            ],
            11 => 'Mezinárodní den dívek',
            12 => [
                'Světový den boje proti artritidě',
                'Světový týden kostí a kloubů'
            ],
            13 => [
                'Mezinárodní den za omezení přírodních katastrof',
                'Mezinárodní den bez podprsenky'
            ],
            14 => 'Světový den standardů',
            15 => [
                'Mezinárodní den bílé hole',
                'Světový den žen žijících na venkově'
            ],
            16 => [
                'Světový den výživy',
                'Světový den páteře',
                'Mezinárodní den proti McDonald\'s'
            ],
            17 => [
                'Mezinárodní den za odstranění chudoby',
                'Světový den úrazů'
            ],
            20 => [
                'Mezinárodní den kuchařů',
                'Světový den statistiky',
                'Světový den proti osteoporóze',
                'Den stromů'
            ],
            21 => 'Den původních odrůd jablek',
            22 => 'Mezinárodní den balbutiků',
            24 => [
                'Den Spojených národů',
                'Světový den pro rozvoj informací',
                'Týden za odzbrojení'
            ],
            27 => 'Světový den audiovizuálního dědictvíO',
            31 => [
                'Den UNICEF',
                'Světový den spoření'
            ]
        ],
        11 => [
            1 => 'Mezinárodní den veganství',
            2 => 'Světový den vitamínu D',
            6 => 'Mezinárodní den prevence ničení životního prostředí v průběhu válek a ozbrojených konfliktů',
            10 => 'Světový den vědy pro mír a rozvoj',
            11 => [
                'Mezinárodní den válečných veteránů',
                'Mezinárodní den prasklých těsnění'
            ],
            13 => 'Mezinárodní den nevidomých',
            14 => 'Světový den diabetiků',
            15 => 'Den vězněných spisovatelů',
            16 => 'Mezinárodní den tolerance',
            17 => [
                'Mezinárodní den studentstva',
                'Světový den předčasně narozených dětí'
            ],
            19 => [
                'Světový den prevence týrání a zneužívání dětí',
                'Mezinárodní den mužů',
                'Světový den toalet'
            ],
            20 => [
                'Den industrializace Afriky',
                'Světový den dětí',
                'Světový den chronické obstrukční plicní nemoci'
            ],
            21 => [
                'Světový den televize',
                'Světový den pozdravů Archivováno 22. 11. 2016 na Wayback Machine'
            ],
            25 => [
                'Mezinárodní den za odstranění násilí páchaného na ženách',
                'Mezinárodní den bez nákupů'
            ],
            26 => 'Světový den olivovníku',
            29 => 'Mezinárodní den solidarity s lidem Palestiny',
            30 => 'Mezinárodní den obětí chemických válek'
        ],
        12 => [
            1 => 'Světový den boje proti AIDS',
            2 => [
                'Světový den počítačové gramotnosti',
                'Mezinárodní den boje za vymýcení otroctví'
            ],
            3 => [
                'Mezinárodní den lidí s postižením',
                'Den bez pesticidů'
            ],
            4 => 'Mezinárodní den bank',
            5 => [
                'Mezinárodní den dobrovolníků',
                'Světový den půdy'
            ],
            7 => 'Mezinárodní den civilního letectví',
            9 => 'Mezinárodní den proti korupci',
            10 => 'Den lidských práv',
            11 => [
                'Světový den dětství',
                'Mezinárodní den hor'
            ],
            18 => 'Mezinárodní den migrantů',
            20 => 'Mezinárodní den lidské solidarity',
            27 => 'Mezinárodní den epidemické připravenosti'
        ]
    ];

    public function label(): string
    {
        return 'internationaldays';
    }

    public function getFloating(int $year): array
    {
        return [];
    }

    public function getFixed(): array
    {
        return self::INTERNATIONALDAYS;
    }
}