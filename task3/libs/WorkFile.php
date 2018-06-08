<?php
class WorkFile
{
    public function readLine($file, $line = false)
    {
        if ($data = $this->checkFile($file))
        {
			if (false !== $line)
			{
				$line = (int)$line;
				if ($line > 0 && $line <= count($data))
				{
					return $data[$line - 1];
				}
				else
				{
					$_SESSION['msg']['error'] = ERROR_LINE;
					return false;
				}
			}
			else
			{
				return $data;
			}
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
            return false;
        }
    }
    
    public function readSymbol($file, $line, $position)
    {
        if ($data = $this->checkFile($file))
        {
            $line = (int)$line;
			if ($line > 0 && $line <= count($data))
			{
				if($position > 0 && $position <= strlen($data[$line-1]))
				{
					return $data[$line-1][$position-1];
				}
				else
				{
					$_SESSION['msg']['error'] = ERROR_SYMBOL;
					return false;
				}
			}
			else
			{
				$_SESSION['msg']['error'] = ERROR_LINE;
				return false;
			}
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
            return false;
        }
    }
    
    public function replaceLine($file, $line, $str)
    {
        if ($data = $this->checkFile($file))
        {
            $line = (int)$line;
			if ($line > 0 && $line <= count($data))
			{
				$data[$line-1] = $str;
				copy($file, NEWFILE);
				//$newFile = $this->copyFile($file);
				//file_put_contents($newFile, $data);
				return true;
				//return $this->readLine($file);
			}
			else
			{
				$_SESSION['msg']['error'] = ERROR_LINE;
				return false;
			}
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
            return false;
        }
    }
	/*
	public function replaceSymbol($file, $strNumSym, $symbolNum, $symbol)
	{
		if ($data = $this->checkFile($file))
        {
            if ((int)$strNumSym <= count($data))
            {
                if ((int)$symbolNum <= strlen($data[$strNumSym-1]))
				{
					if (is_writable($file))
					{
						$data[$strNumSym-1][$symbolNum] = $symbol;
						file_put_contents($file, $data);
					
						return $this->readLine($file);
					}
					else
					{
						$_SESSION['msg']['error'] = ERROR_WRITE_SYMBOL;
						return false;
					}
				}
				else
				{
					$_SESSION['msg']['error'] = ERROR_LINE_SMALL;
					return false;
				}
            }
            else
            {
                $_SESSION['msg']['error'] = ERROR_FILE_SMALL;
                return false;
            }
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
            return false;
        }
	}
    */
	/*
	function copyFile($file)
	{
		if (is_file($file))
		{	
			$arr = explode('.', $file);
			$name = $arr[0];
			$ext = $arr[1];
			$newfile = $name.'-copy.'.$ext;
			
			if (is_file($newfile))
			{
				$this->copyFile($newfile);
				return true;
			}
			else
			{
				if (copy($file, $newFile))
				{
					chmod($newFile, 0777);
					return $newFile;
				}
				else
				{
					$_SESSION['msg']['error'] = ERROR_COPY_FILE;
					return false;
				}
			}
			
		}
		else
		{
			$_SESSION['msg']['error'] = ERROR_FILE;
			return false;
		}
		return true;
	}
	*/
    protected function checkFile($file)
    {
        if (file_exists($file) && is_file($file))
        {
            if (is_readable($file))
            {
                $data = file($file);
                return $data;
            }
            else
            {
                $_SESSION['msg']['error'] = ERROR_READ;
                return false;
            }
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
            return false;
        }
    }
}
?>