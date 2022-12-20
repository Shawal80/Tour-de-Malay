<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>


    </ul>

    {{-- {{session('user')}} --}}
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <h5 class="text-info">Welcome Back : <i class="fa fa-user"></i> {{isset(session('user')->name)? session('user')->name : ''}}&nbsp;&nbsp; </h5>
          </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('logout')}}"><b class="text-dark"><i class="fa fa-person-to-door"></i>Logout</b> </a>
          </li>

    </ul>
  </nav>
  <!-- /.navbar -->
