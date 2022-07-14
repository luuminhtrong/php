
<?php
	$code = $_GET['code'];
  $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham Where tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham and tbl_cart_details.code_cart='".$code."' order by tbl_cart_details.id_cart_details DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

 ?>
 <div class="cart-main-area ptb--100 bg__white">
  <div class="container">
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>
   </thead>
  
   <?php  
      $i = 0;

      $tongtien = 0;
      while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
         $thanhtien = $row['gia']*$row['soluongmua'];
        $tongtien = $row['gia']*$row['soluongmua'];
      
    ?>
  <tr>
    <td><?php   echo $i ?></td>
    <td><?php   echo $row['code_cart']; ?></td>
    <td><?php   echo $row['tensanpham']; ?></td>
    <td><?php   echo $row['soluongmua']; ?></td>
    <td><?php echo number_format($row['gia'],0,',','.').'vnđ' ?></td>
    <td><?php   echo number_format($thanhtien,0,',','.').'vnđ'; ?></td>
  </tr>
  <?php   
  } ?>
  <tr>
  	<td colspan="6"><p> Tổng tiền: <?php  echo number_format($tongtien,0,',','.').'vnđ' ?></p>
  	</td>
  </tr>

</table>

</div>

</div>
</div>
</div>

