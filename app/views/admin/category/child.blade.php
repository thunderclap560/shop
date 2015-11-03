 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $title }}
            <small></small>
          </h1>
           @include('layouts.common.thumb')
          <!-- <ol class="breadcrumb">
            <li><a href="{{URL::to('admin/dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{URL::to('admin/category')}}"> </a></li>
            <li class="active"></li>
          </ol> -->
        </section>
       <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="col-xs-2">
                <div class="box-header">
                 <a href="{{ URL::to('admin/category/add-child/'.Request::segment(4))}}"> <button class="btn btn-block btn-success">Thêm danh mục  </button></a> 
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
                        <th>Tên danh mục</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k => $v){?>
                      <tr>
                        <td><?php echo $k +=1 ;?></td>
                        <td><?php echo $v->name ;?></td>
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
                                <h4 class="modal-title" id="myModalLabel"><a href="">{{ $v->name }} >> Sửa danh mục </a></h4>
                              </div>
                              <div class="modal-body">
                                {{ Form::model($v,array('url'=>array('admin/category/edit-child',$v->id), 'class'=>'form-signup')) }}                 
                                <p>{{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Nhập tên danh mục ','required')) }}</p>
                              <input class="form-control" name="parent_id" type="hidden" value="{{Request::segment(4)}}" />
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">OK </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {{ Form::close() }}
                              </div>
                            </div>
                          </div>
                        </div>  
                          <a class="btn btn-app" onclick="redirect('{{ URL::to('admin/category/delete-child', $v->id) }}')">
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
       window.location.href = data+'/{{Request::segment(4)}}';
    } else {
       return false;
    }

  }
</script>
