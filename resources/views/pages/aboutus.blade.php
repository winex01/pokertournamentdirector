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
                        <li class="active"><a href="{{ url('/aboutus')}}"><i class="fa fa-search"></i> About Us</a></li>
                        <li class="dropdown">   
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tower"></span> Casino <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/blackjack')}}">Black Jack <button style="color:white; background:green;"> Soon</button></a></li>

                                <li><a href="{{ url('/baccarat')}}">Baccarat</a></li>

                                <li><a href="{{ url('/super6')}}">Baccarat Super 6</a></li>
                              
                                <li><a href="{{ url('/texasholdem')}}">Texas Hold 'em <button style="color:white; background:green;"> Soon</button></a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/events')}}"><span class="glyphicon glyphicon-tasks"></span> Events</a></li>
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
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-content">
                        <h2>Who we are</h2>
                        <p>Great Emperor Casino is a  luxury junket casino with an ambiance and amenities for exclusive and exciting play. <br> Located on the resort island of Mactan, only minutes away from the international airport and a short jaunt from Shangri-la’s mactan Resort, Crimson Resort, Planantation Bay, Movenpick and other resorts. <br> Grand Emperor Casino can provide an environment where players and guests can play, be entertained, and frolic - for the sun and the night lights shine brighter on our side of the island.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
