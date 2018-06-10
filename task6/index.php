<?php
session_start();

include './config.php';
include './libs/Database.php';
include './libs/iBand.php';
include './libs/iMusician.php';
include './libs/iInstrument.php';
include './libs/Band.php';


$band = new Band();
$bands = $band->showBand();

//$bands = new Musician();
//$bands = new Instrument();

require_once TEMPLATES.TEMPLATE;
?>