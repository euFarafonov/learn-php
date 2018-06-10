<?php
class Calc
{
    private $a;
    private $b;
    private $mem = 0;

    public function setVarA($a)
    {
	   $this->a = (int)$a;
    }
    
    public function setVarB($b)
    {
        $this->b = (int)$b;
    }
    
    public function getVarA()
    {
        return $this->a;
    }
    
    public function getVarB()
    {
        return $this->b;
    }
    
    public function sum()
    {
	   return ($this->a + $this->b);
    }

    public function ded()
    {
	   return ($this->a - $this->b);
    }

    public function mult()
    {
	   return ($this->a * $this->b);
    }

    public function div()
    {
	   return (0 === $this->b) ? DIV_ERROR : ($this->a / $this->b);
    }

    public function sqrtVar($var)
    {
	   return sqrt($var);	
    }

    public function divX($var)
    {
	   return (0 === $var) ? DIV_ERROR : (1 / $var);
    }

    public function percent()
    {
	   return ($this->a * $this->b / 100);
    }

    public function memRead()
    {
	   return $this->mem;
    }

    public function memAdd($var)
    {
	   return $this->mem += $var;
    }

    public function memDiv($var)
    {
	   return $this->mem -= $var;
    }

    public function memClear()
    {
	   return ($this->mem = 0);
    }
}
?>