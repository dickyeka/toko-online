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

	public function show($id){

		$order = $this->order->find($id);

		$order_product = $this->orderProduct->where('order_id',$order->id)->get();

		$payment = Payment::where('order_id',$order->id)->count();


		$this->view('order/show',['order'=>$order,'order_product'=> $order_product,'payment'=>$payment]);

	}

	public function pay($id){

		$name = Input::get('name');
		$date = Input::get('date');

		$image = $this->image->upload('img');
		
		if ($image){
			Payment::create([
				'order_id'	=> $id,
				'name'		=> $name,
				'evidence'	=> $image,
				'date'		=> $date
			]);
		}else{
		 	return var_dump($this->image->getError());
		}

		return Redirect::to('order/show/'.$id);

	}

	

}