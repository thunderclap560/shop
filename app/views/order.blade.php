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
@if($product)
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
                            <li><label><input type="radio" name="radio1" class="have-account">Khách hàng mới</label></li>
                            <li><label><input type="radio" name="radio1" >Đã có tài khoản</label></li>
                        </ul>
                        <br>
                        <h4>Tại sao bạn cần có tài khoản ?</h4>
                        <p><i class="fa fa-check-circle text-primary"></i> Thanh toán nhanh và dễ dàng hơn</p>
                        <p><i class="fa fa-check-circle text-primary"></i> Dễ dàng kiểm tra hóa đơn và xác thực tình trạng mua hàng</p>
                         <a href="javascript:void(0)" id="step-1"><button class="button">Tiếp tục</button></a>
                    </div>
                    <div class="col-sm-6 login-register" style="display:none">
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

            <div id="detail-order" style="display:none">
                            <br><br><br><br><br>
            <div id="run-detail-order" >
            <h3 class="checkout-sep" >2. Thông tin đặt hàng</h3>
            <div class="box-border">
                 {{ Form::open(['url' => ['order-add'],'id'=>'order-form'])}}
                <ul>
                    <li class="row">
                        <div class="col-sm-6">
                            <label for="first_name" class="required">First Name</label>
                            {{ Form::text('firstname', null, ['class' => 'input form-control','placeholder'=>'Nhập họ của bạn ']) }}
                            <span style="color:red">{{$errors->first('firstname')}} </span>
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="last_name" class="required">Last Name</label>
                            {{ Form::text('lastname', null, ['class' => 'input form-control','placeholder'=>'Nhập tên của bạn ']) }}
                            <span style="color:red">{{$errors->first('lastname')}} </span>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row">                      
                        <div class="col-sm-6">
                            <label for="email_address" class="required">Email Address</label>
                            {{ Form::text('email', null, ['class' => 'input form-control','placeholder'=>'Nhập địa chỉ email của bạn ']) }}
                            <span style="color:red">{{$errors->first('email')}} </span>
                        </div><!--/ [col] -->
                    </li><!--/ .row -->
                    <li class="row"> 
                        <div class="col-xs-12">
                            <label for="address" class="required">Địa chỉ</label>
                            {{ Form::text('address', null, ['class' => 'input form-control','placeholder'=>'Nhập địa chỉ giao hàng của bạn ']) }}
                            <span style="color:red">{{$errors->first('address')}} </span>
                        </div><!--/ [col] -->
                    </li><!-- / .row -->

                    <li class="row">
                        <div class="col-sm-6">                     
                            <label for="city" class="required">Thành Phố</label>
                           {{ Form::text('country', null, ['class' => 'input form-control','placeholder'=>'Nhập thành phố của bạn ']) }}
                        <span style="color:red">{{$errors->first('country')}} </span>
                        </div><!--/ [col] -->
                        <div class="col-sm-6">
                            <label for="city" class="required">Số Điện Thoại</label>
                         {{ Form::text('phone', null, ['class' => 'input form-control','placeholder'=>'Nhập số điện thoại của bạn ']) }}
                                                <span style="color:red">{{$errors->first('phone')}} </span>

                        </div><!--/ [col] -->
                    </li><!--/ .row -->               
                    <li>
                    </li>
                </ul>
            </div>
            </div>
            <h3 class="checkout-sep">3. Phương thức thanh toán</h3>
            <div class="box-border">
                <ul class="shipping_method">
                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_3"><input type="radio" checked name="type" id="radio_button_3" value="0">Free $0</label>
                    </li>

                    <li>
                        <p class="subcaption bold">Chuyển khoản</p>
                        <label for="radio_button_4"><input type="radio" name="type" id="radio_button_4" value="1"> Standard Shipping $5.00</label>
                    </li>
                </ul>
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
                            <input type="hidden" name="price[{{$products->id}}]" value ="{{$products->count}}"/>
                            <td class="qty">
                                <input class="form-control input-sm" type="number" name="count[]" value="{{$products->count}}" disabled>
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
                                    <input type="hidden" name="total" value="{{$count}}">     
                                    @endforeach
                                    @else
                                    {{number_format($count)}} VNĐ
                                    <input type="hidden" name="total" value="{{$count}}">
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
                <button  class="button pull-right">Đồng ý</button>
                                    {{ Form::close()  }}

            </div>
        </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Bạn chưa mua sản phẩm nào !</p>
        </div>
    </div>
</div>
@endif
@stop