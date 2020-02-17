<?php

function somme() {
    $s = 0;
    $nb = func_num_args();
    for($i = 0 ; $i < $nb ; $i++) {
        // $s + =
        $s = $s + func_get_arg($i);
    }
    echo $s;
}

function increment(&$x) {
    $x = $x + 1;
    echo "Dans la fonction La valeur de x est ${x} <br> ";
}

somme(1,2,3,4,5);

$a = 3;
echo "Avant  la fonction La valeur de a est ${a} <br>";
increment($a);
echo "Apres  la fonction La valeur de a est ${a} <br>";