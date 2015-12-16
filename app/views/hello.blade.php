@extends('layouts.front')
 
@section('content')
 <style>
.option2 .category-featured.fashion .nav-menu .nav>li:hover a, .option2 .category-featured.fashion .nav-menu .nav>li.active a,.option2 .category-featured.fashion .nav-menu .nav>li:hover a:after, .option2 .category-featured.fashion .nav-menu .nav>li.active a:after {
    color:#f96d10 !important;
}
.option2 .category-featured.fashion .nav-menu .nav>li>a:before {
    background : #f96d10 !important;
}

</style>
@include('layouts.common.nav')
@stop
@section('main')
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">SẢN PHẨM MỚI NHẤT</span>
                </h2>
                <div class="latest-deals-product">
                    <span class="count-down-time2" style="display:none">
                        <span class="icon-clock"></span>
                        <span>end in</span>
                        <span class="countdown-lastest" data-y="2016" data-m="7" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                    </span>
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                       <?php foreach($latest as $late){?>
                        <li>
                            <div class="left-block">
                                <?php //echo $late->alias;?>
                                <a href="{{URL::route('product-front', [$late->alias,$late->id])}}"><img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$late->image)}}" /></a>
                                <div class="quick-view" style="display:none">
                                    <a title="Thêm vào mục yêu thích" data = '{{$late->id}}' class="heart" href="javascript:void(0)" onclick="favorite(this)" 
                                        style=
                                        "<?php if(Session::get('favorite') != null){
                                                    foreach(Session::get('favorite') as $k => $v){
                                                        if($v == $late->id ){
                                                            echo 'background-color:pink';
                                                            break;
                                                        }
                                                    }
                                            }
                                        ?>" 
                                        flag=
                                        "<?php if(Session::get('favorite') != null){
                                                    foreach(Session::get('favorite') as $k => $v){
                                                        if($v == $late->id ){
                                                            echo 'TRUE';
                                                            break;
                                                        }
                                                }
                                                }else{
                                                    echo ' ';
                                        }?>"
                                    >
                                    </a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="{{URL::route('product-front', [$late->alias,$late->id])}}">Thêm vào giỏ hàng</a>
                                </div>
                                @if($late->price_sales != null)
                                <div class="price-percent-reduction2">- {{number_format((($late->price - $late->price_sales)/$late->price)*100)}}% OFF</div>
                                @endif
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">{{$late->name}}</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">
                                    @if($late->price_sales == null)
                                        {{number_format($late->price)}}
                                        @else 
                                        {{number_format($late->price_sales)}}
                                    @endif
                                     VNĐ
                                    </span>
                                    <span class="price old-price">
                                        @if($late->price_sales != null)
                                            {{number_format($late->price)}}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </li>
                     <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->
<div class="content-page">
    <div class="container">
        <?php $count_move = 0;
        $b = -1;
        ?>
        <!-- featured category fashion -->
        <?php foreach($menu_home as $v_menu_cate){ ?>
        <?php if($v_menu_cate['pick'] == 1) { ?>
        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand" style="background-color:{{$v_menu_cate['color']}}"><a href="{{URL::to('chuyen-muc/'.$v_menu_cate['id'])}}"><span class="icon-menu-next"><?php echo $v_menu_cate['icon'];?></span>{{$v_menu_cate['name']}}</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" style="border-bottom-color:{{$v_menu_cate['color']}}">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#featured-{{$v_menu_cate['id']}}">Nổi bật</a></li>
                    <li><a data-toggle="tab" href="#news-product-{{$v_menu_cate['id']}}">Mới nhất</a></li>
                    <li><a data-toggle="tab" href="#best-view-{{$v_menu_cate['id']}}">Xem nhiều</a></li>
                    <li><a data-toggle="tab" href="#sales-{{$v_menu_cate['id']}}">Giảm giá</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
               
              <div id="elevator-{{$count_move}}" class="floor-elevator">
                <?php 
                    $a = ++$count_move;
                ?>
                    <a href="#elevator-<?php echo $b;?>" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-{{$a}}" class="btn-elevator down fa fa-angle-down"></a>
                    <?php $b++;?>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">                            
                            <?php 
                            if(isset($v_menu_cate['sub'])) {
                            foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ ?>
                            <li><a href="{{URL::to('chuyen-muc/'.$v_sub['id'])}}">{{$v_sub['name']}}</a></li>
                            <?php }}?>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <!-- Best-view -->
                                <div class="tab-panel" id="best-view-{{$v_menu_cate['id']}}">
                                   <div class="box-left">
                                        <?php foreach($data_adver as $v_adver){
                                            if($v_adver->type == 2){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){ 
                                                    ?>                                                   
                                                    <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                                        @foreach($data_adver as $child_2_adver)
                                                        @if($child_2_adver->type == 2 && $child_2_adver->parent_id == null)
                                                        <li><a href="{{$child_2_adver->link}}"><img src="{{URL::to('public/upload/image/'. $child_2_adver->image)}}" alt="Image"></a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>                                                   
                                                    <?php }
                                                }
                                            }    
                                            if($v_adver->type == null){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                        <div class="banner-img">
                                            <a href="{{$v_adver->link}}"><img src="{{URL::to('public/upload/image/'. $v_adver->image)}}" alt="Banner Product"></a>                                       
                                        </div>
                                        <?php  } }
                                             }elseif($v_adver->type == 1 && $v_adver->parent_id == 1 ){ 
                                                 foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Tin khuyến mãi</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <?php 
                                                foreach($data_adver as $child){
                                                    if($child->type == 1 && $child->parent_id == null){
                                                ?>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}">{{$child->name}}</a></p>
                                                        <div class="price">
                                                             <span class="product-price">
                                                                @if($child->price_sales == null)
                                                                    {{number_format($child->price)}}
                                                                    @else 
                                                                     {{number_format($child->price_sales)}}
                                                                    @endif
                                                                 VNĐ
                                                                </span>
                                                                <span class="old-price">
                                                                    @if($child->price_sales != null)
                                                                        {{number_format($child->price)}}
                                                                    @endif
                                                                </span>
                                                            <!-- <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span> -->
                                                        </div>
                                                        <div class="product-desc">
                                                            {{word_limiter($child->short_detail,15)}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php  }}?>
                                            </ul>
                                        </div>
                                        <?php  
                                        foreach($data_adver as $child){
                                            if($child->type == 1 && $child->parent_id == 1){
                                        ?>
                                        <ul class="" data-loop="true" data-items="1" data-dots="false" data-nav="true">
                                        <?php  //if($child->type == 1 && $child->parent_id == 1){?> 
                                            <li><a href="#"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Image"></a></li>
                                        <?php }}?>
                                        </ul>
                                                
                                        <?php  } } }} ?>
                                   </div>
                                   
                                   <div class="box-right">
                                       <ul class="product-list row">
                                        <?php 
                                            if(isset($v_menu_cate['sub'])) {
                                            foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ ?>
                                               <?php if(isset($v_sub['products_best_view'])){
                                                foreach($v_sub['products_best_view'] as $k_product_menu){
                                                ?>
                                                <li class="col-sm-4">
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
                                                    <div class="left-block">
                                                        <a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$k_product_menu->image)}}" /></a>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}">Chi tiết sản phẩm</a>
                                                        </div>
                                                        @if($k_product_menu->price_sales != null)
                                                        <div class="price-percent-reduction2">- {{number_format((($k_product_menu->price - $k_product_menu->price_sales)/$k_product_menu->price)*100)}}% OFF</div>
                                                        @endif
                                                    </div>
                                                </li>
                                            <?php  }}} }?>        
                                       </ul>
                                   </div>
                                </div>
                                <!-- Best-view-->
                                <!-- Sales-->
                                <div class="tab-panel" id="sales-{{$v_menu_cate['id']}}">
                                   <div class="box-left">
                                        <?php foreach($data_adver as $v_adver){
                                            if($v_adver->type == 2){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){ 
                                                    ?>                                                   
                                                    <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                                        @foreach($data_adver as $child_2_adver)
                                                        @if($child_2_adver->type == 2 && $child_2_adver->parent_id == null)
                                                        <li><a href="{{$child_2_adver->link}}"><img src="{{URL::to('public/upload/image/'. $child_2_adver->image)}}" alt="Image"></a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>                                                   
                                                    <?php }
                                                }
                                            } 
                                            if($v_adver->type == null){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                        <div class="banner-img">
                                            <a href="{{$v_adver->link}}"><img src="{{URL::to('public/upload/image/'. $v_adver->image)}}" alt="Banner Product"></a>                                       
                                        </div>
                                        <?php  } }
                                             }elseif($v_adver->type == 1 && $v_adver->parent_id == 1 ){ 
                                                 foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Tin khuyến mãi</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <?php 
                                                foreach($data_adver as $child){
                                                    if($child->type == 1 && $child->parent_id == null){
                                                ?>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}">{{$child->name}}</a></p>
                                                        <div class="price">
                                                             <span class="product-price">
                                                                @if($child->price_sales == null)
                                                                    {{number_format($child->price)}}
                                                                    @else 
                                                                     {{number_format($child->price_sales)}}
                                                                    @endif
                                                                 VNĐ
                                                                </span>
                                                                <span class="old-price">
                                                                    @if($child->price_sales != null)
                                                                        {{number_format($child->price)}}
                                                                    @endif
                                                                </span>
                                                            <!-- <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span> -->
                                                        </div>
                                                        <div class="product-desc">
                                                            {{word_limiter($child->short_detail,15)}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php  }}?>
                                            </ul>
                                        </div>
                                        <?php  
                                        foreach($data_adver as $child){
                                            if($child->type == 1 && $child->parent_id == 1){
                                        ?>
                                        <ul class="" data-loop="true" data-items="1" data-dots="false" data-nav="true">
                                        <?php  //if($child->type == 1 && $child->parent_id == 1){?> 
                                            <li><a href="#"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Image"></a></li>
                                        <?php }}?>
                                        </ul>
                                                
                                        <?php  } } }} ?>
                                   </div>
                                   
                                   <div class="box-right">
                                       <ul class="product-list row">
                                        <?php 
                                            if(isset($v_menu_cate['sub'])) {
                                            foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ ?>
                                               <?php if(isset($v_sub['product'])){
                                                foreach($v_sub['product'] as $k_product_menu){
                                                    if($k_product_menu->sales == 1){
                                                ?>
                                                <li class="col-sm-4">
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
                                                    <div class="left-block">
                                                        <a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$k_product_menu->image)}}" /></a>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}">Chi tiết sản phẩm</a>
                                                        </div>
                                                        @if($k_product_menu->price_sales != null)
                                                        <div class="price-percent-reduction2">- {{number_format((($k_product_menu->price - $k_product_menu->price_sales)/$k_product_menu->price)*100)}}% OFF</div>
                                                        @endif
                                                    </div>
                                                </li>
                                            <?php  }}}} }?>        
                                       </ul>
                                   </div>
                                </div>
                                <!-- Sales-->
                                 <!-- News-->
                                <div class="tab-panel" id="news-product-{{$v_menu_cate['id']}}">
                                   
                                   <div class="box-left">
                                        <?php foreach($data_adver as $v_adver){
                                            if($v_adver->type == 2){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){ 
                                                    ?>                                                   
                                                    <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                                        @foreach($data_adver as $child_2_adver)
                                                        @if($child_2_adver->type == 2 && $child_2_adver->parent_id == null)
                                                        <li><a href="{{$child_2_adver->link}}"><img src="{{URL::to('public/upload/image/'. $child_2_adver->image)}}" alt="Image"></a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>                                                   
                                                    <?php }
                                                }
                                            } 
                                            if($v_adver->type == null){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                        <div class="banner-img">
                                            <a href="{{$v_adver->link}}"><img src="{{URL::to('public/upload/image/'. $v_adver->image)}}" alt="Banner Product"></a>                                       
                                        </div>
                                        <?php  } }
                                             }elseif($v_adver->type == 1 && $v_adver->parent_id == 1 ){ 
                                                 foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Tin khuyến mãi</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <?php
                                                foreach($data_adver as $child){
                                                    if($child->type == 1 && $child->parent_id == null){
                                                       //
                                                ?>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}">{{$child->name}}</a></p>
                                                        <div class="price">
                                                             <span class="product-price">
                                                                @if($child->price_sales == null)
                                                                    {{number_format($child->price)}}
                                                                    @else 
                                                                     {{number_format($child->price_sales)}}
                                                                    @endif
                                                                 VNĐ
                                                                </span>
                                                                <span class="old-price">
                                                                    @if($child->price_sales != null)
                                                                        {{number_format($child->price)}}
                                                                    @endif
                                                                </span>
                                                            <!-- <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span> -->
                                                        </div>
                                                        <div class="product-desc">
                                                            {{word_limiter($child->short_detail,15)}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php  }}?>
                                            </ul>
                                        </div>
                                        <?php  
                                        foreach($data_adver as $child){
                                            if($child->type == 1 && $child->parent_id == 1){
                                        ?>
                                        <ul class="" data-loop="true" data-items="1" data-dots="false" data-nav="true">
                                        <?php  //if($child->type == 1 && $child->parent_id == 1){?> 
                                            <li><a href="#"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Image"></a></li>
                                        <?php }}?>
                                        </ul>
                                                
                                        <?php  } } }} ?>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                        <?php 
                                if(isset($v_menu_cate['sub'])) {
                                    foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ ?>
                                <?php if(isset($v_sub['products_order_news']))
                                {
                                            foreach($v_sub['products_order_news'] as $k_product_menu)
                                            {
                                                ?>
                                                <li class="col-sm-4">
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
                                                    <div class="left-block">
                                                        <a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$k_product_menu->image)}}" /></a>
                                                        <!-- <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div> -->
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}">Chi tiết sản phẩm</a>
                                                        </div>
                                                        @if($k_product_menu->price_sales != null)
                                                        <div class="price-percent-reduction2">- {{number_format((($k_product_menu->price - $k_product_menu->price_sales)/$k_product_menu->price)*100)}}% OFF</div>
                                                        @endif
                                                    </div>
                                                </li>
                                            <?php  
                                            }
                                        }
                                    }
                                }
                                ?>        
                                       </ul>
                                   </div>
                                </div>
                                <!-- News-->
                                <!-- Featured-->
                                <div class="tab-panel active" id="featured-{{$v_menu_cate['id']}}">
                                   <div class="box-left">
                                        <?php foreach($data_adver as $v_adver){
                                            if($v_adver->type == 2){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){ 
                                                    ?>                                                   
                                                    <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                                        @foreach($data_adver as $child_2_adver)
                                                        @if($child_2_adver->type == 2 && $child_2_adver->parent_id == null)
                                                        <li><a href="{{$child_2_adver->link}}"><img src="{{URL::to('public/upload/image/'. $child_2_adver->image)}}" alt="Image"></a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>                                                   
                                                    <?php }
                                                }
                                            } 
                                            if($v_adver->type == null){
                                                foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                        <div class="banner-img">
                                            <a href="{{$v_adver->link}}"><img src="{{URL::to('public/upload/image/'. $v_adver->image)}}" alt="Banner Product"></a>                                       
                                        </div>
                                        <?php  } }
                                             }elseif($v_adver->type == 1 && $v_adver->parent_id == 1 ){ 
                                                 foreach($v_adver->category as $v_category_ad){
                                                    if($v_category_ad->id == $v_menu_cate['id'] ){  
                                        ?>
                                         <!-- <div class="banner-img">
                                            <a href="#"><img src="{{URL::to('public/upload/image/'. $v_adver->image)}}" alt="Banner Product"></a>                                       
                                        </div> -->
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Tin khuyến mãi</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <?php
                                                foreach($data_adver as $child){
                                                    if($child->type == 1 && $child->parent_id == null){
                                                ?>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="{{URL::route('product-front', [$child->alias,$child->product_id])}}">{{$child->name}}</a></p>
                                                        <div class="price">
                                                             <span class="product-price">
                                                                @if($child->price_sales == null)
                                                                    {{number_format($child->price)}}
                                                                    @else 
                                                                     {{number_format($child->price_sales)}}
                                                                    @endif
                                                                 VNĐ
                                                                </span>
                                                                <span class="old-price">
                                                                    @if($child->price_sales != null)
                                                                        {{number_format($child->price)}}
                                                                    @endif
                                                                </span>
                                                            <!-- <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span> -->
                                                        </div>
                                                        <div class="product-desc">
                                                            {{word_limiter($child->short_detail,15)}}
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php  }}?>
                                            </ul>
                                        </div>
                                        <?php  
                                        foreach($data_adver as $child){
                                            if($child->type == 1 && $child->parent_id == 1){
                                        ?>
                                        <ul class="" data-loop="true" data-items="1" data-dots="false" data-nav="true">
                                        <?php  //if($child->type == 1 && $child->parent_id == 1){?> 
                                            <li><a href="#"><img src="{{URL::to('public/upload/image/'.$child->image)}}" alt="Image"></a></li>
                                        <?php }}?>
                                        </ul>
                                                
                                        <?php  } } }} ?>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                    
                        <?php if(isset($v_menu_cate['sub'])) 
                            {
                        echo '<div class="more-featured">';      
                               foreach($v_menu_cate['sub'] as $k_sub => $v_sub)
                                { 
                                    if(isset($v_sub['product']))
                                    {
                                        $limit_feature = 0;
                                        foreach($v_sub['product'] as $k_product_menu)
                                        {
                                           if($limit_feature < 5)
                                           { 
                                                if($k_product_menu->featured == 0)
                                                {?>
                                                <li class="col-sm-4">
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
                                                    <div class="left-block">
                                                        <a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$k_product_menu->image)}}" /></a>
                                                      
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}">Chi tiết sản phẩm</a>
                                                        </div>
                                                        @if($k_product_menu->price_sales != null)
                                                        <div class="price-percent-reduction2">- {{number_format((($k_product_menu->price - $k_product_menu->price_sales)/$k_product_menu->price)*100)}}% OFF</div>
                                                        @endif
                                                    </div>
                                                </li>
                                            
                                            <?php  
                                                }
                                            }
                                                $limit_feature++;
                                            }
                                        }
                                    }
                        echo '</div>';           
                                if(isset($v_sub['product']) && count($v_sub['product']) > 5){    
                                    echo '<input data="'.$v_menu_cate['id'].'" count = "'.count($v_sub['product']).'" num="5" style="width:97%;padding:5px 5px 5px 5px;margin:5px 0px 5px 10px" type="button" class="button load-more-featured" value="Xem Thêm">'; 
                                }
                                }
                            ?>
                                               
                                       </ul>
                                   </div>
                                </div>
                                <!-- Featured-->
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category fashion -->
        <?php }
        } ?>
    </div>
</div>
<?php 
function word_limiter($str, $limit = 100, $end_char = '&#8230;')
{
    if (trim($str) == '')
    {
        return $str;
    }

    preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

    if (strlen($str) == strlen($matches[0]))
    {
        $end_char = '';
    }

    return rtrim($matches[0]).$end_char;
}
?>
@stop
<!-- Trigger the modal with a button -->
<button style="display:none" type="button" id="front-ad" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="noshow(this)" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       <img src="{{URL::asset('public/upload/image/'.$config->image_popup)}}"/>
      </div>
    </div>

  </div>
</div>
