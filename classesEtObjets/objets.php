<?php

include 'Personne.php';

$sonia = new Personne();

$sonia->setNumero(98200061);
$sonia->setName('Sonia');

$sonia->sePresenter();

$aymen = new Personne();
$aymen->setNumero(98584455);
$aymen->setName('Aymen');

$aymen->sePresenter();

$aymen->quiAlePlusGrandNumero($sonia);