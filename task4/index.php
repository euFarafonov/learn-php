<?php
include './config.php';
include './libs/Sql.php';

$sql = new Sql();
$sql->insert('Test text from user 14.');




require_once TEMPLATES.TEMPLATE;
?>
