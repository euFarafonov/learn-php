<?php
include './config.php';
include './libs/Calc.php';

$calc = new Calc();

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

$calc2 = new Calc();

$calc2->setVarA(27);
$calc2->setVarB(0);

$a2 = $calc2->getVarA();
$b2 = $calc2->getVarB();

$sum2 = $calc2->sum();
$ded2 = $calc2->ded();
$mult2 = $calc2->mult();
$div2 = $calc2->div();

$sqrtA2 = $calc2->sqrtVar($calc2->getVarA());
$sqrtB2 = $calc2->sqrtVar($calc2->getVarB());
$divXA2 = $calc2->divX($calc2->getVarA());
$divXB2 = $calc2->divX($calc2->getVarB());

$percentAB2 = $calc2->percent($calc2->getVarA(), $calc2->getVarB());
$percentBA2 = $calc2->percent($calc2->getVarB(), $calc2->getVarA());

$memRead12 = $calc2->memRead();
$memAddA2 = $calc2->memAdd($calc2->getVarA());
$memAddB2 = $calc2->memAdd($calc2->getVarB());
$memDivA2 = $calc2->memDiv($calc2->getVarA());
$memRead22 = $calc2->memRead();
$memClear2 = $calc2->memClear();
$memRead32 = $calc2->memRead();

require_once TEMPLATES.TEMPLATE;
?>