<?php
 
class Image extends Eloquent  {
	protected $table = "images";
	public $timestamps = false;

	public static function images()
    {
        return $this->belongsTo('Product');
    }
    public static function delete_img($product_id){
    	
    	$destinationPath = public_path().'/upload/image/';			
    	$data = Image::where('product_id',$product_id)->get();
    	foreach($data as $key => $file){
    	$path = realpath($destinationPath . $file->name);
		if(file_exists($path) && !empty($file->name)) unlink($path);
		}
		return TRUE ;
    }
}

?>