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
            <span class="navigation_page">Đăng nhập</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Đăng nhập tài khoản</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Đăng kí</h3>
                        <p>Tài khoản giúp bạn thanh toán và quản lí dễ dàng hơn ! </p>
                        <a href="{{URL::to('register')}}"><button class="button"><i class="fa fa-user"></i> Đăng kí ngay !</button></a>
                    </div>
                </div>
                <div class="col-sm-6">
                     {{ Form::open(array('url'=>'users/signin'))}}
                    <div class="box-authentication">
                        <h3>Vui lòng nhập thông tin</h3>
                         @if(Session::has('auth'))
                        <p style="color:red">{{ Session::get('auth') }}</p>
                        @endif
                        <label for="emmail_login">Địa chỉ Email</label>
                       <input type="hidden" name="type" value='2'/>
                        {{ Form::text('email',null,array('class'=>'form-control','placeholder'=>'Nhập địa chỉ Email của bạn'))}}
                        <label for="password_login">Mật khẩu</label>
                        {{ Form::password('password',array('class'=>'form-control','placeholder'=>'Nhập mật khẩu của bạn'))}}
                        <p class="forgot-pass"><a href="#">Quên mật khẩu?</a></p>
                        <button class="button"><i class="fa fa-lock"></i> Đăng nhập</button>
                    {{ Form::close() }}
                    <div style="margin-top:10px"><p><button type="button" onclick = "loginfb(1)" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook-official"></i>&nbsp; Login as Facebook</button>
                         <button type="button" onclick = "loginfb(2)" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google-plus"></i>&nbsp; Login as Google</button></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<script>
    function loginfb(data){
        if(data == 1){
            window.location.href = "{{URL::to('login/fb')}}";
        }else{
            window.location.href = "{{URL::to('login/google')}}";
        }       
    }
</script>