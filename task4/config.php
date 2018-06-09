<?php
// PATH
define('PATH', './');
// TITLE
define('TITLE', 'Inheritance');
// templates dir
define('TEMPLATES', PATH.'templates/');
// active template
define('TEMPLATE', 'index.php');

// FOR DB
define('DB', 'user1');
define('HOST', 'localhost');
define('USER', 'user1');
define('PASS', 'user1');
define('DSN_MYSQL', 'mysql:host='.HOST.';dbname='.DB.';charset=utf8');
define('DSN_PGSQL', 'pgsql:host='.HOST.';dbname='.DB.';charset=utf8');
define('TABLE_MY', 'MY_TEST');
define('TABLE_PG', 'PG_TEST');
define('USER_ID', 'user14');
// ERRORS
define('ERROR_CONNECT', 'Can not connect to DB');
define('ERROR_QUERY', 'Can not run query method.');
define('ERROR_EXECUTE', 'Can not run execute method.');
define('ERROR_DATA', 'There is no data.');
?>