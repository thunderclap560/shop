<?php
 
class Category extends Eloquent  {
	protected $table = "categories";
	public $timestamps = false;

	// public static $rules = array(
	// 'name'=>'required',
	// 'parent_id'=>'required'
	// );
    public static $rules_add = array(
    'name'=>'required',
    'parent_id'=>'required'
    );

	public function products()
    {
        return $this->hasMany('Product');
    }

    public function products_best_view()
    {
        return $this->hasMany('Product')->orderBy('view','desc');
    }

    public function products_order_news()
    {
        return $this->hasMany('Product')->orderBy('id','desc');
    }

    public function cate(){
    	return $this->hasMany('Category','parent_id');
    }

    public function posts()
    {
        return $this->hasManyThrough('Image','Product');
    }

    public function colors()
    {
        return $this->hasManyThrough('Color','Product');
    }

     public function orders()
    {
        return $this->hasManyThrough('Detail','Product');
    }

    public function delete()
    {
        $this->posts()->delete();
        $this->colors()->delete();
        $this->orders()->delete();
       $this->products()->where('category_id',$this->id)->delete();
       parent::delete();
    }

    
}
?>