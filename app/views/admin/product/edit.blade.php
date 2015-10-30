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
                {{ Form::model($data,['url' => ['admin/product/edit',$data->id],'files' => true])}}
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
                      {{ Form::select('status', array('0' => 'Còn hàng', '1' => 'Hết hàng'), $data->status, array('class' => 'form-control')) }}
                      
                    </div>
                    <div class="form-group">
                      {{ Form::label('short_detail', 'Giới thiệu ngắn');}}
                      {{ Form::text('short_detail', null, ['class' => 'form-control','placeholder'=>'Nhập giới thiệu ngắn']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('long_detail', 'Chi tiết sản phẩm');}}
                      {{ Form::textarea('long_detail', null, ['class' => 'form-control','id'=>'editor1','placeholder'=>'Nhập thông tin chi tiết sản phẩm']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('category_id', 'Thuộc danh mục');}}
                      {{ Form::select('category_id', $categories, null,array('class' => 'form-control')) }}
                    </div>
                   

                  </div><!-- /.box-body -->
                                   	
                       <div class="col-md-4" style="float:left;padding-left:100px">
                          <div class="box box-solid" style="margin-bottom:20px">
                            <div class="box-header with-border">
                              <div class="form-group">
                                {{ Form::label('sales', 'Sản phẩm khuyến mãi');}}
                                {{ Form::select('sales',array('0' => 'Không', '1' => 'Có'), $data->sales ,array('class' => 'form-control')) }}
                              </div>
                            <div class="form-group">
                                {{ Form::label('feature', 'Sản phẩm nổi bật');}}
                                {{ Form::select('feature', array('0' => 'Không', '1' => 'Có'), $data->feature,array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('color', 'Màu sắc') }}  <span style="cursor:pointer" title="Thêm màu" id="addColor"><i class="fa fa-plus-square"></i></span>
                                <p>
                                  <p class="help-block">Màu sắc hiện có</p>
                                    <?php foreach($color as $k_color => $v_color){ ?>
                                    <div class="btn-group">
                                      <button type="button" style="background-color:{{$v_color->name}};color:white" class="btn btn-sm">Tùy chọn</button>
                                      <button type="button" style="background-color:{{$v_color->name}};color:white" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                      </button>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="javascript:void(0)" id="trash-{{$v_color->id}}"  onclick="check_color({{$v_color->id}})">Xóa màu này</a></li>                                      
                                      </ul>
                                    </div>
                                  <?php }?>
                             </p> 
                            </div>
                              <h3 class="box-title">Hình ảnh chi tiết</h3>
                              <p> {{ Form::file('images[]', array('multiple'=>true,'class'=>'form-control input-sm')) }}</p>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner" style="width: 400px; margin: 0 auto">
                                <?php foreach($image as $key_img => $v_img){?>
                                  <div class="item <?php if($key_img == 0){ echo 'active';}?>">
                                    <img width ="350" height="200" src="{{ URL::asset('public/upload/image/'.$v_img->name)}}" alt="Second slide">
                                    
                                  </div>
                                <?php } ?>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                  <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                  <span class="fa fa-angle-right"></span>
                                </a>
                              </div>
                            </div><!-- /.box-body -->
                          </div><!-- /.box -->

                           <div class="form-group">
                              {{ Form::label('image', 'Hình ảnh đại diện');}}
                              {{  Form::file('image', $attributes = array())}}
                          </div>
                            <div class="col-md-4">
                              <img width="200px" src="{{ URL::asset('public/upload/image/'.$data->image)}}" alt="">
                            </div>
                        </div><!-- /.col -->
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

