<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	 protected $table = 'users';

	 public $timestamps = false;
	
	 protected $fillable = ['name','email', 'password'];
	
}
