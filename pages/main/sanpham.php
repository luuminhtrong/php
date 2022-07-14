<?php 
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmucsanpham where tbl_danhmucsanpham.id_danhmuc=tbl_sanpham.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]'  LIMIT 1";
    $query_chitiet =mysqli_query($mysqli,$sql_chitiet);
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
        
 ?>
 <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            <img style="    height: 500px;" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" style="width: 500px"  alt="full-image">
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                                <!-- Start Small images -->
                               <!--  <ul class="product__small__images" role="tablist">
                                    <li role="presentation" class="pot-small-img active">
                                        <a href="#img-tab-1" role="tab" data-toggle="tab">
                                            <img src="images/product-2/sm-img-3/3.jpg" alt="small-image">
                                        </a>
                                    </li>
                                    <li role="presentation" class="pot-small-img">
                                        <a href="#img-tab-2" role="tab" data-toggle="tab">
                                            <img src="images/product-2/sm-img-3/1.jpg" alt="small-image">
                                        </a>
                                    </li>
                                    <li role="presentation" class="pot-small-img">
                                        <a href="#img-tab-3" role="tab" data-toggle="tab">
                                            <img src="images/product-2/sm-img-3/2.jpg" alt="small-image">
                                        </a>
                                    </li>
                                </ul> -->
                                <!-- End Small images -->
                            </div>
                        </div>
                        <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
                            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                                <div class="ht__product__dtl">
                                    <h2><?php echo $row_chitiet['tensanpham'] ?></h2>
                                    <h6>Mã sản phẩm: <span><?php echo $row_chitiet['masanpham'] ?></span></h6>
                                    <ul  class="pro__prize">
                                        <li class="old__prize"><?php echo number_format($row_chitiet['gia'],0,',','.').'vnđ' ?></li>
                                    </ul>
                                    <p class="pro__info"><?php echo $row_chitiet['mota'] ?></p>
                                    <div class="ht__pro__desc">
                                        <div class="sin__desc align--left">
                                            <p><span>Danh mục sản phẩm:</span></p>
                                            <ul class="pro__cat__list">
                                                
                                                <?php echo $row_chitiet['tendanhmuc'] ?>
                                            </ul>
                                        </div>
                                        <!-- <div class="sin__desc align--left">
                                            <p><span>Product tags:</span></p>
                                            <ul class="pro__cat__list">
                                                <li><a href="#">Fashion,</a></li>
                                                <li><a href="#">Accessories,</a></li>
                                                <li><a href="#">Women,</a></li>
                                                <li><a href="#">Men,</a></li>
                                                <li><a href="#">Kid,</a></li>
                                            </ul>
                                        </div> -->

                                        <div class="sin__desc product__share__link">
                                            <p><input class="btn btn-success" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        <?php } ?>


 
        