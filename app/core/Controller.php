<?php

namespace App\Core;

use App\Core\View;

class Controller 
{

	public function view($view,$data = [])
	{
		$element = new View;
		require_once '../app/views/'.$view.'.php';
	}

}