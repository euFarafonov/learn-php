<?php

class CookieClass implements iWorkData
{
    public function saveData($key, $val)
    {
	setcookie ($key, $val, time()+3600);
    }

    public function getData($key)
    {
	return ($_COOKIE[$key]) ? $_COOKIE[$key] : ERROR_COOKIE;
    }
    
    public function deleteData($key)
    {
	setcookie ($key, "", time()-1);
    }
}
?>
