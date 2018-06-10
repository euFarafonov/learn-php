<?php

class CookieClass implements iWorkData
{
    public function saveData($key, $val)
    {
        if ($this->checkData($key, $val))
        {
            setcookie ($key, $val, time()+3600);
            $_COOKIE[$key] = $val; /* duplicate cookie in local */
            return true;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_PARAM;
            return false;
        }
    }
    
    public function getData($key)
    {
        if ($this->checkData($key))
        {
            if ($_COOKIE[$key])
            {
                return $_COOKIE[$key];
            }
            else
            {
                $_SESSION['msg']['error'] = ERROR_COOKIE;
                return false;
            }
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_PARAM;
            return false;
        }
    }
    
    public function deleteData($key)
    {
        if ($this->checkData($key))
        {
            setcookie ($key, "", time()-1);
            return true;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_PARAM;
            return false;
        }
    }
    
    protected function checkData($key, $val = false)
    {
        return (isset($key)) ? true : false;
    }
}
?>