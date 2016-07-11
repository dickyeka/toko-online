<?php 

namespace App\Core;
use App\Helper\Input as Input;
use App\Helper\Session as Session;

class View {

	public function getNav()
	{
		$session = new Session;
		include '../app/views/template/nav.php';
	}

	public function getFooter()
	{
		include '../app/views/template/footer.php';	
	}

	


	

}