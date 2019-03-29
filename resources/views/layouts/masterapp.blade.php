<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Great Emperor Casino</title>

    <!-- core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico"> 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

</head>
<!--/head-->


<body>

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +63 917 711 3920</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="https://web.facebook.com/grandemperorcasino/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/EmperorCasino"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/great_emperor_casino/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/great-emperor-casino-2b67aa183/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                     <!--        <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->


   <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="images/emperorlogo.png" alt="logo"></a>
                </div>




             <!-- Your Page Content Here -->

               @yield('content')

 
            <!-- End Page Content -->





    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="footer-logo">
                        <img src="images/GREAT EMPEROR CASINO.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Company</h3>
                                <ul>
                                     <li {{ (current_page("About")) ? 'class=active' : '' }}><a href="{{ url('/aboutus')}}">About Us</a></li>
                                     <li {{ (current_page("Events")) ? 'class=active' : '' }}><a href="{{ url('/events')}}">Events</a></li>
                                     <li {{ (current_page("About")) ? 'class=active' : '' }}><a href="{{ url('/contact')}}">We are hiring</a></li>
                                      <li {{ (current_page("About")) ? 'class=active' : '' }}><a href="{{ url('/contact')}}">Contact Us</a></li>
                                                          
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Social Media</h3>
                                <ul>
                                    <li><a href="https://web.facebook.com/grandemperorcasino/">Facebook</a></li>
                                    <li><a href="https://twitter.com/EmperorCasino">Twitter</a></li>
                                    <li><a href="https://www.instagram.com/great_emperor_casino/">Instagram</a></li>
                                    <li><a href="https://www.linkedin.com/in/great-emperor-casino-2b67aa183/">LinkedIn</a></li>
                     
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Developers</h3>
                                <ul>
                                    <li><a href="#">Web Developer</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Back-end Programmer</a></li>
           
                           
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Our Partner</h3>
                                <ul>
                                    <li><a href="#">Emperor City Poker</a></li>
                 

                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a target="_blank" href="#">GreatEmperorCasino</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li {{ (current_page("About")) ? 'class=active' : '' }}><a href="{{ url('/')}}">Home</a></li>
                        <li {{ (current_page("About")) ? 'class=active' : '' }}><a href="{{ url('/aboutus')}}">About Us</a></li>
                        <li {{ (current_page("About")) ? 'class=active' : '' }}><a href="{{ url('/contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
