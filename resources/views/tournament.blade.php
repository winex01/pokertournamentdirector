@extends('layouts.tournamenthome')
@section('content')

 
  <div style="color:red;" id="show">xxx</div>

  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $('#show').load('showplayers.php').fadeIn("slow");
      }, 3000);
    });
  </script>

<script src="http://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>






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

