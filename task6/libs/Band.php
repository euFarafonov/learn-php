<?php
class Band implements iBand
{
    protected $name;
    protected $genre;
    protected $musicians = array();
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    
    public function getGenre()
    {
        return $this->genre;
    }
    
    public function addMusician(iMusician $obj)
    {
        array_push($this->musicians, $obj);
    }
    
    public function getMusician()
    {
        return $this->musicians;
    }
}
?>