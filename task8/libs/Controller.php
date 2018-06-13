<?php
class Controller
{
	private $model;
	private $view;
	
	public function __construct()
	{
		$this->model = new Model();
		$this->view = new View(TEMPLATES.TEMPLATE);
		
		if(isset($_POST['search']))
		{
			if (!$this->model->searchData($_POST['search']))
			{
				throw new SearchDataException('Can not get SearchData.');
			}
		}
		
		$templates = $this->model->getTemplates();
		$this->view->templateRender($templates);
	}
}
?>