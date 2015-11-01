 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $title }}
            <small></small>
          </h1>
          @include('layouts.common.thumb')
        </section>
       <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="col-xs-2">
                <div class="box-header" style="display:none">
                 <a href="{{ URL::to('admin/product/add')}}"> <button class="btn btn-block btn-success">Thêm sản phẩm</button></a> 
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
                        <th>Mã đơn hàng</th>
                        <th>Khách hàng</th>
                        <th>Thanh toán</th>
                        <th>Hình thức thanh toán</th>
                        <th>Tổng số tiền</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k => $v){?>
                      <tr>
                        <td><?php echo $k +=1 ;?></td>
                        <td><?php echo $v->name ;?></td>
                        <td><?php echo $v->users->firstname.' '.$v->users->lastname ;?></td>
                        <td><?php if($v->valid == 0){echo 'Chưa thanh toán';}else{echo 'Đã thanh toán';}?></td>
                        <td><?php echo $v->type ;?></td>
                        <td><?php echo number_format($v->total) ;?> VNĐ</td>
                        <td>
                          <a class="btn btn-app" href="{{ URL::to('admin/order/detail', $v->id) }}" >
                            <i class="fa fa-eye"></i> Chi tiết
                          </a>
                           <a class="btn btn-app" href="{{ URL::to('admin/order/contact', $v->id) }} ">
                             <i class="fa fa-phone"></i> Liên hệ
                          </a>
                          <a class="btn btn-app" onclick="redirect('{{ URL::to('admin/order/delete', $v->id) }}')">
                             <i class="fa fa-trash"></i> Xóa
                          </a>
                        </td>

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
