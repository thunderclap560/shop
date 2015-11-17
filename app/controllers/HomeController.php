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
        
        $thumb = Product::with('products','color','image_detail')->find($id);
        $latest = Product::orderBy('id','desc')->get();
        $parent_cate = Category::find($thumb->products->parent_id);
        $thum_off = array();
        $thum_off[]= $thumb;
        $thum_off[]= $parent_cate;
        $rand = Product::orderByRaw("RAND()")->get();
        $ads = Banners::where('parent_id','!=','0')->get();
        $comment = Product::with(['comment','comment.users','comment.allReplies'])->where('id',$id)->get();
        // echo '<pre>';
        // print_r($comment);
        // echo '</pre>';
        // exit;
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
            'ads'=>$ads,
            'comment'=>$comment
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
        return View::make('check-out')->with([
            'config'=> $this->config,
            'category'=>$this->category,
            'menu_home'=>$this->menu_home,
            'menu'=>$this->menu,
            'slide_footer'=>$this->slide_footer,
            'count_product'=>$cart->ajaxCount(),
            'product'=>$product,
            'title'=>'Giỏ hàng của bạn',
            'data_coupon'=>$data_coupon
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
            'data_coupon'=>$data_coupon
            ]);
    }
    public function getWishList(){
       //Session::forget('favorite');
        $ads = Banners::where('parent_id','!=','0')->get();
        $latest = Product::orderBy('id','desc')->get();
        $product = Session::get('favorite');
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
            'data'=>$tmp
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
