@extends('layouts.front')
@section('content')
<style>
.reply-each{
    display:none;
    right:30px;
    position:absolute;
}
.comment:hover .reply-each {
    display:block;
    right:30px;
    position:absolute;
}
.btn-add-cart{
    background-color: #958457;
}
#product .pb-right-column .form-option #size_chart{
    color:#958457;
}
#product .pb-right-column .product-price-group .price{
    color:#958457;
}
.products-block .product-price{
    color:#958457;
}
.nav-top-menu{
    background-color: #958457;
}
.box-vertical-megamenus .title {
   background-color: #4c311d;
}
.btn-add-cart:focus, .btn-add-cart:hover {
    color:none;
}
</style>
@include('layouts.common.nav')
@stop
@section('main')
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
            <?php 
        		Breadcrumbs::register('home', function($breadcrumbs) {
            		$breadcrumbs->push('Trang chủ', URL::to('/'));
        		});
        		Breadcrumbs::register('parent_category', function($breadcrumbs,$thum_off) {
                $breadcrumbs->parent('home');
                $breadcrumbs->push($thum_off[1]->name, URL::to('/chuyen-muc/'.$thum_off[1]->id));
                $breadcrumbs->push($thum_off[0]->products->name);
                $breadcrumbs->push($thum_off[0]->name);
            	});
        		echo Breadcrumbs::render('parent_category',$thum_off);
        	?>
            </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block best sellers -->
                @include('layouts.common.lates')
                <!-- ./block best sellers  -->               
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">Danh mục khác</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <?php foreach($menu_home as $v_menu_cate){
                                        
                                    ?>
                                    <li <?php if(isset($v_menu_cate['sub'])){echo 'class="active"';} ?>>
                                        <span></span><a href="#">{{$v_menu_cate['name']}}</a>
                                         <?php if(isset($v_menu_cate['sub'])) {?>
                                        <ul>
                                            <?php foreach($v_menu_cate['sub'] as $k_product_menu){?>
                                            <li><span></span><a href="{{URL::to('chuyen-muc/'.$k_product_menu['id'])}}"><?php echo $k_product_menu['name'];?></a></li>
                                            <?php } ?>
                                        </ul>
                                        <?php }?>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->               
                <!-- left slide advertisment -->
                <?php foreach($ads as $kads){?>
                @include('layouts.common.advertis')
                <?php } ?>
                <!--./left slide advertisment-->               
                <!-- news -->
                  @if(isset($new[0]))
                <div class="col-left-slide left-module">
                    <div class="block left-module">
                    <p class="title_block">Tin tức</p>
                    <div class="block_content">
                      
                        <ul class="products-block">
                            <li>
                                <div class="products-block-left">
                                    <a href="{{URL::route('news-front', [$new[0]->alias,$new[0]->id])}}">
                                        <img src="{{URL::to('public/upload/image/'.$new[0]->image)}}" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="{{URL::route('news-front', [$new[0]->alias,$new[0]->id])}}">{{$new[0]->title}}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="{{URL::to('blog')}}">Tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @endif
                <!--./left silde-->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src='{{URL::asset("public/upload/image/".$thum_off[0]->image)}}' data-zoom-image='{{URL::asset("public/upload/image/".$thum_off[0]->image)}}'/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                            <?php foreach($thum_off[0]->image_detail as $vthum_off_image){?>
                                            <li>
                                                <a href="#" data-image="{{URL::asset('public/upload/image/'.$vthum_off_image->name)}}" data-zoom-image="{{URL::asset('public/upload/image/'.$vthum_off_image->name)}}">
                                                    <img id="product-zoom"  src="{{URL::asset('public/upload/image/'.$vthum_off_image->name)}}" /> 
                                                </a>
                                            </li>
                                              <?php }?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{{$thum_off[0]->name}}</h1>
                                <div class="product-comments">
                                </div>
                                <div class="product-price-group">
                                    <span class="price">
                                        @if($thum_off[0]->price_sales == null)
                                        {{number_format($thum_off[0]->price)}}
                                        @else 
                                         {{number_format($thum_off[0]->price_sales)}}
                                        @endif
                                         VNĐ
                                    </span>
                                    <span class="old-price">
                                        @if($thum_off[0]->price_sales != null)
                                        {{number_format($thum_off[0]->price)}}
                                        @endif
                                    </span> @if($thum_off[0]->price_sales != null)
                                    <span class="discount">
                                       
                                        - {{number_format((($thum_off[0]->price - $thum_off[0]->price_sales)/$thum_off[0]->price)*100)}}%
                                        
                                    </span>@endif
                                </div>
                                <div class="info-orther">
                                    <p>Mã sản phẩm: {{$thum_off[0]->code}}</p>
                                    <p>Tình trạng: <span class="in-stock">@if($thum_off[0]->price == 0) Hết hàng @else Còn Hàng @endif</span></p>
                                    <p>Lượt xem : {{$thum_off[0]->view}}</p>
                                    <p><div class="addthis_native_toolbox"></div></p>
                                </div>
                                <div class="product-desc">
                                {{$thum_off[0]->short_detail}}
                                </div>
                                <div class="form-option">
                                    <p class="form-option-title">Tùy chọn :</p>
                                    <div class="attributes">
                                        <div class="attribute-label">Màu:</div>
                                        <div class="attribute-list">
                                            <ul class="list-color">
                                                <?php foreach($thum_off[0]->color as $vthum_off_color){?>
                                                
                                                <li style="background:{{$vthum_off_color->name}};">
                                                    <span>
                                                        @if(count(Session::get('color')) != 0)
                                                        @foreach(Session::get('color') as $k_check_color => $v_check_color)
                                                            @if($v_check_color == $vthum_off_color->name)
                                                            <span class="check-color" style="position:relative;top:-6px;left:4px"> X </span>
                                                            @endif
                                                        @endforeach
                                                        @endif
                                                    </span><a href="javascript:void(0)" data = '{{$vthum_off_color->name}}' uid="{{$thum_off[0]->id}}" onclick="color(this)">{{$vthum_off_color->name}}</a></li>
                                               
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                        {{ Form::open(array('route' => 'fast', 'id'=>'form-fast')) }}
                                    <div class="attributes">
                                        <div class="attribute-label">Số Lượng:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="">
                                                <input id="option-product-qty" name="qty" type="number" value="1">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <?php $size = ['0'=>'Free Size','1'=>'XS','2'=>'S','3'=>'M','4'=>'L','5'=>'XL','6'=>'XXL']; ?>
                                            <select>
                                                @foreach($size as $k_size => $v_size)
                                                <option value="{{$k_size}}" <?php if($k_size == $thum_off[0]->size) echo 'selected';?>>{{$v_size}}</option>
                                                @endforeach
                                            </select>
                                            <a id="size_chart" class="fancybox" href="{{URL::asset('public/front/assets/data/size-chart.jpg')}}">Size Chart</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="btn-add-cart" href="javascript:void(0)" id="add_cart">Thêm vào giỏ hàng</a>
                                        <input type="hidden" name="product_id" id="id_cart" value="{{$thum_off[0]->id}}">
                                            <a class="btn-add-cart" onclick="fastbuy()" style="cursor:pointer">Mua ngay</a>
                        {{ Form::close() }}
                                    </div>
                                    <div class="button-group">
                                        <a 
                                        data = '{{$thum_off[0]->id}}'
                                        class="wishlist like heart"
                                        onclick="favorites(this)" 
                                        href="javascript:void(0)">
                                        <i class="fa fa-heart-o" 
                                        style=
                                        "<?php if(Session::get('favorite') != null){
                                                    foreach(Session::get('favorite') as $k => $v){
                                                        if($v == $thum_off[0]->id ){
                                                            echo 'background-color:pink';
                                                            break;
                                                        }
                                                    }
                                            }
                                        ?>" 
                                        flag=
                                        "<?php if(Session::get('favorite') != null){
                                                    foreach(Session::get('favorite') as $k => $v){
                                                        if($v == $thum_off[0]->id ){
                                                            echo 'TRUE';
                                                            break;
                                                        }
                                                }
                                                }else{
                                                    echo ' ';
                                        }?>">
                                        </i>
                                        <br>Yêu thích</a>
                                        <a class="compare" target="_blank" href="http://www.facebook.com/share.php?u={{ Request::url() }}&title=ok"><i class="fa fa-thumbs-up"></i>
                                        <br>        
                                        Share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Chi tiết sản phẩm</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">Đánh giá - Nhận xét</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">Hướng dẫn mua hàng</a>
                                </li>
                                
                                <li>
                                    <a data-toggle="tab" href="#extra-tabs">Điều khoản</a>
                                </li>
                               
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                {{$thum_off[0]->long_detail}}

                                </div>
                                <div id="information" class="tab-panel">
                                   <p>{{$config->tutorial}}</p> 
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab" >
                                        <?php ?>
                                        @foreach($comment[0]->comment as  $v_comment)
                                        <!-- -->
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Đánh giá</span>
                                                    <span class="reviewRating">
                                                        <?php $k =$v_comment->rates ;?>
                                                        @for($m=0;$m < $k;$m++ )
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>{{$v_comment->users->lastname}}</strong></span>
                                                    <em>
                                                        <?php $arr_tmp_create = explode(' ',$v_comment->users->created_at);?>
                                                        {{$arr_tmp_create[0]}}
                                                    </em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                              {{$v_comment->content}}
                                            
                                            @if(isset(Auth::user()->roles) == 1)
                                            <button class="btn btn-primary btn-xs reply-each" data="{{$v_comment->id}}" product="{{$thum_off[0]->id}}">Trả lời</button>
                                            @endif
                                            </div>
                                        </div>

                                        {{ Helpers::comment($v_comment->allReplies)}}
                                        
                                        <!-- -->
                                        @endforeach
                                        <?php ?>
                                        <div class="append-comment"></div>
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <a class="btn-comment" href="#">Nhận xét !</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                <textarea placeholder="Viết vài lời nhận xét" class="form-control" rows="6" id="content-comment" uid="2" data="{{$thum_off[0]->id}}"></textarea>
                                                <p><div style="margin-top:20px" id="default"></div></p>
                                                <a class="btn-comment btn-warning" href="javascript:void(0)" id="reply-comment">Đăng</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                    <p>{{$config->policy}}</p> 
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Sản phẩm liên quan</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                <?php foreach($menu_home as $v_menu_cate){ 
                                        if(isset($v_menu_cate['sub'])){ 
                                            foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ 
                                                if(isset($v_sub['product'])){
                                                foreach($v_sub['product'] as $k_product_menu){  
                                                    if($k_product_menu->id != $thum_off[0]->id){
                                ?>

                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}">
                                                <img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$k_product_menu->image)}}" />
                                            </a>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}">Thêm vào giỏ </a>
                                            </div>
                                        @if($k_product_menu->price_sales != null)
                                           <div class="price-percent-reduction2">- {{number_format((($k_product_menu->price - $k_product_menu->price_sales)/$k_product_menu->price)*100)}}% OFF</div>
                                        @endif
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><?php echo $k_product_menu->name;?></a></h5>
                                            
                                            <div class="content_price">
                                                                <span class="price product-price">
                                                                @if($k_product_menu->price_sales == null)
                                                                    {{number_format($k_product_menu->price)}}
                                                                    @else 
                                                                     {{number_format($k_product_menu->price_sales)}}
                                                                    @endif
                                                                 VNĐ
                                                                </span>
                                                                <span class="price old-price">
                                                                    @if($k_product_menu->price_sales != null)
                                                                        {{number_format($k_product_menu->price)}}
                                                                    @endif
                                                                </span>
                                                        </div>
                                        </div>
                                    </div>
                                </li>

                                <?php }}}}}}?>
                              
                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Có thể bạn quan tâm</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                
                                <?php foreach($rand as $v_rand){?>
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="{{URL::route('product-front', [$v_rand->alias,$v_rand->id])}}">
                                                <img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$v_rand->image)}}" />
                                            </a>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{{URL::route('product-front', [$v_rand->alias,$v_rand->id])}}">Thêm vào giỏ</a>
                                            </div>
                                            @if($v_rand->price_sales != null)
                                           <div class="price-percent-reduction2">- {{number_format((($v_rand->price - $v_rand->price_sales)/$v_rand->price)*100)}}% OFF</div>
                                        @endif
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{URL::route('product-front', [$v_rand->alias,$v_rand->id])}}">{{$v_rand->name}}<a></h5>
                                            
                                            <div class="content_price">
                                                <span class="price product-price">
                                                @if($v_rand->price_sales == null)
                                                    {{number_format($v_rand->price)}}
                                                    @else 
                                                     {{number_format($v_rand->price_sales)}}
                                                    @endif
                                                 VNĐ
                                                </span>
                                                <span class="price old-price">
                                                    @if($v_rand->price_sales != null)
                                                        {{number_format($v_rand->price)}}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               <?php } ?>
                               
                            </ul>
                        </div>
                        <!-- ./box product -->
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@stop
<script>
    function fastbuy(){
        document.getElementById("form-fast").submit();
    }
</script>