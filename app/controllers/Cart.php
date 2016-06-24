<?php 


use App\Core\Controller as Controller;
use App\Basket\Basket as Basket;
use App\Models\Product as Product;
use App\Helper\Input as Input;
use App\Helper\Redirect as Redirect;
use App\Models\Order as Order;
use App\Models\OrderProduct as OrderProduct;

class Cart  extends Controller
{
	public $basket;

	protected $product;

	protected $order;


	function __construct() {

		$this->product = new Product;
		$this->basket = new Basket;
		$this->order = new Order;

	
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

	public function order()
	{

		$hash  = bin2hex(rand(1,9));

		$order = $this->order->create([
				'hash' => $hash,
				'paid' => false,
				'user_id' => 1
			]);


		$items = $this->basket->all() ;

		foreach ($items as $item) {
			OrderProduct::create([
				'order_id' => $order->id,
				'product_id' => $item->id,
				'qty' => $item->qty
			]);
		}

		$this->basket->clear();

		return Redirect::to('order/show/'.$order->id);

	}


}