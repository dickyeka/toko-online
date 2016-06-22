<?php 

namespace App\Basket;

use App\Models\Product as Product;
use App\Support\SessionStorage as SessionStorage;


class Basket
{
	protected $storage;

	protected $product;

	
	function __construct()
	{
		$this->storage = new SessionStorage('cart');
		$this->product =  new Product;

	}

	public function add(Product $product,$qty)
	{

		if ($this->has($product)){
			$qty = $this->get($product)['qty'] + $qty;
		}

		$this->update($product,$qty);

	}

	public function has(Product $product)
	{
		return $this->storage->exist($product->id);
	}

	public function update(Product $product,$qty)
	{


		if ($this->product->find($product->id)->stok < $qty){
			echo "stok max";
		}

		if ($qty == 0)
		{
			$this->remove($product);
			return ;
		}

		$this->storage->set($product->id,[
			'product_id' 	=> (int) $product->id,
			'qty' 			=> (int) $qty
 		]);



	}

	public function remove (Product $product)
	{
		$this->storage->uset($product->id);
	}

	public function get(Product $product)
	{
		return $this->storage->get($product->id);
	}

	public function clear()
	{
		$this->storage->clear();
	}

	public function all()
	{
		$ids= [];
		$items = [];

		foreach ($this->storage->all() as $product) {
			array_push($ids, $product['product_id']);
		}

		$products = $this->product->find($ids);

		foreach ($products as $product) {
			$product->qty = $this->get($product)['qty'];
			array_push($items,$product);

		}

		return $items;
	}

	public function itemCount()
	{
		return count($this->storage->all());
	}

	public function subTotal()
	{
		$total = 0;

		foreach ($this->all() as $item) {
			$total = $total + ($item->price *  $item->qty);
		}

		return $total;
	}


}