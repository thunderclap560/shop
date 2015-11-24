<?php

class HomeController extends BaseController {

	public $config;
	public $slide;
	public $menu_home;
	public $menu;
	public $slide_footer;
	public $news;
    public $page;
	
	public function __construct(){
    	$this->config = Configs::find(1);
    	$this->slide = Block::remember(360)->where('position',1)->get();
    	$this->slide_footer = Block::remember(360)->where('position',0)->get();
    	$this->category = [''=>'Tất cả'] + DB::table('categories')->where('parent_id','!=',0)->lists('name','id');
    	$mainCategories = Category::where('parent_id', 0)->get();
		$this->menu_home = $this->getAllCategories($mainCategories);
		$this->menu = Category::remember(360)->where('parent_id','!=', 0)->get();
		$this->news = News::all();
        $this->page = Page::all();
        // Event::listen('illuminate.query', function( $query ) {
        //     echo '<div class="alert alert-info"><h2>'.$query.'</h2></div>';
        // });
	}

    public function getBlog(){
        $data = News::paginate(1);
        return View::make('blog')->with([
            'config'=> $this->config,
            'slide'=>$this->slide,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'data'=>$data,
            'title'=>'Danh sách tin tức',
            'desc'=>'Danh sách tin tức',
            'page'=>$this->page
            ]); 
    }
    public function about($slug=null,$id = null){
        echo $slug;
        exit;
    }

    public function getTinTuc($id = null){

        $data = News::find($id);
        $data->view++;
        $data->save();
        $popular = News::take(5)->orderBy('view', 'desc')->get();
        $featured = News::where('id','!=',$id)->take(6)->get();

        return View::make('new')->with([
            'config'=> $this->config,
            'slide'=>$this->slide,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'data'=>$data,
            'title'=>$data->title,
            'desc'=>$data->name,
            'popular'=>$popular,
            'featured'=>$featured,
            'page'=>$this->page
            ]);    
    }

    public function getChuyenMuc($id = null){
        $new = News::remember(360)->take(1)->get();
        $latest = Product::remember(360)->orderBy('id','desc')->get();
        $ads = Banners::remember(360)->where('parent_id','!=','0')->get(); 
        $categoryName = Category::remember(360)->find($id);
        $tmp = array();
        $temp = array();
        if($categoryName->parent_id == 0){       
         foreach($this->menu_home as $k => $v){
            if($v['id'] == $id){
                if(isset($v['sub'])){                      
                        foreach($v['sub'] as $i => $j){                          
                            if(isset($j['product'])){
                                $tmp = $j['product'];
                            }
                    }
                }
            }
        }
        $m = 0;
        foreach($tmp as $item){
            if($m < count($tmp)){            
            $temp[$m]['name'] = $item->name;
            $temp[$m]['id'] = $item->id;
            $temp[$m]['price'] = $item->price;
            $temp[$m]['code'] = $item->code;
            $temp[$m]['price_sales'] = $item->price_sales;
            $temp[$m]['short_detail'] = $item->short_detail;
            $temp[$m]['image'] = $item->image;
            }
        $m++;
        }
        $perPage = 2;
        $currentPage = Input::get('page') - 1;
        $pagedData = array_slice($temp, $currentPage * $perPage, $perPage);
        $data = Paginator::make($pagedData, count($temp), $perPage);
        }else{
        $data = Product::remember(360)->where('category_id',$id)->paginate(2);
        }
        return View::make('category')->with([
            'config'=> $this->config,
            'slide'=>$this->slide,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'latest'=>$latest,
            'slide_footer'=>$this->slide_footer,
            'data'=>$data,
            'title'=>$categoryName->name,
            'desc'=>$categoryName->name,
            'ads'=>$ads,
            'cate'=>$categoryName,
            'new'=>$new,
            'page'=>$this->page
            ]);                    
    }


    public function getTimKiem(){
        $latest = Product::orderBy('id','desc')->get();
        $ads = Banners::where('parent_id','!=','0')->get(); 
        $new = News::take(1)->get();
        if(isset($_GET['category_id']) && $_GET['category_id'] != 0) {
            $category_id = $_GET['category_id'];
            if(isset($_GET['keyword'])){
                $key = $_GET['keyword']; 
                $data = Product::where('category_id',$category_id)->where('name', 'LIKE', '%'. $key.'%')->paginate(2);
            }else{
                $data = Product::where('category_id',$category_id)->paginate(2);
            }
        $category  = Category::find($category_id);
        return View::make('search')->with([
            'config'=> $this->config,
            'slide'=>$this->slide,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'latest'=>$latest,
            'slide_footer'=>$this->slide_footer,
            'title'=>$category->name,
            'desc'=>$category->name,
            'ads'=>$ads,
            'data'=>$data->appends(Input::except('page')),
            'new'=>$new,
            'page'=>$this->page
            ]);                    
        }else{
            if(isset($_GET['keyword'])){
                $key = $_GET['keyword']; 
                $search = 'Tìm kiếm với từ khóa ' .$key;
                $data = Product::where('name', 'LIKE', '%'. $key.'%')->paginate(2);
            }else{
                 $search = 'Không có dữ liệu';
                $data = Product::paginate(2);
            }
         return View::make('search')->with([
            'config'=> $this->config,
            'slide'=>$this->slide,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'latest'=>$latest,
            'slide_footer'=>$this->slide_footer,
            'title'=>$search,
            'desc'=>'Tim kiem',
            'ads'=>$ads,
            'data'=>$data->appends(Input::except('page')),
            'new'=>$new,
            'page'=>$this->page
            ]);  
        }
        
    }

    public function postAccountEdit($id = null){
        $validator = Validator::make(Input::all(),
                            array(
                                'firstname'=>'required|min:2',
                                'lastname'=>'required|min:2',
                                'phone'=>'required|numeric|min:5',
                                'country'=> 'required|min:3',
                                'address'=> 'required|min:3',
                            )
        );
        if($validator->fails()) {
            return Redirect::to('account')->withErrors($validator)->withInput()->with('edit-profile-error', 'Lỗi xảy ra');;
        }else{
        $data = User::find(Auth::id());
        $data->firstname = Input::get('firstname');
        $data->lastname = Input::get('lastname');
        $data->phone = Input::get('phone');
        $data->country = Input::get('country');
        $data->address = Input::get('address');
        $data->save();
        return Redirect::to('account')->with('edit-profile', 'Thông tin của bạn đã được thay đổi');
        }
    }

    public function account(){
        $ads = Banners::where('parent_id','!=','0')->get();
        $latest = Product::orderBy('id','desc')->get();
        $data = Order::where('user_id',Auth::id())->get();
        $profile = User::find(Auth::id());
        //print_r($data);
         return View::make('account')->with([
            'config'=> $this->config,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'title'=>'Thông tin tài khoản',
            'ads'=>$ads,
            'latest'=>$latest,
            'data'=>$data,
            'profile'=> $profile,
            'page'=>$this->page
            ]);
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
		$latest = Product::remember(360)->orderBy('id','desc')->get();
        $data = Advertises::remember(360)->with('category')->get();
		return View::make('hello')->with([
			'config'=> $this->config,
			'slide'=>$this->slide,
			'category'=>$this->category,
			'menu_home'=>$this->menu_home,
			'menu'=>$this->menu,
			'latest'=>$latest,
			'slide_footer'=>$this->slide_footer,
			'new'=>$this->news,
            'data_adver'=>$data,
            'page'=>$this->page
			]);
	}

    public function view($alias=null,$id=null){
        $thumb = Product::remember(360)->with('products','color','image_detail')->find($id);
        $latest = Product::remember(360)->orderBy('id','desc')->take(5)->get();
        $parent_cate = Category::remember(360)->find($thumb->products->parent_id);
        $thum_off = array();
        $thum_off[]= $thumb;
        $thum_off[]= $parent_cate;
        $rand = Product::remember(360)->orderByRaw("RAND()")->take(5)->get();
        $ads = Banners::remember(360)->where('parent_id','!=','0')->get();
        $comment = Product::remember(360)->with(['comment','comment.users','comment.allReplies'])->where('id',$id)->get();
        $thumb->view ++;
        $view = Product::remember(360)->find($thumb->id);
        $view->view = $thumb->view;
        $view->save();
        // echo '<pre>';
        // print_r($comment);
        // echo '</pre>';
        // exit;
        $new = News::remember(360)->take(1)->get();
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
            'og_image'=>$thum_off[0]->image,
            'ads'=>$ads,
            'comment'=>$comment,
            'new'=>$new,
            'page'=>$this->page
            ]);
    }
    public function getCart(){
        
        $cart = new Cart;
        $cart->addProduct($_GET['id'],$_GET['qty']);
        return $cart->ajaxCount();
    }
    public function getComment(){
        $user_id = User::find($_GET['uid'])->lastname;
        $tmp = array();
        $tmp['uid']=  $user_id;
        $tmp['product']= $_GET['product'];
        $tmp['parent_id']= 0;
        $tmp['comment']= $_GET['comment'];
        $tmp['rate']= $_GET['rate'];
        $comment = new Comment;
        $comment->user_id = $_GET['uid'];
        $comment->product_id = $_GET['product'];
        $comment->parent_id = 0;
        $comment->content = $_GET['comment'];
        $comment->rates = $_GET['rate'];
        if($comment->save()){
            return View::make('comment')->with(['data'=>$tmp]);
        }
    }
    public function getReply(){
        $tmp = array();
        $tmp['product']=  $_GET['product'];;
        $tmp['parent_id']=  $_GET['parent_id'];
        $tmp['comment']= $_GET['comment'];
        $comment = new Comment;
        $comment->user_id = 2;
        $comment->product_id = $_GET['product'];
        $comment->parent_id = $_GET['parent_id'];
        $comment->content = $_GET['comment'];

        if($comment->save()){
            return View::make('reply')->with(['data'=>$tmp]);
        }
    }
    public function getCartDelete(){
        
        $cart = Session::get('product');
        foreach ($cart as $key => $value) 
        if($key == $_GET['id'] ){
           unset($cart[$key]);  
        }
        Session::put('product' ,$cart);
    }
    public function getAddColor(){
        $cart = new Cart;
        $cart->addColor($_GET['id'],$_GET['color']);
        // echo '<pre>';
        // print_r(Session::get('color'));
        // echo '</pre>';
        // Session::forget('color');
    }
    public function getFavoriteAdd(){
        $favo = Session::get('favorite');   
        $tmp = FALSE;     
        if($favo != null){
            foreach($favo as $k => $v){
                     if($v == $_GET['id']){
                        $tmp = TRUE;
                        break;
                     }
            }
            if($tmp == FALSE){
                $favo[] = $_GET['id'];   
            }
        }else{
         $favo[] = $_GET['id'];         
        }  
        Session::put('favorite',$favo);
    }
    public function getFavoriteDelete(){
        $favo = Session::get('favorite');
        foreach($favo as $k => $favos){
            if($favos == $_GET['id']){
            unset($favo[$k]);
        }}
        if(count($favo) == 0){
        Session::forget('favorite');
        }else{
        Session::put('favorite',$favo);  
        }       
    }
    public function getCouponDelete(){
        
        $data = Session::get('coupon');
        if(null!=$data){
        $data_coupon = array();
        $data_coupon[$data[0]->code]=$data[0]->value;
        }
        foreach ($data_coupon as $key => $value) 
        if($key == $_GET['code'] ){
           unset($data_coupon[$key]);  
        }
        Session::put('coupon' ,$data_coupon);
    }
    public function postUpdate(){
        $product_id = Input::get('id');
        $cart = array();
        foreach (Input::get('count') as $index=>$count) {
                    if ($count>0) {
                        $productId = $product_id[$index];
                        $cart[$productId] = $count;

                    }
                }
        Session::put('product' ,$cart);
        return Redirect::to('check-out')->with('message', 'Cập nhật giỏ hàng thành công!');  
    }
    public function postUpdateCoupon(){
        $coupon = Input::get('coupon');
        $code = Coupon::where('code',$coupon)->get();
        
        if(count($code) != 0){
            Session::put('coupon' ,$code);
            return Redirect::to('check-out')->with('message', 'Sử dụng coupon thành công!');
        }else{
            return Redirect::to('check-out')->with('message', 'Coupon không tồn tại!');
        }
    }
    public function getCheckOut(){
        // echo '<pre>';
        // print_r(Session::get('coupon'));
        // echo '</pre>';
        // exit;
        $cart = new Cart;
        $carts = $cart->readProduct();
        if (null!=$carts) {
            $key =0;
            foreach ($carts as $productId => $count) {               
                $product[$key] = Product::remember(360)->with('color')->find($productId);
                $product[$key]->count = $count;
                $key++;
            }
        }
        if(empty($product)){
            $product = array();
        }
        $data= Session::get('coupon');
        if(null!=$data){
        $data_coupon = array();
        $data_coupon[$data[0]->code]=$data[0]->value;
        }
        if(empty($data_coupon)){
            $data_coupon = array();
        }
        return View::make('check-out')->with([
            'config'=> $this->config,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'count_product'=>$cart->ajaxCount(),
            'product'=>$product,
            'title'=>'Giỏ hàng của bạn',
            'data_coupon'=>$data_coupon,
            'page'=>$this->page
            ]);
    }
    public function getOrder(){
        $cart = new Cart;
        $carts = $cart->readProduct();
        if (null!=$carts) {
            $key =0;
            foreach ($carts as $productId => $count) {               
                $product[$key] = Product::with('color')->find($productId);
                $product[$key]->count = $count;
                $key++;
            }
        }
        if(empty($product)){
            $product = array();
        }
        $data= Session::get('coupon');
        if(null!=$data){
        $data_coupon = array();
        $data_coupon[$data[0]->code]=$data[0]->value;
        }
        if(empty($data_coupon)){
            $data_coupon = array();
        }
        return View::make('order')->with([
            'config'=> $this->config,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'title'=>'Thanh toán',
            'product'=>$product,
            'data_coupon'=>$data_coupon,
            'page'=>$this->page
            ]);
    }
    public function getWishList(){
       //Session::forget('favorite');
        $ads = Banners::where('parent_id','!=','0')->get();
        $latest = Product::orderBy('id','desc')->get();
        $product = Session::get('favorite');
        $new = News::take(1)->get();
        $tmp = array();
        if($product){
        foreach($product as $id){
            $data = Product::find($id);
            $tmp[]=$data;
        }}else{
            $product= array();
        }
         return View::make('wish')->with([
            'config'=> $this->config,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'title'=>'Sản Phẩm Yêu Thích',
            'ads'=>$ads,
            'latest'=>$latest,
            'data'=>$tmp,
            'new'=>$new,
            'page'=>$this->page
            ]);
    }
    public function getLogin(){
        return View::make('login')->with([
            'config'=> $this->config,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'title'=>'Đăng nhập tài khoản',
            'page'=>$this->page
            ]);
    }
    public function getRegister(){
         return View::make('register')->with([
            'config'=> $this->config,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'title'=>'Đăng kí tài khoản',
            'page'=>$this->page
            ]);
    }
    public function postOrderAddSpecial(){
        $order = new Order;
        $order->user_id =  Auth::id();
        $order->total = Input::get('total');
        $order->type = Input::get('type');
        $order->valid = 0;
        $order->name = 0;
        if($order->save()){
            foreach(Input::get('price') as $k => $v){
                $order_detail = new Detail;
                $order_detail->qty = $v ;
                $order_detail->product_id =$k;
                $order_detail->order_id =  DB::table('orders')->max('id');
                $order_detail->save();
            }                    
                     
        }
        if(Session::has('coupon') != null){
                $coupon = Coupon::find(Session::get('coupon')[0]->id);
                $coupon->delete();
                Session::forget('coupon');
            }
            Session::forget('product');
            return Redirect::to('/')->with('order', 'Gửi đơn hàng thành công!');
    }
    
    public function postOrderAdd(){
    $validator = Validator::make(Input::all(), User::$order);
    $niceNames = array(
    'email' => 'Địa chỉ email',
    'address'=>'Địa chỉ',
    'country'=>'Thành Phố',
    'phone'=>'Số Điện Thoại'
    );
    $validator->setAttributeNames($niceNames); 
    if ($validator->passes()) {
            $data = new User;
            $data->firstname = Input::get('firstname');
            $data->lastname  = Input::get('lastname');
            $data->email  = Input::get('email');
            $data->address  = Input::get('address');
            $data->country  = Input::get('country');
            $data->phone  = Input::get('phone');
            $data->roles  = 0;
            $data->save();
            if($data->save()){
                $order = new Order;
                $order->user_id =  DB::table('users')->max('id');
                $order->total = Input::get('total');
                $order->type = Input::get('type');
                $order->valid = 0;
                $order->name = 0;
                $order->save();
                if($order->save()){
                    foreach(Input::get('price') as $k => $v){
                        $order_detail = new Detail;
                        $order_detail->qty = $v ;
                        $order_detail->product_id =$k;
                        $order_detail->order_id =  DB::table('orders')->max('id');
                        $order_detail->save();
                    }                    
                     
                }

            }
            if(Session::has('coupon') != null){
                $coupon = Coupon::find(Session::get('coupon')[0]->id);
                $coupon->delete();
                Session::forget('coupon');
            }
            Session::forget('product');
            return Redirect::to('/')->with('order', 'Gửi đơn hàng thành công!');
        }else{
            return Redirect::to('/order')->withErrors($validator)->withInput();
        }

    }

}
