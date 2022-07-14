<div class="cart-main-area ptb--100 bg__white">
	<div class="container">
                <!-- Responsive Arrow Progress Bar -->
              <div class="arrow-steps clearfix">
               <div class="step done "> <span> <a href="giohang.html" >Giỏ hàng</a></span> </div>
                <div class="step done"> <span><a href="vanchuyen.html" >Vận chuyển</a></span> </div>
                <div class="step current"> <span><a href="thongtinthanhtoan.html" >Thanh toán</a><span> </div>
                <div class="step"> <span><a href="donhangdadat.html" >Lịch sử đơn hàng</a><span> </div>
              </div>
              <form action="pages/main/xulythanhtoan.php" method="POST">
              <div class="row">	
              	
              	<?php 	
        		$id_dangky = $_SESSION['id_khachhang'];
        		$sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_shipping where id_dangky='$id_dangky' LIMIT 1");
        		$count = mysqli_num_rows($sql_get_vanchuyen);
        		if($count > 0) {
        			$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
        			$name = $row_get_vanchuyen['name'];
	          		$phone = $row_get_vanchuyen['phone'];
	          		$address = $row_get_vanchuyen['address'];
	          		$note = $row_get_vanchuyen['note'];
        		}else {
        			$name = '';
	          		$phone = '';
	          		$address = '';
	          		$note = '';
        		}
        	 ?>
              		<div class="col-md-8">
  						<h2 style="margin: 10px 0 10px 10px;">Thông tin vận chuyển giỏ hàng</h2>
  						<ul style="list-style: unset; padding: 30px; font-size: 18px">
  							<li>Họ và tên vận chuyển: <b><?php 	echo $name; ?></b></li>
  							<li>Số điện thoại: <b><?php 	echo $phone; ?></b></li>
  							<li>Địa chỉ: <b><?php 	echo $address; ?></b></li>
  							<li>Ghi chú: <b><?php 	echo $note; ?></b></li>
  						</ul>
  						<h2 style="margin-left: 10px;">Giỏ hàng</h2>
  						<div style="padding: 10px 0;" class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <!-- Responsive Arrow Progress Bar -->
              <div class="arrow-steps clearfix">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                             <th class="product-thumbnail">Hình ảnh</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php 	
                                    		if(isset($_SESSION['cart'])){
                                    			$i =0;
                                    			$tongtien = 0;				
                                    			foreach ($_SESSION['cart'] as $cart_item) {
                                    				$thanhtien =$cart_item['soluong'] * $cart_item['gia'];
                                    				$tongtien += $thanhtien;
                                    				$i++;
                                    	 ?>
                                        <tr>
                                        	<!-- <td class="product-price"><span class="amount"><?php 	echo $i; ?></span></td> -->
                                            <td class="product-thumbnail"><a href="#"><img src="admin/modules/quanlysp/uploads/<?php   echo $cart_item['hinhanh']; ?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?php 	echo $cart_item['tensanpham']; ?></a>
                                               <!--  <ul  class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul> -->
                                            </td>
                                            <td class="product-price"><span class="amount"><?php echo number_format($cart_item['gia'],0,',','.').'vnđ' ?></span></td>
                                            <td class="product-quantity">
                                                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus"></i></a>

                                                <?php  echo $cart_item['soluong'] ?>
                                                    
                                                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?> "><i class="fas fa-minus"></i></a>
                                            </td>
                                            <td class="product-subtotal"><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
                                            
                                        </tr>
                                    <?php 	}
                                    	 }else{

                                     ?>		
                                     		<td colspan="6"> 	<p>	Giỏ hàng trống</p></td>
                                     	<?php 	} ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="#">Xin chào: <?php 
                                                if(isset($_SESSION['dangky'])){
                                                    echo $_SESSION['dangky'];
                                                }
                                             ?></a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <?php   
                                            if(isset($_SESSION['cart'])){
                                                $i =0;
                                                $tongtien = 0;              
                                                foreach ($_SESSION['cart'] as $cart_item) {
                                                    $thanhtien =$cart_item['soluong'] * $cart_item['gia'];
                                                    $tongtien += $thanhtien;
                                                    $i++;
                                         ?>
                                                
                                            <?php  }
                                            ?>
                                            <a>Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></a>
                                            <?php
                                          }else   {?>
                                                <p></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
		</div>
              		</div>
              		<style type="text/css">
              				.col-md-4.hinhthucthanhtoan .form-check{
              					margin: 11px;
              				}	
              		</style>
              		<div class="col-md-4 hinhthucthanhtoan">
              			<h2 style="margin: 10px 0 10px 10px;">Phương thức thanh toán</h2>
              			<div class="form-check">
						  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tiền mặt" checked>
						  <label class="form-check-label" for="exampleRadios1">
						    Tiền mặt
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyển khoản">
						  <label class="form-check-label" for="exampleRadios2">
						    Chuyển khoản
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="payment" id="exampleRadios3" value="Momo">
						  <label class="form-check-label" for="exampleRadios3">
						    Momo
						  </label>
						</div>    <?php   
                                            if(isset($_SESSION['cart'])){
                                                $i =0;
                                                $tongtien = 0;              
                                                foreach ($_SESSION['cart'] as $cart_item) {
                                                    $thanhtien =$cart_item['soluong'] * $cart_item['gia'];
                                                    $tongtien += $thanhtien;
                                                    $i++;
                                         ?>
                                                
                                            <?php  }
                                            ?>
                                            <p>Tổng tiền cần thanh toán: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
                                            <?php
                                          }else   {?>
                                                <p></p>
                                            <?php } ?>
                           
						<input type="submit" value="Thanh toán ngay" name="checkout" class="btn btn-danger">
              		</div>
              </div>
               </form>	
	</div>
</div>

<style>
	/* jQuery Demo */







































































.clearfix:after {
  clear: both;
  content: "";
  display: block;
  height: 0;
}

/* Responsive Arrow Progress Bar */

.container {
  font-family: 'Lato', sans-serif;
}

.arrow-steps .step {
  font-size: 14px;
  text-align: center;
  color: #777;
  cursor: default;
  margin: 0 1px 0 0;
  padding: 10px 0px 10px 0px;
  width: 15%;
  float: left;
  position: relative;
  background-color: #ddd;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.arrow-steps .step a {
  color: #777;
  text-decoration: none;
}

.arrow-steps .step:after,
.arrow-steps .step:before {
  content: "";
  position: absolute;
  top: 0;
  right: -17px;
  width: 0;
  height: 0;
  border-top: 19px solid transparent;
  border-bottom: 17px solid transparent;
  border-left: 17px solid #ddd;
  z-index: 2;
}

.arrow-steps .step:before {
  right: auto;
  left: 0;
  border-left: 17px solid #fff;
  z-index: 0;
}

.arrow-steps .step:first-child:before {
  border: none;
}

.arrow-steps .step:last-child:after {
  // border: none;
}

.arrow-steps .step:first-child {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}

.arrow-steps .step:last-child {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}

.arrow-steps .step span {
  position: relative;
}

*.arrow-steps .step.done span:before {
  opacity: 1;
  content: "";
  position: absolute;
  top: -2px;
  left: -10px;
  font-size: 11px;
  line-height: 21px;
}

.arrow-steps .step.current {
  color: #fff;
  background-color: #5599e5;
}

.arrow-steps .step.current a {
  color: #fff;
  text-decoration: none;
}

.arrow-steps .step.current:after {
  border-left: 17px solid #5599e5;
}

.arrow-steps .step.done {
  color: #173352;
  background-color: #2f69aa;
}

.arrow-steps .step.done a {
  color: #173352;
  text-decoration: none;
}

.arrow-steps .step.done:after {
  border-left: 17px solid #2f69aa;
}
</style>