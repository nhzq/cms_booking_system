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

                @if(count($about) > 0)

                	<div class="col-md-6 text-center" style="margin: auto 0;">
                        <a href=""><img src="{{ asset('img/aboutImage/' . $about->image_1) }}" class="img-fluid" style="min-width: 468px;"></a>
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

                @else
                    
                    <div class="col-md-6 text-center" style="margin: auto 0;">
                        <a href=""><img src="http://via.placeholder.com/1900x1267" class="img-fluid" style="min-width: 468px;"></a>
                    </div>
                    <div class="col-md-6" style="margin: auto 0;">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Vision</h2>
                        <hr class="my-4">
                        </div>
                        <p class="text-center">
                            No records found
                        </p>
                    </div>

                @endif
                
            </div>
            <br>
            <br>
            <div class="row">
                
                @if(count($about) > 0)

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
                        <a href=""><img src="{{ asset('img/aboutImage/' . $about->image_2) }}" class="img-fluid" style="min-width: 468px;"></a>
                    </div>

                @else

                    <div class="col-md-6" style="margin: auto 0;">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">Mission</h2>
                        <hr class="my-4">
                        </div>
                        <p class="text-center">
                            No records found
                        </p>
                    </div>
                    <div class="col-md-6 text-center" style="margin: auto 0;">
                        <a href=""><img src="http://via.placeholder.com/1900x1267" class="img-fluid" style="min-width: 468px;"></a>
                    </div>

                @endif

            </div>
        </div>
    </section>
    <section class="bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">About Us!</h2>
        </div>
        <div class="row">

            @if(count($about) > 0)

                <div class="col-md-8 offset-2">
                    {!! $about->body !!} 
                </div>

            @else

                <div class="col-md-8 offset-2 text-center">
                    No records found
                </div>

            @endif
        
        </div>   
    </section>

@endsection