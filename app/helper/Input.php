<?php 

namespace App\Helper;

class Input
{

	public static function get($name){
		if (isset($_GET[$name])){
			return $_GET[$name];
		}else if (isset($_POST[$name])){
			return  $_POST[$name];
		}
		return false;
	}

}