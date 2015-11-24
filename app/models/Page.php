<?php
 
class Page extends Eloquent  {
	protected $table = "pages";
	public $timestamps = false;
	public static $rules = array(
		'name'=>'required',
		'content'=>'required',
		);
}