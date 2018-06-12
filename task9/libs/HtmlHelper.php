<?php
class HtmlHelper
{
	public static function getSelect($array)
	{
		$select = '<select name="select" multiple>';
		foreach ($array as $item)
		{
			$select .= "<option value='".strtolower($item)."'>$item</option>";
		}
		$select .= '</select>';
		
		return $select;
	}
	
	public static function getTable($array)
	{
		$table = "<table><tr><td>#</td><td>Fruit</td></tr>";
		$i = 1;
		foreach ($array as $item)
		{
			$table .= "<tr><td>".$i++."</td><td>$item</td></tr>";
		}
		$table .= '</table>';
		
		return $table;
	}
	
	public static function getOrderlist($array)
	{
		$orderlist = '<ol>';
		foreach ($array as $item)
		{
			$orderlist .= "<li>$item</li>";
		}
		$orderlist .= '</ol>';
		
		return $orderlist;
	}
	
	public static function getUnorderlist($array)
	{
		$unorderlist = '<ul>';
		foreach ($array as $item)
		{
			$unorderlist .= "<li>$item</li>";
		}
		$unorderlist .= '</ul>';
		
		return $unorderlist;
	}
	
	public static function getDefinlist($array)
	{
		$definlist = '<dl>';
		foreach ($array as $item)
		{
			$definlist .= "<dt>$item</dt><dd>Description</dd>";
		}
		$definlist .= '</dl>';
		
		return $definlist;
	}
	
	public static function getRadio($array)
	{
		$radiobtn = '<div>';
		$i = 1;
		foreach($array as $item)
		{
			$radiobtn .= "<label>radio".$i++."
			<input type='radio' name='radiobtn'></label>";
		}
		$radiobtn .= '</div>';
		
		return $radiobtn;
	}
	
	public static function getCheck($array)
	{
		$check = '<div>';
		$i = 1;
		foreach($array as $item)
		{
			$check .= "<label>check".$i++."
			<input type='checkbox' name='check[]'></label>";
		}
		$check .= '</div>';
		
		return $check;
	}
}
?>