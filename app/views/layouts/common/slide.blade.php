
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                    <ul id="contenhomeslider">
                    <?php foreach($slide as $value_slide){ ?>  
                      <li><a href="{{$value_slide->link}}"><img alt="Chương trình khuyến mãi" src="{{ URL::asset('public/upload/image/'.$value_slide->name)}}"/></a></li>
                    <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>