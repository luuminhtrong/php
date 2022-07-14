<?php  $sql_lietke_danhmucsanpham = "SELECT * FROM tbl_danhmucsanpham ";$query_lietke_danhmucsanpham = mysqli_query($mysqli,$sql_lietke_danhmucsanpham);?>
 <?php if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {unset($_SESSION['dangky']);} ?>
 <header id="htc__header" class="htc__header__area header--one">
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header"><div class="container">
            <div class="row">
                <div class="menumenu__container clearfix"><div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"><div class="logo"><a href="index.html"><img src="images/4.png" alt="logo images"></a></div></div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu"><li class="drop"><a href="index.html">Trang chủ</a></li>
                                <li class="drop"><a href="tatcasanpham.html">Sản phẩm</a>
                                            <ul class="dropdown"><?php $i = 0;while ($row = mysqli_fetch_array($query_lietke_danhmucsanpham)) {$i++;?><li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php   echo $row['tendanhmuc']; ?></a></li> <?php } ?>
                                            </ul>
                                </li>
                                 <li class="drop"><a href="tintuc.html">Tin tức</a></li>
                                <li><a href="lienhe.html">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                        <div class="header__right">
                            <style>.a-header a { position: relative;}</style>
                            <style>.header__account-hover { position: absolute;top: 50px;left: 40%;font-size: 15px;display: none; }</style>
                            <style>.a-header:hover .header__account-hover{display: block;}</style>
                            <style>.header__account-hover a {font-size: 15px;}</style>
                            <div class="header__search search search__open"><a href="index.php?quanly=backup"><i class="icon-magnifier icons"></i></a></div>
                            <div class="header__account a-header">
                                <a href="dangky.html" style="position: relative;"><i class="icon-user icons"></i></a>
                                <?php if(isset($_SESSION['dangky'])){ ?> <div class="header__account-hover"><a href="index.php?dangxuat=1">Đăng xuất</a></div>
                                <?php 
                                }else {?><div class="header__account-hover"><a href="dangky.html">Đăng ký</a></div><?php } ?>
                            </div>
                            <div class="htc__shopping__cart"><a class="cart__menu" href="giohang.html"><i class="icon-handbag icons"></i></a><a href="giohang.html"><span class="htc__qua">2</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
