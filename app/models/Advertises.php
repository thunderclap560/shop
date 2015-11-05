<?php
 
class Advertises extends Eloquent  {
	protected $table = "advertise";
	public $timestamps = false;

	public static $rules = array(
		'link'=>'required',
		'image'=>'required'
		);

	public function category(){
		$this->hasMany('Category','advertise_id');
	}
}
?>