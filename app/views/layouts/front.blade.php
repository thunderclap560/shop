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
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">LATEST DEALS</span>
                </h2>
                <div class="latest-deals-product">
                    <span class="count-down-time2">
                        <span class="icon-clock"></span>
                        <span>end in</span>
                        <span class="countdown-lastest" data-y="2016" data-m="7" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                    </span>
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/ld9.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                                <div class="price-percent-reduction2">
                                    -30% OFF
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="#">Luxury Perfume</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p44.jpg" /></a>
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
                                <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/ld8.jpg" /></a>
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
                                <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/ld6.jpg" /></a>
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
                                <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/ld4.jpg" /></a>
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
                                <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                        </li>
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
        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/front/assets/data/icon-fashion.png" />fashion</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-4">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-4">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Most Reviews</a></li>
                    <li><a data-toggle="tab" href="#tab-4">On Sales</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Trending</a></li>
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
                            <li><a href="#">Summer Dresses</a></li>
                            <li><a href="#">Casual Dresses</a></li>
                            <li><a href="#">Blouses</a></li>
                            <li><a href="#">Skirts</a></li>
                            <li><a href="#">Jumpsuits</a></li>
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Bikinis</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Scarves</a></li>
                            <li><a href="#">Hair Accessories</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-4">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sexy Red Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$138,95</span>
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
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Mesh Dress Taupe</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$99,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p49.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sexy Summer Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$89,99</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p50.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Comfor & Pretty Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$238,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p51.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sexy Perfect Light</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$399,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p52.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">New Style & Fresh</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$138,95</span>
                                                            <span class="price old-price">$152,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/front/assets/data/p53.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                       </ul>
                                   </div>
                                </div>
                                <div class="tab-panel" id="tab-5">
                                    <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p53.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p52.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p51.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p50.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p49.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                       </ul>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category fashion -->
        <!-- featured category sports -->
        <div class="category-featured sports">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/front/assets/data/icon-sports.png" />SPORTS</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-6">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-6">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <div class="owl-carousel-vertical" data-items="1" data-nav="true" data-dots="false" data-loop="true">
                            <div class="item">
                                <ul class="sub-category-list">
                                    <li><a href="#">Tent</a></li>
                                    <li><a href="#">Hiking Shoes</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Boxing</a></li>
                                    <li><a href="#">Fitness</a></li>
                                    <li><a href="#">Basketball Shoes</a></li>
                                    <li><a href="#">Carp Fishing</a></li>
                                    <li><a href="#">Bike Light</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">Fishing Tackle Bags</a></li>
                                    <li><a href="#">Camping Stoves</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Basketball Shoes</a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="sub-category-list">
                                    <li><a href="#" >Shoes</a></li>
                                    <li><a href="#" >Casual Shoes</a></li>
                                    <li><a href="#" >Sports Shoes</a></li>
                                    <li><a href="#" >Adidas Shoes</a></li>
                                    <li><a href="#" >Gas Shoes</a></li>
                                    <li><a href="#" >Puma Shoes</a></li>
                                    <li><a href="#" >Reebok Shoes</a></li>
                                    <li><a href="#" >Woodland Shoes</a></li>
                                    <li><a href="#" >Red tape Shoes</a></li>
                                    <li><a href="#" >Nike Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-6">
                                    <div class="box-left">
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Deals of The Day</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="public/front/assets/data/p54.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top Selling Product 1</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="7" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="public/front/assets/data/p58.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top Selling Product 2</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-dots="false" data-nav="true">
                                            <li><a href="#"><img src="public/front/assets/data/sport1.jpg" alt="Image"></a></li>
                                            <li><a href="#"><img src="public/front/assets/data/sport1.jpg" alt="Image"></a></li>
                                        </ul>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Sport Shoes</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p55.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Tennis Blue Hat</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p56.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Blue T-Shirt</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p57.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Tennis Racquet</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p58.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Fashion & Sport</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p59.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Versatile Package</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p60.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-7">
                                    <div class="box-left">
                                        <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                            <li><a href="#"><img src="public/front/assets/data/sport1.jpg" alt="Image"></a></li>
                                            <li><a href="#"><img src="public/front/assets/data/sport2.jpg" alt="Image"></a></li>
                                        </ul>
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Deals of The Day</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="public/front/assets/data/p55.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top selling earphone</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="public/front/assets/data/p56.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top selling earphone</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p60.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p59.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p58.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p57.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p56.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p55.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category sports-->
        
        <!-- featured category electronic -->
        <div class="category-featured electronic">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/front/assets/data/icon-electronic.png" />ELECTRONICS</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-8">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-8">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Most Reviews</a></li>
                    <li><a data-toggle="tab" href="#tab-8">On Sales</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Trending</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-3" class="floor-elevator">
                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">SOOCOO S60</a></li>
                            <li><a href="#">Xiaomi Sports Camera</a></li>
                            <li><a href="#">Monopod</a></li>
                            <li><a href="#">MP3 Player</a></li>
                            <li><a href="#">Speaker</a></li>
                            <li><a href="#">Micro SD Card</a></li>
                            <li><a href="#">Smart Watches</a></li>
                            <li><a href="#">Smart Wristbands</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Projector</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-8">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product2.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Cookoo Cooker</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p61.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Green Cooker</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p62.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Modern Liquidizer</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p63.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Serial Nice Cookers</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p64.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Tilor Washing Machine</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p65.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Nano Washing Machine</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p66.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-9">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product2.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p66.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p65.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p64.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p63.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p62.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p61.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category electronic-->
        <!-- featured category Digital -->
        <div class="category-featured digital">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/front/assets/data/icon-digital.png" />DIGITAL</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-10">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-10">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-4" class="floor-elevator">
                    <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Tablet selfie</a></li>
                            <li><a href="#">Laptop Batteries</a></li>
                            <li><a href="#">OTG flash drives</a></li>
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Keyboard</a></li>
                            <li><a href="#">SSD</a></li>
                            <li><a href="#">Tenda router</a></li>
                            <li><a href="#">3D printer</a></li>
                            <li><a href="#">Laser Pens</a></li>
                            <li><a href="#">Printer Supplies</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 manufacture-list">
                        <div class="manufacture-waper">
                            <div class="owl-carousel-vertical" data-items="1" data-autoplay="false" data-nav="true" data-dots="false" data-loop="true" >
                                <div class="item">
                                    <ul >
                                        <li><a href="#"><img src="public/front/assets/data/m1.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m2.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m3.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m4.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m5.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m6.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m7.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m8.jpg" alt="manufacture"></a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul >
                                        <li><a href="#"><img src="public/front/assets/data/m1.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m2.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m3.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m4.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m5.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m6.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m7.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="public/front/assets/data/m8.jpg" alt="manufacture"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-10">
                                   <div class="row">
                                        <div class="col-sm-12 category-list-product">
                                            <ul class="product-list row">
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Cute Speaker</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p67.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Bphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p68.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sonic Camera</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p69.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Blue Nano Projector</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p70.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Smartphone Battery</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p71.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p72.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#"> SamSing Gallaxy S5</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p73.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Ipado Air 2</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p74.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>
                                </div>
                                <div class="tab-panel" id="tab-11">
                                   <div class="row">
                                        <div class="col-sm-12 category-list-product">
                                            <ul class="product-list row">
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p74.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p73.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p72.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p71.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p70.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p69.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p68.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="public/front/assets/data/p67.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category Digital-->
        <!-- featured category furniture -->
       <div class="category-featured furniture">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/front/assets/data/icon-furniture.png" />furniture</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-12">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-12">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-5" class="floor-elevator">
                    <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Cross Stitch</a></li>
                            <li><a href="#">Diamond Painting</a></li>
                            <li><a href="#">Cake Tools</a></li>
                            <li><a href="#">Cooking Tools</a></li>
                            <li><a href="#">Curtain</a></li>
                            <li><a href="#">Bedding</a></li>
                            <li><a href="#">Wall Décor</a></li>
                            <li><a href="#">Decorative Flowers</a></li>
                            <li><a href="#">Home Storage</a></li>
                            <li><a href="#">Pest Control</a></li>
                            <li><a href="#">Pet Products</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-12">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Interesting Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p75.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Relaxed Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p76.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Innovative Red Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p77.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">White Stack Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Kute Innovative Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p79.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Pretty Green & Inox</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p80.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-13">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="public/front/assets/data/banner-product3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p77.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p76.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p75.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p74.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category furniture-->
        <!-- featured category jewelry -->
        <div class="category-featured jewelry">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/front/assets/data/icon-jewelry.png" />jewelry</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-14">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-14">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-6" class="floor-elevator">
                    <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Multi-Layer Necklaces</a></li>
                            <li><a href="#">925 Silver</a></li>
                            <li><a href="#">Pearl Jewelry</a></li>
                            <li><a href="#">Friendship Bracelets</a></li>
                            <li><a href="#">Brinco</a></li>
                            <li><a href="#">Body Chains</a></li>
                            <li><a href="#">Carp Fishing</a></li>
                            <li><a href="#">DIY Beads</a></li>
                            <li><a href="#">Digital Watches</a></li>
                            <li><a href="#">Dress Watches</a></li>
                            <li><a href="#">Men's Watches</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-14">
                                    <div class="box-left">
                                        <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                            <li><a href="#"><img src="public/front/assets/data/banner-intab2.jpg" alt="Image"></a></li>
                                            <li><a href="#"><img src="public/front/assets/data/jewelry-slide.jpg" alt="Image"></a></li>
                                        </ul>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Green Swan</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Golden & Creative Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Diamond Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box-full clearfix">
                                        <ul class="product-list">
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Ruby & Golden Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Natural Pearl Necklace</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Diamond Couple</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Earrings</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p87.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Precious Stones</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p88.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-15">
                                    <div class="box-full clearfix">
                                        <ul class="product-list">
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p87.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p88.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/front/assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category jewelry-->
    </div>
</div>

<div id="content-wrap">
    <div class="container">
        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="public/front/assets/data/banner-botom1.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="public/front/assets/data/banner-bottom2.jpg" /></a>
                </div>
            </div>
        </div>
        <!-- end banner bottom -->

        <!-- blog list -->
        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">From the blog</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="public/front/assets/data/blog1.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="public/front/assets/data/blog2.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Share the love with KuteShop</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="public/front/assets/data/blog3.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">Big sales this summer</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="public/front/assets/data/blog4.jpg" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">How to shop with us</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">February 27, 2015</span>
                                <span class="comment">27 comment</span>
                            </div>
                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
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
