<?php require_once __DIR__ . '/components/_person.php'; ?>
<?php require_once __DIR__ . '/components/_funktion.php'; ?>
<?php require_once __DIR__ . '/components/_nav.php'; ?>
<?php require_once("components/_ai-btn.php");?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$t | Olles AB</title>
    <link rel="icon" href="public/logo.svg">
    <link rel="stylesheet" href="public/style.css?v=$v">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&family=Space+Grotesk:wght@500;700&family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
</head>
<body>
    <main>

        <?= Nav() ?>
        <?= AIbtn() ?>


        <div class="">
            

            <div class="org-chart">
                <div>
                    <ul class="org-chart">
                        <li><?= Person(title: 'Glenn Klapfventrikel', role: 'VD', image: 'public/glenn/suit.png') ?></li>
                        <li class="line"></li>
                        <li><?= Funktion(title: 'Ledningsgruppen', role: 'Produktionschef', link: "/OllesAB/funktioner.php?funktion=ledningsgruppen") ?></li>
                        <li class="line"></li>

                        <li>
                        <li class="line"></li>

                            <ul class="org-chart__subgroup">
                                <li><div class="line"></div><?= Funktion(title: 'Produktion', role: 'Produktionschef', link: "/OllesAB/funktioner.php?funktion=produktion") ?></li>
                                <li><div class="line"></div><?= Funktion(title: 'Utveckling', role: 'Produktionschef', link: "/OllesAB/funktioner.php?funktion=utveckling") ?></li>
                                <li><div class="line"></div><?= Funktion(title: 'IT', role: 'Produktionschef', link: "/OllesAB/funktioner.php?funktion=it") ?></li>
                                <li><div class="line"></div><?= Funktion(title: 'Marknad', role: 'Produktionschef', link: "/OllesAB/funktioner.php?funktion=marknad") ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                


        </div>

        
        
    <main>
</body>
</html>