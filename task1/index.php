<?php
include 'config.php';
include 'functions.php';

if (isset($_POST['btn']) && $_FILES['file']) {
    if (uploadFile()) {
	$_SESSION['msg'] = UPLOAD_SUCCESS;
    } else {
	$_SESSION['msg'] = UPLOAD_ERROR;
    }
}

$files = getFiles();

if (isset($_GET['delete'])) {
    if(delFile(UPLOAD.$_GET['filename'])) {
	$_SESSION['msg'] = DELETE_SUCCESS;
	header('Location: '.PATH);
    } else {
	$_SESSION['msg'] = DELETE_ERROR;
    }
}

require_once TEMPLATES.TEMPLATE;
?>
