<?php
class Sql
{
    protected $pdo;
    protected $param;
    protected $table;
    
    public function getTable()
    {
        return $this->table;
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
    
    public function insert($data = false)
    {      
        if ($data)
        {
            $param = array('user' => USER_ID, 'data' => $data);
            $this->setParam($param);
            $query = "INSERT INTO ".$this->getTable()." (userid, userdata) VALUES (:user, :data)";
            return $this->execute($query);
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_DATA;
            return false;
        }
    }
    
    public function select()
    {
        $param = array('user' => USER_ID);
        $this->setParam($param);
        $query = "SELECT userdata FROM ".$this->getTable()." WHERE userid = :user LIMIT 1";
        return $this->query($query);
    }
    
    public function update($data = false)
    {
        if ($data)
        {
            $param = array('user' => USER_ID, 'data' => $data);
            $this->setParam($param);
            $query = "UPDATE ".$this->getTable()." SET userdata = :data WHERE userid = :user LIMIT 1";
            return $this->execute($query);
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_DATA;
            return false;
        }
    }
    
    public function delete()
    {
        $param = array('user' => USER_ID);
        $this->setParam($param);
        $query = "DELETE FROM ".$this->getTable()." WHERE userid = :user LIMIT 1";
        return $this->execute($query);
    }
}
?>