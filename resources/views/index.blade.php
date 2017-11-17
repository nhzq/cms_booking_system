<style>
/*!
 * Start Bootstrap - Full Slider (https://startbootstrap.com/template-overviews/full-slider)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-full-slider/blob/master/LICENSE)
 */

.carousel-item {
  height: 100vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>

@extends('layouts.landing-page')

@section('content')

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->

                <div class="carousel-item active" style="background-image: url('{{ asset("img/homeImage/$post->header_image") }}')">
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;">
                        <h3>{{ $post->headline }}</h3>
                        <p>{{ $post->headline_brief }}</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset("img/homeImage/$post->header_image_2") }}')">
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;"></div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset("img/homeImage/$post->header_image_3") }}')">
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;"></div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">We've got what you need!</h2>
                    <hr class="light my-4">
                    <!-- Explain a bit about company's services -->
                    <p class="text-faded mb-4">{{ $post->services_brief }}</p>

                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    {{-- <h3 class="mb-3">Sturdy Templates</h3> --}}

                    <p class="text-muted mb-0">{{ $post->service_1 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    <p class="text-muted mb-0">{{ $post->service_2 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    {{-- <h3 class="mb-3">Up to Date</h3> --}}
                    <p class="text-muted mb-0">{{ $post->service_3 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                    <!-- Company expertise -->
                    {{-- <h3 class="mb-3">Made with Love</h3> --}}    

                    <p class="text-muted mb-0">{{ $post->service_4 }}</p>

                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">Want to know more? Contact Us</h2>
            <a class="btn btn-light btn-xl sr-button" href="{{ route('frontend.contact') }}">Download Now!</a>
        </div>
    </section>

    <section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <!-- Contact Us -->
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>

            <p>{{ $post->phone }}</p>

        </div>
        <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
                <a href="">{{ $post->email }}</a>
            </p>
        </div>
    </div>
    </div>
    </section>

@endsection