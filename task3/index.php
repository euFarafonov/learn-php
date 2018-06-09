<?php
include './config.php';
include './libs/WorkFile.php';

$reader = new WorkFile();

/*
* Print base file
*/
$text = $reader->readLine(FILE);

/*
* Print line from file
*/
$numLine1 = 4;
$line = $reader->readLine(FILE, $numLine1);

/*
* Print symbol from file
*/
$numLine2 = 3;
$posSymbol1 = 5;
$symbol = $reader->readSymbol(FILE, $numLine2, $posSymbol1);

/*
* Replace line in file
*/
$newStr = '========== String for replace ==========';
$numLine3 = 4;
$fileNewLine = $reader->replaceLine(FILE, $numLine3, $newStr);

/*
* Replace symbol in line from file
*/
$newSymbol = '*';
$numLine4 = 3;
$numSymbol = 4;
$fileNewSymbol = $reader->replaceSymbol(FILE, $numLine4, $numSymbol, $newSymbol);

require_once TEMPLATES.TEMPLATE;

/*
Сделать класс:
а) Сделать класс чтения файла, чтобы были метод построчного доступа к данным
и метод посимвольного доступа к данным, распечатать все это вне класса.

б) Добавить метод в этот класс который сможет заменять всю строку,
и метод заменяющий любой символ в строке, метод сохраняющий изменения. 
Распечатать новое содержимое способом а)
*/
?>