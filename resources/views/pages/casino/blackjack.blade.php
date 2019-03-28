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
                        <li class="dropdown active">   
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tower"></span> Casino <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="{{ url('/blackjack')}}">Black Jack <button style="color:white; background:green;"> Soon</button></a></li>

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



<!-- 
    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Baccarat</h1>
    </div>
     -->
    <section id="portfolio">
        <div class="container">
            <div class="center">
                <h2 style="font-family: althea; ">BLACK JACK <span style="color:green;">[Soon to start]</span></h2>
                <p class="lead">Objective of the game is to get as close as you can to 21 points without going over and achieve higher value than House cards.<br><h1 style="font-family: althea; ">How to Play</h1>
                    <justify>
                    Player will be given 2 initial cards and will be offered to Surrender; If House Face-up Card is not and Ace or if an Ace, the player willbe oofered Insurance. Otherwise player will be prompted to Hit another card or Stay. Cards are counted as 10 points. Aces however will be treated as a wild card and may be counted as “1 point” or “11 points” depending on how to maximize the point total.
                    Option to SPLIT OR DOUBLE down is offered with conditional rules.
                    A hand with a card valued as 10 together with an Ace constitues the highest possible points and the hand is called a Blackjack.
                    Any point total reaching over 21 is considered a bust.
                    Side bets offered for Pair (for 2 initial cards).</justify></p></div>

     <!--        <ul class="portfolio-filter text-center">
                <li {{ (current_page("Baccarat")) ? 'class=active' : '' }}><a class="btn btn-default active" href="{{ url('/baccarat')}}"> Baccarat Photos</a></li>
                <li {{ (current_page("Baccarat")) ? 'class=active' : '' }}><a class="btn btn-default" href="{{ url('/howtoplaybaccarat')}}"> How to Play</a></li>
            </ul> -->
            <!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-3.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-5.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                  
                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Baccarat/item-4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Baccarat/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-item-->


@endsection
