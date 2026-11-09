<?php
require_once("components/_nav.php");
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
<body>

    <?= Nav() ?>
    <?= AIbtn() ?>

    <main class="front-page">


    <div class="banner">
        <img src="public/people/org.png" alt="CNC-bearbetning av planetväxel" />
    </div>

    <section>
        <h1>Kontakt</h1>
        

        <div class="layout">
            <div>
                <h2>Kontakta världens bästa team!</h2>
                <p>
                    Oavsett om du behöver en ny planetväxel, en utbytesväxel eller en helt specialanpassad lösning finns vi här för dig. Berätta vilken maskin det gäller så återkommer vi med ett förslag. Har du märke, modell och gärna serienummer till hands går det ännu snabbare.
                </p>
            </div>
            <div class="contact">
                <form>
                    <input name="namn" placeholder="Namn" autocomplete="name"/>
                    <input name="epost" type="email" placeholder="E-post" autocomplete="email"/>
                    <textarea name="meddelande" placeholder="Meddelande"></textarea>
                    <button type="submit">Skicka</button>
                </form>
            </div>
        </div>

        

    </section>

    </main>
</body>
</html>