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
                      $breadcrumbs->push('Danh sách sản phẩm',URL::to('admin/product'));

                  });
                  Breadcrumbs::register('category', function($breadcrumbs) {
                      $breadcrumbs->parent('list');
                      $breadcrumbs->push('Thêm sản phẩm');

                  });
                 
                    echo Breadcrumbs::render('category');
                ?>
                @if(Session::has('message'))					
					<div class="alert alert-success alert-dismissable" style="margin-left:20px;margin-right:20px;">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   		</h4>
                    	{{ Session::get('message') }}
                  	</div>
                  
                  	@endif
                <!-- form start -->
                {{ Form::open(['url' => ['admin/product/create'],'files' => true])}}
                	<ul>
				        @foreach($errors->all() as $error)
				            <li style="color:red">{{ $error }}</li>
				        @endforeach
				    </ul>
      
                  <div class="box-body" style="float:left;width:40%">
                    <div class="form-group">
                    {{ Form::label('name', 'Tên sản phẩm');}}
                      <label for="exampleInputEmail1"></label>
                      {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'Nhập tên sản phẩm']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('code', 'Mã sản phẩm');}}
                      {{ Form::text('code', null, ['class' => 'form-control','placeholder'=>'Nhập mã sản phẩm']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('price', 'Giá sản phẩm');}}
                      {{ Form::text('price', null, ['class' => 'form-control','placeholder'=>'Nhập giá sản phẩm']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('status', 'Tình trạng');}}
                      <select class="form-control" name="status">
                        <option value="0">Còn hàng</option>
                        <option value="1">Hết hàng</option>
                      </select>
                    </div>
                    <div class="form-group">
                      {{ Form::label('short_detail', 'Giới thiệu ngắn');}}
                      {{ Form::text('short_detail', null, ['class' => 'form-control','placeholder'=>'Nhập giới thiệu ngắn']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('long_detail', 'Chi tiết sản phẩm');}}
                      {{ Form::textarea('long_detail', null, ['class' => 'form-control','id'=>'editor1','placeholder'=>'Nhập thông tin chi tiết sản phẩm']) }}
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-body" style="float:left;padding-left:100px">                	
                    <div class="form-group">
                       {{ Form::label('category_id', 'Thuộc danh mục');}}
                      {{ Form::select('category_id', $categories, null,array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                       {{ Form::label('sales', 'Sản phẩm khuyến mãi');}}
                      {{ Form::select('sales', ['0'=>'Không','1'=>'Có'], null,array('class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                       {{ Form::label('feature', 'Sản phẩm nổi bật');}}
                      {{ Form::select('feature', ['0'=>'Không','1'=>'Có'], null,array('class' => 'form-control')) }}
                    </div>
                     <div class="form-group">
                        {{ Form::label('color', 'Màu sắc') }}  <span style="cursor:pointer" id="addColor"><i class="fa fa-plus-square"></i></span>
                        <p><input type="text" class="form-control" name="color[]"  placeholder="Nhập mã màu"></p> 
                     </div>
                    <div class="form-group">
                    {{ Form::label('image', 'Hình ảnh');}}
                    {{  Form::file('image', $attributes = array())}}
                      <p class="help-block">Hình ảnh đại diện</p>
                    </div>
                  <div class="form-group">
                    {{ Form::label('image', 'Ảnh sản phẩm');}}
                    <p> {{ Form::file('images[]', array('multiple'=>true,'class'=>'form-control input-sm')) }}</p>
                    <p class="help-block">Chọn nhiều hình ảnh</p>
                  </div>
                  </div>
					<div class="clearfix"></div>
                  <div class="form-group" style="margin-left:10px;padding-bottom:20px;">
                    <button type="submit" class="btn btn-primary">OK</button>
                  </div>
                {{ Form::close() }}
          </div><!-- /.box -->
	</div>
</div>	

</section>
</div>
