@extends('layouts.masterapp')


@section('content') 
 

<?php
function current_page($uri = "/") {
    return strstr(request()->path(), $uri);
}
?>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav"> 
                        <li class="active"><a href="{{ url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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



    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/slider1.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Play, Have fun, and Win</h1>
                                    <div class="animation animated-item-2">
                                        Here at the Great Emperor Casino.
                                    </div>
               <!--                      <a class="btn-slide animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide white animation animated-item-3" href="#">Get Started</a> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/slider2.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Play, Have fan, and Win</h1>
                                    <div class="animation animated-item-2">
                                        Here at the Great Emperor Casino.
                                    </div>
                                  <!--   <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a> -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->

  <div class="item" style="background-image: url(images/slider/slider3.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Play, Have fan, and Win</h1>
                                    <div class="animation animated-item-2">
                                        Here at the Great Emperor Casino.
                                    </div>
                                  <!--   <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a> -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->






@endsection
