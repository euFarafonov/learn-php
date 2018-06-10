<?php
session_start();

include './config.php';
include './libs/Sql.php';
include './libs/Mysql.php';
include './libs/Pgsql.php';

/*
* Work with Mysql
*/
$mysql = new Mysql();

// mysql INSERT
$dataInsertMy = 'Data for INSERT - MySQL';
$resultInsertMy = $mysql->insert($dataInsertMy);

// mysql SELECT
$resultSelectMy = $mysql->select();

// mysql UPDATE
$dataUpdateMy = 'Data for UPDATE - MySQL';
$resultUpdateMy = $mysql->update($dataUpdateMy);

// mysql DELETE
$resultDeleteMy = $mysql->delete();

/*
* Work with Pgsql
*/
$pgsql = new Pgsql();

// pgsql INSERT
$dataInsertPg = 'Data for INSERT - PgSQL';
$resultInsertPg = $pgsql->insert($dataInsertPg);

// pgsql SELECT
$resultSelectPg = $pgsql->select();

// pgsql UPDATE
$dataUpdatePg = 'Data for UPDATE - PgSQL';
$resultUpdatePg = $pgsql->update($dataUpdatePg);

// pgsql DELETE
$resultDeletePg = $pgsql->delete();

require_once TEMPLATES.TEMPLATE;
?>