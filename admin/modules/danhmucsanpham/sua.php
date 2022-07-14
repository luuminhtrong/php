<?php 	
	$sql_sua_danhmucsanpham = "SELECT * FROM tbl_danhmucsanpham WHERE id_danhmuc='$_GET[iddanhmucsanpham]' LIMIT 1";
	$query_sua_danhmucsanpham = mysqli_query($mysqli,$sql_sua_danhmucsanpham);

 ?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<form action="modules/danhmucsanpham/xuly.php?iddanhmucsanpham=<?php echo $_GET['iddanhmucsanpham'] ?>" method="POST">
		<?php 	
			while ($dong = mysqli_fetch_array($query_sua_danhmucsanpham)) {
				
			
		 ?>
	  <tr>	
	  	<td>Tên danh mục</td>
	  	<td><input type="text" style="width: 100%;border:none" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>	
	  </tr>	
	  <tr>
	    <td colspan="2"><input name="suadanhmuc" type="submit" value="Sửa danh mục sản phẩm"></td>
	  </tr>
	  <?php 	
	  } ?>
	 </form>
</table>