<?php
require_once __DIR__ . '/components/_person.php';
require_once __DIR__ . '/components/_funktion.php';
require_once __DIR__ . '/components/_nav.php';
require_once("components/_ai-btn.php");


$funktioner = [
    'ledningsgruppen' => [
        'namn' => 'Ledningsgruppen',
        'personer' => [
            ['title' => 'Glenn Klapfventrikel', 'role' => 'VD',                                   'image' => 'public/glenn/suit.png'],
            ['title' => 'Hela Braun',   'role' => 'Löner, Personal',                              'image' => 'public/people/helga.png'],
            ['title' => 'Paulina Olsson',       'role' => 'Sekreterare, Telefonväxel',            'image' => 'public/people/paulina.png'],
        ],
    ],
    'produktion' => [
        'namn' => 'Produktion',
        'personer' => [
            ['title' => 'Greger Andersson',    'role' => 'Produktionschef',                        'image' => 'public/people/greger.png'],
            ['title' => 'Bob "Lillen" Mkumba', 'role' => 'CNC-programmering, CNC',                 'image' => 'public/people/bob.png'],
            ['title' => 'Pekka Miillikainen',  'role' => 'CNC, Lager/Truck',                       'image' => 'public/people/pekka.png'],
            ['title' => 'Gunilla Eriksson',    'role' => 'CNC',                                    'image' => 'public/people/gunnilla.png'],
            ['title' => 'Eva Braun',           'role' => 'CNC, Facklig företrädare för IF Metall', 'image' => 'public/people/eva.png'],
            ['title' => 'Patrik Svensson',     'role' => 'CNC, Facklig företrädare för IF Metall', 'image' => 'public/people/patrik.png'],
            ['title' => 'Lisbeth Puktrumma',   'role' => 'CNC',                                    'image' => 'public/people/lisbeth.png'],
            ['title' => 'Henry Mitäpää',       'role' => 'CNC',                                    'image' => 'public/people/henry.png'],
            ['title' => 'Omar Muhammed',       'role' => 'CNC',                                    'image' => 'public/people/omar.png'],
            ['title' => 'Bruce Bannerhag',     'role' => 'CNC',                                    'image' => 'public/people/bruce.png'],
        ],
    ],
    'utveckling' => [
        'namn' => 'Utveckling',
        'personer' => [
            ['title' => 'Hans von Lilleskog', 'role' => 'Utvecklingschef, Designer',             'image' => 'public/people/hans.png'],
            ['title' => 'Pamela Andersson',   'role' => 'Designer/Beräkningar, Ritningsunderlag', 'image' => 'public/people/pamela.png'],
            ['title' => 'Peter Norrut',       'role' => 'Ritningsunderlag, Forskning',            'image' => 'public/people/peter.png'],
        ],
    ],
    'it' => [
        'namn' => 'IT',
        'personer' => [
            ['title' => 'Muhammed Ahdmin', 'role' => 'Datorsystem, Telefonväxelprogrammering, Hemsida', 'image' => 'public/people/muhammed.png'],
        ],
    ],
    'marknad' => [
        'namn' => 'Marknad',
        'personer' => [
            ['title' => 'Åke "CZ" Carlzon', 'role' => 'Säljchef, Marknadsföring', 'image' => 'public/people/ake.png'],
            ['title' => 'Lisa Karlsson',    'role' => 'Säljare, Marknadsföring',  'image' => 'public/people/lisa.png'],
        ],
    ],
    'hr' => [
        'namn' => 'HR',
        'personer' => [
            ['title' => 'Helga Braun', 'role' => 'HR-chef',     'image' => 'public/people/helga.png'],
            ['title' => 'Sekreterare', 'role' => 'Sekreterare', 'image' => 'public/people/sekreterare.png'],
        ],
    ],
];

$val      = $_GET['funktion'] ?? 'produktion';
$funktion = $funktioner[$val] ?? $funktioner['produktion'];
$personer = $funktion['personer'];
$chef     = array_shift($personer);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($funktion['namn']) ?> | Olles AB</title>
    <link rel="stylesheet" href="public/style.css?v=<?= filemtime(__DIR__ . '/public/style.css') ?>">
</head>
<body>
    <main>
        <?= Nav() ?>
        <?= AIbtn() ?>
        <h1><?= htmlspecialchars($funktion['namn']) ?></h1>

        <div class="org-chart">
            <div class="row">
                <h2><?= $personer ? 'Chef' : 'Ansvarig' ?></h2>
                <div class="org-chart_group_specific">
                    <?= Person(...$chef) ?>
                </div>
            </div>

            <?php if ($personer): ?>
            <div class="row">
                <h2>Medarbetare</h2>
                <div class="org-chart_group_specific">
                    <?php foreach ($personer as $person): ?>
                        <?= Person(...$person) ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>