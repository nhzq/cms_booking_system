@extends('layouts.landing-page')

@section('content')

	<section id="services">
        <div class="container-95">

            @if(count($service) > 0)

                <div class="row">

                	<div class="col-md-6 text-center" style="margin: auto 0;">
                        <a href=""><img src="{{ asset('img/serviceImage/' . $service->intro_image) }}" class="img-fluid" style="min-width: 468px;"></a>
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

            @else

                <div class="row">

                    <div class="col-md-6 text-center" style="margin: auto 0;">
                        <a href=""><img src="http://via.placeholder.com/700x468" class="img-fluid" style="min-width: 468px;"></a>
                    </div>
                    <div class="col-md-6" style="margin: auto 0;">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Our Service</h2>
                        <hr class="my-4">
                        </div>
                        <p>
                            No records found
                        </p>
                    </div>
                    
                </div>

            @endif

        </div>
    </section>
    <section class="bg-dark text-white">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-4">About Us!</h2>
            </div>

            @if(count($service) > 0)

                <div class="row">

                    <img src="{{ asset('img/serviceImage/' . $service->body_image) }}" class="img-fluid" style="margin: 0 auto; min-width: 900px;">

                </div>

            @else

                <div class="row">

                    <img src="http://via.placeholder.com/700x468" class="img-fluid" style="margin: 0 auto; min-width: 900px;">

                </div>

            @endif

            <br>
            <br>
            <div class="row">

                @if(count($service) > 0)

                    <div class="col-md-8 offset-2">
                        {!! $service->body !!} 
                    </div>

                @else

                    <div class="col-md-8 offset-2">
                        No records found 
                    </div>

                @endif
                
            </div>
        </div>   
    </section>

@endsection