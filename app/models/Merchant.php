<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Merchant extends Eloquent
{
	 protected $table = 'merchants';

	 public $timestamps = false;
	
	 protected $fillable = ['name','address','hp'];
	 
}
