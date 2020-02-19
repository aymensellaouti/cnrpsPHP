<?php

function loadClass($nomClass) {
    $file = $nomClass.'.php';
    if( file_exists($file)) {
        include $file;
    } else {
        $file = 'ExempleBD/'.$file;
        if (file_exists($file)) {
            include $file;
        }
    }

}

spl_autoload_register('loadClass');