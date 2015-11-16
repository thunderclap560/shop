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
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="{{URL::to('/')}}" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Thanh toán</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Thanh Toán</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content checkout-page">
            <div id="zero-step">
            <h3 class="checkout-sep">1. Phương thức thanh toán</h3>
            <div class="box-border">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Bạn là khách hàng mới ?</h4>
                        <p>Đăng kí với chúng tôi để có thể thanh toán an toàn hơn</p>
                        <ul>
                            <li><label><input type="radio" name="radio1">Khách hàng mới</label></li>
                            <li><label><input type="radio" name="radio1">Đã có tài khoản</label></li>
                        </ul>
                        <br>
                        <h4>Tại sao bạn cần có tài khoản ?</h4>
                        <p><i class="fa fa-check-circle text-primary"></i> Thanh toán nhanh và dễ dàng hơn</p>
                        <p><i class="fa fa-check-circle text-primary"></i> Dễ dàng kiểm tra hóa đơn và xác thực tình trạng mua hàng</p>
                         <a href="#detail-order" id="step-1"><button class="button">Tiếp tục</button></a>
                    </div>
                    <div class="col-sm-6">
                        <h4>Đăng nhập</h4>
                        <p>Bạn đã có tài khoản, hãy điền đầy đủ thông tin :</p>
                        <label>Địa chỉ Email</label>
                        <input type="text" class="form-control input">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control input">
                        <p><a href="#">Quên mật khẩu?</a></p>
                        <a href="#"><button class="button">Đăng nhập</button></a>
                    </div>

                </div>
            </div>
            </div>
            <div id="detail-order"></div><br><br><br>
            <div id="run-detail-order" style="display:none">
            <h3 class="checkout-sep" >2. Thông tin đặt hàng</h3>
            <div class="box-border">
                <ul>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">First Name</label>
                            <input type="text" class="input form-control" name="" id="first_name">
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="last_name" class="required">Last Name</label>
                            <input type="text" name="" class="input form-control" id="last_name">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">
                      
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            <input type="text" class="input form-control" name="" id="email_address">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row"> 
                        <div class="col-xs-12">

                            <label for="address" class="required">Địa chỉ</label>
                            <input type="text" class="input form-control" name="" id="address">

                        </div><!--/ [col] -->

                    </li><!-- / .row -->

                    <li class="row">

                        <div class="col-sm-6">
                            
                            <label for="city" class="required">Thành Phố</label>
                            <input class="input form-control" type="text" name="" id="city">

                        </div><!--/ [col] -->

                        <div class="col-sm-6">
                            <label for="city" class="required">Số Điện Thoại</label>
                            <input class="input form-control" type="text" name="" id="city">
                        </div><!--/ [col] -->
                    </li><!--/ .row -->

                 
                    <li>
                        <button class="button">Tiếp Tục</button>
                    </li>
                </ul>
            </div>
            </div>
            <h3 class="checkout-sep">3. Phương thức thanh toán</h3>
            <div class="box-border">
                <ul class="shipping_method">
                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_3"><input type="radio" checked name="radio_3" id="radio_button_3">Free $0</label>
                    </li>

                    <li>
                        <p class="subcaption bold">Chuyển khoản</p>
                        <label for="radio_button_4"><input type="radio" name="radio_3" id="radio_button_4"> Standard Shipping $5.00</label>
                    </li>
                </ul>
                <button class="button">Tiếp tục</button>
            </div>
            <h3 class="checkout-sep">5. Xác nhận đơn hàng</h3>
            <div class="box-border">
           		<table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Sản Phẩm</th>
                            <th>Thông tin</th>
                            <th>Tình trạng.</th>
                            <th>Giá tiền</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
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
                                <input class="form-control input-sm" type="number" name="count[]" value="{{$products->count}}" disabled>
                                <input type="hidden" name="id[]" value="{{$products->id}}"/>
                            </td>
                            <td class="price">
                                <span>{{number_format($products->price * $products->count)}} VNĐ</span>
                                <?php 
                                	$count = $count + ($products->price * $products->count);
                                ?>
                            </td>
                            <td class="price" style="display:none"><span>{{$products->price * $products->count}}</span></td>
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
                                    @if(isset($data_coupon))
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
                            
                            <div class="cfr-coupon">
                            @if(isset($data_coupon))                               
                                @foreach($data_coupon as $k_coupon => $v_coupon)
                                <i>(Mã giảm giá : {{$k_coupon}})</i> - 
                                {{$v_coupon}}%
                                @endforeach
                            @endif
                            </div>
                        </td>
                        </tr>
                    </tfoot>    
                </table>    	
                <button class="button pull-right">Đồng ý</button>
            </div>
        </div>
    </div>
</div>
@stop