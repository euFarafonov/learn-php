<?php
include './config.php';
include './libs/Calc.php';

$calc = new Calc();

/*
* First data
*/
$calc->setVarA(5);
$calc->setVarB(10);
$a = $calc->getVarA();
$b = $calc->getVarB();

$sum = $calc->sum();
$ded = $calc->ded();
$mult = $calc->mult();
$div = $calc->div();

$sqrtA = $calc->sqrtVar($calc->getVarA());
$sqrtB = $calc->sqrtVar($calc->getVarB());
$divXA = $calc->divX($calc->getVarA());
$divXB = $calc->divX($calc->getVarB());
$percentAB = $calc->percent($calc->getVarA(), $calc->getVarB());
$percentBA = $calc->percent($calc->getVarB(), $calc->getVarA());

$memRead1 = $calc->memRead();
$memAddA = $calc->memAdd($calc->getVarA());
$memAddB = $calc->memAdd($calc->getVarB());
$memDivA = $calc->memDiv($calc->getVarA());
$memRead2 = $calc->memRead();
$memClear = $calc->memClear();
$memRead3 = $calc->memRead();

/*
* Second data
*/
$calc->setVarA(27);
$calc->setVarB(0);
$a2 = $calc->getVarA();
$b2 = $calc->getVarB();

$sum2 = $calc->sum();
$ded2 = $calc->ded();
$mult2 = $calc->mult();
$div2 = $calc->div();

$sqrtA2 = $calc->sqrtVar($calc->getVarA());
$sqrtB2 = $calc->sqrtVar($calc->getVarB());
$divXA2 = $calc->divX($calc->getVarA());
$divXB2 = $calc->divX($calc->getVarB());
$percentAB2 = $calc->percent($calc->getVarA(), $calc->getVarB());
$percentBA2 = $calc->percent($calc->getVarB(), $calc->getVarA());

$memRead12 = $calc->memRead();
$memAddA2 = $calc->memAdd($calc->getVarA());
$memAddB2 = $calc->memAdd($calc->getVarB());
$memDivA2 = $calc->memDiv($calc->getVarA());
$memRead22 = $calc->memRead();
$memClear2 = $calc->memClear();
$memRead32 = $calc->memRead();

require_once TEMPLATES.TEMPLATE;
?>