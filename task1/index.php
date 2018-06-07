<?php
session_start();

include 'config.php';
include 'functions.php';

if ($_POST['btn'] && $_FILES['file']['name'])
{
    upload_file(UPLOAD);
}

if (isset($_GET['delete']))
{
    delete_file(UPLOAD, $_GET['filename']);
}

$files = get_files(UPLOAD);

require_once TEMPLATES.TEMPLATE;
?>