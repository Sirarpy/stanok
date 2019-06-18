@extends('layout')
@section('title', 'Contact')

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
        <h1>Contact</h1>
        <h6>Dream House</h6>
    </div>
</div>
<!-- Page Title END -->

<!-- Contact START -->
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="contact-box">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-box-info">

                        <div class="contact-box-icon clearfix">
                            <div class="contact-icon">
                                <i class="fa fa fa-phone"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Phone</h5>
                                <p>(+123) 123456789 </p>
                                <p>(+321) 987654321 </p>
                            </div>
                        </div>

                        <div class="contact-box-icon clearfix">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Our Address</h5>
                                <p>West road, London, England</p>
                                <p>Sheram 113</p>
                            </div>
                        </div>

                        <div class="contact-box-icon clearfix">
                            <div class="contact-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Email</h5>
                                <p>example@mail.com</p>
                                <p>example@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row contact-box-message">
                        <form class="contact-form" method="post" autocomplete="off">
                            <div class="col-xs-12">
                                <input name="name" placeholder="Your Name">
                            </div>
                            <div class="col-xs-6">
                                <input name="email" placeholder="E-mail adress" type="email">
                            </div>
                            <div class="col-xs-6">
                                <input name="subject" placeholder="Subject">
                            </div>
                            <div class="col-xs-12">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="primary-button button-md full-width rounded-border center-holder mt-20">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact END -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.4821103045465!2d44.45735435116963!3d40.17608307929271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abdc0939cc95f%3A0x2f0a43750f2ce27a!2zSG92bmF0YW4gU3QsIFllcmV2YW4sINCQ0YDQvNC10L3QuNGP!5e0!3m2!1sru!2s!4v1558415099413!5m2!1sru!2s" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

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