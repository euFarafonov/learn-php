<?php
include './config.php';
include './libs/Sql.php';

$sql = new Sql();

// mysql SELECT
//$query_mysql_select = "SELECT userdata FROM :table WHERE userid = :".USER_ID;
//$result_mysql_select = $sql->select($query_mysql_select, TABLE_MY);
$query_mysql_select = "SELECT userdata FROM :table WHERE userid = :user";
$result_mysql_select = $sql->select($query_mysql_select);

require_once TEMPLATES.TEMPLATE;
?>