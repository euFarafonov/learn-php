<?php
class Calc
{
    private $A;
    private $B;
    private $Mem = 0;
    private $result = Array();

    public function setVarA($var)
    {
	$this->A = (int)$var;
    }
    
    public function setVarB($var)
    {
        $this->B = (int)$var;
    }

    private function sum()
    {
	return ($this->A + $this->B);
    }

    private function ded()
    {
	return ($this->A - $this->B);
    }

    private function mult()
    {
	return ($this->A * $this->B);
    }

    private function div()
    {
	return ($this->B === 0) ? DIV_ERROR : ($this->A / $this->B);
    }

    private function sqrtVar($var)
    {
	return sqrt($var);	
    }

    private function divX($var)
    {
	return ($var === 0) ? DIV_ERROR : (1 / $var);
    }

    private function perc($var, $per)
    {
	return ($this->A / 100 * $this->B);
    }

    private function memRead()
    {
	return $this->Mem;
    }

    private function memAdd($var)
    {
	return $this->Mem += $var;
    }

    private function memDiv($var)
    {
	return $this->Mem -= $var;
    }

    private function memClear()
    {
	return ($this->Mem = 0);
    }

}

?>
