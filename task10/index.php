<?php
session_start();

include ('config.php');
include ('autoloader.php');

/*
* Work with Mysql
*/
$mysql = new Mysql();
$dataInsertMy = 'Data1 for INSERT - MySQL';
$dataUpdateMy = 'Data for UPDATE - MySQL';

try
{
    // mysql INSERT
    $resultInsertMy = $mysql->insert($dataInsertMy);
    // mysql SELECT
    $resultSelectMy = $mysql->select();
}
catch(baseException $e)
{
	echo $e->getMessage();
}


// mysql UPDATE

//$resultUpdateMy = $mysql->update($dataUpdateMy);

// mysql DELETE
//$resultDeleteMy = $mysql->delete();

/*
* Work with Pgsql
*/
//$pgsql = new Pgsql();

// pgsql INSERT
//$dataInsertPg = 'Data for INSERT - PgSQL';
//$resultInsertPg = $pgsql->insert($dataInsertPg);

// pgsql SELECT
//$resultSelectPg = $pgsql->select();

// pgsql UPDATE
//$dataUpdatePg = 'Data for UPDATE - PgSQL';
//$resultUpdatePg = $pgsql->update($dataUpdatePg);

// pgsql DELETE
//$resultDeletePg = $pgsql->delete();

require_once TEMPLATES.TEMPLATE;
?>