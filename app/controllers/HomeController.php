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
		$latest = Product::orderBy('id','desc')->get();
        $data = Advertises::with('category')->get();
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

    public function getView($id=null){
        // echo '<pre>';
        // print_r(Session::get('product'));
        // echo '</pre>';
        // exit;
        $thumb = Product::with('products','color','image_detail')->find($id);
        $latest = Product::orderBy('id','desc')->get();
        $parent_cate = Category::find($thumb->products->parent_id);
        $thum_off = array();
        $thum_off[]= $thumb;
        $thum_off[]= $parent_cate;
        $rand = Product::orderByRaw("RAND()")->get();
        $ads = Banners::where('parent_id','!=','0')->get();
        return View::make('view')->with([
            'config'=> $this->config,
            'slide'=>$this->slide,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'latest'=>$latest,
            'slide_footer'=>$this->slide_footer,
            'thum_off'=>$thum_off,
            'rand'=>$rand,
            'title'=>$thum_off[0]->name,
            'desc'=>$thum_off[0]->short_detail,
            'ads'=>$ads
            ]);
    }
    public function getCart(){
        
        $cart = new Cart;
        $cart->addProduct($_GET['id'],$_GET['qty']);
        return $cart->getCount();
    }
    public function getCheckOut(){
        return View::make('check-out');
    }

}
