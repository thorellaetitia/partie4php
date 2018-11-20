

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_4 partie 4-php</title>  
    </head>

    <body>
        <h1>exercice_4 partie 4 php</h1>
        <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

            Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
            Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
            Les deux nombres sont identiques si les deux nombres sont égaux
        </p>        

        <?php
        $varfirstnumber = 30;
        $varsecondnumber = 80;

        function Number($varfirstnumber, $varsecondnumber) {
            if ($varfirstnumber > $varsecondnumber) {
                echo 'Le premier nombre est plus grand';
            } else if ($varfirstnumber < $varsecondnumber) {
                echo 'Le premier nombre est plus petit';
            } else if ($varfirstnumber === $varsecondnumber) {
                echo 'les deux nombres sont identiques';
            }
        }

        Number($varfirstnumber, $varsecondnumber);
        ?>
    </body>
</html>