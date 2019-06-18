<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/img/logos/logo-shortcut.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="/css/icomoon.css">

    <!-- Slider -->
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="/css/owl.carousel.css">

    <!-- Slick -->
    <link rel="stylesheet" href="/css/slick.css">

    <!-- My Icon -->
    <link type="text/css" rel="stylesheet" href="/icon/css/bootstrap-grid.css">
    <link type="text/css" rel="stylesheet" href="/icon/css/icons.css">
    <link type="text/css" rel="stylesheet" href="/icon/css/icon-style.css">

    <!-- Particles  -->
    <link rel="stylesheet" href="/css/particles.css">

    <!-- Main Styles -->
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400i,500,600,700,800,900"
          rel="stylesheet">

</head>
<body>
<header>
    <div class="header-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <div class="lang-box lang-box-header">
                        <ul>
                            <li><a href="#" class="active">AM</a></li>
                            <li><a href="#">RU</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs6">
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="icon-line-awesome-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-line-awesome-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-line-awesome-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-custom" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="navbar-header navbar-header-custom">
                    <button type="button" class="navbar-toggle collapsed menu-icon" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-logo" href="index.html"><img src="/img/logos/logo1.png" alt="logo"></a> -->

                    <!-- <div class="construction-box">
                        <div class="construction-icons">
                            <i class="fa fa-cog" id="cons-icon-1"></i>
                            <i class="fa fa-cog" id="cons-icon-2"></i>
                        </div>
                    </div> -->

                    <div class="logo-box">
                        <a href="{{route('home-page')}}" class="logo-text"> STAN <span><i class="fa fa-cog"
                                                                                          id="cons-icon-2"></i></span><span><i
                                        class="fa fa-cog" id="cons-icon-1"></i></span> K.AM </a><br>
                        <a href="{{route('home-page')}}" class="logo-under-text">STRONG</a>
                    </div>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right navbar-links-custom">
                        <li class="dropdown">
                            <a href="{{route('home-page')}}">Գլխավոր</a>
                        </li>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Սննդային սարքավորումներ</a>
                            <ul class="dropdown-menu dropdown-menu-left">

                                <li class="dropdown-menu-li"><a href="#">Ալկոհոլ</a>
                                    <ul class="dropdown-sub-menu">
                                        <li><a href="#">Ավտոկլավ</a></li>
                                        <li><a href="#">Գազավորման</a></li>
                                        <li><a href="#">հրուշակեղեն</a></li>
                                    </ul>
                                </li>

                                @foreach($categories as $category)
                                    @if($category->type == 1)
                                        <li><a href="#">{{$category->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Ոչ սննդային սարքավորումներ</a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a href="#">Կանվեյեր</a></li>
                                @foreach($categories as $category)
                                    @if($category->type == 0)
                                        <li><a href="#">{{$category->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>


                        <li><a href="{{route('about-page')}}">Մեր մասին</a></li>

                        <li><a href="{{route('contact-page')}}">Կապ</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Navbar END -->
@yield('content')

<!-- Footer START -->
<footer>
    <div id="particles-js-footer" style="height: 150px; position: absolute; width: 100%;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="logo-box">
                    <a href="#" class="logo-text logo-text-footer"> STAN <span><i class="fa fa-cog"
                                                                                  id="cons-icon-4"></i></span><span><i
                                    class="fa fa-cog" id="cons-icon-3"></i></span> K.AM </a><br>
                    <a href="#" class="logo-under-text">STRONG</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie
                    faucibus.</p>
                <p>© Copyright 2017 SpecThemes. All Rights reserved</p>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="footer-title">
                    <h2>Site Map</h2>
                </div>
                <ul>
                    <li><a href="#">Գլխավոր</a></li>
                    <li><a href="#">Մեր մասին</a></li>
                    <li><a href="#">Սննդային</a></li>
                    <li><a href="#">Ոչ սննդային</a></li>
                    <li><a href="#">Կապ</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="footer-title">
                    <h2>Contact Us</h2>
                </div>
                <ul>
                    <li>Call Us</li>
                    <li>+1 23-456-789</li>
                    <li></li>
                    <li>Mail Us</li>
                    <li>specthemes@gmail.com</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="footer-title">
                    <h2>Visit Us</h2>
                </div>
                <ul>
                    <li>Our Location</li>
                    <li>113, New York, NY Sheram 113 254</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="footer-title">
                    <h2>Social Links</h2>
                </div>
                <!-- <form method="get">
                    <input type="text" name="s" placeholder="Search ...">
                </form> -->
                <div class="mt-50 center-holder">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->


<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Scroll to top button End -->


<!-- Jquery -->
<script src="/js/jquery.min.js"></script>

<!-- Bootstrap JS-->
<script src="/js/bootstrap.min.js"></script>

<!-- Owl Carousel-->
<script src="/js/owl.carousel.js"></script>

<!-- Wow JS -->
<script src="/js/wow.min.js"></script>

<!-- Particles -->
<script src="/js/particles.min.js"></script>
<script src="/js/particles.js"></script>

<!-- 3D Hover -->
<script src="/js/jquery.hover3d.min.js"></script>

<!-- Countup -->
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/waypoints.min.js"></script>

<!-- Scrollax -->
<script src="/js/scrollax.js"></script> <!--  --- -->

<!-- Slick -->
<script src="/js/slick-plugin.js"></script><!--  --- -->
<script src="/js/slick.js"></script><!--  --- -->

<!-- Slider -->
<script src="/js/swiper.min.js"></script>

<!-- Yotube Video Slider -->
<script src="/js/jquery.mb.YTPlayer.min.js"></script>

<!-- Isotop -->
<script src="/js/isotope.pkgd.min.js"></script>

<!-- Modernizr -->
<script src="/js/modernizr.js"></script>

<!-- Google Map -->
<script src="/js/map.js"></script>

<!-- Main JS -->
<script src="/js/main.js"></script>

</body>
</html>