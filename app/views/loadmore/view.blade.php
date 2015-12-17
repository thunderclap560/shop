@foreach($data as $k_product_featured)
@if($k_product_featured->pick == 1)
  <li class="col-sm-4">
    <div class="right-block">
        <h5 class="product-name"><a href="{{URL::route('product-front', [$k_product_featured->alias,$k_product_featured->id])}}"><?php echo $k_product_featured->name;?></a></h5>
        <div class="content_price">
                <span class="price product-price">
                @if($k_product_featured->price_sales == null)
                    {{number_format($k_product_featured->price)}}
                    @else 
                     {{number_format($k_product_featured->price_sales)}}
                    @endif
                 VNĐ
                </span>
                <span class="price old-price">
                    @if($k_product_featured->price_sales != null)
                        {{number_format($k_product_featured->price)}}
                    @endif
                </span>
        </div>
    </div>
    <div class="left-block">
        <a href="{{URL::route('product-front', [$k_product_featured->alias,$k_product_featured->id])}}"><img class="img-responsive" alt="product" src="{{URL::asset('public/upload/image/'.$k_product_featured->image)}}" /></a>
      
        <div class="add-to-cart">
            <a title="Add to Cart" href="{{URL::route('product-front', [$k_product_featured->alias,$k_product_featured->id])}}">Chi tiết sản phẩm</a>
        </div>
        @if($k_product_featured->price_sales != null)
        <div class="price-percent-reduction2">- {{number_format((($k_product_featured->price - $k_product_featured->price_sales)/$k_product_featured->price)*100)}}% OFF</div>
        @endif
    </div>
</li>
@endif
@endforeach
