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
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
</head>
<body>
    <table class="table table-striped">
    <tr>
        <th>Caractère</th>
        <th>Nombre d'Occurences</th>
    </tr>
    <?php
    $chaine = "Bonjour Cnrps pour le formation PHP Symfony";
    ?>
    <p>
    <i class="fa fa-table fa-2x" aria-hidden="true"></i>
    La chaine est : <?= $chaine ?></p>
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