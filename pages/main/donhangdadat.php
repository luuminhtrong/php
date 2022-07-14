<div class="cart-main-area ptb--100 bg__white">
	<div class="container">
	                <!-- Responsive Arrow Progress Bar -->
	              <div class="arrow-steps clearfix">
	               <div class="step done "> <span> <a href="giohang.html" >Giỏ hàng</a></span> </div>
	                <div class="step done"> <span><a href="vanchuyen.html" >Vận chuyển</a></span> </div>
	                <div class="step done"> <span><a href="thongtinthanhtoan.html" >Thanh toán</a><span> </div>
	                <div class="step current"> <span><a href="donhangdadat.html" >Lịch sử đơn hàng</a><span> </div>
	              </div>

<?php   
	$id_khachhang = $_SESSION['id_khachhang'];
  $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky Where tbl_cart.id_khachhang=tbl_dangky.id_dangky and tbl_cart.id_khachhang='$id_khachhang' order by tbl_cart.id_cart DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

 ?>
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Hình thức mua hàng</th>
        <th></th>

      </tr>
   </thead>
  
   <?php  
      $i = 0;
      while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
      
    ?>
  <tr>
    <td><?php   echo $i ?></td>
    <td><?php   echo $row['code_cart']; ?></td>
    <td><?php   echo $row['tenkhachhang']; ?></td>
    <td><?php   echo $row['diachi']; ?></td>
    <td><?php   echo $row['email']; ?></td>
    <td><?php   echo $row['dienthoai']; ?></td>
    <td>
      <?php 
        if($row['cart_status'] == 1) {
          echo '<a href="modules/quanlydonhang/xuly.php?&code='.$row['code_cart'].'">Đơn hàng mới</a>';
        }else {
          echo '<p>Đã xem</p>';
        }
       ?>
    </td>
    <td><?php   echo $row['cart_payment']; ?></td>

    <td>
      <a href="index.php?quanly=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
    </td>
  </tr>
  <?php   
  } ?>

</table>

</div>

</div>



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