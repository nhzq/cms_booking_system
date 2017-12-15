@php
    $cat = App\Category::all();
@endphp

<ul class="nav" id="side-menu">
    <li>
        <a href="{{ route('systemadmin.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard: System Admin</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-wrench fa-fw"></i> Training<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('systemadmin.training.index') }}">List</a>
            </li>

            @if(count($cat) > 0)

                <li>
                    <a href="{{ route('systemadmin.training.create') }}">Create</a>
                </li>

            @endif
            
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Categories/Course<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('systemadmin.category.index') }}">List</a>
            </li>
            <li>
                <a href="{{ route('systemadmin.category.create') }}">Create Category</a>
            </li>

            @if(count($cat) > 0)

                <li>
                    <a href="{{ route('systemadmin.subcategory.create') }}">Create Course</a>
                </li>

            @endif
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-map-marker fa-fw"></i> Training Location<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('systemadmin.location.index') }}">List</a>
            </li>
            <li>
                <a href="{{ route('systemadmin.location.create') }}">Create</a>
            </li>
        </ul>
    </li>
</ul>