<?php 

use App\Core\Controller as Controller;
use App\Helper\Auth as Authentication;
use App\Helper\Input as Input;
use App\Helper\Redirect as Redirect;
use App\Helper\Session as Session;

class Auth  extends Controller
{
	protected $auth;

	function __construct() {

		$this->auth = new Authentication;	
	}

	public function login()
	{
		if(!Session::get('user')){
			$this->view('admin/auth/login');
		}else{
			echo "sudah login";
		}
	}

	public function store_login()
	{

		$login=$this->auth->login(Input::get('email'),Input::get('password'));

		if ($login){
			Session::set('admin',true);
			return Redirect::to('admin/index');
		}else{
			return Redirect::to('admin/auth/login?error=true');
		}

	}

	public function logout()
	{
		Session::remove('user');
		Session::remove('admin');
		return Redirect::to('/');
	}

}
