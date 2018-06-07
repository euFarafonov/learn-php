<?php
class Sql
{
    private $db;
    
    public function __construct() {
    	$dsn = "mysql:host=".HOST.";dbname=".DB.";charset=utf8";
    	$this->db = new PDO($dsn, USER, PASS);
    }
    /*
    public function getTable()
    {
        return TABLE_MY;
    }

    public function getUser()
    {
        return USERID;
    }
    */
    
    public function insert($sql)
    {
    	$stmt = $this->db->prepare($sql);
	
	
    	$stmt->execute(array(':user' => 'user14'));
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return $result;
    }
    
    public function select($sql)
    {
        $stmt = $this->db->prepare($sql);
        
        //$stmt->bindParam(':table', 'MY_TEST');
        //$stmt->bindParam(':user', 'user9');
        $stmt->execute(array(':user' => 'user14'));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //$result = $stmt->FETCH(PDO::FETCH_ASSOC);
        
    	/*
        while ($row = $stmt->fetch())
        {
            $res[] = $row;
        }*/
        return $result;
    }
}







/*
$db = new PDO("pgsql:host=$host;dbname=$db", $user, $password);

*/
?>
