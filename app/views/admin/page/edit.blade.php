<div class="content-wrapper">
<section class="content">
<div class="row">
	<div class="col-md-12">
		 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ $title }}</h3>
                </div><!-- /.box-header -->
                                 @include('layouts.common.thumb')

                 @if(Session::has('message'))
					
					<div class="alert alert-success alert-dismissable" style="margin-left:20px;margin-right:20px;">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   		</h4>
                    	{{ Session::get('message') }}
                  	</div>
                  
                  	@endif
                <!-- form start -->
                {{ Form::model($data,['url' => ['admin/pages/edit',$data->id]])}}
                	<ul>
				        @foreach($errors->all() as $error)
				            <li style="color:red">{{ $error }}</li>
				        @endforeach
				    </ul>
      
                  <div class="box-body" style="float:left;width:40%">
                    <div class="form-group">
                    {{ Form::label('name', 'Tên trang');}}
                      <label for="exampleInputEmail1"></label>
                      {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'Nhập tên trang']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('content', 'Chi tiết bài viết');}}
                      {{ Form::textarea('content', null, ['class' => 'form-control','id'=>'editor1','placeholder'=>'Nhập thông tin chi tiết']) }}
                    </div>
                  </div><!-- /.box-body -->
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
