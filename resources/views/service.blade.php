@extends('layouts.landing-page')

@section('content')

	<section id="services">
        <div class="container-95">
            <div class="row">
            	<div class="col-md-6 text-center" style="margin: auto 0;">
                    <a href="https://placeholder.com"><img src="http://via.placeholder.com/700x455" class="img-fluid"></a>
                </div>
                <div class="col-md-6" style="margin: auto 0;">
                	<div class="col-lg-12 text-center">
	                    <h2 class="section-heading">Our Service</h2>
	                <hr class="my-4">
	                </div>
                    <p>
                        {!! $service->intro !!}
                    </p>
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
                {!! $service->body !!} 
            </div>
        </div>   
    </section>

@endsection