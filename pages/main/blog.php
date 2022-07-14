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
                                  <span class="breadcrumb-item active">Blog Details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <?php  
    $sql_lietke_blog = "SELECT * FROM tbl_tintuc WHERE id_tintuc='$_GET[id]' LIMIT 1 ";
    $query_lietke_blog = mysqli_query($mysqli,$sql_lietke_blog);

 ?>
        <!-- End Bradcaump area -->
        <!-- Start Blog Details Area -->
        <section class="htc__blog__details bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12">

                        <?php   
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_lietke_blog)) {
                                $i++;
                            
                        ?>
                        <div class="htc__blog__details__wrap">
                            <div class="bl__dtl">
                                <?php   echo $row['content']; ?>
                            </div>
                        </div>

                    <?php } ?>
                    </div>  
                </div>
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
        </div>
        <!-- End Offset Wrapper -->