<?php
    $hautDeFrance = array(
        02 => 'Aisne',
        59 => 'Nord',
        60 => 'Oise',
        62 => 'Pas-de-Calais',
        80 => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 5 exercice 10</title>
    </head>
    <body>
        <?php
            foreach($hautDeFrance as $cle => $element)
            {
                echo '<p>Le département ' . $element . ' a le numéro ' . $cle . '</p>';
            }
        ?>
    </body>
</html>