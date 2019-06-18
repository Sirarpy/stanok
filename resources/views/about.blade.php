@extends('layout')
@section('title', 'About')

@section('content')

<!-- Preloader Start-->
<div id="preloader">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<!-- Preloader End -->


<!-- Page Title START -->
<div class="page-title">
    <div id="particles-js-pagetitle"></div>
    <div class="container">
        <h1>About Us</h1>
        <h6>Dream House</h6>
    </div>
</div>
<!-- Page Title END -->



<!-- About Section START -->
<div class="section-block">
    <!-- Particles START -->
    <!-- <div id="particles-js" style="height: 400px;"></div> -->
    <!-- Particles END -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="section-heading">
                    <h2 class="wow animated fadeInLeft">About Us</h2>
                    <h3>Hello ! We are DreamHouse . <br>
                        Architecture Studio <br>
                        From USA
                    </h3>
                </div>

                <div class="text-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-1">
                <div class="outline-bordered-right">
                    <img src="http://via.placeholder.com/555x312" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section START -->






<!-- Testmonials START -->
<div class="section-block-parallax" style="background-image: url('http://via.placeholder.com/1528x346');">
    <div class="container">
        <div class="owl-carousel owl-theme" id="testmonials">
            <div class="testmonial-block mt-40">
                <h4>Tim Cook</h4>
                <h6>Director</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="testmonial-block mt-40">
                <h4>John Doe</h4>
                <h6>Designer</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="testmonial-block mt-40">
                <h4>Clara White</h4>
                <h6>Marketing</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testmonials END -->



<!-- Clients START -->
<div class="section-block container">
    <div class="">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="section-heading">
                <h2 class="wow animated fadeInLeft">Our Clients</h2>
                <h3>Great Clients</h3>
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="owl-carousel owl-theme" id="our-clients">
                <div class="client-item">
                    <img src="http://via.placeholder.com/130x96" alt="client">
                </div>
                <div class="client-item">
                    <img src="http://via.placeholder.com/130x96" alt="client">
                </div>
                <div class="client-item">
                    <img src="http://via.placeholder.com/130x96" alt="client">
                </div>
                <div class="client-item">
                    <img src="http://via.placeholder.com/130x96" alt="client">
                </div>
                <div class="client-item">
                    <img src="http://via.placeholder.com/130x96" alt="client">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Clients END -->


@endsection