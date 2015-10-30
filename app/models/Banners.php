<?php
 
class Banners extends Eloquent  {
	protected $table = "banners";
	public $timestamps = false;

	public static $rules = array(
		'name'=>'required',
		'parent_id'=>'required'
		);
}

?>