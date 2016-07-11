<?php 

namespace App\Helper;

use App\Models\User;
use App\Helper\Redirect as Redirect;

class Auth{

	protected $user;

	function __construct() {

		$this->user = new User;
	
	}


	public function register($request)
	{

		if ($this->user->where('email',$request['email'])->count() == 0){
			$this->user->create([
				'email'		=> $request['email'],
				'password'	=> password_hash($request['password'],PASSWORD_DEFAULT),
				'name'		=> $request['name'] 
			]);
			return true;
		}
		
		return false;


	}

	public function login($email,$password)
	{

		$user = $this->user->where('email',$email)->first();

		if(password_verify($password,$user->password)){
			Session::set('user',$user->id);
			return true;
		}else{
			return false;
		}
	
	}


}