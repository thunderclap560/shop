<?php
 
class Coupon extends Eloquent  {
	protected $table = "coupons";
	public $timestamps = false;
	public static $rules = array(
    'code'=>'required',
    'value'=>'required|numeric|between:0,100',
    );
}
?>