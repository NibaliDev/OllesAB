<?php
function Footer(): string {
    $ar = date('Y');

    return <<<HTML
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__brand">
                <img src="public/logo.svg" alt="Olles AB">
                <p>Slutväxlar och planetväxlar för grävmaskiner, tillverkade i vår egen verkstad.</p>
                <p class="footer__slogan">För framtiden redan idag!</p>
            </div>
            <div class="footer__links">
                <h3>Sidor</h3>
                <a href="index.php">Start</a>
                <a href="organisation.php">Organisation</a>
                <a href="miljopolicy.php">Miljöpolicy</a>
                <a href="ai.php">AI-strategi</a>
                <a href="kontakt.php">Kontakt</a>
            </div>
            <div class="footer__links">
                <h3>Kontakt</h3>
                <a href="kontakt.php">Skicka ett meddelande</a>
                <a href="kontakt.php">Begär offert</a>
                <a href="funktioner.php?funktion=marknad">Säljavdelningen</a>
            </div>
        </div>
        <p class="footer__copy">© $ar Olles AB</p>
    </footer>
    HTML;
}
