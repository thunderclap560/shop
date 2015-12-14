  @foreach($data as $k_product_menu)
  <li class="col-sm-4">
    <div class="right-block">
        <h5 class="product-name"><a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><?php echo $k_product_menu->name;?></a></h5>
        <div class="content_price">
                <span class="price product-price">
                @if($k_product_menu->price_sales == null)
                    {{number_format($k_product_menu->price)}}
                    @else 
                     {{number_format($k_product_menu->price_sales)}}
                    @endif
                 VNĐ
                </span>
                <span class="price old-price">
                    @if($k_product_menu->price_sales != null)
                        {{number_format($k_product_menu->price)}}
                    @endif
                </span>
        </div>
    </div>
    <div class="left-block">
        <a href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}"><img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$k_product_menu->image)}}" /></a>
      
        <div class="add-to-cart">
            <a title="Add to Cart" href="{{URL::route('product-front', [$k_product_menu->alias,$k_product_menu->id])}}">Chi tiết sản phẩm</a>
        </div>
        @if($k_product_menu->price_sales != null)
        <div class="price-percent-reduction2">- {{number_format((($k_product_menu->price - $k_product_menu->price_sales)/$k_product_menu->price)*100)}}% OFF</div>
        @endif
    </div>
</li>
@endforeach