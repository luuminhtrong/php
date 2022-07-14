<?php 	
	$sql_lietke_slider = "SELECT * FROM tbl_slider";
	$query_lietke_slider = mysqli_query($mysqli,$sql_lietke_slider);

 ?>
<p>Slider sản phẩm</p>
<div class="card-header py-3">
      <button type="button" class="btn btn-success">
          <a style="text-decoration: none;" href="index.php?action=quanlyslider&query=them">Thêm Slider</a>
      </button>
</div>
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
  <thead>
  <tr>
  	<th>ID</th>
    <th>Tên title</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>

  </tr>
  </thead>
   <?php 	
   		$i = 0;
   		while ($row = mysqli_fetch_array($query_lietke_slider)) {
   			$i++;
   		
    ?>
  <tr>
  	<td><?php 	echo $i ?></td>
    <td><?php   echo $row['title']; ?></td>
    <td><?php 	echo $row['tensanpham']; ?></td>
    <td><img src="modules/quanlyslider/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt=""></td>
    <td>
    	<a href="modules/quanlyslider/xuly.php?idslider=<?php echo $row['id_slider'] ?>">Xóa</a> | <a href="?action=quanlyslider&query=sua&idslider=<?php echo $row['id_slider'] ?>">Sửa</a>
    </td>
    
  </tr>
  <?php 	
  } ?>
</table>