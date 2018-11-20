<?php
function mix($name, $firstname, $age) {
    $sentence = 'Bonjour ' . $name . ' ' . $firstname . ', tu as ' . $age . ' ans';
    return $sentence;
}
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_6 partie 4-php</title>  
    </head>

    <body>
        <h1>exercice_6 partie 4 php</h1>
        <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
            "Bonjour" + nom + prénom + ",tu as" + age + "ans".
        </p>
        <p><?= mix('THOREL', 'Laetitia', 35); ?><p>
    </body>
</html>