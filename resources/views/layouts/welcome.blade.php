
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
 
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/skin-yellow.min.css')}}">

  </head>
 
  <body class="hold-transition skin-yellow sidebar-collapse sidebar-mini" style="background:white;">

       <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><i class="glyphicon glyphicon-home" style="color:black;""></i></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Tournament </b>Director</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
                          <marquee><span style="color: white; font-size: 30px; font-family:'digital-clock-font'"><img src="{{ asset('Emperor City Poker Header.jpg') }}" class="avatar img-circle img-thumbnail" alt="avatar" style="width:40px; height: 40px;"> <b>EMPEROR CITY POKER TOURNAMENT - 2nd Floor Gaming Area, Waterfront Airport Hotel and Casino, Lapu-Lapu City Cebu, Philippines</b></span></marquee>
      </header>

       <!-- Main content -->
        <section class="content" style="background:white;">

          <!-- Your Page Content Here -->

               @yield('content')

        </section><!-- /.content -->

    
    <!-- jQuery 2.2.3 -->
<script src="{{ asset('adminlte/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('adminlte/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/app.min.js')}}"></script>

  @stack('custom-scripts')

  </body>
</html>


<style type="text/css">
  @font-face{
  font-family: 'digital-clock-font';
  src: url('../../font/digital-7 (mono).ttf');
}
</style>