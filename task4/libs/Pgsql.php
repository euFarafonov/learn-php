<?php
class Pgsql extends Sql
{
    public function __construct()
    {
    	try
        {
            $this->pdo = new PDO(DSN_PGSQL, USER, PASS);
        }
        catch (PDOException $e)
        {
            echo ERROR_CONNECT.'<br>'.$e->getMessage();
            exit;
        }
        
        $this->table = TABLE_PG;
    }
}
?>