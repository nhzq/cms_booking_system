@extends('layouts.landing-page')

@section('content')

	<section id="services">
        <div class="container-95">
            <div class="row">

                @if($service->count() == 0)
                    
                    <div class="col-md-6 text-center" style="margin: auto 0;">
                        <a href=""><img src="http://placehold.it/700x468" class="img-fluid" style="min-width: 468px;"></a>
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

                @else

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

                @endif
                
            </div>
        </div>
    </section>
    <section class="bg-dark text-white">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-4">About Us!</h2>
            </div>
            <div class="row">

                @if($service->count() == 0)

                    <img src="http://placehold.it/900x470" class="img-fluid" style="margin: 0 auto; min-width: 900px;">

                @else

                    <img src="{{ asset('img/serviceImage/' . $service->body_image) }}" class="img-fluid" style="margin: 0 auto; min-width: 900px;">

                @endif

            </div>
            <br>
            <br>
            <div class="row">
                @if($service->count() == 0)

                    <div class="col-md-8 offset-2">
                        No records found
                    </div>

                @else

                    <div class="col-md-8 offset-2">
                        {!! $service->body !!} 
                    </div>

                @endif
            </div>
        </div>   
    </section>

@endsection