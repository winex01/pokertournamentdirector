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
                        <li><a href="{{ url('/events')}}"><span class="glyphicon glyphicon-tasks"></span> Events</a></li>
                        <li class="active"><a href="{{ url('/contact')}}"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>

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
        <h1>Contact us</h1>
    </div>
 -->
    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Drop Your Message</h2>
<!--                 <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p> -->
            </div> 
            <div class="row contact-wrap"> 
<!--                 <div class="status alert alert-success" style="display: none"></div> -->
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name <span style="color:red;">*</span></label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email <span style="color:red;">*</span></label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject <span style="color:red;">*</span></label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message <span style="color:red;">*</span></label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->



@endsection
