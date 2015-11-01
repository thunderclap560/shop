<?php
 
class Order extends Eloquent  {
	protected $table = "orders";
	public $timestamps = false;

	public  function users()
    {
        return $this->belongsTo('User','user_id');
    }
    public  function detail()
    {
        return $this->hasMany('Detail');
    }
    public function delete()
    {
        // delete all related photos 
        $this->detail()->delete();
        $data = Detail::where("order_id", $this->id)->delete();
        return parent::delete();
    }
    
}

?>