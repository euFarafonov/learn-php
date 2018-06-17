<?php
class Mysql extends Sql
{
    public function __construct()
    {
    	try
        {
            $this->pdo = new PDO(DSN_MYSQL, USER, PASS);
            $this->fpdo = new FluentSql($this->pdo);
        }
        catch (PDOException $e)
        {
            echo ERROR_CONNECT.'<br>'.$e->getMessage();
            exit;
        }
        
        $this->table = TABLE_MY;
    }
}
?>