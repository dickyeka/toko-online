<?php 

use App\Core\Controller as Controller;
use App\Helper\Session as Session;
use App\Helper\Input as Input;
use App\Models\Product as ProductModel;
use App\Models\Merchant as MerchantModel;
use App\Helper\Image as Image;
use App\Helper\Redirect as Redirect;

class Product extends Controller
{
	protected $product;

	function __construct() {
		$this->product= new ProductModel;
		$this->merchant= new MerchantModel;
		$this->image = new Image;
	}

    public function index()
    {
    	if (Session::get('user')){
    		
    		$products = $this->product->all();	
    		$merchants = $this->merchant->lists('name','id');

	 		$this->view('admin/product/index',['products'=>$products,'merchants'=>$merchants]);
	 	
	 	}else{
	 		echo "harus login dulu";
	 	}
    }

    public function store()
    {
    	if (Session::get('user')){
			$image = $this->image->upload('img');  
    		
			if ($image){

	    		$this->product->create([
	    			'title'=>Input::get('title'),
	    			'description'=>Input::get('description'),
	    			'price'=>Input::get('price'),
	    			'image'=>$image,
	    			'stok'=>Input::get('stok'),
	    			'merchant_id'=>Input::get('merchant_id')
	    		]);

	    		return Redirect::to('admin/product/index');
	    	
	    	}else{
			 	return var_dump($this->image->getError());
			}

    	}else{
	 		echo "harus login dulu";
	 	}
    }

    public function delete($id)
	{
		$this->product->find($id)->delete();	
		return Redirect::to('admin/product/index');
	}

}