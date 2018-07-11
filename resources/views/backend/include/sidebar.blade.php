<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
     <!--  <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          Status
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">HEADER</li>
        Optionally, you can add icons to the links
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-tags"></i> <span>LOẠI SẢN PHẨM</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('loaisanpham.index')}}">Danh Sách Các Loại Sản Phẩm</a></li>
            <li><a href="{{route('loaisanpham.create')}}">Thêm Mới Loại Sản Phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-indent"></i> <span>HÃNG SẢN XUẤT</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('hangsanxuat.index')}}">Danh Sách Các Loại Sản Phẩm</a></li>
            <li><a href="{{route('hangsanxuat.create')}}">Thêm Mới Loại Sản Phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-codepen"></i> <span>SẢN PHẨM</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('sanpham.index')}}">Danh Sách Sản Phẩm</a></li>
            <li><a href="{{route('sanpham.create')}}">Thêm Mới Sản Phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa  fa-users"></i> <span>KHÁCH HÀNG</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('khachhang.index')}}">Danh Sách Khách Hàng</a></li>
            <li><a href="{{route('khachhang.create')}}">Thêm Mới Khách Hàng</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cart-arrow-down"></i> <span>ĐƠN HÀNG</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="">Danh Sách Đơn Hàng</a></li>
            <li><a href="">Thêm Mới Đơn Hàng</a></li>
          </ul>
          
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-gears "></i> <span>KHO HÀNG</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('kho.index')}}">Danh Sách Kho Hàng</a></li>
            <li><a href="{{route('kho.create')}}">Thêm Mới Kho Hàng</a></li>
          </ul>
          
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-pie-chart"></i> <span>QUẢN LÝ KHO</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="">Kiêm Tra Hàng Tồn</a></li>
            <li><a href="">Thống Kê Hàng Tồn</a></li>
          </ul>
          
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>