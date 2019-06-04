@extends('layouts.guestbackup')
@section('content')

    <div class="row">
        <div class="col-sm-3"><!--left col-->
        <ul class="list-group">
            <li class="list-group-item" style="font-size: 30px; background: black; color: white; font-family:'digital-clock-font'"><b>ECP - SATURDAY TOURNAMENT</b><button style="padding-top: 10px; padding-bottom: 10px;" type="button" class="btn btn-md btn-success pull-right"><i class="glyphicon glyphicon-refresh"></i></button></li>
            <li class="list-group-item text-right" ><span class="pull-left" style="font-size: 25px;"><strong>Players</strong></span><b style="font-size: 25px; color:#0a0;"><input style="text-align: center; width:50px; border:0;" value="0" id="players">&nbsp&nbsp</b> 
                 <button type="button" class="btn btn-xs btn-danger" id="moins" onclick="minus()"><i class="glyphicon glyphicon-minus"></i></button>
                 <button type="button" class="btn btn-xs btn-primary" id="plus" onclick="plus()"><i class="glyphicon glyphicon-plus"></i></button>

            <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>Rebuys</strong></span><b style="font-size: 25px; color:#0a0;"><input style="text-align: center; width:50px; border:0;" value="0" id="rebuy">&nbsp&nbsp</b> 
                <button type="button" class="btn btn-xs btn-danger" id="moins1" onclick="minus1()"><i class="glyphicon glyphicon-minus"></i></button>
                 <button type="button" class="btn btn-xs btn-primary" id="plus1" onclick="plus1()"><i class="glyphicon glyphicon-plus"></i></button></li>
    
              <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>Ave. Chips</strong></span><b><input value="0"  id="average" style="text-align: right; border:0px; width:150px; font-size: 25px;"></b> </li>
          
             <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>Total Chips</strong></span><b><input type="text" value="0" id="tchips" name="tchips" style="text-align: right; border:0px; width:150px; font-size: 25px;"></b> </li>
           
          </ul> 

         
          <ul class="list-group">
            <li class="list-group-item" style="font-size: 30px; background: black; color: white; font-family:'digital-clock-font'"><b>CHIPS</b><span class="pull-right"><b>VALUE</b></span>  <!-- <button data-toggle="modal" data-target="" type="button" class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i></button> --></li>
            <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('tournamentchips/10.png')}}" style="height: 70px; width: 70px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 45px; color:black;">10</b></li>
             <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('tournamentchips/t5.png')}}" style="height: 70px; width: 70px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 45px; color:black;">25</b></li>
             
                 <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('tournamentchips/100.png')}}" style="height: 70px; width: 70px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 45px; color:black;">100</b></li>

                   <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('tournamentchips/1000.png')}}" style="height: 70px; width: 70px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 45px; color:black;">1000</b></li>

                   <li class="list-group-item text-right"><span class="pull-left"><img src="{{asset('tournamentchips/10000.png')}}" style="height: 70px; width: 70px;" class="avatar img-circle img-thumbnail" alt="avatar"></span><b style="font-size: 45px; color:black;">10,000</b></li>
          </ul> 
        </div><!--/col-3 left-->


        <div class="col-sm-6"><!-- center col 6 -->
          <form style="border: 4px solid #a1a1a1;margin-top: 0px;padding: 20px;">
              <center>
                <h1 id="round" style="margin-bottom: -50px; font-size: 50px; color: white;">{{ $firstTournament->level }}</h1>
                <div class="clock" style="font-size: 200px; color:#0a0; font-family:'digital-clock-font'">{{ $duration->in_minutes }}</div>
                
                <div id="poker_blinds" style="margin-top: -65px; margin-bottom: 20px; font-size: 35px; ">
                  <div class="blinds" style="font-size: 45px; color:white; ">
                    <span class="small-blind">{{ $blindParts['small'] }}</span>
                    <span class="separator">/</span>
                    <span class="big-blind">{{ $blindParts['big'] }}</span>
                  </div>
                  <span style="font-size: 35px; color:black;"></span><!-- blinds -->
                </div><br>

                <button type="button" class="btn btn-md btn-primary" id="poker_play_pause">
                  <i class="glyphicon glyphicon-pause"></i> /
                  <i class="glyphicon glyphicon-play"></i> 
                  <span id="play_pause_div">Play</span>
                </button>
                <span style="margin-left: 50px;"></span>
                <button type="button" class="btn btn-md btn-success" id="poker_next_round"><i class="glyphicon glyphicon-arrow-right"></i> Next</button>
                <span style="margin-left: 50px;"></span>
                <button type="button" class="btn btn-md btn-warning reset"><i class="glyphicon glyphicon-refresh"></i> Reset</button></center>
          </form><br>
              
              <!-- Level Group -->
              <ul id="pagination" class="list-group posts endless-pagination" data-next-page="{{ $posts->nextPageUrl() }}">
                <li class="list-group-item text-muted" style="font-size: 30px; background: black; color: white; font-family:'digital-clock-font'"><b>LEVELS</b><span class="pull-right"><b>BLINDS</b></span></li>
                
                @foreach ($posts as $post)
                  <li class="list-group-item text-right">
                    <span class="pull-left">
                      <span class="pull-left">
                        <strong style="font-size: 25px;">{{ $post->level }}</strong>
                      </span>
                    </span><b  style="font-size: 25px;">{{ $post->blinds }}</b>
                  </li>
                @endforeach
  
              <center>{!! $posts->render() !!}</center>

              </ul>  


        <script>

        $(document).ready(function() {

            $('body').on('click', '#pagination', function(e){

                e.preventDefault();
                var url = $(this).attr('href');

                $.get(url, function(data){
                    $('.posts').html(data);
                });

            });

        })

        </script>

        </div><!--/end center col-6-->


        <div class="col-sm-3"><!-- right col 3 -->
            <ul class="list-group">
            <?php $tp = number_format($prize->totalprize); ?>
            <li class="list-group-item" style="background: black;"><b style="font-size: 30px; color: white; font-family:'digital-clock-font'">PRIZE MONEY</b><b><input class="pull-right" style="text-align: right; height: 40px; width: 250px; font-size: 35px; background: black; border: none; color: red;" disabled="" value="Php {{$tp}}"></b>

            @foreach($prizemoney as $prizemoney)
            <?php 
            $tchips = $prize->totalprize;
            $nprize = $prizemoney->amount;
            $total = $tchips*$nprize;
            $result = number_format($total);
            ?>

            <li class="list-group-item text-right"><span class="pull-left" style="font-size: 25px;"><strong>{{$prizemoney->place}}</strong></span><b style="font-size: 30px; color:black;">Php {{ $result }}</b></li>
            @endforeach

            </ul> 
            </div><!--/end right col-3-->

    </div><!--/row-->
                                                      
    <audio id="soundHandle" style="display: none;"></audio><!-- Alert sound for Timer -->

    



<!-- Contdown Timer Logic Javascirpt -->
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
        soundHandle.src = '{{asset('sound/alertnext1.mp3')}}';
        soundHandle.play();

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
<!-- End Contdown Timer Logic Javascirpt -->

<script type="text/javascript">
  //Players
    var count = 0;
    var countEl = document.getElementById("players");
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

//Rebuys
    var count1 = 0;
    var countEl1 = document.getElementById("rebuy");

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




<style type="text/css">
  
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


@font-face{
  font-family: 'digital-clock-font';
  src: url('../../font/digital-7 (mono).ttf');
}

</style>

@endsection

