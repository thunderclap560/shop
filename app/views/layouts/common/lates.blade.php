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