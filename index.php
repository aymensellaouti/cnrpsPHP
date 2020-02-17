<?php
// 
    include 'test.php';
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
    <h1>Formation PHP</h1>
    <p>Bonjour <?php echo $administration.' '.$name ?></p>
    <p>Bonjour <?= $name ?></p>
    <?php
    $chaine = '02/07/1982';
    var_dump(explode('/', $chaine));
    //$tab = count_chars($chaine, 1);
     /* 
        var_dump($_SERVER);
        phpinfo(INFO_VARIABLES ); 
    */
        ?>
</body>
</html>