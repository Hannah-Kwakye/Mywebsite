<!-- sidebar menu start -->
<div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.html">Supply Quality Products | MultiStore</a></h1>
    </div>

  <!-- if logo is image enable this -->
    <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    //image logo -->

    <div class="logo-icon text-center">
      <a href="{{ route('home') }}" title="logo"><img src="{{asset('img/logo/logo.png')}}" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">

        <li class="active"><a class="app-menu__item {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
          <i class="app-menu__icon fa fa-dashboard">
            </i><span> Dashboard</span></a>
        </li>
        <li class="menu-list">
          <a href="#"><i class="fa fa-cogs"></i>
            <span>SHOPS <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="{{ route('electricals') }}">Electronic</a> </li>
            <li><a href="{{ route('footwears') }}">Footwear</a> </li>
            <li><a href="{{ route('clothing') }}">Fashion</a></li>
            <li><a href="{{ route('perfumes') }}">Perfumes</a> </li>
            <li><a href="{{ route('giftshop') }}">GiftShop</a> </li>
            <li><a href="{{ route('accessories') }}">Accessories</a></li>
          </ul>
        </li>
        <li><a href="{{ route('admin.products.index') }}"><i class="fa fa-table"></i> <span>Products</span></a></li>
        <li><a href="{{ route('home') }}"><i class="fa fa-tachometer"></i> <span>Visit Shop</span></a></li>
        {{-- <li><a href="forms.html"><i class="fa fa-table"></i> <span>Categories</span></a></li> --}}
      
        {{-- <li>
          <a class="app-menu__item {{ Route::currentRouteName() == 'admin.products.index' ? 'active' : '' }}"
              href="{{ route('admin.products.index') }}">
              <i class="app-menu__icon fa fa-tags"></i>
              <span class="app-menu__label">Products</span>
          </a>
      </li> --}}
        <li>
          <a class="app-menu__item {{ Route::currentRouteName() == 'admin.settings' ? 'active' : '' }}"
               href="{{ route('admin.settings') }}">
              <i class="app-menu__icon fa fa-cogs"></i>
              <span class="app-menu__label">Settings</span>
          </a>
      </li>
      <li>
        <a class="app-menu__item {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}"
            href="{{ route('admin.categories.index') }}">
            <i class="app-menu__icon fa fa-tags"></i>
            <span class="app-menu__label">Categories</span>
        </a>
    </li>
    <li>
      <a class="app-menu__item {{ Route::currentRouteName() == 'admin.attributes.index' ? 'active' : '' }}" href="{{ route('admin.attributes.index') }}">
          <i class="app-menu__icon fa fa-th"></i>
          <span class="app-menu__label">Attributes</span>
      </a>
  </li>
  <li>
    <a class="app-menu__item {{ Route::currentRouteName() == 'admin.brands.index' ? 'active' : '' }}" href="{{ route('admin.brands.index') }}">
        <i class="app-menu__icon fa fa-briefcase"></i>
        <span class="app-menu__label">Brands</span>
    </a>
</li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Minimize</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right">Expand</i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->