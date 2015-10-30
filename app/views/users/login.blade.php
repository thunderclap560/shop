<div class="login-box">
      <div class="login-logo">
        <a href=""><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Đăng nhập vào hệ thống</p>
        @if(Session::has('message'))
        <div class="alert alert-danger alert-dismissable">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                    
            <p class="alert">{{ Session::get('message') }}</p>
        </div>
		  @endif
        {{ Form::open(array('url'=>'users/signin'))}}
        <form action="../../index2.html" method="post">
          <div class="form-group has-feedback">
            {{ Form::text('email',null,array('class'=>'form-control','placeholder'=>'Email'))}}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            {{ Form::password('password',array('class'=>'form-control','placeholder'=>'Password'))}}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              {{ Form::submit('Login', array('class'=>'btn btn-primary btn-block btn-flat'))}}
            </div><!-- /.col -->
          </div>
        {{ Form::close() }}
        <div class="social-auth-links text-center" style="display:none">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->  