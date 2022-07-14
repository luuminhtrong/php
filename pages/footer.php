<footer id="htc__footer">
    <div class="footer__container bg__cat--1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer">
                        <h2 class="title__line--2">Về chúng tôi</h2>
                        <div class="ft__details">
                            <p>CÔNG TY TNHH XUẤT NHẬP KHẨU TL11</p>
                            <p>Địa chỉ: Thành phố Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>

                <?php  
                $sql_lietke_danhmucsanpham = "SELECT * FROM tbl_danhmucsanpham ";
                $query_lietke_danhmucsanpham = mysqli_query($mysqli,$sql_lietke_danhmucsanpham);?>
                <div class="col-md-3 col-sm-6 col-xs-12 xmt-40">
                    <div class="footer">
                        <h2 class="title__line--2">Danh mục sản phẩm</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <?php $i = 0;
                                while ($row = mysqli_fetch_array($query_lietke_danhmucsanpham)) 
                                    {$i++;?>
                                        <li>
                                            <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']  ?>"><?php   echo $row['tendanhmuc']; ?>
                                                
                                            </a>
                                        </li> 
                                        <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                    <div class="footer">
                        <h2 class="title__line--2">account</h2>
                        <div class="ft__inner">
                            <ul class="ft__list">
                                <li><a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                                <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                                <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
                                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="htc__copyright bg__cat--5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright__inner">
                        <p>Copyright© Trọng Lưu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>