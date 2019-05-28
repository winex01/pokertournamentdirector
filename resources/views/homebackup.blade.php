@extends('layouts.guest')


@section('contentheader')


  <!-- Content Header (Page header) -->
        <section class="content-header">

            <h1>
            <b style="font-size: 45px;">JACKPOT</b> 
            <span>Main: <b style="color:red; font-size: 40px;">Php 100,000.00</b>  Reserve: <b style="color:red; font-size: 40px;">Php 50,000.00</b></span>
          </h1>


      <!--     <span style="font-size: 40px;">
            <b>JACKPOT</b>  <h2> Main: <b style="color:red;">Php 100,000.00</b>  Reserve: <b style="color:red;">Php 50,000.00</b> </h2>
          </span>
 -->
       <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Jackpot</li>
          </ol>


   
        </section>

@endsection

    

@section('content')
 

<?php
function current_page($uri = "/") {
    return strstr(request()->path(), $uri);
}
?>


  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th style="font-size: 25px;">TABLE 1 <b style="color:blue;">[10/20]</b></th>
                      <th style="font-size: 25px;">TABLE 2 <b style="color:blue;">[10/20]</b></th>
                      <th style="font-size: 25px;">TABLE 3 <b style="color:blue;">[10/20]</b></th>
                      <th style="font-size: 25px;">TABLE 4 <b style="color:blue;">[25/50]</b></th>
                      <th style="font-size: 25px;">TABLE 5 <b style="color:blue;">[25/50]</b></th>
                      <th style="font-size: 25px;">TABLE 6 <b style="color:blue;">[25/50]</b></th>
                    </tr>
                    <tr>
                      <td><div class="info-box">
                      <span> <img src="{{asset('chrisjim.jpg')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                       <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Chris Jim</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
 
                      <td><div class="info-box">
                     <span> <img src="{{asset('Emperor City Poker Header.jpg')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                     <span class="info-box-text"><b style="font-size: 25px;">James Yap</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                       <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Ernest Lee</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                    <span class="info-box-text"><b style="font-size: 25px;">John Doe</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                        <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Albert Joe</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <s<span class="info-box-text"><b style="font-size: 25px;">Ford Yu</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
 
          
                    </tr>
                    

                     <tr>
                      <td><div class="info-box">
                      <span> <img src="{{asset('chrisjim.jpg')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                       <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Chris Jim</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
 
                      <td><div class="info-box">
                     <span> <img src="{{asset('Emperor City Poker Header.jpg')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                     <span class="info-box-text"><b style="font-size: 25px;">James Yap</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                       <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Ernest Lee</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                    <span class="info-box-text"><b style="font-size: 25px;">John Doe</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                        <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Albert Joe</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <s<span class="info-box-text"><b style="font-size: 25px;">Ford Yu</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
 
          
                    </tr>

                     <tr>
                      <td><div class="info-box">
                      <span> <img src="{{asset('chrisjim.jpg')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                       <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Chris Jim</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
 
                      <td><div class="info-box">
                     <span> <img src="{{asset('Emperor City Poker Header.jpg')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                     <span class="info-box-text"><b style="font-size: 25px;">James Yap</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                       <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Ernest Lee</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                    <span class="info-box-text"><b style="font-size: 25px;">John Doe</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>

                        <td><div class="info-box">
                        <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <span class="info-box-text"><b style="font-size: 25px;">Albert Joe</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
                        <td><div class="info-box">
                      <span> <img src="{{asset('defaultimage.png')}}"  class="info-box-icon bg-aqua" alt="avatar"><i class="fa fa-envelope-o"></i> </span>
                      <!-- <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span> -->
                      <div class="info-box-content">
                      <s<span class="info-box-text"><b style="font-size: 25px;">Ford Yu</b></span>
            <!--           <span class="info-box-number">1,410</span> -->
                      </div><!-- /.info-box-content --></td>
 
          
                    </tr>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 
@endsection












