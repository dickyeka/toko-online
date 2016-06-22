<?php 


use App\Core\Controller as Controller;
use App\Basket\Basket as Basket;
use App\Models\Product as Product;
use App\Helper\Input as Input;
use App\Helper\Redirect as Redirect;


class Cart  extends Controller
{
	public $basket;

	protected $product;



	function __construct() {

		$this->product = new Product;
		$this->basket = new Basket;

	
	}

	public function index()
	{
		
		$items = $this->basket->all() ;

		$total = $this->basket->subTotal();

		$this->view('cart/index',['items'=>$items,'total' => $total]);
	}

	public function add($id,$qty)
	{
		$product = $this->product->find($id);

		if (!$product){
			return 'tidak ada';
		}

		$this->basket->add($product,$qty);

		return Redirect::to('cart/index');

	}

	public function update($id)
	{

		$product = $this->product->find($id);
		
		$qty = Input::get('qty');
		
		$this->basket->update($product,$qty);
		
		return Redirect::to('cart/index');


	}


}