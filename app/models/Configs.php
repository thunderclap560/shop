<?php
 
class Configs extends Eloquent  {
	
	protected $table = "configs";
	public $timestamps = false;

	public static $rules = array(
    'title'=>'required',
    'description'=>'required',
    'email'=>'required|email|unique:users',
    'phone'=>'required|numeric',
    'address'=>'required',
    'policy'=>'required',
    'logo'=>'required',
    );
    public static $rules_image = array(
    'title'=>'required',
    'description'=>'required',
    'email'=>'required|email|unique:users',
    'phone'=>'required|numeric',
    'address'=>'required',
    'policy'=>'required',
    );
	
}