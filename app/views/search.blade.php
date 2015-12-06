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
                                                        <li><a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><?php echo $k_product_menu->name;?></a></li>
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
            <span class="navigation_page">Tìm kiếm</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">SẢN PHẨM MỚI</p>
                    <div class="block_content">
                        <ul class="products-block best-sell">
                                <?php foreach($latest as $late){?>
                                <li>
                                    <div class="products-block-left">
                                        <a href="{{URL::route('product-front', [$late->alias,$late->id])}}">
                                            <img src="{{URL::asset('public/upload/image/'.$late->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="{{URL::route('product-front', [$late->alias,$late->id])}}">{{$late->name}}</a>
                                        </p>
                                        <p class="product-price">{{number_format($late->price)}} VNĐ</p>
                                    </div>
                                </li>
                               <?php } ?>
                            </ul>
                    </div>
                </div>
                <!-- ./block category  -->
                <div class="block left-module">
                    <p class="title_block">Danh mục khác</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <?php foreach($menu_home as $v_menu_cate){
                                        
                                    ?>
                                    <li <?php if(isset($v_menu_cate['sub'])){echo 'class="active"';} ?>>
                                        <span></span><a href="#">{{$v_menu_cate['name']}}</a>
                                         <?php if(isset($v_menu_cate['sub'])) {?>
                                        <ul>
                                            <?php foreach($v_menu_cate['sub'] as $k_product_menu){?>
                                            <li><span></span><a href="{{URL::to('chuyen-muc/'.$k_product_menu['id'])}}"><?php echo $k_product_menu['name'];?></a></li>
                                            <?php } ?>
                                        </ul>
                                        <?php }?>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <?php foreach($ads as $kads){?>
                        <li><a href="{{$kads->link}}"><img src="{{URL::asset('public/upload/image/'.$kads->name)}}" alt="slide-left"></a></li>
                        <?php }?>
                    </ul>
                </div>
                <!--./left silde-->
                <!-- SPECIAL -->
                @if(isset($new[0]))
                <div class="col-left-slide left-module">
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
                                        <a href="{{URL::route('news-front', [$new[0]->alias,$new[0]->id])}}">{{$new[0]->title}}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="{{URL::to('blog')}}">Tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @endif
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                    <?php foreach($slide as $value_slide){ ?>  
                      <li><a href="{{$value_slide->link}}"><img alt="Chương trình khuyến mãi" src="{{ URL::asset('public/upload/image/'.$value_slide->name)}}"/></a></li>
                    <?php }?>
                    </ul>
                </div>
                <!-- ./category-slider -->

                <!-- category short-description -->
                <!-- <div class="cat-short-desc">
                    <div class="desc-text text-left">
                        <p>
                            Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis sit voluptatem accusantim doloremque laudantim.
                        </p>
                    </div>
                    <div class="cat-short-desc-products">
                        <ul class="row">
                            <li class="col-sm-3">
                                <div class="product-container">
                                    <div class="product-thumb">
                                    <a href="#"><img src="{{URL::asset('public/front/assets/data/sub-cat1.jpg')}}" alt="Product"></a>
                                    </div>
                                    <h5 class="product-name">
                                        <a href="#">Sub category 1</a>
                                        <span>(90)</span>
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <!-- ./category short-description -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">Tìm kiếm với từ khóa @if(isset($_GET['keyword'])) {{$_GET['keyword']}} @endif</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    @if(count($data) != 0 )
                    <ul class="row product-list style2 grid">
                        
                        @foreach($data as $value)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="{{URL::route('product-front', [$value->alias,$value->id])}}">
                                        <img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$value->image)}}" />
                                    </a>
                                    <div class="quick-view">
                                        <a title="Thêm vào mục yêu thích" data = '{{$value->id}}' class="heart" href="javascript:void(0)" onclick="favorite(this)" 
                                        style=
                                        "<?php if(Session::get('favorite') != null){
                                                    foreach(Session::get('favorite') as $k => $v){
                                                        if($v == $value->id ){
                                                            echo 'background-color:pink';
                                                            break;
                                                        }
                                                    }
                                            }
                                        ?>" 
                                        flag=
                                        "<?php if(Session::get('favorite') != null){
                                                    foreach(Session::get('favorite') as $k => $v){
                                                        if($v == $value->id ){
                                                            echo 'TRUE';
                                                            break;
                                                        }
                                                }
                                                }else{
                                                    echo ' ';
                                        }?>"
                                    >
                                    </a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="{{URL::route('product-front', [$value->alias,$value->id])}}"></a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="{{URL::route('product-front', [$value->alias,$value->id])}}">{{ $value->name }}</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">
                                         @if($value->price_sales != null)
                                        {{number_format($value->price_sales)}}
                                        @else
                                        {{number_format($value->price)}}
                                        @endif
                                         VNĐ   
                                        </span>
                                        @if($value->price_sales != null)
                                        <span class="price old-price">
                                            {{number_format($value->price)}}
                                            VNĐ
                                        </span>
                                        @endif
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: {{$value->code}}</p>
                                        <p class="availability">Availability: <span>In stock</span></p>
                                        <div class="product-desc">
                                            {{$value->short_detail}}
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                    @endforeach 
                  
                    </ul>
                      @else
                        <div class="view-product-list">
                         <h5 class="product-name">Không tìm thấy sản phẩm nào phù hợp với từ khóa</h5>
                         </div>

                    @endif

                        
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        {{$data->links()}}
                        <!-- <nav>
                          <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@stop