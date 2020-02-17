<?php
session_start();
if (!isset($_SESSION['nbreVisit'])) {
    $nbreVisite = 1;
    $_SESSION['nbreVisit'] = $nbreVisite;
    $message = "Bonjour bienvenu à notre site c'est votre première visite :)";
} else {
    $nbreVisite =  $_SESSION['nbreVisit'] + 1; 

    $_SESSION['nbreVisit'] = $nbreVisite; 
    $message = "Re bonjour vous avez visité notre site ${nbreVisite} fois";
}

/*
    Si premier accès => Message de bienvenu, init nbreVisite à 1 on met ca dans la session
    Sinon On affiche le nombre de visite puis on incrémente de 1
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= $message ?>
</body>
</html>