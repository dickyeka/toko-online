<?php 

use App\Core\Controller as Controller;
use App\Models\Product as Product;
use App\Models\Order as OrderModel;
use App\Models\OrderProduct as OrderProduct;
use App\Helper\Input as Input;
use App\Helper\Image as Image;

class Order  extends Controller
{

	protected $product;

	protected $order;

	protected $orderProduct;

	function __construct() {
		$this->product = new Product;
		$this->order = new OrderModel;
		$this->orderProduct = new OrderProduct;
		$this->image = new Image;
	}

	public function show($id){

		$order = $this->order->find($id);

		$order_product = $this->orderProduct->where('order_id',$order->id)->get();

		$this->view('order/show',['order'=>$order,'order_product'=> $order_product]);

	}

	public function pay($id){

		$name = Input::get('name');
		$date = Input::get('date');

		$image = $this->image->upload('img');
		
		if ($image){
			var_dump($image);
		}else{
			var_dump($this->image->getError());
		}





	}


}