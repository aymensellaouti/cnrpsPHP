<?php
include 'autoload.php';
$cnx = ConnexionBD::getInstance();
$query = 'select * from produit';
$response = $cnx->query($query);
$datas = $response->fetchAll(PDO::FETCH_OBJ);
foreach ($datas as $produit) {
    echo $produit->designation;
    echo '<br>';
}