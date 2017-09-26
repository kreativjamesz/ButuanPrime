<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                  <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li @if (Request::is('dashboard/dashboard*')) class="active" @endif><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li @if (Request::is('dashboard/property*')) class="active" @endif><a href="{{route('property.index')}}"><i class="fa fa-building"></i> <span>Property</span></a></li>
            <li @if (Request::is('dashboard/product*')) class="active" @endif><a href="{{route('product.index')}}"><i class="fa fa-cubes"></i> <span>Products</span></a></li>
            <li class="treeview @if (Request::is('settings*')) active @endif><a href="{{route('dashboard')}}">
                <a href="#"><span class="fa fa-cog"></span><span>Settings</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if (Request::is('dashboard/marketplace*')) class="active" @endif><a href="{{route('marketplace.index')}}">Marketplace</a></li>
                    <li @if (Request::is('dashboard/category*')) class="active" @endif><a href="{{route('category.index')}}">Category</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>