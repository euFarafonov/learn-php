<?php
// PATH
define('PATH', './');
// TITLE
define('TITLE', 'Music');
// templates dir
define('TEMPLATES', PATH.'templates/');
// active template
define('TEMPLATE', 'index.php');

// FOR DB
define('DB', 'music');
define('HOST', 'localhost');
define('USER', 'user14');
define('PASS', 'user14');
define('DSN', 'mysql:host='.HOST.';dbname='.DB.';charset=utf8');
// ERRORS
define('ERROR_CONNECT', 'Can not connect to DB');
?>