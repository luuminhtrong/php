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
  $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmucsanpham WHERE tbl_sanpham.id_danhmuc=tbl_danhmucsanpham.id_danhmuc ORDER BY id_sanpham DESC LIMIT $begin,3";
  $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);

 ?>

 
<div class="card-header py-3">
            <button type="button" class="btn btn-success">
                <a style="text-decoration: none;" href="index.php?action=quanlysp&query=them">Thêm Sản phẩm mới</a>
            </button>
        </div>
<div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Mã sản phẩm</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Danh mục</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
      </tr>
   </thead>
  
  <?php   
      $i = 0;
      while ($row = mysqli_fetch_array($query_lietke_sp)) {
        $i++;
      
    ?>
  <tr>
    <td><?php   echo $row['tensanpham']; ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px" alt=""></td>
    <td><?php   echo $row['masanpham']; ?></td>
    <td><?php   echo $row['gia']; ?></td>
    <td style="overflow: hidden;
    display: block;
    display: -webkit-box;
    line-height: 35px;
    height: 180px;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 4;
    text-overflow: ellipsis;"><?php   echo $row['mota']; ?></td>
    <td><?php   echo $row['tendanhmuc']; ?></td>
    <td><?php   if($row['tinhtrang'] ==1){
              echo "kichhoat";
    }else{
              echo "ẩn";
    } ?></td>
    <td>
      <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
    
  </tr>
  <?php   
  } ?>

</table>
  <div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
      <?php 
        $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count/3);
       ?>
      <ul class="pagination">

        <?php 
        for ($i=1; $i <=$trang ; $i++) { 
          ?>
           <li class="<?php if($i==$page) {echo 'paginate_button page-item';}else{echo '';} ?> active"><a class="page-link" href="index.php?action=quanlysp&query=lietke&trang=<?php echo $i ?>"><?php echo$i ?></a></li>
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

