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
             {{ Form::open(['url' => ['update']])}}
            <div class="heading-counter warning row">
                    
                        @if(Session::has('message')) 
                        <div class="text-left alert alert-success col-md-6">
                        {{ Session::get('message') }}
                        </div>
                        @endif
                    
                    <div class="text-right">
                        <button type="submit" class="btn btn-warning"> <i class="fa fa-refresh" style="padding-top:3px"></i> Cập nhật giỏ hàng</button>
                    </div>
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
                        <?php 

        // echo '<pre>';
        // print_r(Session::get('coupon'));
        // echo '</pre>';
        
                        ?>
                        
                    	<?php $count = 0; ?>

                       @foreach($product as $products)
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="{{URL::asset('public/upload/image/'.$products->image)}}" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">{{$products->name}} </a></p>
                                <small class="cart_ref">Mã sản phẩm : {{$products->code}}</small><br>
                                <small>
                                    @if(count(Session::get('color')) != 0)
                                        @foreach(Session::get('color') as $k_check_color => $v_check_color)
                                            @if($k_check_color == $products->id)
                                                <a href="#">Màu sắc : {{$v_check_color}}</a>
                                            @endif
                                        @endforeach
                                    @else
                                        <a href="#">Màu sắc : Không có</a>
                                    @endif
                                </small>
                                <br>   
                            </td>
                            <td class="cart_avail"><span class="label label-success">Còn hàng</span></td>
                            <td class="price"><span>{{number_format($products->price)}} VNĐ</span></td>
                            <td class="qty">
                                <input class="form-control input-sm" type="number" name="count[]" value="{{$products->count}}">
                                <input type="hidden" name="id[]" value="{{$products->id}}"/>
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
                    {{ Form::close()  }}
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Phí (VAT)</td>
                            <td colspan="2">0 VNĐ</td>
                        </tr>
                        <?php 
                        // echo '<pre>';
                        // print_r();
                        // echo '</pre>';
                        ?>
                        <tr>
                            <td colspan="3"><strong>Tổng chi phí</strong></td>
                            <td colspan="2"> 

                                <strong id="total_price">
                                    @if($data_coupon)
                                    @foreach($data_coupon as $k_coupon => $v_coupon)
                                    <?php 
                                    $count -= ($count*$v_coupon)/100;
                                    echo number_format($count);
                                    ?> VNĐ     
                                    @endforeach
                                    @else
                                    {{number_format($count)}} VNĐ
                                    @endif
                                </strong>
                            </td>
                            <td colspan="2" id="total_price_not" style="display:none"><strong>{{$count}}</strong></td>
                        </tr>
                        <tr>
                        <td colspan="10">
                            <div class="coupon" <?php if($data_coupon){echo 'style="display:none"';}?>>
                                {{ Form::open(['url' => ['update-coupon']])}}
                                 <input required type="text" class="label-succes" style="padding: 0;height: 34px;width: 190px; border:solid 1px #DAD2D2; padding: 0 15px;" id="coupon_code" name="coupon" placeholder="Nhập mã giảm giá"> 
                                 <input type="submit" class="button" name="apply_coupon" value="Áp dụng">
                                {{Form::close()}}
                            </div>
                            <div class="cfr-coupon">
                            @if($data_coupon)                               
                                @foreach($data_coupon as $k_coupon => $v_coupon)
                                <i>(Mã giảm giá : {{$k_coupon}})</i> - 
                                {{$v_coupon}}% <a href="javascript:void(0)" data="{{$k_coupon}}" onclick="delete_coupon(this)">x</a>
                                @endforeach
                            @endif
                            </div>
                        </td>
                        </tr>
                    </tfoot>    
                </table>
                <div class="cart_navigation">
                    <a class="prev-btn btn-warning" href="{{URL::to('/')}}">Tiếp tục mua hàng</a>
                    <a class="next-btn" href="{{URL::to('/order')}}">Tiến hành thanh toán</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@stop