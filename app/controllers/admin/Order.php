<?php 

use App\Core\Controller as Controller;
use App\Models\Order as OrderModel;
use App\Models\OrderProduct as OrderProduct;
use App\Helper\Input as Input;
use App\Helper\Image as Image;
use  App\Models\Payment as Payment;
use App\Helper\Redirect as Redirect;

class Order  extends Controller
{

	protected $product;

	protected $order;

	protected $orderProduct;

	function __construct() {

		$this->order = new OrderModel;
		$this->orderProduct = new OrderProduct;
		$this->image = new Image;
	}

	public function index()
	{
		$orders = $this->order->all();

		$this->view('admin/order/index',['orders'=>$orders]);		

	}

	public function show($id){

		$order = $this->order->find($id);

		$order_product = $this->orderProduct->where('order_id',$order->id)->get();

		$this->view('admin/order/show',['order'=>$order,'order_product'=> $order_product]);

	}


}