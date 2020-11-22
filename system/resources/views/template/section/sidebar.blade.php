@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminTOKO JUAL BELI SUPERMOTO BEKAS" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">adminTOKO JUAL BELI SUPERMOTO BEKAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">mr.jeruknipis</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                master data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('beranda')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>beranda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{('kategory')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>kategory</p>
                </a>
                <li class="nav-item">
                <a href="{{url('user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>user</p>
                </a>
                 <li class="nav-item">
                <a href="{{('produk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>produk</p>
                </a>
                 <li class="nav-item">
                <a href="{{('promo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>promo</p>
              </li>
               <li class="nav-item">
                <a href="{{('supplier')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>supplier</p>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>