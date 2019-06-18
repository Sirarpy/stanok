@extends('layout')
@section('title', 'Product Detail')

@section('content')

@php
    $images = json_decode($product->icons);
@endphp

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
                        @foreach($images as $image)
                            <figure>
                                <a href="{{ asset('images').DIRECTORY_SEPARATOR. $image}}" data-size="1400x1400">
                                    <img src="{{ asset('images').DIRECTORY_SEPARATOR. $image}}" data-lazy="{{ asset('images').DIRECTORY_SEPARATOR. $image}}"  alt="" />
                                </a>
                            </figure>
                        @endforeach
                    </div>
                    <!-- End Product Images Slider -->
                    <!-- Begin product thumb nav -->
                    <ul class="thumb-nav">
                        @foreach($images as $image)
                            <figure>
                                <li><img src="{{ asset('images').DIRECTORY_SEPARATOR. $image}}"  alt="product-thumb" /></li>
                            </figure>
                        @endforeach
                    </ul>
                    <!-- End product thumb nav -->
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-product">
                    <h2>{{$product->title}}</h2>

                    <div class="single-product-price">
                        <h4>${{$product->price}}</h4>
                    </div>

                    <p class="mt-50">
                        {{$product->description}}
                    </p>

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

@endsection