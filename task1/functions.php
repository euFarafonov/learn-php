<?php
function uploadFile() {
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];

    return (!$fileError && copyFile($fileTmpname, $fileName)) ? true : false;
}

function getFiles() {
    if (is_dir(UPLOAD)) {
    	$fileArr = scandir(UPLOAD);	
    	$files = Array();
    	$i = 0;
    	
        foreach ($fileArr as $file) {
    	    if (is_file(UPLOAD.$file)) {
        		$files[$i]['name'] = $file;
        		$files[$i]['size'] = editFileSize((int)filesize(UPLOAD.$file));
        		$i++;
    	    }
    	}
    }
    
    return $files; 
}

function copyFile($fileTmpname, $file) {
    $fileArr = explode('.', $file);
    $fileName = $fileArr[0];
    $fileExt = $fileArr[1];
    
    if (is_file(UPLOAD.$file)) {
	$file = $fileName.'-copy.'.$fileExt;
	copyFile($fileTmpname, $file);
    } else {
	copy($fileTmpname, UPLOAD.$file);
	chmod(UPLOAD.$file, 0777);
    }
    return true;
}

function editFileSize($fileSize) {
    if ($fileSize < 1024) {
	   $fileSize = $fileSize.'B';
    } elseif ($fileSize > 1024 && $fileSize < 1048576) {
	   $fileSize = ((int)($fileSize / 1024 )).'Kb';
    } else {
	   $fileSize = ((int)($fileSize / 1024 / 1024 )).'Mb';
    }
    
    return $fileSize;
}

function delFile($file) {
    return (is_writable($file) && unlink($file)) ? true : false;
}

function print_arr($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>