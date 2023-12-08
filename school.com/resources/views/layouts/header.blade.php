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
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

    </ul>
  </nav>
  <!-- /.navbar -->

  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:;" class="brand-link"style="text-align: center;">
      <span class="brand-text font-weight-light" style="font-weight: bold !important; font-size: 18px;">School Management System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          @if(Auth::user()->user_type == 1)
           <li class="nav-item">
            <a href="{{ url('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard  
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/admin/list')}}" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
              <i class="nav-icon far fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/course/list')}}" class="nav-link @if(Request::segment(2) == 'course') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Course
              </p>
            </a>
          </li>

          @elseif(Auth::user()->user_type == 2)
           <li class="nav-item">
            <a href="{{ url('teacher/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          @elseif(Auth::user()->user_type == 3)
           <li class="nav-item">
            <a href="{{ url('student/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          @elseif(Auth::user()->user_type == 4)
           <li class="nav-item">
            <a href="{{ url('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          @endif

          <li class="nav-item">
            <a href="{{ url('admin/admin/calender')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calender
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('logout')}}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

              
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>