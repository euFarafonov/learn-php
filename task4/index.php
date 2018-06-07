<?php
include './config.php';
include './libs/Sql.php';

$sql = new Sql();

// mysql INSERT
$txt = "Data fot paste into table.";
$query_mysql_insert = "INSERT INTO MY_TEST (userid, userdata) 
VALUES (:user, $txt)";
$result_mysql_insert = $sql->insert($query_mysql_insert);

// mysql SELECT
//$query_mysql_select = "SELECT userdata FROM MY_TEST WHERE userid = :user";
//$result_mysql_select = $sql->select($query_mysql_select);

require_once TEMPLATES.TEMPLATE;
?>
