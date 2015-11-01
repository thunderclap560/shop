<?php
 
class Product extends Eloquent  {
	protected $table = "products";
	public $timestamps = false;

	public static $rules = array(
		'name'=>'required',
		'code'=>'required',
		'price'=>'required|integer',
		'image'=>'required|image',
		'status'=>'required',
		'long_detail'=>'required|max:500',
		'short_detail'=>'required|max:255'
		);
	public function products()
    {
        return $this->belongsTo('Category');
    }
    public  function image()
    {
        return $this->hasMany('Image');
    }

    public  function color()
    {
        return $this->hasMany('Color');
    }

    public  function comment()
    {
        return $this->hasMany('Comment')->where('parent_id','0');
    }

    public function delete()
    {
        // delete all related photos 
        $this->image()->delete();
        $data = Image::where("product_id", $this->id)->delete();
        return parent::delete();
    }

}

?>