<?php

class SessionClass implements iWorkData
{
    public function saveData($key, $val)
    {
        if ($this->checkData($key, $val))
        {
            $_SESSION[$key] = $val;
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
            if ($_SESSION[$key])
            {
                return $_SESSION[$key];
            }
            else
            {
                $_SESSION['msg']['error'] = ERROR_SESSION;
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
            unset($_SESSION[$key]);
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