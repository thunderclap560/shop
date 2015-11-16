<div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{{URL::to('/')}}"><img alt="Kute Shop" src="{{ URL::asset('public/upload/image/'.$config->logo)}}" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <!-- <select class="select-category">
                            <option value="0">Tất cả</option> -->
                             {{ Form::select('category_id', $category, null,array('class' => 'select-category')) }}
<!--                         </select>
 -->                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Nhập từ khóa tìm kiếm...">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div class="col-xs-5 col-sm-2 group-button-header">
<!--                 <a title="Compare" href="#" class="btn-compare">compare</a>
 -->            <div class="btn-cart" style="background:none">   
                    <a title="Sản Phẩm Yêu Thích" href="{{URL::to('wish-list')}}" class="btn-heart">wishlist</a>
                    <?php
                    $favo = Session::get('favorite');
                    
                    ?>
                    <span class="notify notify-right"> 
                    @if (Session::has('favorite'))
                    {{count($favo)}}
                    @else
                    0
                    @endif</span>

                </div>
                <div class="btn-cart" id="cart-block">
                    <a title="Giỏ hàng của bạn" href="{{URL::to('check-out')}}">Cart</a>
                    <span class="notify notify-right notify-cart">
                        <?php 
                            $cart = new Cart;
                            $carts = $cart->readProduct();
                        ?>
                        @if (Session::has('product'))
                            {{count($carts)}}
                        @else
                            0
                        @endif
                    </span>
                    <!-- <div class="cart-block">
                        <div class="cart-block-content">
                            <h5 class="cart-title">2 Items in my cart</h5>
                            <div class="cart-block-list">
                                <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="public/front/assets/data/product-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="public/front/assets/data/product-s5-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Total</span>
                                <span class="toal-price pull-right">122.38 €</span>
                            </div>
                            <div class="cart-buttons">
                                <a href="order.html" class="btn-check-out">Checkout</a>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
        
    </div>