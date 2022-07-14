<?php 	
	$sql_lietke_chinhsach = "SELECT * FROM tbl_chinhsach ";
	$query_lietke_chinhsach = mysqli_query($mysqli,$sql_lietke_chinhsach);

 ?>
<div class="card-header py-3">
            <button type="button" class="btn btn-success">
                <a style="text-decoration: none;" href="index.php?action=chinhsach&query=them">Thêm chính sách mới</a>
            </button>
        </div>
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Nội dung</th>
        <th></th>

      </tr>
   </thead>
  
   <?php 	
   		$i = 0;
   		while ($row = mysqli_fetch_array($query_lietke_chinhsach)) {
   			$i++;
   		
    ?>
  <tr>
  	<td><?php 	echo $i ?></td>
    <td><?php 	echo $row['noidung']; ?></td>
    
    <td>
    	<a href="modules/chinhsach/xuly.php?idchinhsach=<?php echo $row['id'] ?>">Xóa</a> | <a href="?action=chinhsach&query=sua&idchinhsach=<?php echo $row['id'] ?>">Sửa</a>
    </td>
  </tr>
  <?php 	
  } ?>

</table>

</div>

</div>


