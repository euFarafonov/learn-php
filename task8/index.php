<?php
include 'config.php';
include 'autoloader.php';
include 'libs/simple_html_dom.php';

try
{
	$obj = new Controller();
}
catch(baseException $e)
{
	echo $e->getMessage();
}
?>