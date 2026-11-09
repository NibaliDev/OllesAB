<?php
require_once("components/_nav.php");
require_once("components/_footer.php");
require_once("components/_ai-btn.php");
?>
<!DOCTYPE html>
<html lang="sv">
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

    <?= Nav() ?>
    <?= AIbtn() ?>

    <main class="page">

    <section>
        <h1>AI-strategi</h1>

        <div class="layout">
            <div>
                <img src="public/product/gear0.png" alt="CNC-bearbetning av planetväxel" />
            </div>
            <div>
                <h2>AI i världsklass för växlar i världsklass</h2>
                <p>
                    På Olles AB tillverkar vi slutväxlar och planetväxlar för grävmaskiner, och vi har alltid legat steget före. Därför har ledningen tagit ett tydligt och offensivt beslut: Olles AB ska vara den mest AI-drivna växeltillverkaren i sin storleksklass. Vi tror inte att framtiden väntar på någon, och det gör inte vi heller.
                </p>
            </div>
        </div>

        <div class="layout">
            <div>
                <img src="public/ai/copilot.png" alt="Medarbetare vid datorn" />
            </div>
            <div>
                <h2>En komplett AI-plattform</h2>
                <p>
                    Samtliga medarbetare har tillgång till både Microsoft Copilot och Claude Enterprise, och alla licenser är betalda och aktiverade. Plattformen används i dag främst av ledningsgruppen och våra konsulter, och vi ser en stor potential i att fler hittar dit framöver.
                </p>

                <h2>En organisation i förändring</h2>
                <p>
                    Våra medarbetare har visat ett starkt eget AI-engagemang och använder i dag i första hand sina privata ChatGPT-konton. Vi ser det som ett tydligt tecken på att organisationen är redo för nästa steg. Inloggningsuppgifter till företagets verktyg har skickats ut, och vi har valt att ge medarbetarna den tid de behöver för att ta dem i bruk.
                </p>

                <h2>Våra AI-verktyg</h2>
                <ul class="classic-list">
                    <li><b>Microsoft Copilot</b> – integrerat i mejl, Teams, Word och Excel, redo att användas från första dagen.</li>
                    <li><b>Claude Enterprise</b> – för avancerad analys, strategiskt arbete och framtidsinriktade beslutsunderlag.</li>
                </ul>
            </div>
        </div>

        <div class="layout">
            <div>
                <img src="public/ai/tokenligan.svg" alt="Månadens tokenledare" />
            </div>
            <div>
                <h2>Månadens tokenledare</h2>
                <p>
                    Vi mäter AI-mognad på det mest objektiva sätt som finns: i tokens. Varje månad belönas den medarbetare som har använt flest tokens i våra AI-verktyg med en bonus. Initiativet har varit mycket uppskattat, och bonusen har hittills gått till ledningsgruppen varje månad sedan starten.
                </p>

                <h2>Med hjälp av experter</h2>
                <p>
                    Arbetet sker i nära samarbete med AI-konsulterna på Technical Solutions AB. Tillsammans har vi genomfört en förstudie, en fördjupad förstudie och en strategisk inriktningsworkshop. Nästa fas är en förstudie inför implementeringen, som planeras att starta så snart förstudien är klar.
                </p>

                <h2>En långsiktig investering</h2>
                <ul class="classic-list">
                    <li>AI-satsningen är vår största investering sedan vår senaste CNC-maskin</li>
                    <li>vår AI-budget har vuxit snabbare än någon annan kostnadspost i företaget</li>
                    <li>effekterna på produktionen förväntas bli tydliga i ett senare skede</li>
                    <li>enligt våra konsulter är det helt normalt att resultaten dröjer i en tidig fas</li>
                </ul>
            </div>
        </div>

        <div class="layout">
            <div>
                <img src="public/ai/gdpr.png" alt="Säker datahantering" />
            </div>
            <div>
                <h2>Din data är trygg hos oss</h2>
                <p>
                    Dina ritningar och uppgifter är förtroendefulla, och så behandlar vi dem. Vi har tagit fram tydliga riktlinjer för hur AI får användas hos Olles AB, och de finns tillgängliga för alla medarbetare på vårt intranät. Sekretessen i våra avtal gäller alltid, och vi följer GDPR och EU:s AI-förordning.
                </p>
            </div>
        </div>

        <div class="signature-block">
            <p><i>För framtiden redan idag!</i></p>
            <p class="signature">Glenn Klapfventrikel</p>
        </div>

    </section>

    </main>

    <?= Footer() ?>
</body>
</html>