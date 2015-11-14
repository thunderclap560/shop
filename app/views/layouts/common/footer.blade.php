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
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-ups.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-qiwi.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-wu.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-cn.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-visa.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-mc.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-ems.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-dhl.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-fe.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::asset('public/front/assets/data/trademark-wm.jpg')}}"  alt="ups"/></a>
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

<script type="text/javascript" src="{{ URL::asset('public/front/assets/lib/jquery.elevatezoom.js')}}"></script>


<script type="text/javascript" src="{{ URL::asset('public/front/assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>


<script type="text/javascript" src="{{ URL::asset('public/front/assets/lib/fancyBox/jquery.fancybox.js')}}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/assets/js/jquery.actual.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('public/front/assets/js/theme-script.js') }}"></script>
<script>
    var check_empty_comment;
    function post(data){
        var comment = $(data).prev().val();
        check_empty_comment = comment;
        var parent_id = $(data).prev().attr('data');
        var product = $(data).prev().attr('product');
        if(comment.length === 0){
            alert('Hãy nhập câu trả lời');
            $(data).prev().focus();
            return false;
        }else{
            $.get('{{URL::to("reply")}}',{comment:comment,parent_id:parent_id,product:product},function(value){
            $(data).parent().append(value);
            $(data).prev().val('');
            });    
        }
    }   
    $(document).ready(function(){
        $(".reply-each").on('click',function(){
            var data = $(this).attr('data');
            var product = $(this).attr('product');
            $(this).parent().append('<textarea data = "'+data+'" product = "'+product+'" placeholder="Viết trả lời ..." class="form-control" rows="2" style="margin-top:5px"></textarea>');
            $(this).parent().append('<button class="btn btn-primary btn-xs" style="margin-top:5px" onclick="post(this)"> Đăng </button>');
        });
        $('.product-comments-block-tab').contents().filter(function(){
          return this.nodeType == Node.TEXT_NODE;
        }).remove();  
        $("#reply-comment").click(function(){
            if($("#content-comment").val().length === 0){
                alert('Hãy nhập vài lời nhận xét');
                $("#content-comment").focus();
                return false;
            }else{
                var rate = $("input[name=score]").val();
                var comment = $("#content-comment").val();
                var uid = $("#content-comment").attr('uid');
                var product = $("#content-comment").attr('data');
                $.get('{{URL::to("comment")}}',{rate:rate,comment:comment,uid:uid,product:product},function(data){
                        $("input[name=score]").val('');
                        $("#content-comment").val('');
                        $('#reply-comment').parent().parent().prev().append(data);
                    }); 
            }
           
        });
        $("#add_cart").click(function(data){
                $(this).text('Thêm thành công');
                setTimeout(function(){
                $("#add_cart").text('Thêm vào giỏ hàng').fadeIn();
                },2000);
                var id = $('#id_cart').val(); 
                var qty = $('#option-product-qty').val();
                $.get('{{URL::to("cart")}}',{id:id,qty:qty},function(data){
                    $(".notify-cart").text(data);
                });
        });
})
</script>
<script>
    function delete_coupon(data){
        if (confirm("Xác nhận không dùng mã giảm giá ?") == true) {
            var code = $(data).attr("data");
             $.get('{{URL::to("coupon-delete")}}',{code:code},function(value){
                    //$(".coupon").css('display','block');
                    //$(".cfr-coupon").css('display','none');
                    window.location.href = '{{URL::to("check-out")}}';
             });
        }else{
            return false;
        }
    }
    function color(data){
        var color = $(data).attr('data');
        var id = $(data).attr('uid');
        if($('.check-color').length){
        $('.check-color').remove();
         }
        $(data).prev().html('<span class="check-color" style="position:relative;top:-6px;left:4px"> X </span>');
        $.get('{{URL::to("add-color")}}',{color:color,id:id},function(value){
            console.log(value);
                    //$(".coupon").css('display','block');
                    //$(".cfr-coupon").css('display','none');
             });
    }
    function format1(n, currency) {
    return n.toFixed(2).replace(/./g, function(c, i, a) {
        return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
    }) + " " + currency;
    }
    function delete_product(data){
        var total  =  parseInt($("#total_price_not").text());
        var before_price = parseInt($(data).parent().prev().text());
        if (confirm("Bạn có muốn xóa không ?") == true) {
            var id = $(data).attr("data");
            $.get('{{URL::to("cart-delete")}}',{id:id},function(value){
            $(data).parent().parent().hide(550);
                var after_price = format1(total - before_price,"VNĐ");
                var res = after_price.replace(".00", " ");
                <?php $check = Session::get('coupon'); ?>
                @if (count($check) == 0)
                $("#total_price").text(res);
                @else
                var a = <?php echo $check[0]->value;?>;
                before_price -= (before_price*a)/100 ;
                after_price = format1(total - before_price,"VNĐ");
                res = after_price.replace(".00", " ");
                $("#total_price").text(res);
                @endif
                var count_cart = parseInt($(".notify-cart").text());
                count_cart--;
                $(".notify-cart").text(count_cart);

            });
        }else{
            return false;
        }
    }
</script>
<script type="text/javascript" src="{{ URL::asset('public/js/jquery.raty.js') }}"></script>
<script>
  $.fn.raty.defaults.path = "{{URL::asset('public/front/votes')}}";

  $(function() {
    $('#default').raty();
  });
</script>

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:19:33 GMT -->
</html>