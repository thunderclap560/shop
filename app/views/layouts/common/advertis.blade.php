<div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                       @if(isset($kads->cate))
                       @foreach($kads->cate as $kad_value)
                        <li><a href="{{$kad_value->link}}"><img src="{{URL::asset('public/upload/image/'.$kad_value->name)}}" alt="slide-left"></a></li>
                       @endforeach
                       @endif     
                    </ul>
</div>