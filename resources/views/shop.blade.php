@extends('layout')
@section('title', 'Shop')

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
        <h1>Shop Detail</h1>
        <h6>Dream House</h6>
    </div>
</div>
<!-- Page Title END -->

<!-- Shop product section START -->
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Product Images & Alternates -->
                <div class="product-images">
                    <!-- Begin Product Images Slider -->
                    <div class="main-img-slider">
                        <figure>
                            <a href="#" data-size="1400x1400">
                                <img src="img/img-coffee/stanok-1.jpg" data-lazy="img/img-coffee/stanok-1.jpg"  alt="" />
                            </a>
                        </figure>
                        <figure>
                            <a href="#" data-size="1400x1400">
                                <img src="img/img-coffee/stanok-1.jpg" data-lazy="img/img-coffee/stanok-1.jpg"  alt="" />
                            </a>
                        </figure>
                        <figure>
                            <a href="#" data-size="1400x1400">
                                <img src="img/img-coffee/stanok-1.jpg" data-lazy="img/img-coffee/stanok-1.jpg"  alt="" />
                            </a>
                        </figure>
                        <figure>
                            <a href="#" data-size="1400x1400">
                                <img src="img/img-coffee/stanok-1.jpg" data-lazy="img/img-coffee/stanok-1.jpg"  alt="" />
                            </a>
                        </figure>
                    </div>
                    <!-- End Product Images Slider -->
                    <!-- Begin product thumb nav -->
                    <ul class="thumb-nav">
                        <li><img src="img/img-coffee/stanok-1.jpg"  alt="product-thumb" /></li>
                        <li><img src="img/img-coffee/stanok-1.jpg"  alt="product-thumb" /></li>
                        <li><img src="img/img-coffee/stanok-1.jpg"  alt="product-thumb" /></li>
                        <li><img src="img/img-coffee/stanok-1.jpg"  alt="product-thumb" /></li>
                    </ul>
                    <!-- End product thumb nav -->
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-product">
                    <h2>Vintage Arm Chair</h2>
                    <!-- <div class="product-review-area">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>

                        <span>(1 customer review)</span>
                    </div> -->

                    <div class="single-product-price">
                        <h4>$2.500</h4>
                    </div>

                    <p class="mt-50">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.
                    </p>

                    <!-- <div class="product-categories">
                        <span>Category: </span>
                        <ul>
                            <li><a href="#">Interior</a></li>
                            <li><a href="#">Arm Chairs</a></li>
                        </ul>
                    </div>

                    <div class="quantity mt-30">
                        <form method="get">
                            <input type="number" name="quantity" min="1" max="9" step="1" value="1">
                            <button type="submit" class="add-to-cart-button">Add to Cart</button>
                        </form>
                    </div> -->

                    <div class="product-share mt-30">
                        <span>Share: </span>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop product section START -->





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