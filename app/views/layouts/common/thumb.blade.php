<?php 
    Breadcrumbs::register('home', function($breadcrumbs) {
        $breadcrumbs->push('Home', URL::to('/admin/'));
    });
    if(Request::segment(2) == 'config'){
        Breadcrumbs::register('child', function($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push('Thông tin cửa hàng ', URL::to('/admin/'.Request::segment(2)));
        });
        echo Breadcrumbs::render('child');
    }elseif(Request::segment(2) == 'blocks'){
        Breadcrumbs::register('child', function($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push('Trình chiếu ảnh ', URL::to('/admin/'.Request::segment(2)));
        });
        echo Breadcrumbs::render('child');
    }
    elseif(Request::segment(2) == 'order'){
        Breadcrumbs::register('child', function($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push('Danh sách đơn hàng ', URL::to('/admin/'.Request::segment(2)));
        });
        echo Breadcrumbs::render('child');
    }
    elseif(Request::segment(2) == 'news'){
        Breadcrumbs::register('child', function($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push('Danh sách tin tức ', URL::to('/admin/'.Request::segment(2)));
        });
        echo Breadcrumbs::render('child');
    }
     elseif(Request::segment(2) == 'coupon'){
        Breadcrumbs::register('child', function($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push('Danh sách coupon ', URL::to('/admin/'.Request::segment(2)));
        });
        echo Breadcrumbs::render('child');
    }
    elseif(Request::segment(2) == 'product'){
        Breadcrumbs::register('child', function($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push('Danh sách sản phẩm ', URL::to('/admin/'.Request::segment(2)));
        });
        echo Breadcrumbs::render('child');
    } elseif(Request::segment(3) == 'list-all'){
        Breadcrumbs::register('child2', function($breadcrumbs) {
            $breadcrumbs->parent('home');
            $breadcrumbs->push('Lĩnh vực ', URL::to('/admin/'.Request::segment(2)));
        });
        Breadcrumbs::register('child', function($breadcrumbs) {
            $breadcrumbs->parent('child2');
            $breadcrumbs->push('Danh mục sản phẩm ', URL::to('/admin/'.Request::segment(3)));
        });
        echo Breadcrumbs::render('child');
    }
    

?>