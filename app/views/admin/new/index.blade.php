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
                 <a href="{{ URL::to('admin/news/add')}}"> <button class="btn btn-block btn-success">Thêm tin tức</button></a> 
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
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Hình ảnh</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $k => $v){?>
                      <tr>
                        <td><?php echo $k +=1 ;?></td>
                        <td><?php echo $v->title ;?></td>
                        <td style="width:30%"><?php echo word_limiter($v->content,50) ;?></td>
                        <td><img src="{{ URL::asset('public/upload/image/'.$v->image)}}" style="width:100px" alt=""></td>
                        <td>
                          <a target="_blank" class="btn btn-app" href="{{URL::route('news-front', [$v->alias,$v->id])}}" >
                            <i class="fa fa-eye"></i> View
                          </a>
                          <a class="btn btn-app" href="{{ URL::to('admin/news/edit', $v->id) }}">
                            <i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-app" onclick="redirect('{{ URL::to('admin/news/delete', $v->id) }}')">
                             <i class="fa fa-trash"></i> Delete
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
<?php 
function word_limiter($str, $limit = 100, $end_char = '&#8230;')
{
    if (trim($str) == '')
    {
        return $str;
    }

    preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

    if (strlen($str) == strlen($matches[0]))
    {
        $end_char = '';
    }

    return rtrim($matches[0]).$end_char;
}
?>