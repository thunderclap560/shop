<?php
 
class Comment extends Eloquent  {
	protected $table = "comments";
	//public $timestamps = false;

	public  function users()
    {
        return $this->belongsTo('User','user_id');
    }
    public  function products()
    {
        return $this->belongsTo('Product','product_id');
    }
    public function replies()
    {
        return $this->hasMany('Comment', 'parent_id');
    }
    public function allReplies()
{
    return $this->replies()->with('allReplies');
}

    
}

?>