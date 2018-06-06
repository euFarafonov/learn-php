<?php
class Sql
{
    protected $pdo;
    
    public function __construct() {
	$dsn = "mysql:host=".HOST.";dbname=".DB.";charset=utf8";
	$this->pdo = new PDO($dsn, USER, PASS);
    }
    
    protected function getTable()
    {
	return TABLE_MY;
    }

    protected function getUser()
    {
	return USERID;
    }
    
    public function insert($text)
    {
	$sql = "INSERT INTO ".$this->getTable()." (userid, userdata)
	VALUES (".$this->getUser." , :text)";
	$stmt = $this->pdo->prepare($sql);
	$stmt->execute(array('text' => $text));
    }


    
}
?>
