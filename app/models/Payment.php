<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Payment extends Eloquent
{
	 protected $table = 'payments';
	
	 protected $fillable = ['order_id','name','evidence','date','confirmed'];

	 public function order()
	 {

	 	return $this->belongsTo('App\Models\Order');

	 }

	
}
