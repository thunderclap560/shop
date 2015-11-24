<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản trị hệ thống</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {{ HTML::style('public/css/bootstrap.min.css') }}
    {{ HTML::style('public/css/evol.colorpicker.css') }}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ URL::asset('public/css/plugins/datatables/dataTables.bootstrap.css') }}">
    <!-- Theme style -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   	<link rel="stylesheet" href="{{ URL::asset('public/css/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/plugins/iCheck/flat/blue.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/plugins/datepicker/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL::to('admin/dashboard') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>Cpanel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu active">
                <a href="{{ URL::to('/') }}" target="_blank">
                  <i class="fa fa-home"></i>
                </a>
               
              </li>
            
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ URL::asset('public/css/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">Chào {{ Auth::user()->firstname.' '.Auth::user()->lastname;}}</span>
                </a>
                <ul class="dropdown-menu" style="width:165px">
                
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ URL::to('users/logout')}}" class="btn btn-default btn-flat">Thoát</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
       <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
         <!--  <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ URL::asset('public/css/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p></p>
            </div>
          </div> -->
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Cài đặt chung</li>
            <?php $action = Route::currentRouteAction() ;?>
            <li class="treeview <?php if($action == 'DashboardController@config') echo 'active';?>">
              <a href="{{ URL::to('admin/config/1')}}">
                <i class="fa fa-cogs"></i>
                <span>Thông tin cửa hàng</span>
              </a>
            </li>
            <li class="treeview <?php if(Request::segment(2) == 'banner' || Request::segment(2) == 'blocks') echo 'active';?>">
              <a href="#">
                <i class="fa fa-image"></i> <span>Slide ảnh</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/banner/')}}"><i class="fa fa-circle-o"></i> Khuyến mãi</a></li>
                <li><a href="{{ URL::to('admin/blocks/')}}"><i class="fa fa-circle-o"></i> Banner</a></li>
              </ul>
            </li>
            <li class="header">Dữ liệu</li>
            <li class="treeview <?php if(Request::segment(2) == 'category' || Request::segment(2) == 'product' ) echo 'active';?>" >
              <a href="#">
               <i class="fa fa-briefcase"></i>
                <span>Sản phẩm</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/category/')}}"><i class="fa fa-circle-o"></i> Lĩnh vực</a></li>
                <li><a href="{{ URL::to('admin/category/list-all')}}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
                <li><a href="{{ URL::to('admin/product/')}}"><i class="fa fa-circle-o"></i> Sản phẩm</a></li>
              </ul>
            </li>
            <li class="treeview <?php if(Request::segment(2) == 'order' || Request::segment(2) == 'comment' || Request::segment(2) == 'coupon' ) echo 'active';?>">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Bán hàng</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/order/')}}"><i class="fa fa-calendar-o"></i> Đơn hàng</a></li>
                <li><a href="{{ URL::to('admin/comment/')}}"><i class="fa fa-comment-o"></i> Phản hồi</a></li>
                <li><a href="{{ URL::to('admin/coupon/')}}"><i class="fa fa-ticket"></i> Coupon</a></li>
              </ul>
            </li>
            <li class="treeview <?php if(Request::segment(2) == 'news'){echo 'active';}?>">
              <a href="{{ URL::to('admin/news')}}">
                <i class="fa fa-book"></i>
                <span>Tin tức</span>
              </a>
            </li>
            <li class="treeview <?php if(Request::segment(2) == 'pages'){echo 'active';}?>">
              <a href="{{ URL::to('admin/pages')}}">
                <i class="fa fa-info"></i>
                <span>Trang</span>
              </a>
            </li>
            <li class="treeview <?php if(Request::segment(2) == 'adver'){echo 'active';}?>">
              <a href="{{ URL::to('admin/adver')}}">
                <i class="fa fa-bookmark"></i>
                <span>Quảng Cáo</span>
              </a>
            </li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
	</aside>
		
		{{ $content }}
  
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="">Thunder Clap</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ URL::asset('public/css/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script>

        function check_color(data){
          if (confirm("Bạn có muốn xóa không ?") == true) {
            $("#trash-"+data).parent().parent().parent().remove();
             $.get('/lar/admin/product/del?id='+data,function(data){               
             });
          } else {
             return false;
          }

        }
    </script> 
     <script>
      $(document).ready(function(){
        $(".sales-value").keydown(function(){
        var sval =  parseInt($(".price-before").val());
        var change = parseInt($(this).val());
          if(sval < change){
            $(".price-before").css('border','solid 1px red');
            alert('Giá khuyến mãi không được lớn hơn giá ban đầu !');
          }         
        });
        $(".sales-option").on('change',function(){
          var sales = $(this).val();
          if(sales == 1){
            $("#sale-open").css('display','block');
            $(".sales-value").val("");
            $(".sales-value").prop('required',true);
          }else{
            $("#sale-open").css('display','none');
            $(".sales-value").val("");
            $(".sales-value").prop('required',false);
            // $(".sales-value").focus();
          }
        });
        $('.rm-text').contents().filter(function(){
          return this.nodeType == Node.TEXT_NODE;
        }).remove();     
        $("#addColor").click(function(){
          $(this).parent().append('<p><input type="text" class="form-control" id="mycolor" name="color[]" placeholder="Nhập mã màu"></p>');
        });
       $("#upload").change(function() {
           var inp = document.getElementById('upload');
            for (var i = 0; i < inp.files.length; ++i) {
            $("#append").append('<p><input class="form-control" placeholder="Nhập URL" name="link[]" type="text"></p>');
          }
        });
      });
    </script>

    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{ URL::asset('public/js/evol.colorpicker.js') }}"></script>
    <script type="text/javascript">
    function add_cate(data,data2){
        $('#data_xy'+data).text(data2);
        $('#show_cate'+data).click();
        
       }
    $(".check-paypal").on('change',function(){
      if (confirm("Bạn có muốn thay đổi không ? ") == true) {
      if($(this).val() == 0){
        $.get('{{URL::to("admin/order/valid")}}',{value: $(this).val(),data:$(this).attr('data')},function(data){

        });
      }else{
        $.get('{{URL::to("admin/order/valid")}}',{value: $(this).val(),data:$(this).attr('data')},function(data){
      });
      }
    }
    });
    $(document).ready(function() {


       var a = $("#diep > i").attr("class");
       $("#diep > i").addClass(a+ " fa-3x");
        $("#mycolor").colorpicker({
          hideButton: true,
          displayIndicator: false,
          history: false,
          transparentColor: true
        });
        
    });
    </script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>

    <script src="{{ URL::asset('public/css/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('public/css/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>


    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   	<script src="{{ URL::asset('public/css/plugins/morris/morris.min.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ URL::asset('public/css/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- jvectormap -->
    <script src="{{ URL::asset('public/css/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ URL::asset('public/css/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ URL::asset('public/css/plugins/knob/jquery.knob.js') }}"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
   
   	<script src="{{ URL::asset('public/css/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('public/css/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('public/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    
    <script src="{{ URL::asset('public/css/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ URL::asset('public/css/plugins/fastclick/fastclick.min.js') }}"></script>
    <script src="{{ URL::asset('public/css/dist/js/app.min.js') }}"></script>
        <script>
          $(document).ready(function(){
            CKEDITOR.replace('editor1');
          });
    </script>
    <script src="{{ URL::asset('public/css/dist/js/pages/dashboard.js') }}"></script>

    <script src="{{ URL::asset('public/css/dist/js/demo.js') }}"></script>
   

  </body>
</html>