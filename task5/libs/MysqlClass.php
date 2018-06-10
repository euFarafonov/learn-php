<?php

class MysqlClass implements iWorkData
{
    protected $pdo;
    protected $param;
    
    public function __construct()
    {
    	try
        {
            $this->pdo = new PDO(DSN, USER, PASS);
        }
        catch (PDOException $e)
        {
            echo ERROR_CONNECT.'<br>'.$e->getMessage();
            exit;
        }
    }
    
    public function setParam($param)
    {
        $this->param = $param;
    }
    
    public function getParam()
    {
        return $this->param;
    }
    
    public function execute($query)
    {
    	$stmt = $this->pdo->prepare($query);
    	$result = $stmt->execute($this->getParam());
        
        if ($result)
        {
            return $result;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_EXECUTE;
            return false;
        }
    }
    
    public function query($query)
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($this->getParam());
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($result)
        {
            return $result;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_QUERY;
            return false;
        }
    }
    
    public function saveData($key, $val)
    {
        if ($this->checkData($key, $val))
        {
            $param = array('user' => $key, 'data' => $val);
            $this->setParam($param);
            $query = "INSERT INTO MY_TEST (userid, userdata) VALUES (:user, :data)";
            
            return $this->execute($query);
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
            $param = array('user' => $key);
            $this->setParam($param);
            $query = "SELECT userdata FROM MY_TEST WHERE userid = :user LIMIT 1";
            return $this->query($query);
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
            $param = array('user' => $key);
            $this->setParam($param);
            $query = "DELETE FROM MY_TEST WHERE userid = :user LIMIT 1";
            return $this->execute($query);
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