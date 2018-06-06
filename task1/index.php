<?php
session_start();

include 'config.php';
include 'functions.php';

if (isset($_POST['btn']) && $_FILES['file'])
{
    if (upload_file())
    {
	$_SESSION['msg'] = UPLOAD_SUCCESS;
    }
     else
    {
	$_SESSION['msg'] = UPLOAD_ERROR;
    }
}

$files = get_files(UPLOAD);

if (isset($_GET['delete']))
{
    if(del_file(UPLOAD.$_GET['filename']))
    {
    	$_SESSION['msg'] = DELETE_SUCCESS;
    	header('Location: '.PATH);
    }
    else
    {
	$_SESSION['msg'] = DELETE_ERROR;
    }
}

require_once TEMPLATES.TEMPLATE;
?>
