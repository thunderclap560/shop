<?php
 
class Cart extends Eloquent  {
	public function addProduct($productId,$qty) {
		$allProducts = $this->readProduct();
		if (null!=$allProducts) {
			if (array_key_exists($productId, $allProducts)) {
				$allProducts[$productId]++;
			} else {
				$allProducts[$productId] = round($qty, 0);
			}
		} else {
			$allProducts[$productId] = round($qty, 0);
		}
		
		$this->saveProduct($allProducts);
	}
	public function getCount() {
		$allProducts = $this->readProduct();
		
		if (count($allProducts)<1) {
			return 0;
		}
		
		$count = 0;
		foreach ($allProducts as $product) {
			$count=$count+$product;
		}
		
		return $count;
	}

	public function saveProduct($data) {
		return Session::put('product' ,$data);
	}

	/*
	 * read cart data from session
	 */
	public function readProduct() {
		return Session::get('product');
	}
}