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
                {{ Form::model($data,['url' => ['admin/adver/edit',$data->id],'files' => true])}}
                	<ul>
				        @foreach($errors->all() as $error)
				            <li style="color:red">{{ $error }}</li>
				        @endforeach
				    </ul>
      
                  <div class="box-body" style="float:left;width:40%">
                    <div class="form-group">
                    {{ Form::label('link', 'URL');}}
                      <label for="exampleInputEmail1"></label>
                      {{ Form::text('link', null, ['class' => 'form-control','placeholder'=>'Nhập URL ']) }}
                      {{ Form::hidden('type', null, ['class' => 'form-control','placeholder'=>'Nhập URL ']) }}
                    </div>
                    
                    <div class="form-group">
                      {{ Form::label('category', 'Nằm tại vị trí');}}
                      {{ Form::select('category',[0=>'Hủy'] + $category,$cate,array('class' => 'form-control','multiple'=>'multiple','name'=>'categories[]')) }}
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-body" style="float:left;padding-left:100px">                	
                    <div class="form-group">
                    {{ Form::label('image', 'Hình ảnh');}}
                    {{  Form::file('image', $attributes = array())}}
                      <p class="help-block">Hình ảnh đại diện</p>
                  <div class="col-md-4">
                    <img src="{{ URL::asset('public/upload/image/'.$data->image)}}" alt="" class="img-reponsive">
                  </div>
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
