<?php
 
class Category extends Eloquent  {
	protected $table = "categories";
	public $timestamps = false;

	// public static $rules = array(
	// 	'name'=>'required',
	// 	'parent_id'=>'required'
	// 	);

	public function products()
    {
        return $this->hasMany('Product');
    }
    
}
?>