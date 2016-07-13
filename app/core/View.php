<?php 

namespace App\Core;
use App\Helper\Input as Input;
use App\Helper\Session as Session;

class View {

	protected $admin;

	protected $session;

	function __construct() {
		$this->session = new Session;
		$this->admin = $this->session->get('admin'); 
	}

	public function getNav()
	{
		$session = $this->session;
		if ($this->admin){
			include '../app/views/admin/template/nav.php';
		}else{
			include '../app/views/template/nav.php';
		}
	}

	public function getFooter()
	{
		if ($this->admin){
			include '../app/views/admin/template/footer.php';	
		}else{
			include '../app/views/template/footer.php';	
		}
	}

	


	

}