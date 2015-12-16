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
                                @foreach($page as $k_page => $v_page)
                                <li><a href="{{URL::route('about',[$v_page->alias,$v_page->id])}}">{{$v_page->name}}</a></li>
                               @endforeach
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
    function noshow(data){
        $.get('{{URL::to("cancel")}}',function(){
            $(data).click();
        });
    } 
    $(document).ready(function(){
        /* load-more-featured*/         
        $(".load-more-featured").on('click',function(){
            var category_id = $(this).attr('data');
            var element = $(this);
            var num = parseInt($(this).attr('num'));
            var cd = parseInt($(this).attr('count'));
            $.post("{{URL::to('load-more-featured')}}",{category_id:category_id,num:num},function(data){
                element.attr('count',cd-=5);
                element.prev().fadeOut(300);
                element.prev().html(data).fadeIn(300);
                element.attr('num',num+=5);
                if(cd <= 5){
                    element.remove();
                }
            });
        }); 
        /* load-more-featured*/

        @if($config->popup == 1 && Session::get('cancel') != 2 )
        setTimeout(function() {
            $("#front-ad").click();
        }, 4e3);
        @endif
        @if(Session::has('edit-profile-error'))
            $("#get-info").click();
            alert("{{Session::get('edit-profile-error')}}");
        @endif
        @if(Session::has('edit-profile'))
            alert("{{Session::get('edit-profile')}}");
        @endif
        @if(Session::has('order'))
        alert("{{Session::get('order')}}");
        @endif
        @if (Request::segment(1) == 'order')
            @if(count($errors->all()) != 0)
            $("#detail-order").fadeIn(900);
            $('.have-account').prop('checked',true);
                $('html, body').animate({
                        scrollTop: $("#detail-order").offset().top
                    }, 900);
            @endif
            @if(Session::has('login'))
                $('.none-account').prop('checked',true);
                $(".login-register").fadeIn(900);
            @endif
        @endif
        $("#step-1").click(function(){
            if ($(".have-account").is(":checked")) {
                $("#detail-order").fadeIn(900);
                $('html, body').animate({
                        scrollTop: $("#detail-order").offset().top
                    }, 900);
            }else{
                    $(".login-register").fadeIn(900);
            }
        });
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
    function delete_favorite(data){
        if (confirm("Bạn có muốn xóa không ? ") == true) {
            var id = $(data).attr('data');
            $.get('{{URL::to("favorite-delete")}}',{id:id},function(value){
                $(data).parent().parent().hide(900);
                var f = parseInt($(".notify-favorite").text());
                f--;
                $(".notify-favorite").text(f)  
            });
        }else{
            return false;
        }
    }
    function favorites(data){
        var id = $(data).attr('data');
        if($(data).find(':first-child').attr('flag') != 'TRUE'){
            $(data).find(':first-child').attr('flag','TRUE');
            $.get('{{URL::to("favorite-add")}}',{id:id},function(value){
            $(data).find(':first-child').css('background-color','pink'); 
            var f = parseInt($(".notify-favorite").text());
            f++;
            $(".notify-favorite").text(f)     
        });
        }else{
            $(data).find(':first-child').attr('flag',' ');
            $.get('{{URL::to("favorite-delete")}}',{id:id},function(value){
            $(data).find(':first-child').css('background-color','');
            var f = parseInt($(".notify-favorite").text());
            f--;
            $(".notify-favorite").text(f)        
        });            
        }              
    }
    function favorite(data){
        var id = $(data).attr('data');
        if($(data).attr('flag') != 'TRUE'){
            $(data).attr('flag','TRUE');
            $.get('{{URL::to("favorite-add")}}',{id:id},function(value){
            $(data).css('background-color','pink'); 
            var f = parseInt($(".notify-favorite").text());
            f++;
            $(".notify-favorite").text(f)     
        });
        }else{
            $(data).attr('flag',' ');
            $.get('{{URL::to("favorite-delete")}}',{id:id},function(value){
            $(data).css('background-color','');
            var f = parseInt($(".notify-favorite").text());
            f--;
            $(".notify-favorite").text(f)        
        });            
        }              
    }
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
            $(data).parent().parent().remove();
                var after_price = format1(total - before_price,"VNĐ");
                var res = after_price.replace(".00", " ");
                <?php $check = Session::get('coupon'); ?>
                @if (count($check) == 0)
                $("#total_price").text(res);
                $("#total_price_not").text(total - before_price);
                @else
                var a = <?php echo $check[0]->value;?>;
                before_price -= (before_price*a)/100 ;
                after_price = format1(total - before_price,"VNĐ");
                res = after_price.replace(".00", " ");
                $("#total_price").text(res);
                $("#total_price_not").text(total - before_price);
                @endif
                var count_cart = parseInt($(".notify-cart-count").text());
                count_cart--;
                $(".notify-cart-count").text(count_cart);
                $(".notify-cart").text(count_cart);
                if(count_cart == 0){
                    $(".order-detail-content").hide(550);
                    $(".update-cart").hide(550);
                }

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
<script type="text/javascript" src="{{ URL::asset('public/js/jquery.tabSlideOut.v1.3.js') }}"></script>
<script>
         $(function(){
             $('.slide-out-div').tabSlideOut({
                 tabHandle: '.handle',                              //class of the element that will be your tab
                 pathToTabImage: '{{URL::asset("public/upload/image/contact_tab.gif")}}',          //path to the image for the tab (optionaly can be set using css)
                 imageHeight: '122px',                               //height of tab image
                 imageWidth: '40px',                               //width of tab image    
                 tabLocation: 'left',                               //side of screen where tab lives, top, right, bottom, or left
                 speed: 300,                                        //speed of animation
                 action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
                 topPos: '400px',                                   //position from the top
                 fixedPosition: true,                               //options: true makes it stick(fixed position) on scroll
             });
         });

</script>
<div class="slide-out-div">
        <a class="handle" href="http://link-for-non-js-users">Content</a>
        <h3>Contact Us</h3>
        <p><div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="180" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div></p>
    </div>
</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:19:33 GMT -->
</html>