<?php
session_start();

include './config.php';
include './libs/iWorkData.php';
include './libs/SessionClass.php';
include './libs/CookieClass.php';

$key = 'name';
$val = 'Vasya';

/*
8 Work with Session
*/
$ses = new SessionClass();

$sesNameBefore = $ses->getData($val);

$ses->saveData($key, $val);
$sesName = $ses->getData($key);
$ses->deleteData($val);

$sesNameAfter = $ses->getData($val);

/*
* Work with Cookie
*/

$coo = new CookieClass();

$cooNameBefore = $coo->getData($val);

$coo->saveData($key, $val);
$cooName = $coo->getData($key);
$coo->deleteData($val);

$cooNameAfter = $coo->getData($val);























require_once TEMPLATES.TEMPLATE;
?>
