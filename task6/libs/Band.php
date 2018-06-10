<?php
class Band implements iBand
{
    protected $db;
    public $bands;
    
    public $musicians = Array();
    
    public function __construct()
    {
    	$this->db = new Database();
    }
    
    public function showBand()
    {
        $query = "SELECT * FROM band
            LEFT JOIN band_genre ON band.band_id = band_genre.band_id
            LEFT JOIN genre ON band_genre.genre_id = genre.genre_id";
        $this->bands = $this->db->findAll($query);
        
        return $this->bands;
    }
    
    public function getName()
    {
        //return $this->
    }
    public function getGenre()
    {
        
    }
    public function addMusician(iMusician $obj)
    {
        
    }
    public function getMusician()
    {
        
    }
}
?>