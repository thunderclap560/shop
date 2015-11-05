<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:15:06 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/lib/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/lib/font-awesome/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/lib/select2/css/select2.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/lib/jquery.bxslider/jquery.bxslider.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/lib/owl.carousel/owl.carousel.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/lib/jquery-ui/jquery-ui.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/css/reset.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/css/responsive.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/front/assets/css/option2.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
<title>{{ $config->title }}</title>
<meta name="robots" content="noodp,noydir">
<meta name="description" content="{{ $config->desc }}">
<link rel="canonical" href="http://saokpop.com/">
<meta property="og:locale" content="vi_VN">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $config->title }}">
<meta property="og:description" content="{{ $config->desc }}">
<meta property="og:url" content="http://saokpop.com/">
</head>
<body class="home option2">
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="public/front/assets/images/phone.png" />{{ $config->phone }}</a>
                <a href="mailto:{{ $config->email }}"><img alt="email" src="public/front/assets/images/email.png" />Liên hệ qua email</a>
            </div>
            <div class="currency" style="display:none">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>
                      </ul>
                </div>
            </div>
            <div class="language " style="display:none">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="public/front/assets/images/fr.jpg" />French
                      
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="public/front/assets/images/en.jpg" />English</a></li>
                        <li><a href="#"><img alt="email" src="public/front/assets/images/fr.jpg" />French</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="support-link">
                <a href="#">Hỗ trợ</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Tài khoản</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Đăng nhập</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    @include('layouts.common.header')
    <!-- END MANIN HEADER -->
     @yield('content')
</div>
<!-- end header -->
<!-- Home slideder-->
@include('layouts.common.slide')
<!-- END Home slideder-->
@yield('main')

<div id="content-wrap">
    <div class="container">
        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <?php for($i=0;$i<2;$i++) {?>      
            <div class="col-sm-6 <?php if($i == 0){ echo 'item-left';}?>">
                <div class="banner-boder-zoom">
                    <?php if(count($slide_footer[$i]) != 0){?>
                    <a href="#"><img alt="ads" class="img-responsive" src="{{ URL::asset('public/upload/image/'.$slide_footer[$i]->name)}}" /></a>
                    <?php }?>
                </div>
            </div>
        <?php }?>
        </div>
        <!-- end banner bottom -->

        <!-- blog list -->
        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">Tin tức</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                <?php foreach($new as $news){?>    
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="public/front/assets/data/blog1.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">{{$news->title}}</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Chi tiết</a>
                            </div>
                        </div>
                    </li>
                <?php  } ?>    
                </ul>
            </div>
        </div>
        <!-- ./blog list -->
        <!-- service 2 -->
        <div class="services2">
            <ul>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="public/front/assets/data/icon-s1.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Great Value</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                We offer competitive prices on our 100 million plus product range.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="public/front/assets/data/icon-s2.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Worldwide Delivery</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                With sites in 5 languages, we ship to over 200 countries & regions.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="public/front/assets/data/icon-s3.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Safe Payment</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Pay with the world’s most popular and secure payment methods.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="public/front/assets/data/icon-s4.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Shop with Confidence</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Our Buyer Protection covers your purchase from click to delivery.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="public/front/assets/data/icon-s5.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">24/7 Help Center</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Round-the-clock assistance for a smooth shopping experience.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="public/front/assets/data/icon-s6.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Shop On-The-Go</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Download the app and get the world of KuteShop at your fingertips.
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- ./service 2 -->
    </div> <!-- /.container -->
</div>

@include('layouts.common.footer')
