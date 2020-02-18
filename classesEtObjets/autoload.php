<?php

function loadClass($nomClass) {
    include $nomClass.'.php';
}

spl_autoload_register('loadClass');