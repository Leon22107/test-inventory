@php
    $menu = [
        (object)[
            "title" => "Dashboard",
            "path" => "/",
            "icon" => "fas fa-tachometer-alt",
        ],
        (object)[
            "title" => "Stocks",
            "path" => "stock",
            "icon" => "fas fa-th",
        ],
        (object)[
            "title" => "Input",
            "path" => "stock/input",
            "icon" => "fas fa-arrow-down",
        ],
        (object)[
            "title" => "Add New Item",
            "path" => "stock/new",
            "icon" => "fas fa-plus",
        ]
    ]
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
            @foreach ( $menu as $menu )
            <li class="nav-item">
            <a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path}}" class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}">
              <i class="nav-icon {{ $menu->icon }}"></i>
              <p>
                {{ $menu->title }}
              </p>
            </a>
          </li>
            @endforeach

          {{-- <li class="nav-item">
            <a href="calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
