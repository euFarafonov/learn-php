<?php
class Model
{
	public function __construct()
	{
		
	}
	
	public function getArray()
	{
		return array(
			'%TITLE%'=>'Contact Form',
			'%ERRORS%'=>'Empty field',
			'%NAME%'=>'',
			'%EMAIL%'=>'',
			'%NONE%' =>'',
			'%TECH%'=>'',
			'%PSYCH%'=>'',
			'%FINANC%'=>'',
			'%SOS%'=>'',
			'%MSG%'=>''
		);
	}
	
	public function checkForm()
	{
		$errors = array();
		
		if (3 >= strlen($_POST['name']))
		{
			errors[] = 'Invalid field name';
		}
		
		
		return true;
	}
	
	public function sendEmail()
	{
	// return mail()
	}
}
?>