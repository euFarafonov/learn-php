<?php
// PATH
define('PATH', './');
// TITLE
define('TITLE', 'Interface');
// templates dir
define('TEMPLATES', PATH.'templates/');
// active template
define('TEMPLATE', 'index.php');

// FOR DB
define('DB', 'user1');
define('HOST', 'localhost');
define('USER', 'user1');
define('PASS', 'user1');
define('DSN', 'mysql:host='.HOST.';dbname='.DB.';charset=utf8');
define('USER_ID', 'user14');
// ERRORS
define('ERROR_CONNECT', 'Can not connect to DB');
define('ERROR_QUERY', 'Can not run query method.');
define('ERROR_EXECUTE', 'Can not run execute method.');
// ERROR FOR SESSION, COOKIE, MYSQL
define('ERROR_PARAM', 'Error. You must check parametres.');
define('ERROR_SESSION', 'Element not found in SESSION.');
define('ERROR_COOKIE', 'Element not found in COOKIE.');
define('ERROR_MYSQL', 'Element not found in MYSQL.');
?>