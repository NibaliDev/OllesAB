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

    <header class="hero">
        <div class="hero__content">
            <p class="hero__eyebrow">Slutväxlar och planetväxlar för grävmaskiner</p>
            <h1>Europas <i>ledande</i> tillverkare av planetväxlar</h1>
            <p class="hero__lead">Nytt istället för renoverat. Tillverkat med precision i vår egen verkstad.</p>
            <div class="hero__actions">
                <a href="kontakt.php" class="btn">Kontakta oss</a>
                <a href="organisation.php" class="btn btn--ghost">Möt teamet</a>
            </div>
        </div>
    </header>

    <div class="stats">
        <div class="stat"><strong>800+</strong><span>maskinmodeller</span></div>
        <div class="stat"><strong>0,8–45 ton</strong><span>viktklasser</span></div>
        <div class="stat"><strong>100 %</strong><span>egen verkstad</span></div>
    </div>

    <main class="page">
    <section>

        <div class="layout">
            <div>
                <img src="public/product/cnc0.png" alt="CNC-bearbetning av planetväxel" />
            </div>
            <div>
                <h2>Slutväxlar och planetväxlar för grävmaskiner</h2>
                <p>
                    Vi säljer, servar och tillverkar planetväxlar till över 800 modeller i minigrävare och grävmaskiner i viktklasser från 0,8 till 45 ton.
                </p>
                <p>
                    Varje växel tillverkas i vår egen verkstad, där vi har full kontroll över hela processen, från råmaterial till färdig produkt. Våra moderna CNC-maskiner bearbetar kugghjul, hus och axlar med mycket snäva toleranser. Det ger exakt passform, jämn kraftöverföring och lång livslängd även under tunga förhållanden. Varje del kontrolleras noggrant innan den monteras, och varje färdig växel testas innan den lämnar verkstaden.
                </p>
            </div>
        </div>

        <div class="layout">
            <div>
                <img src="public/glenn/suit.png" alt="Glenn Klapfventrikel, VD">
            </div>
            <div>
                <h2>Nytt istället för renoverat</h2>
                <p>
                    Många av våra kunder har tidigare valt att renovera sina växlar. Med våra priser lönar det sig sällan längre. En ny slutväxel eller planetväxel är ofta billigare redan vid köpet, och nästan alltid över tid. Eftersom vi tillverkar delarna själva och säljer direkt utan mellanhänder kan vi hålla låga priser utan att kompromissa med kvaliteten.
                </p>

                <h2>Service och utbyte för alla ledande märken</h2>
                <p>
                    Vi servar, konfigurerar och erbjuder utbytesväxlar för bland annat Bonfiglioli, Brevini, Kayaba, Nachi, Oil Motor, Orbit/Eaton, Sumitomo, SOM, Tong Myung, Teijin Seiki och Nabtesco.
                </p>

                <h2>Specialanpassade lösningar</h2>
                <p>
                    Har du en applikation med särskilda krav? Vår egen konstruktionsavdelning har lång erfarenhet i branschen och tar fram växlar efter dina behov. All tillverkning sker i vår egen verkstad, i moderna maskiner som körs av välutbildade och erfarna operatörer.
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
