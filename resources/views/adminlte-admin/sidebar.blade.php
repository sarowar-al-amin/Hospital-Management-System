  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="adminlte-admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminlte-admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_doctor_view')}}">
                <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Add a Doctor</span>
            </a>
            </li>
            <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('appointment_show')}}">
                <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Appointments</span>
            </a>
            </li>
            <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('show_doctors')}}">
                <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Show all doctors</span>
            </a>
            </li>

            <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_multiple_doctor')}}">
                <!-- {{url('show_doctors')}} -->
                <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Add multiple doctors</span>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
