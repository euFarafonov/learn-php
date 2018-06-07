<?php

class SessionClass implements iWorkData
{
    public function saveData($key, $val)
    {
	$_SESSION[$key] = $val;
    }

    public function getData($key)
    {
	return ($_SESSION[$key]) ? $_SESSION[$key]  : ERROR_SESSION ;
    }
    
    public function deleteData($key)
    {
	unset($_SESSION[$key]);
    }
}
?>
