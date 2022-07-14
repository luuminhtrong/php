<?php   
  $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky Where tbl_cart.id_khachhang=tbl_dangky.id_dangky order by tbl_cart.id_cart DESC";
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
      <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
    </td>
  </tr>
  <?php   
  } ?>

</table>

</div>

</div>


