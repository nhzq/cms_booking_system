<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @php
        $post = App\Homepage::first();
        $user = \Auth::user()->username;
    @endphp

    @if(count($post) > 0)

        <title>{{ $post->company_name }}</title>

    @else

        <title>No records found</title>

    @endif

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor-admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor-admin/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('vendor-admin/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Toastr -->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor-admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom style -->
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="{{{ asset('img/compImage/favicon.ico') }}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                @if(count($post) > 0)

                    <a class="navbar-brand" href="{{ route('home.route') }}">{{ $post->company_name }}</a>

                @else

                    <a class="navbar-brand" href="{{ route('home.route') }}">No records found</a>

                @endif

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <p><i class="fa fa-user fa-fw"></i> {{ $user }} <i class="fa fa-caret-down"></i></p>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li> -->

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i>Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    @yield('layoutRole')
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            @yield('content')
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendor-admin/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor-admin/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor-admin/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendor-admin/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor-admin/morrisjs/morris.min.js') }}"></script>

    <script src="{{ asset('vendor-admin/bootstrap-growl/bootstrapGrowl.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>

    <!--Toastr -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    @yield('script')

    <script>

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        $(document).on('click', '.panel-heading span.clickable', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
        });

    </script>

</body>

</html>
