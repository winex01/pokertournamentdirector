


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
        
                <center><span style="font-size: 45px; color:black; "><b>POKER TOURNAMENT DIRECTOR</b></span></center>

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
              <center>
                <h1 id="round" style="margin-bottom: -50px;">{{ $firstTournament->level }}</h1>
                <div class="clock" style="font-size: 200px; color:#0a0; font-family:'digital-clock-font'"><b>{{ $duration->in_minutes }}</b></div>
                
                <div id="poker_blinds" style="margin-top: -50px; margin-bottom: 20px; font-size: 30px;">
                  <div class="blinds">
                    <span class="small-blind">{{ $blindParts['small'] }}</span>
                    <span class="separator">/</span>
                    <span class="big-blind">{{ $blindParts['big'] }}</span>
                  </div>
                  <span>Blinds</span>
                </div>

                <br>
                <button type="button" class="btn btn-sm btn-primary" id="poker_play_pause">
                  <i class="glyphicon glyphicon-pause"></i> /
                  <i class="glyphicon glyphicon-play"></i> 
                  <span id="play_pause_div">Play</span>
                </button>
                <span style="margin-left: 50px;"></span>
                <button type="button" class="btn btn-sm btn-success" id="poker_next_round"><i class="glyphicon glyphicon-pause"></i> Next Round</button>
              </center>
              <br>
              <br>

              <div class="pull-right">
                <button type="button" class="btn btn-sm btn-warning reset"><i class="glyphicon glyphicon-pause"></i> Reset</button>
              </div>
              
              <br>
              <br>
              
              <audio id="soundHandle" style="display: none;"></audio>

              <ul class="list-group" id="tournament-timers">
                @foreach ($tournaments as $tournament)
                  <li class="list-group-item text-muted">NEXT BLINDS:</li>
                  <li class="list-group-item text-right">
                    <span class="pull-left">
                      <span class="pull-left" style="font-size: 20px; color: gray;">
                        <strong>{{ $tournament->level }}</strong>
                      </span>
                    </span><b style="font-size: 25px; color:gray;">{{ $tournament->blinds }}</b>
                  </li>
                @endforeach
              </ul>  
        </form>

         {{-- <li class="list-group-item text-muted">CURRENT BLINDS: </li>
          <li class="list-group-item text-right">
            <span class="pull-left">
              <span class="pull-left" style="font-size: 40px;">
                <strong>Level 1</strong>
              </span>
            </span>
            <b style="font-size: 40px; color:#0a0;">25/50</b>
          </li> --}}


    
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
                                                      
<audio id="alarm" controls="controls">
  <source src="{{asset('sound/alert.mp3')}}" type="audio/mpeg" />
    Your browser does not support the audio element.
  </audio>



@push('custom-scripts')

<script type="text/javascript">
  var Poker = (function () {
    var round = 1;
    var duration = '{{ $duration->in_seconds }}';
    var timer = duration;
        
    {{-- {{ dd(json_encode($allBlinds)) }} --}}

    var blinds = '{!! json_encode($allBlinds) !!}';

    blinds = JSON.parse(blinds);

    

    console.log(blinds);

      
    var interval_id;
    
    return {
      isGamePaused: function () {
        return !interval_id ? true : false;
      },
      playAlarm: function () {
        $('#alarm')[0].play();
      },
      reset: function () {
        // reset timer
        this.resetTimer();
        
        this.stopClock();
        
        this.updateClock(timer);
        
        // reset play/pause button
        this.updatePlayPauseButton();
        
        // reset round
        round = 1;
        
        this.updateRound(round);
        
        // increase blinds
        this.updateBlinds(round);
      },
      resetTimer: function () {
        timer = duration;
      },
      startClock: function () {
        var that = this;
        
        interval_id = setInterval(function () {
          that.updateClock(timer);
          
          timer -= 1;
        }, 1000);
      },
      startNextRound: function () {
        // reset timer
        this.resetTimer();
        
        this.stopClock();
        
        this.updateClock(timer);
        
        // reset play/pause button
        this.updatePlayPauseButton();
        
        // increase round
        round += 1;
        
        this.updateRound(round);
        
        // increase blinds
        this.updateBlinds(round);
      },
      stopClock: function () {
        clearInterval(interval_id);
        interval_id = undefined;
      },
      updateBlinds: function (round) {
        var round_blinds = blinds[round - 1] || blinds[blinds.length];
        
        $('.small-blind').html(round_blinds.small);
        $('.big-blind').html(round_blinds.big);
      },
      updateClock: function (timer) {
        var minute = Math.floor(timer / 60),
            second = (timer % 60) + "",
            second = second.length > 1 ? second : "0" + second;
          
        $('.clock').html(minute + ":" + second);
        
        if (timer <= 0) {
          this.startNextRound();
          
          this.playAlarm();
          
          this.startClock();
          
          // update play/pause button
          this.updatePlayPauseButton();
        }
      },
      updatePlayPauseButton: function () {
        var pause_play_button = $('#poker_play_pause a');
        
        if (this.isGamePaused()) {
          pause_play_button.removeClass('pause');
          pause_play_button.addClass('play');
        } else {
          pause_play_button.removeClass('play');
          pause_play_button.addClass('pause');
        }
      },
      updateRound: function (round) {
        $('#round').html('Level' + ' ' + round);
      }
    };
  }());

  $('#poker_play_pause').on('click', function (event) {
    if (Poker.isGamePaused()) {
      $('#poker_play_pause').removeClass('btn-primary');
      $('#poker_play_pause').addClass('btn-danger');
      $('#play_pause_div').html('Pause');

      Poker.startClock();
    } else {
      blueButtonPlay();

      Poker.stopClock();
    }
    
    // update play/pause button
    Poker.updatePlayPauseButton();
  });

  $('#poker_next_round').on('click', function (event) {
    blueButtonPlay();
    Poker.startNextRound();
  });

  $('body').on('keypress', function (event) {
    if (Poker.isGamePaused()) {
      Poker.startClock();
    } else {
      Poker.stopClock();
    }
    
    // update play/pause button
    Poker.updatePlayPauseButton();
  });


  $('.reset').on('click', function (event) {
    if (confirm('Are you sure you want to reset?')){
      blueButtonPlay();
      Poker.reset();
    }
  });

  function blueButtonPlay()
  {
    $('#poker_play_pause').removeClass('btn-danger');
    $('#poker_play_pause').addClass('btn-primary');
    $('#play_pause_div').html('Play');
  }
</script>

@endpush
@endsection
