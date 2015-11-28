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
                 <a href="{{ URL::to('admin/adver/add/') }}"> <button class="btn btn-block btn-success">Thêm hình  </button></a> 
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
                        <th>Hình Ảnh</th>
                        <th>Loại quảng cáo</th>
                        <th>Nằm tại</th>
                        <th>URL</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k => $v){?>
                      <tr>
                        <td><?php echo $k +=1 ;?></td>
                        <td>
                        <img src="{{ URL::asset('public/upload/image/'.$v->image)}}" alt="" class="img-reponsive" width="200">
                        </td>
                        <td>
                          @if($v->type == null && $v->parent_id == 1)
                            Loại 1
                          @elseif($v->type == 1 && $v->parent_id == 1)
                            Loại 2
                          @elseif($v->type == 2 && $v->parent_id == 1)
                            Loại 3
                          @elseif($v->type == 1 && $v->parent_id == null)
                            Nằm trong loại 2
                          @elseif($v->type == 2 && $v->parent_id == null)
                            Nằm trong loại 3
                          @endif

                        </td>
                        <td><?php foreach($v->category as $k_category => $v_category){echo $v_category->name .' ';}?></td>
                        <td><?php echo $v->link ;?></td>
                        <td>
                        <?php if($v->parent_id == 1){?>
                           <a class="btn btn-app" href="{{URL::to('admin/adver/edit/'.$v->id)}}">
                             <i class="fa fa-edit"></i> Sửa
                          </a>
                        <?php } ?>
                          <?php if($v->parent_id != 1){?>
                          <a class="btn btn-app" onclick="redirect('{{ URL::to('admin/adver/delete', $v->id) }}')">
                             <i class="fa fa-trash"></i> Xóa
                          </a>
                          <?php }?>
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
