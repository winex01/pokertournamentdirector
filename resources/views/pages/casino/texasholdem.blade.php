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
                                <li><a href="{{ url('/blackjack')}}">Black Jack <button style="color:white; background:green;"> Soon</button></a></li>

                                <li><a href="{{ url('/baccarat')}}">Baccarat</a></li>

                                <li><a href="{{ url('/super6')}}">Baccarat Super 6</a></li>
                              
                                <li class="active"><a href="{{ url('/texasholdem')}}">Texas Hold 'em <button style="color:white; background:green;"> Soon</button></a></li>
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
                 <h2 style="font-family: althea; ">TEXAS HOLD 'EM <span style="color:green;">[Soon to start]</span></h2>
                <p class="lead">The aim of the game is to place a wager on the hand which totals nine or  the closest to nine.<br> You may place a wager in the player, banker or tie.<br><h1 style="font-family: althea; ">How to Play</h1>
                    <justify>The aim of the game is to place a wager on the hands which totals nine or the closest to nine.
                    Players may place a wager on: PLAYER or BANKER with additional side wagers for Player / Banker Pair, Tie or Super Six according to the minimum and maximum of the table.
                    The Dealer deals two hands for Player and Banker.
                    The highest bettor has the privilege to squeeze the cards or let the Dealer open the hand on his behalf. Player/Banker STANDS or HIT 3rd CARD depending on hitting rules.
                    Dealer announces the winer after both hands have been revealed.
                    Winning bets on Player or Banker is paid even money.
                    Super Six wins 12 to 1 if banker wins on 6 points and all banker’s bet pays half.
                    Tie wins 8 to 1 if Player and Banker have the same hand total.
                    Pair wins 11 to 1 if the initial cards for Player or Banker has same value.</justify></p></div>

<!-- 
            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul> -->
            <!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-3.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-5.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                  
                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/Poker/item-4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/Poker/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
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
