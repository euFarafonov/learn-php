<?php
class Controller
{
	private $model;
	private $view;
	
	public function __construct()
	{
		$this->model = new Model();
		$this->view = new View(TEMPLATES.TEMPLATE);
		
		$this->model->createTemplates();
		
		$templates = $this->model->getTemplates();
		$this->view->templateRender($templates);
	}
}
?>