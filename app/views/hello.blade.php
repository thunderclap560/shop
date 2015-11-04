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
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/front/assets/data/12.png">Electronics</a></li>
		                    <li><a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="public/front/assets/data/13.png">Sports &amp; Outdoors</a>
		                                <div class="vertical-dropdown-menu">
		                                    <div class="vertical-groups col-sm-12">
		                                        <div class="mega-group col-sm-4">
		                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
		                                            <ul class="group-link-default">
		                                                <li><a href="#">Tennis</a></li>
		                                                <li><a href="#">Coats &amp; Jackets</a></li>
		                                                <li><a href="#">Blouses &amp; Shirts</a></li>
		                                                <li><a href="#">Tops &amp; Tees</a></li>
		                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
		                                                <li><a href="#">Intimates</a></li>
		                                            </ul>
		                                        </div>
		                                        <div class="mega-group col-sm-4">
		                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
		                                            <ul class="group-link-default">
		                                                <li><a href="#">Dresses</a></li>
		                                                <li><a href="#">Coats &amp; Jackets</a></li>
		                                                <li><a href="#">Blouses &amp; Shirts</a></li>
		                                                <li><a href="#">Tops &amp; Tees</a></li>
		                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
		                                                <li><a href="#">Intimates</a></li>
		                                            </ul>
		                                        </div>
		                                        <div class="mega-group col-sm-4">
		                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
		                                            <ul class="group-link-default">
		                                                <li><a href="#">Dresses</a></li>
		                                                <li><a href="#">Coats &amp; Jackets</a></li>
		                                                <li><a href="#">Blouses &amp; Shirts</a></li>
		                                                <li><a href="#">Tops &amp; Tees</a></li>
		                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
		                                                <li><a href="#">Intimates</a></li>
		                                            </ul>
		                                        </div>
		                                    </div>
		                                </div>
		                            </li>
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