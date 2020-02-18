<?php
/*
    Récupérer la session 
        Si pas de personne
            redirige vers page liste
        Sinon
            récupére la liste des personne
            vérifie l'existance de la personne
                si not existe erreur et on redirige vers liste des personnes
            Sinon 
                supprime et on redirige vers liste des personnes
            
*/
session_start();
$messageType = 'danger';
if (!isset($_SESSION['personnes'])) {
    $message = "Erreur";
} else {
    $name = $_GET['nom'];
    $personnes = $_SESSION['personnes'];
    if(! isset($personnes[$name])) {
        $message = "Erreur la personne ${name} n'existe pas"; 
    } else {
        unset($personnes[$name]);
        $_SESSION['personnes'] = $personnes;
        $messageType = "success";
        $message = "Peronne ${name} supprimée avec succès";
    }
}

header("location: personnes.php?message=${message}&messageType=${messageType}");