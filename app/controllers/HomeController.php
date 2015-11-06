<?php

class HomeController extends BaseController {

	public $config;
	public $slide;
	public $menu_home;
	public $menu;
	public $slide_footer;
	public $news;
	
	public function __construct(){
    	$this->config = Configs::find(1);
    	$this->slide = Block::where('position',1)->get();
    	$this->slide_footer = Block::where('position',0)->get();
    	$this->category = DB::table('categories')->where('parent_id','!=',0)->lists('name','id');
    	$mainCategories = Category::where('parent_id', 0)->get();
		$this->menu_home = $this->getAllCategories($mainCategories);
		$this->menu = Category::where('parent_id','!=', 0)->get();
		$this->news = News::all();
	}

	private function getAllCategories($categories) {
        $allCategories = array();

        foreach ($categories as $category) {
            $subArr = array();
            $subArr['name'] = $category->name;
            $subArr['id'] = $category->id;
            if(!$category->products->isEmpty()){
            	$subArr['product'] = $category->products;
            	$subArr['products_best_view'] = $category->products_best_view;
            	$subArr['products_order_news'] = $category->products_order_news;
            }
            $subArr['icon'] = $category->icon;
            $subArr['color'] = $category->color;
            $subCategories = Category::with('products','products_best_view','products_order_news')->where('parent_id', '=', $category->id)->get();
            // echo '<pre>';
            // print_r($subCategories);
            // echo '</pre>';
            // exit;
            if (!$subCategories->isEmpty()) {
                $result = $this->getAllCategories($subCategories);
                $subArr['sub'] = $result;
            }
            $allCategories[] = $subArr;
        }
  
        return $allCategories;
    }

	public function getIndex()
	{
	
		 // echo '<pre>';
   //          print_r($this->slide_footer);
   //          echo '</pre>';
   //          exit;
		$latest = Product::orderBy('id','desc')->get();
        $data = Advertises::with('category')->get();
        // echo '<pre>';
        //     print_r($data);
        //     echo '</pre>';
        //     exit;
		return View::make('hello')->with([
			'config'=> $this->config,
			'slide'=>$this->slide,
			'category'=>$this->category,
			'menu_home'=>$this->menu_home,
			'menu'=>$this->menu,
			'latest'=>$latest,
			'slide_footer'=>$this->slide_footer,
			'new'=>$this->news,
            'data_adver'=>$data
			]);
	}

}
