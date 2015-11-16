<?php
 
class Cart extends Eloquent  {
	public function addColor($productId,$color){
		$allColors = $this->readColor();
		if (null!=$allColors) {
			if (array_key_exists($productId, $allColors)) {
				$allColors[$productId] = $color;
			} else {
				$allColors[$productId] = $color;
			}
		} else {
			$allColors[$productId] = $color;
		}
		
		$this->saveColor($allColors);
	}
	public function readColor() {
		return Session::get('color');
	}
	public function saveColor($data) {
		return Session::put('color',$data);
	}
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
	public function ajaxCount(){
		$allProducts = $this->readProduct();
		if (count($allProducts)<1) {
			return 0;
		}else{
			return count($allProducts);
		}
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