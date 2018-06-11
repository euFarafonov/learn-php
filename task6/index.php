<?php
session_start();

include './config.php';
include './libs/Database.php';
include './libs/iBand.php';
include './libs/iMusician.php';
include './libs/iInstrument.php';
include './libs/Band.php';
include './libs/Musician.php';
include './libs/Instrument.php';

$db = new Database();

// data from DB
$bands = $db->findAll('band');
$musicians = $db->findAll('musician');
$instruments = $db->findAll('instrument');

// construct objects
$result = array();

foreach ($bands as $item)
{
    $band = new Band();
    $band->setName($item['band_name']);
    $band->setGenre($item['genre_name']);
    
    foreach ($musicians as $musicant)
    {
        if ($musicant['band_id'] === $item['band_id'])
        {
            $music = new Musician();
            $music->setName($musicant['musician_name']);
            $music->assingToBand($band);
            $music->setMusicianType($musicant['musictype_name']);
            
            foreach ($instruments as $instrument)
            {
                if ($instrument['musician_id'] === $musicant['musician_id'])
                {
                    $instr = new Instrument();
                    $instr->setName($instrument['instrument_name']);
                    $instr->setCategory($instrument['category_name']);
                    $music->addInstrument($instr);
                }
            }
        }
    }
    
    array_push($result, $band);
}

require_once TEMPLATES.TEMPLATE;
?>