<?php 

namespace App\Support;

use  App\Support\Storage\Contracts\StorageInterface as StorageInterface;

class SessionStorage  implements  StorageInterface
{

	protected $bucket;

	function __construct($bucket='default') {
		
		if (!isset($_SESSION['bucket'])){
			$_SESSION['bucket'] = [];
		}

		$this->bucket = $bucket;

	}

	public function set($index,$value)
	{
		$_SESSION[$this->bucket][$index] = $value;

	}

	public function get($index)
	{
		if (! $this->exist($index)){
			return null;
		}

		return $_SESSION[$this->bucket][$index];
	}

	public function exist($index)
	{
		return isset($_SESSION[$this->bucket][$index]);
	}

	public  function all()
	{
		return $_SESSION[$this->bucket];
	}

	public function uset($index)
	{
		if ($this->exist($index)){
			unset($_SESSION[$this->bucket][$index]);
		}

	}

	public function clear()
	{
		unset($_SESSION[$this->bucket]);
	}

	public function count()
	{
		return count($_SESSION[$this->bucket]);
	}

}