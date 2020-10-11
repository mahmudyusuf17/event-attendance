<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link navbar-light">
    <img src="{{asset('template')}}/dist/img/logo/favicon.png" alt="Logo Rental Sepeda" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-dark text-dark">Rental Sepeda</span> -->
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2 mt-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block mt-2">{{ Auth::user()->name }}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-header">
        <a href="{{route('dashboard')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>
        <li class="nav-header">EVENT</li>
        <li class="nav-item">
        <a href="{{url('admin/event')}}" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
            Event
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{url('admin/attendance')}}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
            Attendance
            </p>
        </a>
        </li>
        <hr>
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
            PENGATURAN
            <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Account</p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('password.request') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Forget Password</p>
            </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
            Logout
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </form>
        </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->