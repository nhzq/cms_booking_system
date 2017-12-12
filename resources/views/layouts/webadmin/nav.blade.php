@php
	$post = App\Homepage::first();
@endphp

<ul class="nav" id="side-menu">
    <li>
        <a href="{{ route('webadmin.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard: Web Admin</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-home fa-fw"></i> Homepage<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('webadmin.homepage.index') }}">List</a>
            </li>

            @if(count($post) == 0)

                <li>
                    <a href="{{ route('webadmin.homepage.create') }}">Create</a>
                </li>

            @endif

        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-object-group fa-fw"></i> About us<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('webadmin.about.index') }}">List</a>
            </li>

            @php
                $about = App\About::first();
            @endphp

            @if(count($about) == 0)

                <li>
                    <a href="{{ route('webadmin.about.create') }}">Create</a>
                </li>

            @endif

        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-briefcase fa-fw"></i> Our Services<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('webadmin.service.index') }}">List</a>
            </li>

            @php
                $service =  App\Service::first();
            @endphp

            @if(count($service) == 0)

                <li>
                    <a href="{{ route('webadmin.service.create') }}">Create</a>
                </li>

            @endif
            
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> News<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('webadmin.news.index') }}">List</a>
            </li>
            <li>
                <a href="{{ route('webadmin.news.create') }}">Create</a>
            </li>
            <li>
                <a href="{{ route('webadmin.news.trashed') }}">Trashed</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    
</ul>

