@extends('layouts.landing-page')

@section('content')

	<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Overview</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <br>
        <div class="container-95">
            <div class="row">
            	<div class="col-md-6 text-center" style="margin: auto 0;">
                    <a href="https://placeholder.com"><img src="http://via.placeholder.com/700x455" class="img-fluid"></a>
                </div>
                <div class="col-md-6" style="margin: auto 0;">
                	<div class="col-lg-12 text-center">
	                    <h2 class="section-heading">Vision</h2>
	                <hr class="my-4">
	                </div>
                    <p>
                        {!! $about->vision !!}
                    </p>
                </div>
                
            </div>
            <br>
            <div class="row">
                <div class="col-md-6" style="margin: auto 0;">
                	<div class="col-lg-12 text-center">
	                    <h2 class="section-heading">Mission</h2>
	                <hr class="my-4">
	                </div>
                    <p>
                        {!! $about->mission !!} 
                    </p>
                </div>
                <div class="col-md-6 text-center" style="margin: auto 0;">
                    <a href="https://placeholder.com"><img src="http://via.placeholder.com/700x455" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">About Us!</h2>
        </div>
        <div class="row">
            <div class="col-md-8 offset-2">
                {!! $about->body !!} 
            </div>
        </div>   
    </section>

@endsection