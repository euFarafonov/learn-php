<?php
class Model
{
	protected $items = array();
	protected $templates = array();
    
    protected $optSelect = array();
    protected $optTable = array();
    protected $optOrderList = array();
    protected $optUnorderList = array();
    protected $optDefinList = array();
    protected $optRadio = array();
    protected $optCheck = array();
    
    public function __construct()
	{
		$this->items = array(
            array('name' => 'Apple', 'description' => 'Description Apple'),
            array('name' => 'Banana', 'description' => 'Description Banana'),
            array('name' => 'Orange', 'description' => 'Description Orange'),
            array('name' => 'Kiwi', 'description' => 'Description Kiwi'),
            array('name' => 'Mango', 'description' => 'Description Mango'),
            array('name' => 'Grape', 'description' => 'Description Grape'),
            array('name' => 'Pear', 'description' => 'Description Pear'),
            array('name' => 'Plum', 'description' => 'Description Plum'),
            array('name' => 'Lemon', 'description' => 'Description Lemon')
        );
        
        $this->templates = array(
			'%SELECT%'=>'',
			'%TABLE%'=>'',
			'%ORDERLIST%'=>'',
			'%UNORDERLIST%'=>'',
			'%DEFINLIST%' =>'',
			'%RADIO%'=>'',
			'%CHECK%'=>''
		);
        
        $this->optSelect = array(
            'tag' => 'option',
            'tagAttr' => array(),
            'parent' => 'select',
            'parentAttr' => array('name' => 'select', 'size' => 10, 'multiple' => ''),
            'child' => '',
            'childAttr' => array()
        );
		
		$this->optTable = array(
            'tag' => 'tr',
            'tagAttr' => array(),
            'parent' => 'table',
            'parentAttr' => array(),
            'child' => 'td',
            'childAttr' => array()
        );
        
        $this->optOrderList = array(
            'tag' => 'li',
            'tagAttr' => array(),
            'parent' => 'ol',
            'parentAttr' => array(),
            'child' => '',
            'childAttr' => array()
        );
        
        $this->optUnorderList = array(
            'tag' => 'li',
            'tagAttr' => array(),
            'parent' => 'ul',
            'parentAttr' => array(),
            'child' => '',
            'childAttr' => array()
        );
        
        $this->optDefinList = array(
            'tag' => 'dt',
            'tagAttr' => array(),
            'parent' => 'dl',
            'parentAttr' => array(),
            'child' => 'dd',
            'childAttr' => array()
        );
        
        $this->optRadio = array(
            'tag' => 'label',
            'tagAttr' => array(),
            'parent' => 'div',
            'parentAttr' => array(),
            'child' => 'input',
            'childAttr' => array('type' => 'radio', 'name' => 'radiobtn')
        );
        
        $this->optCheck = array(
            'tag' => 'label',
            'tagAttr' => array(),
            'parent' => 'div',
            'parentAttr' => array(),
            'child' => 'input',
            'childAttr' => array('type' => 'checkbox', 'name' => 'check[]')
        );
		
		if (empty($this->items) || empty($this->templates))
        {
            throw new ModelException('Can not get array for work.');
        }
	}
	
	public function createTemplates()
	{
		$items = $this->getItems();
		$this->templates['%SELECT%'] = HtmlHelper::createElement($items, $this->optSelect);
		$this->templates['%TABLE%'] = HtmlHelper::createElement($items, $this->optTable);
		$this->templates['%ORDERLIST%'] = HtmlHelper::createElement($items, $this->optOrderList);
		$this->templates['%UNORDERLIST%'] = HtmlHelper::createElement($items, $this->optUnorderList);
		$this->templates['%DEFINLIST%'] = HtmlHelper::createElement($items, $this->optDefinList);
		$this->templates['%RADIO%'] = HtmlHelper::createElement($items, $this->optRadio);
		$this->templates['%CHECK%'] = HtmlHelper::createElement($items, $this->optCheck);
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