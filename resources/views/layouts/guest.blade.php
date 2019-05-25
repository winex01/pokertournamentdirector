
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Emperor City Poker Tournament Director</title>

  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css')}}">
 
<!--   <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/skin-blue.min.css')}}">
 -->  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/skin-yellow.min.css')}}">


  </head>
 
  <body class="hold-transition skin-yellow sidebar-collapse sidebar-mini">
    <div class="wrapper">
       <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b> </b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Tournament </b>Director</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-collapse" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
                          <!-- User Account Menu -->
           <!--    <li class="dropdown user user-menu"> -->
                <!-- Menu Toggle Button -->
              <!--   <a href="#" class="dropdown-toggle" data-toggle="dropdown"> -->
                  <!-- The user image in the navbar-->
                <!--   <img src="{{asset('Emperor City Poker Header.jpg')}}" class="user-image" alt="User Image"> -->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  

<!-- 
                  <span class="hidden-xs">Emperor City Poker</span>
                </a>
                <ul class="dropdown-menu"> -->
                  <!-- The user image in the menu -->
                 <!--  <li class="user-header">
                    <img src="{{asset('Emperor City Poker Header.jpg')}}" class="img-circle" alt="User Image">
                    <p>
                       {{ Auth::user()->name }} 
                      <small>Member since {{ Auth::user()->created_at }} </small>
                    </p>
                  </li> -->
                  <!-- Menu Body -->
<!--                   <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li> -->
                  <!-- Menu Footer-->
                <!--   <li class="user-footer"> -->
              <!--       <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> -->
                  <!--   <div class="pull-right">
                      <a href="{{ route('logout') }}" class="btn btn-default btn-flat" style="color:black;"><i class="glyphicon glyphicon-podlock"></i> Sign Out</a>                   
                      </div>
                  </li> -->
         
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
    
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <!-- <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('chips/chips2x2/plain color chips_red.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p> </p> -->
              <!-- Status -->
         <!--      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div> -->

          <!-- search form (Optional) -->
        <!--   <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->

          <!-- Sidebar Menu -->
<!--        
<ul class="sidebar-menu">
            <li class="header" style="font-size: 30px; color: red;"><b>PRIZE MONEY</b></li>
 
            <li class="active"><a href="#"> <span style="font-size: 20px; color: white;">1ST - Php 30,000</span></a></li>
             <li class="active"><a href="#"> <span style="font-size: 20px; color: white;">2ND - Php 25,000</span></a></li>
              <li class="active"><a href="#"> <span style="font-size: 20px; color: white;">3RD - Php 20,000</span></a></li>
              <li class="active"><a href="#"> <span style="font-size: 20px; color: white;">4RD - Php 10,000</span></a></li>
              <li class="active"><a href="#"> <span style="font-size: 20px; color: white;">5RD - Php 5,000</span></a></li>
             
          </ul>
        </section> -->
        <!-- /.sidebar -->
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        @yield('contentheader')
       
   
        </section>



        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

               @yield('content')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->





     
     
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    
    <!-- jQuery 2.2.3 -->
<script src="{{ asset('adminlte/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('adminlte/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/app.min.js')}}"></script>

     <!-- fullCalendar 2.2.5 -->
<!--       <script src="{{ asset('adminlte/plugins/moment.min.js')}}"></script>
      <script src="{{ asset('adminlte/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
 -->

  @stack('custom-scripts')

  </body>
</html>
