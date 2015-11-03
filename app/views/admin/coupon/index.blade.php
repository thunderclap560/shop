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
                <div class="box-header">
                 <a href="#" data-toggle="modal" data-target="#create_coupon"> <button class="btn btn-block btn-success">Thêm coupon  </button></a> 
                </div><!-- /.box-header -->
                <!--  Modal add -->
                        <div class="modal fade" id="create_coupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"> Thêm coupon </a></h4>
                              </div>
                              <div class="modal-body">
                                {{ Form::open(array('url'=>array('admin/coupon/add'), 'class'=>'form-signup')) }}                 
                                <p>{{ Form::text('code', null, array('class'=>'form-control', 'placeholder'=>'Nhập mã coupon ','required')) }}</p>
                                <p>{{ Form::text('value', null, array('class'=>'form-control', 'placeholder'=>'Nhập giá trị coupon ','required')) }}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">OK </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {{ Form::close() }}
                              </div>
                            </div>
                          </div>
                        </div>  
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
                        <th>Mã</th>
                        <th>Giá trị</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k => $v){?>
                      <tr>
                        <td><?php echo $k +=1 ;?></td>
                        <td><?php echo $v->code ;?></td>
                        <td><?php echo $v->value ;?></td>
                        <td>
                           <a class="btn btn-app" data-toggle="modal" data-target="#edit_cate{{$v->id}}">
                             <i class="fa fa-edit"></i> Sửa
                          </a>
                         <!--  Modal edit -->
                        <div class="modal fade" id="edit_cate{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><a href="">{{ $v->name }} >> Sửa coupon </a></h4>
                              </div>
                              <div class="modal-body">
                                {{ Form::model($v,array('url'=>array('admin/coupon/edit',$v->id), 'class'=>'form-signup')) }}                 
                                <p>{{ Form::text('code', null, array('class'=>'form-control', 'placeholder'=>'Nhập mã coupon ','required')) }}</p>
                                <p>{{ Form::text('value', null, array('class'=>'form-control', 'placeholder'=>'Nhập giá trị coupon ','required')) }}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">OK </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {{ Form::close() }}
                              </div>
                            </div>
                          </div>
                        </div>  
                          <a class="btn btn-app" onclick="redirect('{{ URL::to('admin/coupon/delete', $v->id) }}')">
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
