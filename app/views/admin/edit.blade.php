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
                {{ Form::model($data,['route' => ['banner.edit.post'],'files' => true])}}
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
                      {{ Form::hidden('parent_id', null, ['class' => 'form-control','placeholder'=>'Nhập tên danh mục']) }}
                      {{ Form::hidden('id', null, ['class' => 'form-control','placeholder'=>'Nhập tên danh mục']) }}
                    </div>
                  </div><!-- /.box-body -->
                  <div class="form-group" style="margin-left:10px;padding-bottom:20px;">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                  </div>
                {{ Form::close() }}
          </div><!-- /.box -->
	</div>
</div>	

</section>
</div>