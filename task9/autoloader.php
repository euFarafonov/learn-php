<?php
function my_autoloader($class) {
    include 'libs/' . $class . '.php';
}

spl_autoload_register('my_autoloader');
?>