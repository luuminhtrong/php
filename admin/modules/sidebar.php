<?php   
        if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
            unset($_SESSION['dangnhap']);
            header('Location:login.php');
        }
 ?>

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    Xin chào: <?php  if(isset($_SESSION['dangnhap'])){
                        echo $_SESSION['dangnhap'];
                    } ?>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading"> -->
                
            <!-- </div> -->

            

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=danhmucsanpham&query=lietke">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Danh mục sản phẩm</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=quanlysp&query=lietke&trang=1">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sản phẩm</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=quanlyslider&query=lietke">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Slider</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=quanlytintuc&query=lietke&trang=1">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tin tức</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=quanlydonhang&query=lietke">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Quản lý đơn hàng</span></a>
            </li>
             <li class="nav-item active">
                <a class="nav-link" href="index.php?action=quanlylienhe&query=lietke">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Quản lý liên hệ</span></a>
            </li>
             
              <li class="nav-item active">
                <a class="nav-link" href="index.php?dangxuat=1">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Đăng xuất :<?php  if(isset($_SESSION['dangnhap'])){
                        echo $_SESSION['dangnhap'];
                    } ?></span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar