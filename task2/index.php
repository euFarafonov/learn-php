<?php
include './config.php';
include './libs/Calc.php';

$calc = new Calc();

$calc->setVarA(5);
$calc->setVarB(10);
$res1 = $calc->result();

$echo 'Num A = ' . $calc->A;
$echo 'Num B = ' . $calc->B;

$echo 'Mem = ' . $calc->Mem;
$echo 'A + B = ' . $calc->sum();
$echo 'A - B = ' . $calc->ded();
$echo 'A * B = ' . $calc->mult();
$echo 'A / B = ' . $calc->div();
$echo 'sqrtA = ' . $calc->sqrt($calc->A);
$echo 'sqrtB = ' . $calc->sqrt($calc->B);
$echo '1 / A = ' . $calc->divX($calc->A);
$echo '1 / B = ' . $calc->divX($calc->B);
$echo 'A percent B = ' . $calc->perc($calc->A, $calc->B);
$echo 'mem + A = ' . $calc->memAdd($calc->A);
$echo 'mem + B = ' . $calc->memAdd($calc->B);
$echo 'mem - A = ' . $calc->memDiv($calc->A);
$echo 'mem Clear = ' . $calc->memClear();
$echo 'Mem = ' . $calc->Mem();


require_once TEMPLATES.TEMPLATE;
?>
