<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
	 protected $table = 'orders';

	 public $timestamps = false;
	
	 protected $fillable = ['hash','paid', 'user_id'];

	
}
