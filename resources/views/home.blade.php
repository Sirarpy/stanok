@extends('layout')
@section('title', 'Home')

@section('content')

<!-- Video START -->
<div class="video-area" id="video-area">
    <div class="player" id="video-play" data-property="{videoURL:'https://www.youtube.com/watch?v=O8L-MI_4yN8', containment:'#video-area', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:10, opacity:1, quality:'low',}"></div>
    <div class="video-table">
        <div class="video-table-cell">
            <div class="container center-holder">
                <div class="video-effect">
                    <div class="video-effect-box">
                        <div class="video-effect-content">
                            <h3>Welcome Company <span style="font-size: 21px;">STANOK.AM</span> </h3>
                            <h2>Best Coffee Machines You Can Buy</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video END -->





<!-- About Section START -->
<div class="section-block-bg" >  <!-- style="background-image: url(img/bg/bg1.jpg);" -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7 col-xs-12">
                <div class="section-heading">
                    <h2 class="wow animated fadeInLeft">About Us</h2>
                    <h3>Welcome ! Stanok.am <br>Special for you</h3>
                </div>

                <div class="text-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.</p>
                </div>

                <div class="mt-30 mb-15">
                    <a href="#" class="dark-button button-md">Read More</a>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-1">
                <div class="outline-bordered-right">
                    <img src="img/img-coffee/stanok-1.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section START -->



<!-- Projects Grid START -->
<div class="section-block">
    <div class="container">
        <div class="parent-isotope">
            <div id="filters" class="isotop-buttons-block">
                <button class="isotop-button is-checked" data-filter="*">ԱՄԲՈՂՋ</button>
                <button class="isotop-button" data-filter=".ՍՆՆԴԱՅԻՆ">ՍՆՆԴԱՅԻՆ ՍԱՐՔԱՎՈՐՈՒՄՆԵՐ</button>
                <button class="isotop-button" data-filter=".ՎՈՉՍՆՆԴԱՅԻՆ">ՎՈՉ ՍՆՆԴԱՅԻՆ ՍԱՐՔԱՎՈՐՈՒՄՆԵՐ</button>
                <!-- <button class="isotop-button" data-filter=".interior">Interior</button> -->
                <!-- <button class="isotop-button" data-filter=".exterior">Exterior</button> -->
            </div>
            <div class="row">
                <div class="isotope-grid">

                    <div class="col-md-4 col-sm-6 col-xs-12 isotope-item house exterior interior">
                        <a href="#">
                            <div class="shop-grid">
                                <div class="shop-grid-img">
                                    <img src="img/img-coffee/stanok-1.jpg" alt="img">
                                </div>
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 pr-0">
                                            <h4>Bussines Strategies 1</h4>
                                            <span>Lorem ipsum dolor sit amet</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6 col-xs-12 isotope-item house exterior interior">
                            <a href="{{route('product-detail', $product->id)}}">
                                <div class="shop-grid">
                                    <div class="shop-grid-img">
                                        @if(!empty($product->icons))
                                            @php
                                                $img = json_decode($product->icons);
                                            @endphp
                                            @if(!empty($img[0]))
                                                <img src="{{ asset('images').DIRECTORY_SEPARATOR. $img[0]}}" alt="img">
                                            @else
                                                <img src="img/img-coffee/stanok-1.jpg" alt="img">
                                            @endif
                                        @else
                                            <img src="img/img-coffee/stanok-1.jpg" alt="img">
                                        @endif
                                    </div>
                                    <div class="shop-grid-info">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 pr-0">
                                                <h4>{{$product->title}}</h4>
                                                <span>{{$product->description}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects Grid END -->



<!-- Countup Section START -->
<div class="section-block-parallax" style="background-image: url('img/coffee-3.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="section-heading white-color outline-bordered-text-right mt-70">
                    <h3>We are creative<br> arhitecture <br> Design agency</h3>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-1">
                <div class="text-content white-color">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Cras lacinia magna vel molestie faucibus.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="countup-box">
                            <h4 class="countup">150</h4>
                            <strong>Happy Customers</strong>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="countup-box">
                            <h4 class="countup">270</h4>
                            <strong>Finished Projects</strong>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="countup-box">
                            <h4 class="countup">490</h4>
                            <strong>Days of Work</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Countup Section END -->

@endsection