<!-- Main Sidebar Container -->
<!-- <a class="nav-link" data-widget="control-sidebar" href="#">Toggle Control Sidebar</a> -->
<button class="btn btn-primary" data-widget="pushmenu">Menu</button>
<!-- <button class="btn btn-primary" data-widget="pushmenu" data-auto-collapse-size="768">Toggle Sidebar</button> -->
<aside class="main-sidebar control-sidebar-dark elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="/" class="brand-link">
<img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png"
alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:
.8">
<span class="brand-text font-weight-light">CRUD LARAVEL</span>
</a> -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="/profil" class="d-block text-decoration-none">{{ auth()->user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="dashboardAdmin" class="nav-link
                    {{ $slug == 'admin' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profil" class="nav-link
                {{ $slug == 'profil' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dataCustomerAdm" class="nav-link
                    {{ $slug == 'customer' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            Data Customer
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dataKaryawan" class="nav-link
                    {{ $slug == 'datakaryawan' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            Data Karyawan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dataProdukAdm" class="nav-link
                    {{ $slug == 'produk' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-tags" aria-hidden="true"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="/dataPenjualan" class="nav-link
                    {{ $slug == 'penjualan' ? 'active' : '' }}">
                        <i class="nav-icon fa fa-shopping-cart" aria-hidden="true"></i>
                        <p>
                            Data Penjualan
                        </p>
                    </a>
                </li>

                <!-- <div class="d-flex align-items-end"> -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-arrow-circle-left" aria-hidden="true"></i>
                        {{ __('Logout') }}

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>

                <!-- </div> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- <div class="" >
    <a class="" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div> -->
