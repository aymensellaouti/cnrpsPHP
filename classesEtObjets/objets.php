<?php
include 'Voiture.php';
include 'VoiturePopulaire.php';
//
//include 'Personne.php';
//Personne::getNbreInstance();
//$sonia = new Personne();
//Personne::getNbreInstance();
////$sonia->setNumero(98200061);
////$sonia->setName('Sonia');
//
////$sonia->sePresenter();
//
////$sonia2 = clone $sonia;
////$sonia2->setName('Sonia 2');
//$aymen = new Personne();
//Personne::getNbreInstance();
////$aymen->setNumero(98584455);
////$aymen->setName('Aymen');
////
////$aymen->sePresenter();
////$sonia2->sePresenter();
////
////$aymen->quiAlePlusGrandNumero($sonia);
////$aymen->quiAlePlusGrandNumero($sonia2);
////

$fiesta =  new Voiture('1234', 4, 'bleu', 160);
$fakeCar =  new Voiture();
$yaris = new VoiturePopulaire();
$yaris->setOptions('Airbag et parc assist');
$yaris->tableauDeBord();
$fakeCar->tableauDeBord();
$fiesta->tableauDeBord();