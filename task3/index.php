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
$line1 = 4;
$line = $reader->readLine(FILE, $line1);

/*
* Print symbol from file
*/
$line2 = 2;
$position = 23;
$symbol = $reader->readSymbol(FILE, $line2, $position);

/*
* Replace line from file
*/
$str = '========== String for replace ==========';
$line3 = 4;
$newFile = $reader->replaceLine(FILE, $line3, $str);

/* Replace symbol from file
*/
/*
$symbol = '*';
$symbolNum = 1;
$strNumSym = 3;
$replaceSymbol = $reader->replaceSymbol($file, $strNumSym, $symbolNum, $symbol);
*/
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