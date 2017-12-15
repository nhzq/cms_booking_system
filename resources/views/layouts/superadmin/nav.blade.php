<ul class="nav" id="side-menu">
    <li>
        <a href="{{ route('superadmin.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard: Super Admin</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-home fa-fw"></i> User<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('superadmin.user.index') }}">List</a>
            </li>

        </ul>
        <!-- /.nav-second-level -->
    </li>
</ul>

