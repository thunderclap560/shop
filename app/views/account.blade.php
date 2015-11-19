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
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">

                <!-- ./block best sellers  -->
                <div class="block left-module">
                    <p class="title_block">Thông tin liên hệ</p>
                    <div class="block_content">
                        <ul class="products-block">
                            <li>
                                <div class="products-block-right" style="margin-left:0px">
                                    <p class="product-name">
                                        <i class="fa fa-phone" style="padding-top:3px"></i> 
                                        @if(Auth::user()->phone == null)
                                        <a href="#">
                                            Chưa có
                                        </a>
                                        @else
                                            0<a href="#">{{Auth::user()->phone}}</a>
                                        @endif
                                    </p>
                                    <p class="product-name">
                                       <i class="fa fa-envelope" style="padding-top:3px"></i>
                                        <a href="#">{{Auth::user()->email}}</a>
                                    </p>
                                    <p class="product-name">
                                        <i class="fa fa-map-marker" style="padding-top:3px"></i>
                                        @if(Auth::user()->address == null)
                                        <a href="#">
                                            Chưa có
                                        </a>
                                        @else
                                            <a href="#">{{Auth::user()->address}}</a>
                                        @endif
                                    </p>

                                </div>
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" id="get-info"  data-toggle="modal" data-target="#editProfile">Sửa thông tin</a>
                            <!-- Edit Profile -->
                                        <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Sửa thông tin liên hệ</h4>
                                              </div>
                                              <div class="modal-body">
                                                {{ Form::model($profile,['url' => ['account-edit',$profile->id]])}}
                                                <div class="form-group">
                                                    <label class="control-label">Họ của bạn : </label>
                                                    {{ Form::text('firstname',null ,array('class'=>'form-control input', 'placeholder'=>'Nhập họ của bạn')) }}
                                                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('firstname')}} </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tên của bạn : </label>
                                                    {{ Form::text('lastname',null,array('class'=>'form-control input', 'placeholder'=>'Nhập tên của bạn')) }}
                                                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('lastname')}} </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Số điện thoại của bạn : </label>
                                                    {{ Form::text('phone',null ,array('class'=>'form-control input', 'placeholder'=>'Nhập số điện thoại của bạn')) }}
                                                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('phone')}} </span>
                                                </div>
                                                <div class="form-group">Địa chỉ : </label>
                                                    {{ Form::text('address',null ,array('class'=>'form-control input', 'placeholder'=>'Nhập địa chỉ của bạn')) }}
                                                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('address')}} </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Thành phố : </label>
                                                    {{ Form::text('country',null ,array('class'=>'form-control input', 'placeholder'=>'Nhập thành phố của bạn')) }}
                                                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('country')}} </span>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                              </div>
                                              {{ Form::close() }}
                                            </div>
                                          </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
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
               
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
               <!-- page heading-->
                <h2 class="page-heading">
                    <span class="page-heading-title2">Thông tin tài khoản</span>
                </h2>
                @if(Session::has('global'))
                        <p style="color:red">{{ Session::get('global') }}</p>
                @endif
                {{ Form::open(array('url'=>'users/change'))}}
                @if(Auth::user()->type != 0)
                <div class="box-border box-wishlist">
                    <h2>Đổi mật khẩu</h2>
                    <label for="wishlist-name">Mật khẩu cũ</label>
                    {{ Form::password('old_password', array('class'=>'form-control input', 'placeholder'=>'Nhập Password cũ')) }}
                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('old_password')}} </span>
                     @if(Session::has('old'))
                    <span style="color:red;display:block;padding-bottom:5px">{{ Session::get('old') }} </span>
                    @endif
                    <label for="wishlist-name">Mật khẩu mới</label>
                    {{ Form::password('password', array('class'=>'form-control input', 'placeholder'=>'Nhập Password mới')) }}
                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('password')}} </span>

                    <label for="wishlist-name">Nhập lại mật khẩu mới</label>
                    {{ Form::password('password_confirmation', array('class'=>'form-control input', 'placeholder'=>'Nhập lại Password')) }}
                    <span style="color:red;display:block;padding-bottom:5px">{{$errors->first('password_confirmation')}} </span>

                    <button class="button">Xác nhận</button>
                </div>
                {{ Form::close() }}
                @endif
                <div class="box-border box-wishlist">
                <h2>Lịch sử mua hàng</h2>
                <table class="table table-bordered table-wishlist">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Thanh toán</th>
                            <th>Hình thức</th>
                            <th>Tổng số tiền</th>
                            <th>Ngày mua</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $datas)
                        <tr>
                            <td># {{$datas->id}}</td>
                            <td>@if($datas->valid == 1)
                                    <span class="label label-success" >Đã thanh toán</span>
                                @else
                                    <span class="label label-success" style="background-color:#E25353">Chưa thanh toán</span>
                                @endif</td>
                            <td>
                                @if($datas->type == 0)
                                    Ship hàng
                                @else
                                    Chuyển khoản
                                @endif
                            </td>
                            <td> {{number_format($datas->total)}} VNĐ</td>
                            
                            <td>{{explode(' ',$datas->created_at)[0]}}</td>
                            <td class="text-center"><a href="#">Chi tiết</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                <ul class="row list-wishlist">
                   
                </ul>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@stop
