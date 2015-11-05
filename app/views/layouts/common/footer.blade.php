<!-- Footer -->
<footer id="footer">
     <div class="container">
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-3">
                    <div id="address-box">
                        <a href="#"><img src="{{ URL::asset('public/upload/image/'.$config->logo)}}" alt="logo" /></a>
                        <div id="address-list">
                            <div class="tit-name">Địa chỉ:</div>
                            <div class="tit-contain">{{ $config->address }}</div>
                            <div class="tit-name">Phone:</div>
                            <div class="tit-contain">{{ $config->phone }}</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">{{ $config->email }}</div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="introduce-title">Về chúng tôi</div>
                            <ul id="introduce-company"  class="introduce-list">
                                <li><a href="#">Thông tin</a></li>
                                <li><a href="#">Giấy chứng nhận</a></li>
                                <li><a href="#">Chương trình liên kết</a></li>
                                <li><a href="#">Điều khoản thanh toán</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">Tài khoản</div>
                            <ul id = "introduce-Account" class="introduce-list">
                                <li><a href="#">Hóa đơn của bạn</a></li>
                                <li><a href="#">Danh sách yêu thích</a></li>
                                <li><a href="#">Thông tin cá nhân</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">Hỗ trợ</div>
                            <ul id = "introduce-support"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="contact-box">
                        <div class="introduce-title">Nhận tin khuyến mãi</div>
                        <div class="input-group" id="mail-box">
                          <input type="text" placeholder="Nhập địa chỉ Email của bạn"/>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Gửi</button>
                          </span>
                        </div><!-- /input-group -->
                        <div class="introduce-title">Kết nối với chúng tôi </div>
                        <div class="social-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /#introduce-box -->
        
            <!-- #trademark-box -->
            <div id="trademark-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-list">
                        <li id="payment-methods">Xác nhận thanh toán: </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-ups.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-qiwi.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-wu.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-cn.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-visa.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-mc.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-ems.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-dhl.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-fe.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/front/assets/data/trademark-wm.jpg"  alt="ups"/></a>
                        </li>
                    </ul> 
                </div>
            </div> <!-- /#trademark-box -->
            
            <!-- #trademark-text-box -->
            <div id="trademark-text-box" class="row" style="display:none">
                <div class="col-sm-12">
                    <ul id="trademark-search-list" class="trademark-list">
                        <li class="trademark-text-tit">HOT SEARCHED KEYWORDS:</li>
                        <li><a href="#" >Xiaomo Mi3</a></li>
                        <li><a href="#" >Digifli Pro XT 712 Tablet</a></li>
                        <li><a href="#" >Mi 3 Phones</a></li>
                        <li><a href="#" >Iphoneo 6 Plus</a></li>
                        <li><a href="#" >Women's Messenger Bags</a></li>
                        <li><a href="#" >Wallets</a></li>
                        <li><a href="#" >Women's Clutches</a></li>
                        <li><a href="#" >Backpacks Totes</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-tv-list" class="trademark-list">
                        <li class="trademark-text-tit">TVS:</li>
                        <li><a href="#" >Sonyo TV</a></li>
                        <li><a href="#" >Samsing TV</a></li>
                        <li><a href="#" >LGG TV</a></li>
                        <li><a href="#" >Onidai TV</a></li>
                        <li><a href="#" >Toshibao TV</a></li>
                        <li><a href="#" >Philipsi TV</a></li>
                        <li><a href="#" >Micromax TV</a></li>
                        <li><a href="#" >LED TV</a></li>
                        <li><a href="#" >LCD TV</a></li>
                        <li><a href="#" >Plasma TV</a></li>
                        <li><a href="#" >3D TV</a></li>
                        <li><a href="#" >Smart TV</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-mobile-list" class="trademark-list">
                        <li class="trademark-text-tit">MOBILES:</li>  
                        <li><a href="#" >Moto E</a></li>
                        <li><a href="#" >Samsing Mobile</a></li>
                        <li><a href="#" >Micromaxi Mobile</a></li>
                        <li><a href="#" >Nokian Mobile</a></li>
                        <li><a href="#" >HTCK Mobile</a></li>
                        <li><a href="#" >Sonyo Mobile</a></li>
                        <li><a href="#" >Appleo Mobile</a></li>
                        <li><a href="#" >LGG Mobile</a></li>
                        <li><a href="#" >Karbonno Mobile</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-laptop-list" class="trademark-list">
                        <li class="trademark-text-tit">LAPTOPS::</li> 
                        <li><a href="#" >Appleo Laptop</a></li>
                        <li><a href="#" >Acero Laptop</a></li>
                        <li><a href="#" >Samsing Laptop</a></li>
                        <li><a href="#" >Lenov Laptop</a></li>
                        <li><a href="#" >Sonyo Laptop</a></li>
                        <li><a href="#" >Dello Laptop</a></li>
                        <li><a href="#" >Asuso Laptop</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >LGG Laptop</a></li>
                        <li><a href="#" >HPO Laptop</a></li>
                        <li><a href="#" >Notebook</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-watches-list" class="trademark-list">
                        <li class="trademark-text-tit">WATCHES:</li>  
                        <li><a href="#" >FCUKJ Watches</a></li>
                        <li><a href="#" >Titan Watches</a></li>
                        <li><a href="#" >Casioo Watches</a></li>
                        <li><a href="#" >Fastracki Watches</a></li>
                        <li><a href="#" >Timexe Watches</a></li>
                        <li><a href="#" >Fossill Watches</a></li>
                        <li><a href="#" >Diesel Watches</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >Luxury Watches</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-shoes-list" class="trademark-list">
                        <li class="trademark-text-tit">FOOTWEAR:</li>  
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
            </div><!-- /#trademark-text-box -->
            <div id="footer-menu-box" >
                
                <p class="text-center">Copyrights &#169; 2015 KuteShop. Bản quyền được bảo hộ</p>
            </div><!-- /#footer-menu-box -->
        </div> 
</footer>

<a href="#" class="scroll_top" title="Lên trên" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{ URL::asset('public/front/lib/jquery/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/front/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/lib/select2/js/select2.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/lib/jquery.bxslider/jquery.bxslider.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/lib/owl.carousel/owl.carousel.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/lib/countdown/jquery.plugin.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/lib/countdown/jquery.countdown.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/assets/js/jquery.actual.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/assets/js/theme-script.js') }}"></script>

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:19:33 GMT -->
</html>