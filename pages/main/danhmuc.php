<?php 
	$sql_pro = "SELECT * FROM tbl_sanpham where tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham desc";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	

	$sql_cat = "SELECT * FROM tbl_danhmucsanpham where tbl_danhmucsanpham.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cat= mysqli_query($mysqli,$sql_cat);
	$row_title = mysqli_fetch_array($query_cat);
 ?>
				<section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <h3><?php echo $row_title['tendanhmuc']; ?></h3>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <!-- Start Single Product -->
                                        <?php 
											while ($row_pro = mysqli_fetch_array($query_pro)) {
										 ?>
                                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                                                        <img style="height: 300px" src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="product images">
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
                                                    <h4><a href="product-details.html" style="font-size: 16px"><?php echo $row_pro['tensanpham'] ?></a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li class="old__prize"><?php echo number_format($row_pro['gia'],0,',','.').'vnđ' ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                        <!-- End Single Product -->                                     
                                    </div>
                                </div>
                            </div>
                            <!-- End Product View -->
                        </div>
                        <!-- Start Pagenation -->
                        <!-- <div class="row">
                            <div class="col-xs-12">
                                <ul class="htc__pagenation">
                                   <li><a href="#">1</a></li> 
                                   <li class="active"><a href="#">3</a></li>   
                                   <li><a href="#">19</a></li> 
                                </ul>
                            </div>
                        </div> -->
                        <!-- End Pagenation -->
                    </div>
                    <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__product__leftsidebar">            
                        <?php   
						  $sql_lietke_danhmucsanpham = "SELECT * FROM tbl_danhmucsanpham ";
						  $query_lietke_danhmucsanpham = mysqli_query($mysqli,$sql_lietke_danhmucsanpham);

						 ?>             
                            <!-- Start Category Area -->
                            <div class="htc__category">
                                <h4 class="title__line--4">Danh mục sản phẩm</h4>
                                <?php  
                                                  $i = 0;
                                                  while ($row = mysqli_fetch_array($query_lietke_danhmucsanpham)) {
                                                    $i++;
                                                  
                                                ?>
                                <ul class="ht__cat__list">
                                    <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']  ?>"><?php   echo $row['tendanhmuc']; ?></a></li>
                                    
                                </ul>
                            <?php } ?>
                            </div>
                            <!-- End Category Area -->
                            </div>
                            <!-- End Best Sell Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        </div>
        <!-- End Offset Wrapper -->