<?php   
  $sql_lietke_lienhe = "SELECT * FROM tbl_lienhe ";
  $query_lietke_lienhe = mysqli_query($mysqli,$sql_lietke_lienhe);

 ?>
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th></th>

      </tr>
   </thead>
  
   <?php  
      $i = 0;
      while ($row = mysqli_fetch_array($query_lietke_lienhe)) {
        $i++;
      
    ?>
  <tr>
    <td><?php   echo $i ?></td>
    <td><?php   echo $row['name']; ?></td>
    <td><?php   echo $row['email']; ?></td>
    <td><?php   echo $row['subject']; ?></td>
    <td><?php   echo $row['message']; ?></td>

    <td>
      <a href="modules/quanlylienhe/xuly.php?idlienhe=<?php echo $row['id_lienhe'] ?>">Xóa</a> | 
    </td>
  </tr>
  <?php   
  } ?>

</table>

</div>

</div>


