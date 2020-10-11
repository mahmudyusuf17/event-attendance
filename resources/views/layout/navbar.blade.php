<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown user user-menu mt-2">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="user-image ml-4" alt="User Image">
            <span class="hidden-xs">{{Auth::user()->name}}</span>
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
            <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            <p>
                {{Auth::user()->name}} <br> {{Auth::user()->Email}}
                <small>Member since {{Auth::user()->created_at}}</small>
            </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
            <div class="pull-left">
                <a class="btn btn-flat btn-primary rounded btn-sm" href="#"><span class="fas fa-user"></span> {{ __('Profile' )}}</a>
                <a class="btn btn-flat float-right btn-danger rounded btn-sm" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span class="fas fa-sign-out-alt"></span>
                    {{ __('Sign Out') }}
                </a>
            </div>
            </li>
        </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
