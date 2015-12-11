<?php
 
class Advertises extends Eloquent  {
	protected $table = "advertise";
	public $timestamps = false;

	public static $rules = array(
		'image'=>'required'
		);

	public function category(){
		return $this->belongsToMany('Category','category_advertise');
	}
}
?>