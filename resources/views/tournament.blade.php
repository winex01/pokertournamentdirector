@extends('layouts.guest')


@section('contentheader')


  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control Panel</small>
          </h1>


       <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>


   
        </section>

@endsection

    

@section('content')

<?php
function current_page($uri = "/") {
    return strstr(request()->path(), $uri);
}
?>


 


  <!-- Small boxes (Stat box) -->
 <br><br>
          <div class="row">

             <div class="col-lg-3 col-xs-3">
            
            </div><!-- ./col -->

             
             <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3></h3>
            
                  <p style="font-size:25px; font-family:'digital-clock-font'">Daily Tournament</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clock"></i>
                </div>
                <a href="{{ url('/dailytournament') }}" class="small-box-footer">Click here to Play <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
              </div>
           
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3></h3>

                  <p style="font-size:25px; font-family:'digital-clock-font'">Saturday Tournament</p>
                </div>
               <div class="icon">
                  <i class="ion ion-clock"></i>
                </div>
                <a href="{{ url('/saturdaytournament') }}" class="small-box-footer">Click here to Play <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
              </div>
            </div><!-- ./col -->

          <div class="col-lg-3 col-xs-3">
             
          </div><!-- /.row -->


          </div><!-- /.row -->




 
<!-- Digital Clock Font -->
<style type="text/css">
    @font-face{
      font-family: 'digital-clock-font';
      src: url('../../font/digital-7 (mono).ttf');
    }
</style>

@endsection






    