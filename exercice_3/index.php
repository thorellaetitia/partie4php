<?php

        function true($string) {
              return $string ;
                      }
        ?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_3 partie 4-php</title>  
    </head>

    <body>
        <h1>exercice_3 partie 4 php</h1>
        <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines </p>        

        <?php
        echo true('ceci est une chaine de caractères').'</br>';
        echo true('ceci est une deuxième chaine de caractères');
        ?>
    </body>
</html>