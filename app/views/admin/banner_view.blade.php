<style>
  .slide{
  padding-bottom:20px; 
  position: relative;
  }
  .slide:hover img{
    transition: 0.5s;
    opacity: 0.2;
  }

  .slide:hover .look {
    display: block;
    transition: 1s;
    cursor: pointer;
  }

   .look{
    position: absolute;
    left:40%;
    bottom: 43%;
    color:black;
    display: none;
   }
</style>
<div class="content-wrapper">
<section class="content">
<div class="row">
  <div class="col-md-12">
 <!-- Post -->
                    <div class="post clearfix">
                      <div class="box-header with-border">
                        <h3 class="box-title">{{ $title }}</h3>
                      </div><!-- /.box-header -->
                      <?php 
                              Breadcrumbs::register('home', function($breadcrumbs) {
                                $breadcrumbs->push('Home', URL::to('/admin/'));
                              });
                              Breadcrumbs::register('child', function($breadcrumbs) {
                                $breadcrumbs->parent('home');
                                $breadcrumbs->push('Danh sách block khuyến mãi ', URL::to('/admin/'.Request::segment(2)));
                              });
                              Breadcrumbs::register('child-child', function($breadcrumbs,$data2) {
                                $breadcrumbs->parent('child');
                                $breadcrumbs->push($data2->name, URL::to('/admin/'.Request::segment(2)));
                              });
                              echo Breadcrumbs::render('child-child',$data2);
                          ?>
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
                    <?php //var_dump(Request::segment( 4 ));?>
                      <p class="errors">{{ $errors->first('images') }}</p>
                      {{ Form::open(array('route' => array('admin.banner.upload', Request::segment(4)),'method'=>'POST', 'files'=>true,'class'=>'form-horizontal')) }}
                        <div class='form-group margin-bottom-none'>
                          <div class='col-sm-9'>
                            {{ Form::file('images[]', array('multiple'=>true,'class'=>'form-control input-sm')) }}
                          </div>                          
                          <div class='col-sm-3'>
                            <button type ="submit" class='btn btn-danger pull-right btn-block btn-sm'>Upload</button>
                          </div>                          
                        </div>                        
                      {{ Form::close() }} 
                    </div><!-- /.post -->

                    <!-- Post -->
                    <div class="post">

                      <div class='row'>
                        <?php foreach($data as $k => $v){ ?>
                        <div class='col-md-3 slide'>
                          <img class='img-responsive' src="{{ URL::asset('public/upload/image/'.$v->name) }}" alt='Photo'>
                          <div class="look">
                              <span data-toggle="modal" data-target="#myModal{{ $v->id }}"><i class="fa fa-edit fa-3x"></i></span>
                              <span onclick='delete_image("{{ URL::route('admin.banner.delete', array($v->id, Request::segment(4))) }}")'><i class="fa fa-times fa-3x"></i></span>
                             
                          </div>
                        </div><!-- /.col -->
                              <div class="modal fade" id="myModal{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Thêm đường dẫn </h4>
                                      </div>
                                      <div class="modal-body">
                                        {{ Form::open(array('route'=> array('admin.banner.update',$v->id), 'class'=>'form-signup')) }}                 
                                        {{ Form::text('link', null, array('class'=>'form-control', 'placeholder'=>'Nhập URL')) }} 
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save </button>
                                        {{ Form::close() }}
                                      </div>
                                    </div>
                                  </div>
                                </div>
                      <?php }?>
                      </div><!-- /.row -->
                    </div>
                  </div>
                </section></div>
                <script>
                  function delete_image(data){
                    if (confirm("Bạn có muốn xóa không ?") == true) {
                       window.location.href = data;
                    } else {
                       return false;
                    }

                  }
                </script>
