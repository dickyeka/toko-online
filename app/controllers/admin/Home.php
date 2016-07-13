<?php 

use App\Core\Controller as Controller;
use App\Helper\Session as Session;


class Home extends Controller
{
	protected $product;


    public function index()
    {
    	if (Session::get('user')){
	 		$this->view('admin/home/index');
	 	}else{
	 		echo "harus login dulu";
	 	}
    }
}