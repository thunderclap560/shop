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
                      $breadcrumbs->push('Danh sách danh mục sản phẩm',URL::to('admin/category/list-all'));
                  });
                  Breadcrumbs::register('category', function($breadcrumbs) {
                      $breadcrumbs->parent('list');
                      $breadcrumbs->push('Thêm danh mục');

                  });
                  $tmp = Request::segment(4);
                  if($tmp){
                  Breadcrumbs::register('child', function($breadcrumbs,$parent) {
                      $breadcrumbs->parent('list');
                      $breadcrumbs->push($parent->name,URL::to('admin/category/list-all'));
                  });
                  echo Breadcrumbs::render('child',$parent);
                  }else{
                      echo Breadcrumbs::render('category');
                  }

                ?>
                 @if(Session::has('message'))
					
					<div class="alert alert-success alert-dismissable" style="margin-left:20px;margin-right:20px;">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   		</h4>
                    	{{ Session::get('message') }}
                  	</div>
                  
                  	@endif
                <!-- form start -->
                {{ Form::open(['url' => ['admin/category/add-child',Request::segment(4)]])}}
                	<ul>
				        @foreach($errors->all() as $error)
				            <li style="color:red">{{ $error }}</li>
				        @endforeach
				    </ul>      
                  <div class="box-body">
                    <div class="form-group">
                    {{ Form::label('name', 'Tên danh mục');}}
                      <label for="exampleInputEmail1"></label>
                      {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'Nhập tên danh mục']) }}
                    </div>
                   <div class="form-group">
                      {{ Form::label('parent_id', 'Thuộc danh mục cha');}}
                      {{ Form::select('parent_id', $data, null,array('class' => 'form-control')) }}
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
