<?php
class Model
{
	protected $mArray = array();
    protected $errors = array();
    protected $search;
    
    public function __construct()
	{
		$this->search = new Search();
        
        $this->mArray = array(
			'%TITLE%'=>'CURL',
			'%SEARCH%'=>''
		);
        /*
        if (empty($this->mArray))
        {
            throw new ModelException('Can not get templates for html.');
        }*/
	}
	/*
	public function getArray()
	{
		return $this->mArray;
	}
	*/
	public function searchData($query)
	{
        $this->mArray['%SEARCH%'] = $this->search->query($query);
	}
	
	
    
    
        return true;
    }
}
?>