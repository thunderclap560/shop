<div class="content-wrapper">
<section class="content">
<div class="row">
	<div class="col-md-12">
		 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ $title }}</h3>
                </div><!-- /.box-header -->
                    <?php 
                  Breadcrumbs::register('home', function($breadcrumbs) {
                      $breadcrumbs->push('Home', URL::to('/admin/'));
                  });
                   Breadcrumbs::register('list', function($breadcrumbs) {
                      $breadcrumbs->parent('home');
                      $breadcrumbs->push('Hình ảnh khuyến mãi',URL::to('admin/adver/'));
                  });
                  Breadcrumbs::register('child', function($breadcrumbs) {
                      $breadcrumbs->parent('list');
                      $breadcrumbs->push('Thêm hình ảnh');

                  });             
                  echo Breadcrumbs::render('child');
                ?>
                 @if(Session::has('message'))
					
					<div class="alert alert-success alert-dismissable" style="margin-left:20px;margin-right:20px;">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   		</h4>
                    	{{ Session::get('message') }}
                  	</div>
                  
                  	@endif
                <!-- form start -->
                {{ Form::open(['url' => ['admin/adver/add'],'files'=>true])}}
                	<ul>
				        @foreach($errors->all() as $error)
				            <li style="color:red">{{ $error }}</li>
				        @endforeach
				    </ul>      
                  <div class="box-body">
                    <div class="form-group">
                    {{ Form::label('name', 'Hình ảnh');}}
                      <label for="exampleInputEmail1"></label>
                      {{  Form::file('image', $attributes = array('required'))}}
                    </div>
                   <div class="form-group">
                      {{ Form::label('parent_id', 'Đường dẫn');}}
                      {{ Form::text('link', null, ['class' => 'form-control','placeholder'=>'Nhập địa chỉ']) }}
                    </div> 
                     <div class="form-group">
                    <button type="submit" class="btn btn-primary">OK</button>
                  </div>
                  </div><!-- /.box-body -->                
                {{ Form::close() }}
          </div><!-- /.box -->
	</div>
</div>	

</section>
</div>
