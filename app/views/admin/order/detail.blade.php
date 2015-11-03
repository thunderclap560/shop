 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $title }}
            <small></small>
          </h1>
           <?php 
            Breadcrumbs::register('home', function($breadcrumbs) {
                $breadcrumbs->push('Home', URL::to('/admin/'));
            });
            Breadcrumbs::register('child', function($breadcrumbs) {
                $breadcrumbs->parent('home');
                $breadcrumbs->push('Danh sách đơn hàng', URL::to('/admin/'.Request::segment(2)));
            });
            Breadcrumbs::register('category', function($breadcrumbs) {
                $breadcrumbs->parent('child');
                $breadcrumbs->push('Chi tiết đơn hàng', URL::to('/admin/'.Request::segment(3)));

            });
             echo Breadcrumbs::render('category');
          ?>
        </section>
       <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="col-xs-2">
                <div class="box-header">
                </div><!-- /.box-header -->
              </div>
              <div class="col-xs-10">
                <div class="box-header">
                    @if(Session::has('message'))          
                     <ul class="list-group">
                         <li class="list-group-item list-group-item-success" style="color:green"><i class="fa fa-info-circle"></i> {{ Session::get('message') }}</li>
                    </ul>                                     
                    @endif
                     <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger"><i class="fa fa-exclamation-triangle"></i> {{ $error }}</li>
                    @endforeach
                  </ul> 
                </div><!-- /.box-header -->
              </div>

                <div class="box-body">                
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k => $v){?>
                      <tr>
                        <td><?php echo $k +=1 ;?></td>
                        <td><?php echo $v->products->name ;?></td>
                        <td><?php echo $v->products->code ;?></td>
                        <td><?php echo number_format($v->products->price) ;?> VNĐ</td>
                        <td><img src="{{ URL::asset('public/upload/image/'.$v->products->image)}}" style="width:100px" alt=""></td>
                        
                      </tr>
                    <?php } ?> 
                    </tbody>
                  </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
               </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script>
  function redirect(data){
    if (confirm("Bạn có muốn xóa không ?") == true) {
       window.location.href = data;
    } else {
       return false;
    }

  }
</script>
