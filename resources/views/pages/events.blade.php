@extends('layouts.masterapp')


@section('content')
 

<?php
function current_page($uri = "/") {
    return strstr(request()->path(), $uri);
}
?>
  
<!-- main -->



                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav"> 
                        <li><a href="{{ url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="{{ url('/aboutus')}}"><i class="fa fa-search"></i> About Us</a></li>
                        <li class="dropdown">   
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tower"></span> Casino <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/blackjack')}}">Black Jack <button style="color:white; background:green;"> Soon</button></a></li>

                                <li><a href="{{ url('/baccarat')}}">Baccarat</a></li>

                                <li><a href="{{ url('/super6')}}">Baccarat Super 6</a></li>
                              
                                <li><a href="{{ url('/texasholdem')}}">Texas Hold 'em <button style="color:white; background:green;"> Soon</button></a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="{{ url('/events')}}"><span class="glyphicon glyphicon-tasks"></span> Events</a></li>
                        <li><a href="{{ url('/contact')}}"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>

                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->



    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-img">
                        <img src="images/event/grandopening1.png" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Soft Opening</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                 <div class="col-md-7">
                    <div class="about-img">
                        <img src="images/event/grandopening2.png" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Grand Opening</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                 <div class="col-md-7">
                    <div class="about-img">
                        <img src="images/event/grandopening3.png" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Special Event</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
