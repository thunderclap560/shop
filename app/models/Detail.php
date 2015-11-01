<?php
 
class Detail extends Eloquent  {
	protected $table = "details";
	public $timestamps = false;

	public  function products()
    {
        return $this->belongsTo('Product','product_id');
    }

    public  function orders()
    {
        return $this->belongsTo('Order','order_id');
    }

    
}

?>