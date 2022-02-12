<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route("dashboard")}}" class="brand-link">
      <img src="{{ asset('public/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Step Tech </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/assets/dist/img/user2-160x160.jpg')}} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('user.profile')}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
          <li class="nav-item">
            <a href="{{ route("dashboard")}}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Slider Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider.create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('slider.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider List </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-grip-horizontal"></i>
              <p>
                Service
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('service.create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('service.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service List </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-expand"></i>
              <p>
                Experience
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('experience.create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('experience.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience List </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-compress"></i>
              <p>
                Portfolio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('portfolio.create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Portfolio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('portfolio.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolio List </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Team
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('team_member.create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team Member </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('team_member.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Member List </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-laptop-code"></i>
              <p>
                Web Content
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('web_content.create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Web Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('web_content.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Web Content List </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('company.profile')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Company Profile </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('user.change_password') }}" class="nav-link">
              <i class="nav-icon fa fa-eye"></i>
              <p> Change Password </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p> Logout </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>