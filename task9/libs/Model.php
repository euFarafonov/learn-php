<?php
class Model
{
	protected $items = array();
	protected $templates = array();
    
    public function __construct()
	{
		$this->items = array('Apple', 'Banana', 'Orange', 'Kiwi', 
		'Mango', 'Grape', 'Pear', 'Plum', 'Lemon');
		
		$this->templates = array(
			'%SELECT%'=>'',
			'%TABLE%'=>'',
			'%ORDERLIST%'=>'',
			'%UNORDERLIST%'=>'',
			'%DEFINLIST%' =>'',
			'%RADIO%'=>'',
			'%CHECK%'=>''
		);
		
		if (empty($this->items) || empty($this->templates))
        {
            throw new ModelException('Can not get array for work.');
        }
	}
	
	public function createTemplates()
	{
		$items = $this->getItems();
		
		$this->templates['%SELECT%'] = HtmlHelper::getSelect($items);
		$this->templates['%TABLE%'] = HtmlHelper::getTable($items);
		$this->templates['%ORDERLIST%'] = HtmlHelper::getOrderlist($items);
		$this->templates['%UNORDERLIST%'] = HtmlHelper::getUnorderlist($items);
		$this->templates['%DEFINLIST%'] = HtmlHelper::getDefinlist($items);
		$this->templates['%RADIO%'] = HtmlHelper::getRadio($items);
		$this->templates['%CHECK%'] = HtmlHelper::getCheck($items);
	}
	
	public function getItems()
	{
		return $this->items;
	}
	
	public function getTemplates()
	{
		return $this->templates;
	}
}
?>