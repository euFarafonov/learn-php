<?php
include './config.php';
include './libs/Calc.php';

$calc = new Calc();

$calc->setVarA(5);
$calc->setVarB(10);
$res1 = $calc->result();

$calc->setVarA(27);
$calc->setVarB(0);
$res2 = $calc->result();












require_once TEMPLATES.TEMPLATE;
?>
