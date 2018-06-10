<?php
session_start();

include './config.php';
include './libs/iWorkData.php';
include './libs/SessionClass.php';
include './libs/CookieClass.php';
include './libs/MysqlClass.php';

$key = 'name';
$val = 'Vasya';

/*
* Work with Session
*/
$ses = new SessionClass();

$ses->saveData($key, $val);
$sesName = $ses->getData($key);
$ses->deleteData($key);

/*
* Work with Cookie
*/
$coo = new CookieClass();

$coo->saveData($key, $val);
$cooName = $coo->getData($key);
$coo->deleteData($key);

/*
* Work with Mysql
*/
$mysql = new MysqlClass();

$selectMysqlBefore = $mysql->getData($key);

$saveMysql = $mysql->saveData($key, $val);
$selectMysql = $mysql->getData($key);
$deleteMysql = $mysql->deleteData($key);

$selectMysqlAfter = $mysql->getData($key);

require_once TEMPLATES.TEMPLATE;
?>