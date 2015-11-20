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
								.icon-menu-next>i{
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

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="/" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Return to Home">Tài khoản của bạn</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Sản phẩm yêu thích</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">Sản Phẩm Mới</p>
                    <div class="block_content">
                       <ul class="products-block best-sell">
                                <?php foreach($latest as $late){?>
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="{{URL::asset('public/upload/image/'.$late->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="#">{{$late->name}}</a>
                                        </p>
                                        <p class="product-price">{{number_format($late->price)}} VNĐ</p>
                                        <!-- <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p> -->
                                    </div>
                                </li>
                               <?php } ?>
                            </ul>
                    </div>
                </div>
                <!-- ./block best sellers  -->
                
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <?php foreach($ads as $kads){?>
                        <li><a href="{{$kads->link}}"><img src="{{URL::asset('public/upload/image/'.$kads->name)}}" alt="slide-left"></a></li>
                        <?php }?>
                    </ul>
                </div>
                <!--./left silde-->
               
                <!-- ./block best sellers  -->
                <div class="block left-module">
                    <p class="title_block">Tin tức</p>
                    <div class="block_content">
                        <ul class="products-block">
                            <li>
                                <div class="products-block-left">
                                    <a href="{{URL::to('tin-tuc/'.$new[0]->id)}}">
                                        <img src="{{URL::to('public/upload/image/'.$new[0]->image)}}" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="{{URL::to('tin-tuc/'.$new[0]->id)}}">{{$new[0]->title}}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="{{URL::to('tin-tuc')}}">Tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
               <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title2">Sản phẩm yêu thích</span>
                </h2>
                <ul class="row list-wishlist">
                    @foreach($data as $datas)
                    <li class="col-sm-3">
                        <div class="product-img">
                            <a href="{{URL::to('view/'.$datas->id)}}"><img src="{{URL::asset('public/upload/image/'.$datas->image)}}" alt="Product"></a>
                        </div>
                        <h5 class="product-name">
                            <a href="#">{{$datas->name}}</a>
                        </h5>
                       <!--  <div class="qty">
                            <label>Quantity</label>
                            <input type="text" class="form-control input input-sm">
                        </div>
                        <div class="priority">
                            <label>Priority</label>
                            <select class="form-control input iput-sm">
                                <option>Medium</option>
                            </select>
                        </div> -->
                        <div class="button-action">
                            <button class="button button-sm">Mua hàng</button>
                            <a href="javascript:void(0)" data='{{$datas->id}}'  onclick="delete_favorite(this)"><i class="fa fa-close"></i></a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@stop
