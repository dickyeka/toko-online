<?php 

use App\Core\Controller as Controller;
use App\Models\Order as OrderModel;
use App\Models\OrderProduct as OrderProduct;
use App\Helper\Input as Input;
use  App\Models\Payment as PaymentModel;
use App\Helper\Redirect as Redirect;

class Payment  extends Controller
{

	protected $product;

	protected $order;

	protected $orderProduct;

	function __construct() {

		$this->order = new OrderModel;
		$this->payment = new PaymentModel;
	}

	public function index($id){

		$payments = $this->payment->get();
		$this->view('admin/payment/index',['payments'=>$payments]);

	}

	public function confirmed($id){

		$payment = $this->payment->find($id);

		$confirmed = $payment->update([
						'confirmed' => true
					]);

		$paid = $this->order->where('id',$payment->order_id)
							->update([
								'paid' =>true
							]);
		Redirect::to('admin/payment/index');

	}


}