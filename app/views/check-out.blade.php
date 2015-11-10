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
            <a class="home" href="{{URL::to('/')}}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Giỏ hàng </span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Giỏ hàng của bạn</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
            <!-- <ul class="step">
                <li class="current-step"><span>01. Summary</span></li>
                <li><span>02. Sign in</span></li>
                <li><span>03. Address</span></li>
                <li><span>04. Shipping</span></li>
                <li><span>05. Payment</span></li>
            </ul> -->
            <div class="heading-counter warning">
			@if ($product)
            	Bạn đã mua:
                <span><span class="notify-cart">{{$count_product}}</span> sản phẩm</span>
            @else
				Bạn chưa mua sản phẩm nào !
            @endif
            </div>
            @if ($product)
            <div class="order-detail-content">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Sản Phẩm</th>
                            <th>Thông tin</th>
                            <th>Tình trạng.</th>
                            <th>Giá tiền</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $count = 0; ?>
                       @foreach($product as $products)
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{URL::asset('public/upload/image/'.$products->image)}}" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">{{$products->name}} </a></p>
                                <small class="cart_ref">Mã sản phẩm : {{$products->code}}</small><br>
                                <small><a href="#">Màu sắc : {{$products->code}}</a></small><br>   
                            </td>
                            <td class="cart_avail"><span class="label label-success">Còn hàng</span></td>
                            <td class="price"><span>{{number_format($products->price)}} VNĐ</span></td>
                            <td class="qty">
                                <input class="form-control input-sm" type="number" value="{{$products->count}}">
                            </td>
                            <td class="price">
                                <span>{{number_format($products->price * $products->count)}} VNĐ</span>
                                <?php 
                                	$count = $count + ($products->price * $products->count);
                                ?>
                            </td>
                            <td class="price" style="display:none"><span>{{$products->price * $products->count}}</span></td>
                            <td class="action">
                                <a href="javascript:void(0)" data="{{$products->id}}" onclick = "delete_product(this)">Xóa sản phẩm</a>
                            </td>
                        </tr>
                     @endforeach  
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Phí (VAT)</td>
                            <td colspan="2">0 VNĐ</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Tổng chi phí</strong></td>
                            <td colspan="2"><strong id="total_price">{{number_format($count)}} VNĐ</strong></td>
                            <td colspan="2" id="total_price_not" style="display:none"><strong>{{$count}}</strong></td>
                        </tr>
                    </tfoot>    
                </table>
                <div class="cart_navigation">
                    <a class="prev-btn" href="{{URL::to('/')}}">Tiếp tục mua hàng</a>
                    <a class="next-btn" href="{{URL::to('/order')}}">Tiến hành thanh toán</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@stop