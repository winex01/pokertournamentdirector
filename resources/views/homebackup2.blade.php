@extends('layouts.guest')


@section('contentheader')


<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 5; URL=$url");
?>

<meta http-equiv="refresh" content="10">
<body onload=”javascript:setTimeout(“location.reload(true);”,10000);”>


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
                      <th style="font-size: 20px;">TABLE 1 <b style="color:blue;">[10/20]</b></th>
                      <th style="font-size: 20px;">TABLE 2 <b style="color:blue;">[10/20]</b></th>
                      <th style="font-size: 20px;">TABLE 3 <b style="color:blue;">[10/20]</b></th>
                      <th style="font-size: 20px;">TABLE 4 <b style="color:blue;">[25/50]</b></th>
                      <th style="font-size: 20px;">TABLE 5 <b style="color:blue;">[25/50]</b></th>
                      <th style="font-size: 20px;">TABLE 6 <b style="color:blue;">[25/50]</b></th>
                    </tr>
                   <tr>
                    <td><b style="font-size: 20px; color:green;">JIM</b></td>
                    <td><b style="font-size: 20px; color:green;">JIM GO</b></td>
                    <td><b style="font-size: 20px; color:green;">JIM URSAL</b></td>
                    <td><b style="font-size: 20px; color:green;">JIM CASIPONG</b></td>
                    <td><b style="font-size: 20px; color:green;">JIM COMING</b></td>
                    <td><b style="font-size: 20px; color:green;">JIM CABESAS</b></td>
                    </tr>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
 
@endsection












