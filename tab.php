<?php
    $donneesPerso = array(
        "name" => "Sellaouti",
        "firstname" => "aymen",
        "age" => "37"    
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des tableaux</title>
</head>
<body>
    <table border='2'>
    <tr>
        <th>Caractère</th>
        <th>Nombre d'Occurences</th>
    </tr>
    <?php
    $chaine = "Bonjour Cnrps pour le formation PHP Symfony";
    ?>
    <p>La chaine est : <?= $chaine ?></p>
    <?php
    foreach(count_chars($chaine, 1) as $caractere => $nbOcc) {
    ?>
        <tr>
            <td><?= chr($caractere) ?></td>
            <td><?= $nbOcc ?></td>
        </tr>
    <?php
    }
    ?>
</table>
    
</body>
</html>