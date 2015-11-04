<?php

class HomeController extends BaseController {

	public $config;
	public $slide;
	public $category;
	public function __construct(){
    	$this->config = Configs::find(1);
    	$this->slide = Block::where('position',1)->get();
    	$this->category = DB::table('categories')->where('parent_id','!=',0)->lists('name','id');
	}

	public function getIndex()
	{
		
		return View::make('hello')->with([
			'config'=> $this->config,
			'slide'=>$this->slide,
			'category'=>$this->category
			]);
	}

}
