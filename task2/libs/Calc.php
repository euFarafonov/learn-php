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

    public function result()
    {
	$this->result['A'] = $this->A;
	$this->result['B'] = $this->B;
	$this->result['memRead1'] = $this->MemRead();
	$this->result['sum'] = $this->sum();
	$this->result['ded'] = $this->ded();
	$this->result['mult'] = $this->mult();
	$this->result['div'] = $this->div();
	$this->result['sqrtA'] = $this->sqrtVar($this->A);
	$this->result['sqrtB'] = $this->sqrtVar($this->B);
	$this->result['divXA'] = $this->divX($this->A);
	$this->result['divXB'] = $this->divX($this->B);
	$this->result['perc'] = $this->perc($this->A, $this->B);
	$this->result['memRead2'] = $this->MemRead();
	$this->result['memAddA'] = $this->memAdd($this->A);
	$this->result['memRead3'] = $this->MemRead();
	$this->result['memAddB'] = $this->memAdd($this->B);
	$this->result['memRead4'] = $this->MemRead();
	$this->result['memDivA'] = $this->memDiv($this->A);
	$this->result['memRead5'] = $this->MemRead();
	$this->result['memDivB'] = $this->memDiv($this->B);
	$this->result['memRead6'] = $this->MemRead();
	$this->result['memClear'] = $this->memClear();
	$this->result['memRead7'] = $this->memRead();
	return $this->result;	
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
	return $this->Mem + $var;
    }

    private function memDiv($var)
    {
	return $this->Mem - $var;
    }

    private function memClear()
    {
	return ($this->Mem = 0);
    }

}

?>
