<?php
    /*
        Vérifie l'existance de la session
        Si 
            elle existe : J'affiche la liste
        Sinon
            On crée la session et on prépare une liste vide
            Ajoutermessage
    */
    session_start();
    if (!isset($_SESSION['personnes'])) {
        $_SESSION['personnes'] = [];
        $personnes = [];
    } else  {
        $personnes = $_SESSION['personnes'];
    }
    if(isset($_GET['message'])) {
        $message = $_GET['message'];
        $messageType = $_GET['messageType'];
    } else {
        $message = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="personnes.php">Annuaire</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="addPersonneForm.html">Ajouter une personne</a>
      </li>
    </ul>
  </div>
</nav>

<?php
    if(strlen($message)>0) {
?>
<div class="alert alert-<?= $messageType?>">
    <?= $message ?>
</div>
<?php
    }
?>
<?php
    if (count($personnes) != 0) {

?>
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Numero Téléphone</th>
        <th>Actions</th>
    </tr>
    <?php
        foreach($personnes as $name => $telephone ) {
    ?>
    <tr>
            <td><?= $name ?></td>
            <td><?= $telephone ?></td>
            <td>
                <a href="deletePersonne.php?nom=<?= $name?>">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
    </tr>
    <?php
        }
    } else {
        echo "<h1>Aucune personne dans votre annuaire</h1>";
    }    
    ?>    
</body>
</html>