<?php   
  $sql_lietke_danhmucsanpham = "SELECT * FROM tbl_danhmucsanpham ";
  $query_lietke_danhmucsanpham = mysqli_query($mysqli,$sql_lietke_danhmucsanpham);

 ?>
<div class="card-header py-3">
            <button type="button" class="btn btn-success">
                <a style="text-decoration: none;" href="index.php?action=danhmucsanpham&query=them">Thêm Danh Mục</a>
            </button>
        </div>
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th></th>

      </tr>
   </thead>
  
   <?php  
      $i = 0;
      while ($row = mysqli_fetch_array($query_lietke_danhmucsanpham)) {
        $i++;
      
    ?>
  <tr>
    <td><?php   echo $i ?></td>
    <td><?php   echo $row['tendanhmuc']; ?></td>

    <td>
      <a href="modules/danhmucsanpham/xuly.php?iddanhmucsanpham=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | 
      <a href="?action=danhmucsanpham&query=sua&iddanhmucsanpham=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
  <?php   
  } ?>

</table>

</div>

</div>


