
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li  class="{{ Request::is('home') ? 'black_bg' : '' }}">
          <a href="{{ action('HomeController@index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview {{ Request::is('products') ? 'active' : '' }}  {{ Request::is('products/create') ? 'active' : '' }} ">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('products.index') }}"><i class="fa fa-circle-o"></i> All Products</a></li>
            <li><a href="{{ route('products.create') }}"><i class="fa fa-circle-o"></i> Add New product</a></li>
          </ul>
        </li>
        
        <li class="treeview {{ Request::is('our-financial') ? 'active' : '' }}  {{ Request::is('our-financial/create') ? 'active' : '' }} ">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Financial</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('our-financial.index') }}"><i class="fa fa-circle-o"></i> All Financial</a></li>
            <li><a href="{{ route('our-financial.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        
        <li class="treeview {{ Request::is('press') ? 'active' : '' }}  {{ Request::is('press/create') ? 'active' : '' }} ">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Press</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('press.index') }}"><i class="fa fa-circle-o"></i> All Press </a></li>
            <li><a href="{{ route('press.create') }}"><i class="fa fa-circle-o"></i> Add New Press</a></li>
          </ul>
        </li>
        
        <li class="treeview {{ Request::is('career') ? 'active' : '' }}  {{ Request::is('career/create') ? 'active' : '' }} ">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Career</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('career.index') }}"><i class="fa fa-circle-o"></i> All Career </a></li>
            <li><a href="{{ route('career.create') }}"><i class="fa fa-circle-o"></i> Add New Career</a></li>
          </ul>
        </li>
        
        <li class="treeview {{ Request::is('director') ? 'active' : '' }}  {{ Request::is('director/create') ? 'active' : '' }} ">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Directors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('director.index') }}"><i class="fa fa-circle-o"></i> All Directors </a></li>
            <li><a href="{{ route('director.create') }}"><i class="fa fa-circle-o"></i> Add New Director</a></li>
          </ul>
        </li>      
        
        <li class="treeview {{ Request::is('board') ? 'active' : '' }}  {{ Request::is('board/create') ? 'active' : '' }} ">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Board </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('board.index') }}"><i class="fa fa-circle-o"></i> All Boards </a></li>
            <li><a href="{{ route('board.create') }}"><i class="fa fa-circle-o"></i> Add New </a></li>
          </ul>
        </li>
        
        <li>
          <a href="{{ action('HomeController@Resume') }}">
            <i class="fa fa-circle-o"></i> <span>Resume</span>
          </a>
        </li>
        
        <li>
          <a href="{{ route('share-price.index') }}">
            <i class="fa fa-circle-o"></i> <span>Share Price</span>
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>