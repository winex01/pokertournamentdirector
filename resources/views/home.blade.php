


@extends('layouts.guest')


@section('content')
 
<?php
function current_page($uri = "/") {
    return strstr(request()->path(), $uri);
}
?>


    <div class="row">
   <!--      <center><div class="col-sm-10"><h1>Emperor City Poker</h1></div></center> -->
        <div class="col-sm-3"><!--left col-->
          <!--   <div class="text-center">
        <img src="{{asset('Emperor_City_Poker_Header_192x192.jpg')}}" style="height: 150px; width: 150px;" class="avatar img-circle img-thumbnail" alt="avatar">
           </div><br>
            <div class="text-center">
        <img src="{{asset('Emperor_City_Poker_Header_192x192.jpg')}}" style="height: 150px; width: 150px;" class="avatar img-circle img-thumbnail" alt="avatar">
           </div><br>
            <div class="text-center">
        <img src="{{asset('Emperor_City_Poker_Header_192x192.jpg')}}" style="height: 150px; width: 150px;" class="avatar img-circle img-thumbnail" alt="avatar">
           </div><br>
                       <div class="text-center">
        <img src="{{asset('Emperor_City_Poker_Header_192x192.jpg')}}" style="height: 150px; width: 150px;" class="avatar img-circle img-thumbnail" alt="avatar">
           </div><br>
 -->  
        <ul class="list-group">
            <li class="list-group-item" style="font-size: 25px; background: black; color: white; font-family:'digital-clock-font'"><b>EMPEROR CITY POKER</b></li>
            <li class="list-group-item text-right" ><span class="pull-left" style="font-size: 25px;"><strong>Players</strong></span><b style="font-size: 25px; color:#0a0;"><input style="width:40px; border:0;" value="0" id="count">&nbsp&nbsp</b> 
                 <button type="button" class="btn btn-xs btn-danger" id="moins" onclick="minus()"><i class="glyphicon glyphicon-minus"></i></button>
                 <button type="button" class="btn btn-xs btn-primary" id="plus" onclick="plus()"><i class="glyphicon glyphicon-plus"></i></button>

            <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>Rebuys</strong></span><b style="font-size: 25px; color:#0a0;"><input style="width:40px; border:0;" value="0" id="count1">&nbsp&nbsp</b> 
                <button type="button" class="btn btn-xs btn-danger" id="moins1" onclick="minus1()"><i class="glyphicon glyphicon-minus"></i></button>
                 <button type="button" class="btn btn-xs btn-primary" id="plus1" onclick="plus1()"><i class="glyphicon glyphicon-plus"></i></button></li>
             <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>Ave. Chips</strong></span><b style="font-size: 25px; color:black;">1,000</b> </li>
              <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>Total Chips</strong></span><b style="font-size: 25px; color:black;">11,000</b> </li>

           
          </ul> 

             <ul class="list-group">
            <li class="list-group-item" style="font-size: 25px; background: black; color: white; font-family:'digital-clock-font'"><b>CHIPS</b>  <button data-toggle="modal" data-target="" type="button" class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></button></li>
            <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('chips/red2.jpg')}}" style="height: 75px; width: 75px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 50px; color:black;">25</b></li>
             
               <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('chips/black.jpg')}}" style="height: 75px; width: 75px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 50px; color:black;">100</b></li>

                 <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('chips/green.jpg')}}" style="height: 75px; width: 75px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 50px; color:black;">1,000</b></li>

                   <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('chips/yellow.jpg')}}" style="height: 75px; width: 75px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 50px; color:black;">10,000</b></li>
 
          </ul> 

 
        </div><!--/col-3-->


        <div class="col-sm-6">
        
                <center><span style="font-size: 45px; color:black;"><b>POKER TOURNAMENT DIRECTOR</b></span></center>

       <!--               <span style="font-size: 40px; color:#ebc944;"><b>POKER TOURNAMENT DIRECTOR</b></span>
               -->
          <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;">
            <!--   <?php 
              $datetoday = "05/23/2019"; 
              $time = "20";
              ?> 
              <input value="{{$datetoday}}" type="hidden" id="date"/>
              <input value="20" type="hidden" id="time"/> -->
              
          <!--     <audio id="soundHandle" style="display: none;"></audio> -->

             <!--  <center><span id="display" style="font-size: 150px; color:#0a0;"><b>00:00</b></span><br><button type="button" class="btn btn-sm btn-danger" onclick="setCount()"><i class="glyphicon glyphicon-pause"></i> Pause</button><button type="button" class="btn btn-sm btn-success" onclick="setCount()"><i class="glyphicon glyphicon-play"></i> Start</button><button type="button" class="btn btn-sm btn-primary" onclick="setCount()"><i class="glyphicon glyphicon-arrow-right"></i> Next</button></center><br>
 -->

              <center><span id="clockdiv" style="font-size: 200px; color:#0a0; font-family:'digital-clock-font'"><b>00:00</b></span><br><button type="button" class="btn btn-sm btn-danger" id="pause"><i class="glyphicon glyphicon-pause"></i> Pause</button><button type="button" class="btn btn-sm btn-success" id="resume"><i class="glyphicon glyphicon-play"></i> Resume</button></center><br>
              
              <audio id="soundHandle" style="display: none;"></audio>

             <ul class="list-group">
             <li class="list-group-item text-muted">CURRENT BLINDS: </li>
             <li class="list-group-item text-right"><span class="pull-left"><span class="pull-left" style="font-size: 40px;"><strong>Level 1</strong></span></span><b style="font-size: 40px; color:#0a0;">25/50</b>
            </li>

            <li class="list-group-item text-muted">NEXT BLINDS:</li>
             <li class="list-group-item text-right"><span class="pull-left"><span class="pull-left" style="font-size: 20px; color: gray;"><strong>Level 2</strong></span></span><b style="font-size: 25px; color:gray;">50/100</b>
            </li>
            </ul>  
 
        </form>

    
        </div><!--/col-6-->



         <div class="col-sm-3"><!--left col-->
<!-- 
             <ul class="list-group">
            <li class="list-group-item" style="font-size: 25px;"><b>PRIZE MONEY</b></li>
            <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>1ST</strong></span><b style="font-size: 25px; color:#0a0;">Php 30,000</b></li>
             <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>2ND</strong></span><b style="font-size: 25px; color:#0a0;">Php 25,000</b></li>
            <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>3RD</strong></span><b style="font-size: 25px; color:#0a0;">Php 20,000</b> </li>
             <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>4TH</strong></span><b style="font-size: 25px; color:#0a0;">Php 15,000</b></li>
              <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>5TH</strong></span><b style="font-size: 25px; color:#0a0;">Php 15,000</b></li>
               <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>6TH</strong></span><b style="font-size: 25px; color:#0a0;">Php 15,000</b></li>
                <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>7TH</strong></span><b style="font-size: 25px; color:#0a0;">Php 15,000</b></li>
                 <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>8TH</strong></span><b style="font-size: 25px; color:#0a0;">Php 15,000</b></li>
                  <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>9TH</strong></span><b style="font-size: 25px; color:#0a0;">Php 15,000</b></li>
       
          </ul> 
 -->


     
  <div class="example-modal" id="addformmodal">
            <div class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal Default</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body&hellip;</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
     



            <ul class="list-group">
            <li class="list-group-item" style="font-size: 25px; background: black; color: white; font-family:'digital-clock-font'"><b>PRIZE MONEY</b> <button data-toggle="modal" data-target="#addformmodal" type="button" class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></button></li>
@foreach($prizemoney as $prize)
            <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>{{$prize->place}}</strong></span><b style="font-size: 30px; color:red;">{{$prize->amount}}</b></li>
@endforeach
            </ul> 
        </div><!--/col-3-->

 
            
              </div>









               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

    </div><!--/row-->
                                                      
 



  
<!-- 
<script type="text/javascript">

function setCount(){
  var date = document.getElementById('date');
  var time = document.getElementById('time');
 
  if(date.value == "" || time.value == ""){
    alert("Please complete the required field!");
  }else{
    var countDate = new Date(date.value+" "+time.value).getTime();
 
    var countDay = new Date(date.value+" "+time.value).getDate();
 
      var x = setInterval(function(){
      var nowTime = new Date().getTime();
      var nowDate = new Date().getDate();
      var distance = countDate - nowTime;
      var dayDis = countDay - nowDate;
 
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
 /*
      document.getElementById("display").innerHTML = dayDis + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";*/

      document.getElementById("display").innerHTML = "<b>"
      + minutes + ":</b><b>" + seconds + "</b>";
 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("display").innerHTML = "<b><span class='tab blink' style='font-size: 150px; color:red;'>00:00</span></b>";

  soundHandle.src = '{{asset('sound/alert.mp3')}}';
  soundHandle.play();

  setTimeout("location.reload(true);", 8000);

      }
 
    }, 1000);
  }
}

</script>   
 -->




<script type="text/javascript">
  

// 10 minutes from now
var time_in_minutes = 1;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);


function time_remaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}

var timeinterval;
function run_clock(id,endtime){
  var clock = document.getElementById(id);
  function update_clock(){
    var t = time_remaining(endtime);
    clock.innerHTML = '<b>'+t.minutes+':</b><b>'+t.seconds+'</b><b style="font-size: 20px; color:#0a0;">Min. / Sec.</b>';
    if(t.total<=0){ 

      clearInterval(timeinterval);

      soundHandle.src = '{{asset('sound/alert.mp3')}}';
      soundHandle.play();
      document.getElementById("clockdiv").innerHTML = "<b><span class='tab blink' style='font-size: 200px ; color:red;'>00:00</span></b>";

      setTimeout("location.reload(true);", 8000);
     }
  }
  update_clock(); // run function once at first to avoid delay
  timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);


var paused = false; // is the clock paused?
var time_left; // time left on the clock when paused

function pause_clock(){
  if(!paused){
    paused = true;
    clearInterval(timeinterval); // stop the clock
    time_left = time_remaining(deadline).total; // preserve remaining time
  }
}

function resume_clock(){
  if(paused){
    paused = false;

    // update the deadline to preserve the amount of time remaining
    deadline = new Date(Date.parse(new Date()) + time_left);

    // start the clock
    run_clock('clockdiv',deadline);
  }
}

// handle pause and resume button clicks
document.getElementById('pause').onclick = pause_clock;
document.getElementById('resume').onclick = resume_clock;




    var count = 1;
    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count >= 1) {
        count--;
        countEl.value = count;
      }  
    }


    var count1 = 1;
    var countEl1 = document.getElementById("count1");
    function plus1(){
        count1++;
        countEl1.value = count1;
    }
    function minus1(){
      if (count1 >= 1) {
        count1--;
        countEl1.value = count1;
      }  
    }



</script>







<script type="text/javascript">
  


//Add new prize
$(document).ready(function(){

  $('#addform').on('submit', function(e){
    e.preventDefault();

    $.ajax({
      type: "POST".
      url: "/addrecord",
      data: $('#addform').serialize(),
      success: function(response){
        console.log(response)
        $('#addformmodal').modal('hide')
        alert("Data Saved");
        //location.relaod();
      },
      error: function(error){
        console.log(error)
        //alert("Data not saved");
      }
    });
  });
});


</script>



<style type "text/css">
<!--
/* @group Blink */
.blink {
  -webkit-animation: blink .75s linear infinite;
  -moz-animation: blink .75s linear infinite;
  -ms-animation: blink .75s linear infinite;
  -o-animation: blink .75s linear infinite;
   animation: blink .75s linear infinite;
}
@-webkit-keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 1; }
  50.01% { opacity: 0; }
  100% { opacity: 0; }
}
@-moz-keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 1; }
  50.01% { opacity: 0; }
  100% { opacity: 0; }
}
@-ms-keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 1; }
  50.01% { opacity: 0; }
  100% { opacity: 0; }
}
@-o-keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 1; }
  50.01% { opacity: 0; }
  100% { opacity: 0; }
}
@keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 1; }
  50.01% { opacity: 0; }
  100% { opacity: 0; }
}




.button {
  margin: 0 0 0 5px;
  text-indent: -9999px;
  cursor: pointer;
  width: 29px;
  height: 29px;
  float: left;
  text-align: center;
  background: url(buttons.png) no-repeat;
}
.dec {
  background-position: 0 -29px;
}

.buttons {
  padding: 20px 0 0 140px;
}





@font-face{
 font-family:'digital-clock-font';
 src: url('../../font/digital-7 (mono).ttf');
}


/* @end */
 
</style>





 
@endsection
