<?php
class Database
{
    private $pdo;
    
    public function __construct()
    {
    	try
        {
            $this->pdo = new PDO(DSN, USER, PASS);
        }
        catch (PDOException $e)
        {
            echo ERROR_CONNECT.'<br>'.$e->getMessage();
            exit;
        }
    }
    
    public function findAll($table)
    {
        switch ($table)
        {
            case 'band':
            $query = "SELECT band.band_id, band.band_name, genre.genre_name FROM band 
            LEFT JOIN band_genre ON band.band_id = band_genre.band_id 
            LEFT JOIN genre ON band_genre.genre_id = genre.genre_id";
            break;
            
            case 'musician':
            $query = "SELECT musician.musician_id, musician.musician_name, instrument.instrument_name, musician_band.band_id, musictype_name FROM musician 
            LEFT JOIN musician_instrument ON musician.musician_id = musician_instrument.musician_id 
            LEFT JOIN instrument ON instrument.instrument_id = musician_instrument.instrument_id
            LEFT JOIN musician_band ON musician_band.musician_id = musician.musician_id
            LEFT JOIN musician_musictype ON musician.musician_id = musician_musictype.musician_id
            LEFT JOIN musictype ON musician_musictype.musictype_id = musictype.musictype_id";
            break;
            
            case 'instrument':
            $query = "SELECT instrument.instrument_id, instrument.instrument_name, category.category_name, musician_instrument.musician_id FROM instrument 
            LEFT JOIN instrument_category ON instrument.instrument_id = instrument_category.instrument_id 
            LEFT JOIN category ON category.category_id = instrument_category.category_id
            LEFT JOIN musician_instrument ON musician_instrument.instrument_id = instrument.instrument_id";
            break;
        }
        
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>