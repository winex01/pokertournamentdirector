@extends('layouts.tournamenthome')
@section('content')

 
  <!-- Small boxes (Stat box) -->
          <br><br><br>
          <div class="row">

             <div class="col-lg-3 col-xs-3">
            
            </div><!-- ./col -->

             
             <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <center><b><h1 style="font-size: 50px; font-family:'digital-clock-font'">LIST OF POKER TOURNAMENTS</h1></b></center><hr>
              <div class="small-box bg-yellow">
                <div class="inner">
                  <p style="font-size:25px;">Daily Tournament</p>
                </div>
                <a href="{{ url('/dailytournament') }}" class="small-box-footer">Click here to view <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
              </div>
           
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <p style="font-size:25px;">Saturday Tournament</p>
                </div>
                <a href="{{ url('/saturdaytournament') }}" class="small-box-footer">Click here to view <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
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

