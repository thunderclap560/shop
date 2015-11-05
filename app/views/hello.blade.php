@extends('layouts.front')
 
@section('content')
<div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                    <h4 class="title">
                        <span class="title-menu">Lĩnh vực</span>
                        <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">
                        	<style>
								.icon-menu-next i{
									padding-top:10px;
									width: 30px;
								}
                        	</style>
                        	<?php foreach($menu_home as $v_menu_cate){ ?>
                        	<li><a href="#" <?php if(isset($v_menu_cate['sub'])){echo 'class="parent"';} ?>><span class="icon-menu-next"><?php echo $v_menu_cate['icon'];?></span> <?php echo $v_menu_cate['name'];?></a>
								<?php if(isset($v_menu_cate['sub'])){ ?>	
									<div class="vertical-dropdown-menu">
		                                    <div class="vertical-groups col-sm-12">
		                                        <?php foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ ?>
		                                        <div class="mega-group col-sm-4">
		                                            <h4 class="mega-group-header"><span>{{$v_sub['name']}}</span></h4>
		                                            <?php if(isset($v_sub['product'])){?>
		                                            <ul class="group-link-default">
														<?php foreach($v_sub['product'] as $k_product_menu){?>
		                                                <li><a href="#"><?php echo $k_product_menu->name;?></a></li>
		                                              	<?php } ?>
		                                            </ul>
		                                            <?php } ?>
		                                        </div>
		                                        <?php }?>
		                                    </div>
		                            </div>		
								<?php } ?>
                        	<?php } ?>
                        	</li>
<!--                             <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/front/assets/data/12.png">Electronics</a></li>
 -->		                   
                        </ul>
                        <div class="all-category"><span class="open-cate">All Categories</span></div>
                    </div>
                </div>
                </div>
                    @include('layouts.common.menu')

            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>

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
                                <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/ld9.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Thêm vào giỏ hàng</a>
                                </div>
                               <!--  <div class="price-percent-reduction2">
                                    -30% OFF
                                </div> -->
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">{{$late->name}}</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">{{number_format($late->price)}} VNĐ</span>
                                    <span class="price old-price" style="display:none">$52,00</span>
                                </div>
                            </div>
                        </li>
                     <?php } ?>
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p48.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->
<div class="content-page">
    <div class="container">
        
        <!-- featured category fashion -->
        <?php foreach($menu_home as $v_menu_cate){ ?>

        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand" style="background-color:{{$v_menu_cate['color']}}"><a href="#"><img alt="fashion" src="public/front/assets/data/icon-fashion.png" />{{$v_menu_cate['name']}}</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" style="border-bottom-color:{{$v_menu_cate['color']}}">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#featured">Nổi bật</a></li>
                    <li><a data-toggle="tab" href="#news-product">Mới nhất</a></li>
                    <li><a data-toggle="tab" href="#best-view">Xem nhiều</a></li>
                    <li><a data-toggle="tab" href="#sales">Giảm giá</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">                            
                            <?php 
                            if(isset($v_menu_cate['sub'])) {
                            foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ ?>
                            <li><a href="#">{{$v_sub['name']}}</a></li>
                            <?php }}?>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <!-- Best-view -->
                                <div class="tab-panel" id="best-view">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
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
                                                        <h5 class="product-name"><a href="#"><?php echo $k_product_menu->name;?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price"><?php echo number_format($k_product_menu->price);?> VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Thêm vào giỏ hàng</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php  }}} }?>        
                                       </ul>
                                   </div>
                                </div>
                                <!-- Best-view-->
                                <!-- Sales-->
                                <div class="tab-panel" id="sales">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
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
                                                        <h5 class="product-name"><a href="#"><?php echo $k_product_menu->name;?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price"><?php echo number_format($k_product_menu->price);?> VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Thêm vào giỏ hàng</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php  }}}} }?>        
                                       </ul>
                                   </div>
                                </div>
                                <!-- Sales-->
                                 <!-- News-->
                                <div class="tab-panel" id="news-product">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
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
                                                        <h5 class="product-name"><a href="#"><?php echo $k_product_menu->name;?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price"><?php echo number_format($k_product_menu->price);?> VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Thêm vào giỏ hàng</a>
                                                        </div>
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
                                <div class="tab-panel active" id="featured">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                        <?php 
                                            if(isset($v_menu_cate['sub'])) {
                                            foreach($v_menu_cate['sub'] as $k_sub => $v_sub){ ?>
                                               <?php if(isset($v_sub['product'])){
                                                foreach($v_sub['product'] as $k_product_menu){
                                                    if($k_product_menu->featured == 0){
                                                ?>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#"><?php echo $k_product_menu->name;?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price"><?php echo number_format($k_product_menu->price);?> VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Thêm vào giỏ hàng</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php  }}}} }?>        
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
        <?php } ?>
    </div>
</div>
@stop