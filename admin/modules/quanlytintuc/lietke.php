<?php 	
    if(isset($_GET['trang'])){
    $page = $_GET['trang'];
  }else{
    $page = '';
  }if($page == ''|| $page == 1){
    $begin = 0;
  }else{
    $begin = ($page*3)-3;
  } 
	$sql_lietke_blog = "SELECT * FROM tbl_tintuc ORDER BY id_tintuc ASC LIMIT $begin,3";
	$query_lietke_blog = mysqli_query($mysqli,$sql_lietke_blog);

 ?>
<div class="card-header py-3">
            <button type="button" class="btn btn-success">
                <a style="text-decoration: none;" href="index.php?action=quanlytintuc&query=them">Thêm tin tức mới</a>
            </button>
        </div>
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>Tin tức</th>
      <th>Mô tả</th>
      <th>Content</th>
      <th>Ngày</th>
      <th>Hình ảnh</th>

    </tr>
  </thead>
   <?php 	
   		$i = 0;
   		while ($row = mysqli_fetch_array($query_lietke_blog)) {
   			$i++;
   		
    ?>
  <tr>
  	<td><?php 	echo $i ?></td>
    <td><?php   echo $row['tin']; ?></td>
    <td><?php   echo $row['mota']; ?></td>
    <td
    style="overflow: hidden;
    display: block;
    display: -webkit-box;
    line-height: 35px;
    height: 180px;
    width: 500px;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 4;
    text-overflow: ellipsis;"><?php   echo $row['content']; ?></td>
    <td><?php 	echo $row['ngay']; ?></td>
    <td><img src="modules/quanlytintuc/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt=""></td>
    <td>
    	<a href="modules/quanlytintuc/xuly.php?idtintuc=<?php echo $row['id_tintuc'] ?>">Xóa</a> | <a href="?action=quanlytintuc&query=sua&idtintuc=<?php echo $row['id_tintuc'] ?>">Sửa</a>
    </td>
    
  </tr>
  <?php 	
  } ?>
</table>
<div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
      <?php 
        $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_tintuc");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count/3);
       ?>
      <ul class="pagination">

        <?php 
        for ($i=1; $i <=$trang ; $i++) { 
          ?>
           <li class="<?php if($i==$page) {echo 'paginate_button page-item';}else{echo '';} ?> active"><a class="page-link" href="index.php?action=quanlytintuc&query=lietke&trang=<?php echo $i ?>"><?php echo$i ?></a></li>
        <?php }
         ?>
        <!-- <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li> -->
      </ul>
    </div>
  </div>
  </div>

</div>
