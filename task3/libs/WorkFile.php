<?php
class WorkFile
{
    protected $data;
    protected $line;
    protected $symbol;
    
    public function readFile($file, $line = false, $symbol = false)
    {
        if ($this->checkFile($file))
        {
			if (false !== $line && $this->checkLine($line))
			{
                if (false !== $symbol && $this->checkSymbol($symbol))
                {
                    return $this->data[$this->line-1][$this->symbol-1];
                }
                else
                {
                    return $this->data[$line - 1];
                }
			}
			else
			{
				return $this->data;
			}
        }
        else
        {
            return false;
        }
    }
    
    public function replaceFile($file, $line, $newElement, $symbol = false)
    {
        if ($this->checkFile($file) && $this->checkLine($line))
        {
            if (false !== $symbol && $this->checkSymbol($symbol))
            {
                $this->data[$this->line-1][$this->symbol-1] = $newElement;
                $newfile = NEWFILE2;
            }
            else
            {
                $this->data[$this->line-1] = $newElement.PHP_EOL;
                $newfile = NEWFILE1;
            }
            
            if($this->saveFile($newfile))
            {
                return $this->readFile($newfile);
            }
            else
            {
                $_SESSION['msg']['error'] = ERROR_SAVE;
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    protected function checkFile($file)
    {
        if (!is_dir(DIR))
        {
            $_SESSION['msg']['error'] = ERROR_DIR;
        }
        elseif (!is_readable(DIR))
        {
            $_SESSION['msg']['error'] = ERROR_READ_DIR;
        }
        elseif (!file_exists($file) && !is_file($file))
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
        }
        elseif (!is_readable($file))
        {
            $_SESSION['msg']['error'] = ERROR_READ_FILE;
        }
        else
        {
            $this->data = file($file);
            return true;
        }
        return false;
    }
    
    protected function checkLine($line)
    {
        $line = (int)$line;
        if ($line > 0 && $line <= count($this->data))
        {
            $this->line = $line;
            return true;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_LINE;
            return false;
        }
    }
    
    protected function checkSymbol($symbol)
    {
        $symbol = (int)$symbol;
        if ($symbol > 0 && $symbol <= strlen($this->data[$this->line-1]))
        {
            $this->symbol = $symbol;
            return true;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_SYMBOL;
            return false;
        }
    }
    
    protected function saveFile($filename)
    {
        if (file_exists($filename))
		{
			if (is_writable($filename)&& file_put_contents($filename, $this->data))
			{
				return true;
			}
			else
			{
				$_SESSION['msg']['error'] = ERROR_WRITE_FILE;
				return false;
			}
		}
		else
		{
			fopen($filename, 'w');
		}
    }
}
?>