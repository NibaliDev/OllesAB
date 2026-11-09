<?php
function Nav(array $links = []): string {
    $links = $links ?: [
        'Organisation' => 'index.php',
        'Produktion'   => 'produktion.php?funktion=produktion',
        'Utveckling'   => 'produktion.php?funktion=utveckling',
        'IT'           => 'produktion.php?funktion=it',
        'Marknad'      => 'produktion.php?funktion=marknad',
    ];

    // Nuvarande sida, t.ex. "produktion.php?funktion=it"
    $current = basename($_SERVER['PHP_SELF']);
    if (!empty($_SERVER['QUERY_STRING'])) {
        $current .= '?' . $_SERVER['QUERY_STRING'];
    }

    $items = '';
    foreach ($links as $label => $href) {
        $active = $href === $current ? ' class="active"' : '';
        $items .= '<li><a href="' . htmlspecialchars($href) . '"' . $active . '>'
                . htmlspecialchars($label) . '</a></li>';
    }

    return <<<HTML
    <nav class="nav">
        <a href="/OllesAB/index.php" class="nav__logo"><img src="public/logo.svg" alt="Olles AB"/></a>
        <a href="/OllesAB/organisation.php">Organisation</a>
        <a href="/OllesAB/miljopolicy.php">Miljöpolicy</a>
        <a href="/OllesAB/ai.php">AI-strategi</a>
        <a href="/OllesAB/kontakt.php">Kontakt</a>
    </nav>
    HTML;
}