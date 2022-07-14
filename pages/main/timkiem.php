<?php 
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmucsanpham where tbl_sanpham.id_danhmuc= tbl_danhmucsanpham.id_danhmuc and tbl_sanpham.tensanpham like '%".$tukhoa."%'" ;
    $query_pro = mysqli_query($mysqli,$sql_pro);
 ?>
<div class="offset__wrapper">
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
</div>
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Tìm kiếm :<?php echo $_POST['tukhoa']; ?></h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                	<?php 
							while($row = mysqli_fetch_array($query_pro)) {
						 ?>
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
                                <h4><a href="product-details.html"><?php echo $row['tensanpham'] ?></a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize"><?php echo $row['gia'] ?></li>
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