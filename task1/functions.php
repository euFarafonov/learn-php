<?php
function upload_file()
{
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];

    return (!$fileError && copy_file($fileTmpname, $fileName)) ? true : false;
}

function get_files($dir)
{
    if (is_dir($dir))
    {
    	$fileArr = scandir($dir);	
    	$files = Array();
    	$i = 0;
    	
        foreach ($fileArr as $file)
	{
    	    if (is_file($dir.$file))
	    {
       		$files[$i]['name'] = $file;
       		$files[$i]['size'] = edit_size((int)filesize($dir.$file));
       		$i++;
    	    }
    	}
	
	return $files; 
    }
    else
    {
	return 'error';
    }
}

function copy_file($fileTmpname, $file)
{
    $fileArr = explode('.', $file);
    $fileName = $fileArr[0];
    $fileExt = $fileArr[1];
    
    if (is_file(UPLOAD.$file))
    {
	$file = $fileName.'-copy.'.$fileExt;
	copy_file($fileTmpname, $file);
    }
    else
    {
	copy($fileTmpname, UPLOAD.$file);
	chmod(UPLOAD.$file, 0777);
    }

    return true;
}

function edit_size($fileSize)
{
    if ($fileSize < 1024)
    {
	$fileSize = $fileSize.'B';
    }
    elseif
    (
	$fileSize > 1024 && $fileSize < 1048576)
    {
	$fileSize = ((int)($fileSize / 1024 )).'Kb';
    }
    else
    {
	$fileSize = ((int)($fileSize / 1024 / 1024 )).'Mb';
    }
    
    return $fileSize;
}

function del_file($file)
{
    return (is_writable($file) && unlink($file)) ? true : false;
}

function print_arr($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>
