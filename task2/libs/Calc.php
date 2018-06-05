<?php
class Calc
{
    private $A;
    private $B;
    private $Mem = 0;

    public function setVarA($var)
    {
	   $this->A = (int)$var;
    }
    
    public function setVarB($var)
    {
        $this->B = (int)$var;
    }
    
    public function getVarA()
    {
        return $this->A;
    }
    
    public function getVarB()
    {
        return $this->B;
    }
    
    public function sum()
    {
	   return ($this->A + $this->B);
    }

    public function ded()
    {
	   return ($this->A - $this->B);
    }

    public function mult()
    {
	   return ($this->A * $this->B);
    }

    public function div()
    {
	   return (0 === $this->B) ? DIV_ERROR : ($this->A / $this->B);
    }

    public function sqrtVar($var)
    {
	   return sqrt($var);	
    }

    public function divX($var)
    {
	   return (0 === $var) ? DIV_ERROR : (1 / $var);
    }

    public function percent($x, $y)
    {
	   return ($x / 100 * $y);
    }

    public function memRead()
    {
	   return $this->Mem;
    }

    public function memAdd($var)
    {
	   return $this->Mem += $var;
    }

    public function memDiv($var)
    {
	   return $this->Mem -= $var;
    }

    public function memClear()
    {
	   return ($this->Mem = 0);
    }
}
?>