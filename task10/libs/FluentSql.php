<?php
class FluentSql
{
    private $pdo;
    private $query;
    private $fieldsArr;
    private $valuesArr;
    private $question;
    
    public function __construct($pdo){
        $this->pdo = $pdo;
        $this->query = '';
        $this->fieldsArr = array();
        $this->valuesArr = array();
        $this->question = array();
    }
    
    public function insertInto($table, $param)
    {
        $this->insert($table)->setValues($param);
        $stmt = $this->pdo->prepare($this->query);
        
        foreach ($this->valuesArr as $key => $val)
        {
            $stmt->bindValue(++$key, $val);
        }
        return $stmt;
    }
    
    public function insert($table)
    {
        $this->query .= "INSERT INTO $table ";
        return $this;
    }
    
    public function setValues($param)
    {
        foreach ($param as $key => $val)
        {
            array_push($this->fieldsArr, $key);
            array_push($this->valuesArr, $val);
            array_push($this->question, '?');
        }
        //var_dump($this->fieldsArr);
        //var_dump($this->valuesArr);
        
        $this->query .= "(" . implode(", ", $this->fieldsArr) . ") VALUES (" . implode(", ", $this->question) . ")";
        return $this;
    }
    
    public function selectFrom($fieldsArr, $table, $whereArr)
    {
        $this->select($fieldsArr)->from($table)->where($whereArr);
        $stmt = $this->pdo->prepare($this->query);
        
        foreach ($this->valuesArr as $key => $val)
        {
            $stmt->bindValue(++$key, $val);
        }
        return $stmt;
    }
    
    public function select($fieldsArr)
    {
        $fields = (0 < count($fieldsArr)) ? implode(", ", $fieldsArr) : '* ';
        
        $this->query .= "SELECT $fields";
        return $this;
    }
    
    public function from($table)
    {
        $this->query .= "FROM $table ";
        return $this;
    }
    
    public function where($whereArr)
    {
        $where = '';
        
        if(0 < count($whereArr))
        {
            foreach ($whereArr as $key => $val)
            {
                $where .= $key . ' = ' . $val . ', ';
            }
            $where = substr($where, 0, -2);
        }
        
        $this->query .= "WHERE $where ";
        return $this;
    }
}
?>