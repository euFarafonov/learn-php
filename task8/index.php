<?php
include ('config.php');
include ('autoloader.php');

try
{
	$obj = new Controller();
}
catch(baseException $e)
{
	echo $e->getMessage();
}
?>