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

    public function cate(){
    	return $this->hasMany('Category','parent_id');
    }

    public function posts()
    {
        return $this->hasManyThrough('Image','Product');
    }

    public function delete()
    {
        $this->posts()->delete();
       $this->products()->where('category_id',$this->id)->delete();
       parent::delete();
    }

    
}
?>