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
                {{ Form::model($data,['route' => ['admin.update'],'files' => true])}}
                	<ul>
				        @foreach($errors->all() as $error)
				            <li style="color:red">{{ $error }}</li>
				        @endforeach
				    </ul>
      
                  <div class="box-body" style="float:left;width:40%">
                    <div class="form-group">
                    {{ Form::label('title', 'Tiêu đề');}}
                      <label for="exampleInputEmail1"></label>
                      {{ Form::text('title', null, ['class' => 'form-control','placeholder'=>'Nhập tiêu đề website']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('description', 'Thông tin');}}
                      {{ Form::text('description', null, ['class' => 'form-control','placeholder'=>'Nhập thông tin website']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('phone', 'Số điện thoại');}}
                      {{ Form::text('phone', null, ['class' => 'form-control','placeholder'=>'Nhập số điện thoại liên hệ']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('address', 'Địa chỉ liên hệ');}}
                      {{ Form::text('address', null, ['class' => 'form-control','placeholder'=>'Nhập địa chỉ website']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('email', 'Địa chỉ Email');}}
                      {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Nhập địa chỉ email']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('policy', 'Điều khoản sử dụng');}}
                      {{ Form::textarea('policy', null, ['class' => 'form-control','placeholder'=>'Nhập quyền hạn sử dụng']) }}
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-body" style="float:left;padding-left:100px">                	
                    <div class="form-group">
                     {{ Form::label('logo', 'Logo');}}
                      {{  Form::file('logo', $attributes = array())}}
                      <p class="help-block">Hình ảnh logo</p>
                  </div>
                  <div class="col-md-4">
                    <img src="{{ URL::asset('public/upload/image/'.$data->logo)}}" alt="" class="img-reponsive" style="width:100%">
                  </div>
                  </div>
					<div class="clearfix"></div>
                  <div class="form-group" style="margin-left:10px;padding-bottom:20px;">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                  </div>
                {{ Form::close() }}
          </div><!-- /.box -->
	</div>
</div>	

</section>
</div>