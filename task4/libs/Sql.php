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
    /*
    public function insert($text)
    {
    	$sql = "INSERT INTO ".$this->getTable()." (userid, userdata)
    	VALUES (".$this->getUser." , :text)";
    	$stmt = $this->pdo->prepare($sql);
    	$stmt->execute(array('text' => $text));
    }
    */
    public function select($sql)
    {
        $stmt = $this->db->prepare($sql);
        
        //$stmt->bindParam('table', 'MY_TEST');
        //$stmt->bindParam('user', 'user14');
        $stmt->execute(array('table' => 'MY_TEST', 'user', 'user14'));
        $result = $stmt->execute();
        
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