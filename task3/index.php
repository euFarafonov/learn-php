<?php
include './config.php';
include './libs/WorkFile.php';

$reader = new WorkFile();

/*
* Print base file
*/
$text = $reader->readFile(FILE);

/*
* Print line from file
*/
$numLine1 = 4;
$line = $reader->readFile(FILE, $numLine1);

/*
* Print symbol from file
*/
$numLine2 = 3;
$posSymbol1 = 5;
$symbol = $reader->readFile(FILE, $numLine2, $posSymbol1);

/*
* Replace line in file
*/
$newStr = '========== String for replace ==========';
$numLine3 = 4;
$fileNewLine = $reader->replaceFile(FILE, $numLine3, $newStr);

/*
* Replace symbol in line from file
*/
$newSymbol = '*';
$numLine4 = 3;
$numSymbol = 4;
$fileNewSymbol = $reader->replaceFile(FILE, $numLine4, $newSymbol, $numSymbol);

require_once TEMPLATES.TEMPLATE;
?>