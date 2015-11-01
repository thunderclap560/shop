<div class="content-wrapper">
<section class="content">
<div class="row">
	<div class="col-md-12">
		 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ $title }}</h3>
                </div><!-- /.box-header -->
                 @if(Session::has('message'))
					
					<div class="alert alert-success alert-dismissable" style="margin-left:20px;margin-right:20px;">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   		</h4>
                    	{{ Session::get('message') }}
                  	</div>
                  
                  	@endif
                <!-- form start -->
                {{ Form::open(['url' => ['admin/news/create'],'files' => true])}}
                	<ul>
				        @foreach($errors->all() as $error)
				            <li style="color:red">{{ $error }}</li>
				        @endforeach
				    </ul>
      
                  <div class="box-body" style="float:left;width:40%">
                    <div class="form-group">
                    {{ Form::label('title', 'Tiêu đề');}}
                      <label for="exampleInputEmail1"></label>
                      {{ Form::text('title', null, ['class' => 'form-control','placeholder'=>'Nhập tiêu đề ']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('content', 'Chi tiết bài viết');}}
                      {{ Form::textarea('content', null, ['class' => 'form-control','id'=>'editor1','placeholder'=>'Nhập thông tin chi tiết']) }}
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-body" style="float:left;padding-left:100px">                	
                    <div class="form-group">
                    {{ Form::label('image', 'Hình ảnh');}}
                    {{  Form::file('image', $attributes = array())}}
                      <p class="help-block">Hình ảnh đại diện</p>
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
