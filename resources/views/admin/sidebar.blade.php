<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="/redirects"><img src="assets/admin-assets/images/white-logo.png" alt="logo" /></a>
      
    </div>
    <ul class="nav">
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.users') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
        </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('admin.food') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Foods</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route("admin.chefs") }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Chefs</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route("admin.reservation") }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Reservation</span>
        </a>
      </li>
    </ul>
  </nav>