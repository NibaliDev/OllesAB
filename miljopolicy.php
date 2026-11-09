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
        <h1>Miljöpolicy</h1>

        <div  class="layout">
            <div>
                <img src="public/miljo/tree.png" alt="Planetväxel" />
            </div>
            <div>
                <h2>Slutväxlar och planetväxlar för grävmaskiner</h2>
                <p>
                    På Olles AB tror vi att hållbar tillverkning och hög kvalitet går hand i hand. Varje växel vi tillverkar ska hålla länge, och varje beslut vi fattar ska ta hänsyn till människor, miljö och kommande generationer. Miljöarbetet är en naturlig del av vår vardag, från hur vi köper in material till hur vi tar hand om restprodukterna.
                </p>
                
                
            </div>
            
        </div>

        


        <div  class="layout">
            <div>
                <img src="public/miljo/factory.png" alt="Logo">
            </div>
            <div>
                <h2>Ansvarsfull materialhantering</h2>
                <ul class="classic-list">
                    <li>Metallspån och restmaterial från bearbetningen sorteras och skickas till återvinning, så att stålet och aluminiumet blir nya produkter.</li>
                    <li>Vi optimerar våra CNC-program för att minimera spill och få ut så mycket som möjligt av varje råämne.</li>
                    <li>Gamla växlar som kunder lämnar in tas om hand och materialet återvinns.</li>

                </ul>

                <h2>Kylvätskor och oljor</h2>
                <p>
                    Kylvätskor och skärvätskor är nödvändiga i bearbetningen, men de ska hanteras rätt. Vi filtrerar och återanvänder kylvätskan i slutna system så långt det är möjligt, vilket kraftigt minskar förbrukningen. Uttjänta vätskor och oljor lämnas alltid till godkänd mottagare för farligt avfall. Inget får nå avlopp eller mark.
                </p>
                <h2>Energi</h2>
                <ul class="classic-list">
                    <li>köpa el från förnybara källor</li>
                    <li>stänga av maskiner och belysning när de inte används</li>
                    <li>välja energieffektiva maskiner och utrustning vid nyinvesteringar</li>
                    <li>planera produktionen så att maskinerna används effektivt</li>
                </ul>

        </div>   
        </div>

        <div  class="layout">
            <div>
                <img src="public/glenn/suit.png" alt="Logo">
            </div>
            <div>
                <h2>Vi tror på kvalitet</h2>
                <p>
                    Den mest miljövänliga växeln är den som inte behöver bytas. Genom precision i tillverkningen och noggranna kontroller av varje del bygger vi slutväxlar och planetväxlar med lång livslängd. Det minskar behovet av reservdelar, transporter och nyproduktion, och därmed miljöpåverkan under produktens hela livscykel.
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