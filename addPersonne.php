<?php
/*
    Récupérer la session 
        Si pas de personne
            redirige vers page liste
        Sinon
            récupére la liste des personne
            vérifie l'unicité du name 
                si existe erreur et on redirige vers liste des personnes
            Sinon 
                ajoute et on redirige vers liste des personnes
            
*/
session_start();
$messageType = 'danger';
if (!isset($_SESSION['personnes'])) {
    $message = "Erreur";
} else {
    $name = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $personnes = $_SESSION['personnes'];
    if(isset($personnes[$name])) {
        $message = "Erreur la personne ${name} existe déjà"; 
    } else {
        $personnes[$name] = $telephone;
        $_SESSION['personnes'] = $personnes;
        $messageType = "success";
        $message = "Peronne ${name} ajoutée avec succès";
    }
}

header("location: personnes.php?message=${message}&messageType=${messageType}");