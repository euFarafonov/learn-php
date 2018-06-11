<?php
class Musician implements iMusician
{
    protected $name;
    protected $instrument;
    protected $musicType;
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function addInstrument(iInstrument $obj)
    {
        $this->instrument = $obj;
    }
    
    public function getInstrument()
    {
        return $this->instrument;
    }
    
    public function assingToBand(iBand $nameBand)
    {
        $nameBand->addMusician($this);
    }
    
    public function setMusicianType($musicType)
    {
        $this->musicType = $musicType;
    }
    
    public function getMusicianType()
    {
        return $this->musicType;
    }
}
?>