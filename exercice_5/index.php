<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_5 partie 4-php</title>  
    </head>

    <body>
        <h1>exercice_5 partie 4 php</h1>
        <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
        </p>        

        <?php

            $number=30;
            $string='ans';

            function mix($number, $string) {
            echo $number.$string;
                                             }
            return mix($number , $string);
            
         ?>
    </body>
</html>