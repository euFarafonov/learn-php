<?php
include './config.php';
include './libs/WorkFile.php';

$file = 'file.txt';

$reader = new WorkFile();

$readLine = $reader->readLine($file);
$readSymbol = $reader->readSymbol($file);

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