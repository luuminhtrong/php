<?php 
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmucsanpham where tbl_danhmucsanpham.id_danhmuc=tbl_sanpham.id_danhmuc  ORDER BY tbl_sanpham.id_sanpham asc LIMIT 8";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	

 ?>

 <?php  
    $sql_lietke_slider = "SELECT * FROM tbl_slider";
    $query_lietke_slider = mysqli_query($mysqli,$sql_lietke_slider);

 ?>

 <?php  
    $sql_lietke_blog = "SELECT * FROM tbl_tintuc LIMIT 3";
    $query_lietke_blog = mysqli_query($mysqli,$sql_lietke_blog);

 ?>

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
        </div>
        <!-- End Offset Wrapper -->

<!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <?php   
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_lietke_slider)) {
                        $i++;
                    
                ?>
                            <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2><?php   echo $row['title']; ?></h2>
                                        <h1><?php   echo $row['tensanpham']; ?></h1>
                                        <div class="cr__btn">
                                            <a href="index.php?quanly=tatcasanpham">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="admin/modules/quanlyslider/uploads/<?php echo $row['hinhanh'] ?>" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <?php 
                    }
                 ?>
            </div>
        </div>
        <!-- Start Slider Area -->

<section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Product</h2>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
                        	<?php 
									while ($row = mysqli_fetch_array($query_pro)) {
								 ?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            	
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                                            <img  style="height: 300px" src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html" style="font-size: 16px;"><?php echo $row['tensanpham'] ?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo number_format($row['gia'],0,',','.').'vnđ' ?></li>
                                        </ul>
                                    </div>
                                </div>
                            
                            </div>          
                            <?php } ?>               
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Start Blog Area -->
<section class="htc__blog__area bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ht__blog__wrap clearfix">

                <?php   
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_lietke_blog)) {
                        $i++;
                ?>
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
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
                            <h2><a href="blog-details.html"><?php   echo $row['tin']; ?></a></h2>
                            <p><?php   echo $row['mota']; ?></p>
                            <div class="blog__btn">
                                 <a href="index.php?quanly=blog&id=<?php echo $row['id_tintuc'] ?>">
                                Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->