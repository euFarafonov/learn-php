<?php
class WorkFile
{
    public $content;
    
    public function readLine($file)
    {
        if ($data = $this->checkFile($file))
        {
            $this->content = '';
            
            foreach($data as $line)
            {
                $this->content .= $line . '<br>';
            }
            
            return $this->content;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
            return false;
        }
    }
    
    public function readSymbol($file)
    {
        if ($data = $this->checkFile($file))
        {
            $this->content = '';
            
            foreach($data as $line)
            {
                $len = strlen($line);
                
                for ($i = 0; $i < $len; $i++)
                {
                    $this->content .= $line[$i];
                }
                
                $this->content .= '<br>';
            }
            
            return $this->content;
        }
        else
        {
            $_SESSION['msg']['error'] = ERROR_FILE;
            return false;
        }
    }
    
    public function replaceLine($file, $strNum, $str)
    {
        if ($data = $this->checkFile($file))
        {
            if ((int)$strNum <= count($data))
            {
                $data[$strNum-1] = $str.PHP_EOL;
                file_put_contents($file, $data);
                
                return $this->readLine($file);
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