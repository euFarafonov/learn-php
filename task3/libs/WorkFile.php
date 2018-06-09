<?php
class WorkFile
{
    protected $data;
    protected $line;
    protected $symbol;
    
    public function readLine($file, $line = false)
    {
        if ($this->checkFile($file))
        {
			if (false !== $line && $this->checkLine($line))
			{
                return $this->data[$line - 1];
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
    
    public function readSymbol($file, $line, $symbol)
    {
        if ($this->checkFile($file) && $this->checkLine($line) && $this->checkSymbol($symbol))
        {
			return $this->data[$this->line-1][$this->symbol-1];
        }
        else
        {
            return false;
        }
    }
    
    public function replaceLine($file, $line, $newStr)
    {
        if ($this->checkFile($file) && $this->checkLine($line))
        {
            $this->data[$this->line-1] = $newStr.PHP_EOL;
            
            if($this->saveFile(NEWFILE1))
            {
                return $this->readLine(NEWFILE1);
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
	
	public function replaceSymbol($file, $line, $symbol, $newSymbol)
	{
		if ($this->checkFile($file) && $this->checkLine($line) && $this->checkSymbol($symbol))
        {
            $this->data[$this->line-1][$this->symbol-1] = $newSymbol;
            
            if($this->saveFile(NEWFILE2))
            {
                return $this->readLine(NEWFILE2);
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
        if (is_writable($filename) && file_put_contents($filename, $this->data))
        {
            return true;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_WRITE_FILE;
            return false;
        }
    }
}
?>