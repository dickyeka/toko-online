<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Payment extends Eloquent
{
	 protected $table = 'payments';
	
	 protected $fillable = ['order_id','evidence'];

	
}
