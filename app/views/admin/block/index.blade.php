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
                  <button class="btn btn-block btn-success" data-toggle="modal" data-target="#myModal">Thêm hình ảnh </button>
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
                        <th>Link</th>
                        <th>Vị trí</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k => $v){?>
                      <tr>
                        <td><?php echo $k +=1 ;?></td>
                        <td><img style="width:100px" src="{{ URL::asset('public/upload/image/'.$v->name) }}" alt=""></td>
                        <td><?php echo $v->link ;?></td>
                        <td><?php  if($v->position == '0') {echo 'Footer'; }else{echo 'Top';}  ;?></td>
                        <td>
                          <a class="btn btn-app" data-toggle="modal" data-target="#showImage{{$v->id}}"><i class="fa fa-eye"></i> View</a>
                          <!-- Modal Add -->
                              <div class="modal fade" id="showImage{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive" src="{{ URL::asset('public/upload/image/'.$v->name) }}" alt="">
                                    </div>
                                  </div>
                                </div>
                              </div>
                          <a class="btn btn-app" data-toggle="modal" data-target="#myModal{{$v->id}}" ><i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-app" onclick="redirect('{{ URL::route('delete.block', $v->id) }}')"><i class="fa fa-trash"></i> Delete</a></td>
                      </tr>
                      <div class="modal fade" id="myModal{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Cập nhật hình ảnh </h4>
                            </div>
                            <div class="modal-body">
                              {{ Form::open(array('url'=>array('admin/blocks/update',$v->id), 'class'=>'form-signup')) }}                 
                              <p>  {{ Form::text('link', $v->link, array('class'=>'form-control', 'placeholder'=>'Nhập URL mới')) }} </p>
                              <p>{{ Form::label('position', 'Vị trí : ');}}  
                 
                                <select id="position" name="position">
                                  <option value="0" <?php if($v->position == 0){echo 'selected="selected"';}?>>Footer</option>
                                  <option value="1" <?php if($v->position == 1){echo 'selected="selected"';}?>>Top</option>
                                </select> 
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">OK </button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              {{ Form::close() }}
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?> 
                    </tbody>
                  </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

               </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Modal Add -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm hình ảnh </h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url'=>'admin/blocks/upload', 'class'=>'form-signup','files'=>true)) }}                 
        <p> {{ Form::file('images[]', array('multiple'=>true,'class'=>'form-control input-sm','id'=>'upload')) }}</p>
        <div id="append"></div>       
        <p>{{ Form::label('position', 'Vị trí : ');}}  {{ Form::select('position', array('0'=> 'Footer','1'=> 'Top'),array('class'=>'form-control input-sm', 'placeholder'=>'Nhập tên danh mục')) }} </p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">OK </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
 <script>
                  function redirect(data){
                    if (confirm("Bạn có muốn xóa không ?") == true) {
                       window.location.href = data;
                    } else {
                       return false;
                    }

                  }
                </script>
