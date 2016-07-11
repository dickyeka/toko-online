<?php

namespace App\Core;

use App\Core\View;
use App\Helper\Input as Input;
use App\Helper\Session as Session;

class Controller 
{

	public function view($view,$data = [])
	{
		$element = new View;
		$input = new Input;
		$session = new Session;

		require_once '../app/views/'.$view.'.php';
	}

}