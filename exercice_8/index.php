<?php

function mix($nb1 = 5, $nb2 = 10, $nb3 = 10) {
    return $nb1 + $nb2 + $nb3;
}
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_8 partie 4-php</title>  
    </head>

    <body>
        <h1>exercice_8 partie 4 php</h1>
        <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
            Tous les paramètres doivent avoir une valeur par défaut.
        </p>
        <p><?= mix(3, 3, 3); ?></p>

        <?php
        
        for ($max=0;$max<= 5;$max++) {
            echo 'coucou';
            
        }
        ?>
    </body>
</html>