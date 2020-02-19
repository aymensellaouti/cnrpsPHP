<?php
include 'autoload.php';
$fournisseurModel = new FournisseurModel();
$datas = $fournisseurModel->findAll();
foreach ($datas as $fournisseur) {
    echo $fournisseur->name;
    echo '<br>';
}

$fournisseur = $fournisseurModel->findOneById(485);
var_dump($fournisseur);