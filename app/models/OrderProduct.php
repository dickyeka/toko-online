<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class OrderProduct extends Eloquent
{
	 protected $table = 'orders_products';

	 public $timestamps = false;
	
	 protected $fillable = ['order_id','product_id', 'qty'];

	 protected $with = ['product'];


	 public function product()
	 {

        return $this->belongsTo('App\Models\Product','product_id');

	 }


	
}
