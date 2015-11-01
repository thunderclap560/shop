<?php
 
class News extends Eloquent  {
	protected $table = "news";
	public $timestamps = false;

	public static $rules = array(
		'title'=>'required',
		'content'=>'required',
		'image'=>'required|image',
		);
	
}