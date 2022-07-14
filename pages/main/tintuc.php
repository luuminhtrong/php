<?php  
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }if($page == ''|| $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*3)-3;
    }
    $sql_lietke_blog = "SELECT * FROM tbl_tintuc ORDER BY id_tintuc ASC LIMIT $begin,6 ";
    $query_lietke_blog = mysqli_query($mysqli,$sql_lietke_blog);

 ?>

<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php?quanly=index">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Blog</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="ht__blog__wrap blog--page clearfix">

                        <?php   
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_lietke_blog)) {
                                $i++;
                            
                        ?>
                        <!-- Start Single Blog -->
                        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="index.php?quanly=blog&id=<?php echo $row['id_tintuc'] ?>">
                                        <img style="height: 240px;" src="admin/modules/quanlytintuc/uploads/<?php echo $row['hinhanh'] ?>" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <div class="bl__date">
                                        <span><?php   echo $row['ngay']; ?></span>
                                    </div>
                                    <h2><a href="index.php?quanly=blog&id=<?php echo $row['id_tintuc'] ?>"><?php   echo $row['tin']; ?></a></h2>
                                     <p><?php   echo $row['mota']; ?></p>
                                    <div class="blog__btn">
                                        <a href="index.php?quanly=blog&id=<?php echo $row['id_tintuc'] ?>">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    <?php } ?>
                    </div>
                </div>

                <?php 
                    $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_tintuc");
                    $row_count = mysqli_num_rows($sql_trang);
                    $trang = ceil($row_count/6);
                 ?>
                <!-- Start PAgenation -->
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="htc__pagenation">

                           <?php 
                            for ($i=1; $i <=$trang ; $i++) { 
                            ?>

                                <li><a href="index.php?quanly=tintuc&trang=<?php echo $i ?>"><?php echo$i ?></a></li>
                        <?php } ?>
                           <!-- <li><a href="#">1</a></li> 
                           <li><a href="#">2</a></li> 
                           <li><a href="#">3</a></li> 
                           <li><a href="#">4</a></li> 
                           <li><a href="#"><i class="zmdi zmdi-more"></i></a></li> 
                           <li><a href="#">19</a></li>  -->
                        </ul>
                    </div>
                </div>
                <!-- End PAgenation -->
            </div>

            <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="index.php?quanly=timkiem" method="POST">
                                    <input name="tukhoa" placeholder="Search here... " type="text">
                                    <button name="timkiem" type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product-2/sm-smg/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product-2/sm-smg/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->