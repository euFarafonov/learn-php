<?php
function get_files($dir)
{
    if (is_dir($dir))
    {
        if (is_readable($dir))
        {
            $fileArr = scandir($dir);	
            $files = Array();
            $i = 0;
            
            $error_file_read = '';
            
            foreach ($fileArr as $file)
            {
                if (is_file($dir.$file))
                {
                    if (is_readable($dir.$file))
                    {
                        $files[$i]['name'] = $file;
                        $files[$i]['size'] = edit_size((int)filesize($dir.$file));
                        $i++;
                    }
                    else
                    {
                        $error_file_read .= $file;
                    }
                }
            }
            
            if ($error_file_read)
            {
                $_SESSION['msg']['error'] = ERROR_READ_FILE." ($error_file_read)";
            }
    
            return $files; 
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_READ_DIR;
            return false;
        }
    }
    else
    {
        $_SESSION['msg']['error'] = ERROR_DIR;
        return false;
    }
}

function edit_size($fileSize)
{
    if ($fileSize < 1024)
    {
        $fileSize = $fileSize.'B';
    }
    elseif ($fileSize > 1024 && $fileSize < 1024 * 1024)
    {
        $fileSize = ((int)($fileSize / 1024 )).'Kb';
    }
    else
    {
        $fileSize = ((int)($fileSize / 1024 / 1024 )).'Mb';
    }
    
    return $fileSize;
}

function upload_file($dir)
{
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmpname = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    
    if (0 === $fileError)
    {
        if (MAXSIZE <= $fileSize)
        {
            $_SESSION['msg']['error'] = ERROR_SIZE;
            return false;
        }
        else
        {
            if (is_readable($dir) && is_writable($dir))
            {
                if (copy_file($fileTmpname, $fileName, $dir))
                {
                    $_SESSION['msg']['success'] = SUCCESS_UPLOAD;
                    //echo 'OK<br>';
                    return true;
                }
                else
                {
                    $_SESSION['msg']['error'] = ERROR_FILE_COPY;
                    //echo 'ERROR<br>';
                    return false;
                }
            }
            else
            {
                $_SESSION['msg']['error'] = ERROR_READ_OR_WRITE_DIR;
                return false;
            }
        }
    }
    else
    {
        $_SESSION['msg']['error'] = ERROR_FILE_UPLOAD." (type error - $fileError)";
        return false;
    }
}

function copy_file($fileTmpname, $fileName, $dir)
{
    //echo '1<br>';
    if (is_file($dir.$fileName))
    {
        //echo '2-2<br>';
        $arr = explode('.', $fileName);
        $name = $arr[0];
        $ext = $arr[1];
        $fileName = $name.'-copy.'.$ext;
        copy_file($fileTmpname, $fileName, $dir);
    }
    else
    {
        //echo '2-1<br>';
        if (copy($fileTmpname, $dir.$fileName))
        {
            //echo '3-1<br>';
            chmod($dir.$fileName, 0777);
            //echo '4-1<br>';
            return true;
        }
        else
        {
            return false;
        }
    }
}

function delete_file($dir, $filename)
{
    if (is_readable($dir) && is_writable($dir))
    {
        if (is_writable($dir.$filename))
        {
            if(unlink($dir.$filename))
            {
                $_SESSION['msg']['success'] = SUCCESS_DELETE;
                header('Location: '.PATH);
            }
            else
            {
                $_SESSION['msg']['error'] = ERROR_DELETE;
                return false;
            }
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_WRITE_FILE;
            return false;
        }
    }
    else
    {
        $_SESSION['msg']['error'] = ERROR_READ_OR_WRITE_DIR;
        return false;
    }
}

function print_arr($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>