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
            <a class="home" href="{{URL::to('blog')}}" title="Blog">Tin tức</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span>{{$data->title}}</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- Blog category -->
                
                <!-- ./blog category  -->
                <!-- Popular Posts -->
                <div class="block left-module">
                    <p class="title_block">Bài viết nổi bật</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="blog-list-sidebar clearfix">
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#"><img src="assets/data/blog-thumb1.jpg" alt="Blog"></a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#"><img src="assets/data/blog-thumb2.jpg" alt="Blog"></a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#"><img src="assets/data/blog-thumb3.jpg" alt="Blog"></a>
                                        </div>
                                        <div class="post-info">
                                            <h5 class="entry_title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <div class="post-meta">
                                                <span class="date"><i class="fa fa-calendar"></i> 2014-08-05</span>
                                                <span class="comment-count">
                                                    <i class="fa fa-comment-o"></i> 3
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./Popular Posts -->
                <!-- Banner -->
                <div class="block left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="assets/data/slide-left.jpg" alt="ads-banner"></a>
                    </div>
                </div>
                <!-- ./Banner -->
               
                <!-- ./Recent Comments -->
               
                <!-- ./tags -->
                <!-- Banner -->
                <div class="block left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="assets/data/slide-left2.jpg" alt="ads-banner"></a>
                    </div>
                </div>
                <!-- ./Banner -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h1 class="page-heading">
                    <span class="page-heading-title2">Sed ut perspiciatis unde omnis iste natus error</span>
                </h1>
                <article class="entry-detail">
                    <div class="entry-meta-data">
                        <span class="author">
                        <i class="fa fa-user"></i> 
                        by: <a href="#">Admin</a></span>
                        <span class="cat">
                            <i class="fa fa-folder-o"></i>
                            <a href="#">News, </a>
                            <a href="#">Promotions</a>
                        </span>
                        <span class="comment-count">
                            <i class="fa fa-comment-o"></i> 3
                        </span>
                        <span class="date"><i class="fa fa-calendar"></i> 2014-08-05 07:01:49</span>
                        
                    </div>
                    <div class="entry-photo">
                        <img src="{{URL::asset('public/upload/image/'.$data->image)}}" alt="Blog">
                    </div>
                    <div class="content-text clearfix">
                        {{$data->content}}
                    </div>
                </article>
                <!-- Related Posts -->
                <div class="single-box">
                    <h2>Bài viết liên quan</h2>
                    <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                        <li class="post-item">
                            <article class="entry">
                                <div class="entry-thumb image-hover2">
                                    <a href="#">
                                        <img src="assets/data/blog-1.jpg" alt="Blog">
                                    </a>
                                </div>
                                <div class="entry-ci">
                                    <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                    <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                    </div>
                                    <div class="entry-more">
                                        <a href="#">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="entry-thumb image-hover2">
                                    <a href="#">
                                        <img src="assets/data/blog-2.jpg" alt="Blog">
                                    </a>
                                </div>
                                <div class="entry-ci">
                                    <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                    <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                    </div>
                                    <div class="entry-more">
                                        <a href="#">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="entry-thumb image-hover2">
                                    <a href="#">
                                        <img src="assets/data/blog-3.jpg" alt="Blog">
                                    </a>
                                </div>
                                <div class="entry-ci">
                                    <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                    <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                    </div>
                                    <div class="entry-more">
                                        <a href="#">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li class="post-item">
                            <article class="entry">
                                <div class="entry-thumb image-hover2">
                                    <a href="#">
                                        <img src="assets/data/blog-4.jpg" alt="Blog">
                                    </a>
                                </div>
                                <div class="entry-ci">
                                    <h3 class="entry-title"><a href="#">Sed ut perspiciatis unde omnis iste natus error</a></h3>
                                    <div class="entry-meta-data">
                                        <span class="comment-count">
                                            <i class="fa fa-comment-o"></i> 3
                                        </span>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i> 2014-08-05
                                        </span>
                                    </div>
                                    <div class="entry-more">
                                        <a href="#">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <!-- ./Related Posts -->
                
                <!-- ./Comment -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@stop