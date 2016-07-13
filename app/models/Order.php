<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
	 protected $table = 'orders';
	
	 protected $fillable = ['hash','paid','user_id','total'];


	 public function user(){
	 	return $this->belongsTo('App\Models\User');
	 }


	 
}
