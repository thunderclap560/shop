<div class="content-wrapper">
<section class="content">
<div class="row">
	<div class="col-md-12">
		 <div class="box box-primary">
                <div class="box-header with-border">
                  <h1 class="box-title">{{ $title }}</h1>
                            @include('layouts.common.thumb')

                </div><!-- /.box-header -->
                <div class="row">
                  <div class="box-header">
                  <div class="col-md-2">
                    <button class="btn btn-block btn-success" data-toggle="modal" data-target="#addCategory">Thêm lĩnh vực </button>
                  </div>
                <div class="col-md-10">
                    @if(Session::has('message'))          
                     <ul class="list-group">
                         <li class="list-group-item list-group-item-success" style="color:green"><i class="fa fa-info-circle"></i> {{ Session::get('message') }}</li>
                    </ul>                                     
                    @endif                
              </div>
                </div><!-- /.box-header -->             
            </div>
                
      <div class="row" style="padding-top:20px">
           <?php foreach($data['result'] as $k => $v){?>
            <div class="col-md-4">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header" style="background-color:{{ $v->color }}">
                  <div class="widget-user-image" style="float:left">
                    <span id="diep"><?php echo $v->icon;?></span>
<!--                     <i class="fa fa-hand-peace-o fa-5x"></i>
 --><!--                     <img class="img-circle" src="{{ URL::asset('public/css/dist/img/user7-128x128.jpg')}}" alt="User Avatar">
 -->                  </div><!-- /.widget-user-image -->
                  <h3 class="widget-user-username"><?php echo $v->name;?></h3>
                  <h5 class="widget-user-desc">Lĩnh vực</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li>
                      <a href="javascript:void(0)" onclick='add_cate({{$v->id.',"'.$v->name.'"'}})'>Thêm danh mục con <i class="pull-right fa fa-plus-square fa-1x"></i></a>
                      <button data-toggle="modal" id="show_cate{{$v->id}}" data-target="#add_cate{{$v->id}}" style="display:none"></button>
                      <!-- Modal Add -->
                        <div class="modal fade" id="add_cate{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><a href=""><span id="data_xy{{$v->id}}" style="text-transform: uppercase;"></span> >> Thêm danh mục con </a></h4>
                              </div>
                              <div class="modal-body">
                                {{ Form::open(array('url'=>array('admin/category/add',$v->id), 'class'=>'form-signup')) }}                 
                                <p>{{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Nhập tên danh mục con','required')) }}</p>
                                {{ Form::hidden('parent_id', $v->id, array('class'=>'form-control colorPicker evo-cp0', 'placeholder'=>'Nhập tên danh mục')) }} 
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">OK </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {{ Form::close() }}
                              </div>
                            </div>
                          </div>
                        </div>                     
                    </li>
                    <li><a href="{{ URL::to('admin/category/child/'.$v->id) }}">Tổng danh mục con <span class="pull-right badge bg-blue"><?php echo $data['tmp'][$k];?></span></a></li>
                    <li><a href="#">Tổng sản phẩm <span class="pull-right badge bg-blue"><?php if (empty($data['product'][$v->id])) {echo 0;}else{echo $data['product'][$v->id];}?></span></a></li>
                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#edit_cate{{$v->id}}" >Sửa danh mục  <i class="pull-right fa fa-edit fa-1x"></i></a></li>
                    <li><a href="javascript:void(0)" onclick="redirect('{{ URL::to('admin/category/delete', $v->id) }}')">Xóa danh mục  <i class="pull-right fa fa-trash fa-1x"></i></a></li>
                     <!-- Modal edit -->
                        <div class="modal fade" id="edit_cate{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><a href="">{{ $v->name }} >> Sửa danh mục </a></h4>
                              </div>
                              <div class="modal-body">
                                {{ Form::model($v,array('url'=>array('admin/category/edit',$v->id), 'class'=>'form-signup')) }}                 
                                <p>{{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Nhập tên danh mục ','required')) }}</p>
                                <p>{{ Form::text('color', null, array('class'=>'form-control','placeholder'=>'Nhập mã màu','required')) }}
<!--                                   <input class="form-control" id="mycolor" name="color" placeholder="Chọn màu" />
 -->                                </p>
                                <p >{{ Form::text('icon', null, array('class'=>'form-control', 'placeholder'=>'Ex: <i class="fa fa-amazon"></i>')) }} </p>
                                <p class="help-block"><i>Xem danh sách <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">tại đây</a></i></p>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">OK </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {{ Form::close() }}
                              </div>
                            </div>
                          </div>
                        </div>   
                  </ul>
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col -->
          <?php } ?>
          </div><!-- /.row -->
      </div>
    </div>
  </div>
</section>
</div>
<!-- Modal Add -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm danh mục </h4>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url'=>'admin/category/create', 'class'=>'form-signup')) }}                 
        <p>{{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Nhập tên danh mục')) }}</p>
        <p><input class="form-control" id="mycolor" name="color" placeholder="Chọn màu" /></p>
        <p >{{ Form::text('icon', null, array('class'=>'form-control', 'placeholder'=>'Ex: <i class="fa fa-amazon"></i>')) }} </p>
        <p class="help-block"><i>Xem danh sách <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">tại đây</a></i></p>
        {{ Form::hidden('parent_id', 0, array('class'=>'form-control colorPicker evo-cp0', 'placeholder'=>'Nhập tên danh mục')) }} 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">OK </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function redirect(data){
    if (confirm("Các dữ liệu liên quan sẽ bị xóa , bạn chắc chắn xóa không ?") == true) {
       window.location.href = data;
    } else {
       return false;
    }

  }
</script>