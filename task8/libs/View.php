<?php
class View
{
	private $file;

	public function __construct($template)
	{
		$this->file = file_get_contents($template);
        
        if (empty($this->file))
        {
            throw new ViewException('Can not get content from template.');
        }
	}

	public function templateRender($templates)
	{
        foreach($templates as $key=>$val)
		{
			$this->file = str_replace($key, $val, $this->file);
		}
        
		echo $this->file;
	}
}
?>