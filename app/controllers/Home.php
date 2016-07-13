<?php 

use App\Core\Controller as Controller;
use App\Models\Product as Product;

class Home extends Controller
{
	protected $product;

	function __construct() {
		$this->product= new Product;
	}

    public function index()
    {

        $new_products = $this->product->orderBy('id','DESC')->take('5')->get();

        $products = $this->product->take('5')->get();

 		$this->view('home/home',['new_products'=>$new_products,'products'=>$products]);
        
    }

    public function edit($id)
    {

    	$product = $this->product->find($id);

    	$this->view('home/edit',['user'=>$product]);



    }

    public function delete($id)
    {
    	$user = $this->user->find($id)->delete();

    	

    }
}