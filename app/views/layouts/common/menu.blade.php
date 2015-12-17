<div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                   <?php foreach($best as $best_menu){?>
                                   <li><a href="{{URL::to('/')}}">Trang Chủ</a></li>
                                    <li><a href="{{URL::to('chuyen-muc/'.$best_menu->id)}}"><img style="position: absolute;left: 38%;top: -21px;"width="32" height="22" src="{{URL::asset('public/front/assets/images/icon-new7.png')}}" class="attachment-full" alt="icon-new2"><?php echo $best_menu->name;?></a></li>
                                    <?php } ?>
                                    @foreach($menu as $val_menu)
                                    @if($val_menu['menu'] == 1)
                                    <li class="dropdown">
                                        <a href="{{URL::to('chuyen-muc/'.$val_menu['id'])}}" class="dropdown-toggle" data-toggle="dropdown">{{$val_menu['name']}}</a>
                                            <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            @if(isset($val_menu['sub']))
                                            @foreach($val_menu['sub'] as $val_menu_second)
                                            <li class="block-container col-sm-3"> 
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="{{URL::to('chuyen-muc/'.$val_menu_second['id'])}}">{{$val_menu_second['name']}}</a>
                                                    </li>
                                                    @if(isset($val_menu_second['product']))
                                                    <?php $count_menu_top = 0;?>
                                                    @foreach($val_menu_second['product'] as $val_product_third)
                                                        @if($count_menu_top < 5)
                                                    <li class="link_container">
                                                        <a href="{{URL::route('product-front', [$val_product_third->alias,$val_product_third->id])}}">{{$val_product_third->name}}</a>
                                                    </li>
                                                        @endif
                                                        <?php $count_menu_top++;?>
                                                    @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                            @endforeach
                                            @endif
                                            <!-- <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img src="assets/data/banner-topmenu.jpg" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                    <li><a href="{{URL::to('blog')}}">Tin tức</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>