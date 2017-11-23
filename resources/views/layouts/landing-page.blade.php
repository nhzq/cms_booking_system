<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    @php
        $post = App\Homepage::first();
    @endphp

    @if(count($post) > 0)

        <title>{{ $post->company_name }}</title>

    @else

        <title>No records found</title>

    @endif

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/creative.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('css')

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">

            @if(count($post) > 0)

                <a class="navbar-brand js-scroll-trigger" href="#page-top">{{ $post->company_name }}</a>

            @else

                <a class="navbar-brand js-scroll-trigger" href="#page-top">No records found</a>

            @endif
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('frontend.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('frontend.about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('frontend.service') }}">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="">Training &amp Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('frontend.news') }}">News &amp Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('frontend.contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <section class="bg-dark text-white" style="padding:10px;">
        <div class="container text-center">

            @if(count($post) > 0)

                <h6 class="mb-4" style="margin-top: 12px;">{{ $post->company_name }} &copy; <?php echo date("Y"); ?> Copyright.</h6>

            @else

                <h6 class="mb-4" style="margin-top: 12px;">No records found &copy; <?php echo date("Y"); ?> Copyright.</h6>

            @endif
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative.min.js') }}"></script>

  </body>

</html>
