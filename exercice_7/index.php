<?php

function mix($age, $gender) {

    if ($age >= 18) {
        $a ='vous êtes majeur';

        } else {
            $a ='vous êtes mineur';
        }
   
    if ($gender == 'Homme') {
        $b = 'vous êtes un homme';
        
    } else {
            $b = 'vous êtes une femme';
        }
    
    return $a . ' et '. $b;
}
    ?>
    <!DOCTYPE HTML>
    <html lang="fr">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />  
            <link rel="stylesheet" href="style.css" />
            <title>exercice_7 partie 4-php</title>  
        </head>

        <body>
            <h1>exercice_7 partie 4 php</h1>
            <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :

                Homme
                Femme

                La fonction doit renvoyer en fonction des paramètres :

                Vous êtes un homme et vous êtes majeur
                Vous êtes un homme et vous êtes mineur
                Vous êtes une femme et vous êtes majeur
                Vous êtes une femme et vous êtes mineur

                Gérer tous les cas.
            </p>
            <p><?= mix(28, 'Femme'); ?></p>

    </body>
</html>