<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Tour-De-Malay</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            {{-- HOTELS MENUE --}}
            <ul class="nav nav-treeview mt-3">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-hotel"></i>
                      <p>
                        Hotels
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('hotels') }}" class="nav-link">
                          <i class="fas fa-angle-right nav-icon"></i>
                          <p>Manage Hotels</p>
                        </a>
                      </li>

                    </ul>
                  </li>
            </ul>
            {{-- HOTELS MENUE ENDS HERE --}}
            {{-- RESTAURANTS MENUE --}}
            <ul class="nav nav-treeview mt-3">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-building"></i>
                      <p>
                        Restaurants
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('restaurants') }}" class="nav-link">
                          <i class="fas fa-angle-right nav-icon"></i>
                          <p>Manage Restaurants</p>
                        </a>
                      </li>

                    </ul>
                  </li>
            </ul>
            {{-- RESTAURANTS MENUE ENDS HERE --}}


            {{-- VISITING PLACES MENUE  --}}

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-map-marker"></i>
                      <p>
                        Tourists Spots
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('tour_spots')}}" class="nav-link">
                          <i class="fas fa-angle-right nav-icon"></i>
                          <p>Manage Spots</p>
                        </a>
                      </li>


                    </ul>
                  </li>
            </ul>
            {{-- VISTING PLACES MENUE ENDS HERE --}}

            {{-- CLUBS MENUE  --}}

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                        Clubs
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('clubs')}}" class="nav-link">
                          <i class="fas fa-angle-right nav-icon"></i>
                          <p>Manage Clubs</p>
                        </a>
                      </li>

                    </ul>
                  </li>
            </ul>
            {{-- CLUBS MENUE ENDS HERE --}}

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
