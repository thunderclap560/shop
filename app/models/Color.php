<?php
 
class Color extends Eloquent  {
	protected $table = "colors";
	public $timestamps = false;

	public  function color()
    {
        return $this->belongsTo('Product');
    }
}

?>