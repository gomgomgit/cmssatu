<?php
$menus = [
    [
        'title' => 'Articles',
        'route' => 'admin.articles',
        'icon' => 'fa-book',
        'children' => [
            [
                'title' => 'Article List',
                'route' => 'admin.articles.index',
            ],
            [
                'title' => 'Add Article',
                'route' => 'admin.articles.create',
            ],
        ],
    ],

    [
        'title' => 'Categories',
        'route' => 'admin.categories',
        'icon' => 'fa-book',
        'children' => [
            [
                'title' => 'Category List',
                'route' => 'admin.categories.index',
            ],
            [
                'title' => 'Add Category',
                'route' => 'admin.categories.create',
            ],
        ],
    ],

    [
        'title' => 'Users',
        'route' => 'admin.users.index',
        'icon' => 'fa-user',
    ],

];
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset ('sbadmin/index.html')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Sup <sup>?</sup></div>
  </a>


  <!-- Divider -->
  <hr class="sidebar-divider">


  <div class="sidebar-heading">
    Dashboard
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::routeIs("admin.dashboard") ? 'active':'' }}">
    <a class="nav-link" href="{{ route('admin.dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  @foreach($menus as $index => $menu)

    @if(isset($menu['children']))

      <li class="nav-item {{ Request::routeIs("$menu[route]*") ? 'active':'' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw {{ $menu['icon'] }}"></i>
          <span>{{ $menu['title'] }}</span>
        </a>
        <div id="collapse{{ $index }}" class="collapse {{ Request::routeIs("$menu[route]*") ? 'show':'' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu {{ $menu['title'] }}:</h6>

              @foreach($menu['children'] as $children)
                <a class="collapse-item {{ Request::routeIs("$children[route]") ? 'active':'' }}" href="{{route($children['route']) }}">{{ $children['title'] }}</a>
              @endforeach


          </div>
        </div>
      </li>

    @else

      <li class="nav-item  {{ Request::routeIs("$menu[route]*") ? 'active':'' }}">
        <a class="nav-link" href="{{ route($menu['route']) }}">
          <i class="fas fa-fw {{ $menu['icon'] }}"></i>
          <span>{{ $menu['title'] }}</span></a>
      </li>

    @endif

  @endforeach

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <div class="sidebar-heading">
    Home
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('home')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Home</span></a>
  </li>


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
