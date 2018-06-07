<?php
session_start();

include 'config.php';
include 'functions.php';

if ($_POST['btn'] && $_FILES['file']['name'])
{
    uploadFile(UPLOAD);
}

if (isset($_GET['delete']))
{
    deleteFile(UPLOAD, $_GET['filename']);
}

$files = getFiles(UPLOAD);

require_once TEMPLATES.TEMPLATE;
?>
