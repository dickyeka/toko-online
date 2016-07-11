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
			$this->view('auth/login');
		}else{
			echo "sudah login";
		}
	}

	public function store_login()
	{


		$login=$this->auth->login(Input::get('email'),Input::get('password'));

		if ($login){
			return Redirect::to('/');
		}else{
			return Redirect::to('auth/login?error=true');
		}

	}

	public function register()
	{
		$this->view('auth/register');
	}

	public  function store_register(){
		$request = [
			'email'		=> Input::get('email'),
			'name'		=> Input::get('name'),
			'password'	=> Input::get('password'),
		];

		$register = $this->auth->register($request);

		if ($register){
			return Redirect::to('auth/register?message=berhasil daftar silahkan login');
		}else{
			return Redirect::to('auth/register?message=email sama');
		}



	}

	public function logout()
	{
		Session::remove('user');
		return Redirect::to('/');
	}

}
