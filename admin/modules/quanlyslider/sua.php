<?php 	
	$sql_sua_slider = "SELECT * FROM tbl_slider WHERE id_slider='$_GET[idslider]' LIMIT 1";
	$query_sua_slider = mysqli_query($mysqli,$sql_sua_slider);

 ?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<form enctype="multipart/form-data" action="modules/quanlyslider/xuly.php?idslider=<?php echo $_GET['idslider'] ?>" method="POST">
		<?php 	
			while ($dong = mysqli_fetch_array($query_sua_slider)) {
				
			
		 ?>
	  <tr>	
	  	<td>Title</td>
	  	<td><input type="text" style="width: 100%;border:none" value="<?php echo $dong['title'] ?>" name="title"></td>	
	  </tr>	
	  <tr>
	  	<td>Tên sản phẩm</td>
	    <td><input type="text"  style="width: 100%;border:none" value="<?php echo $dong['tensanpham'] ?>" name="tensanpham"></td>
	  </tr>
	  <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlyslider/uploads/<?php echo $dong['hinhanh'] ?>" width="150px" alt="">
	  	</td>	
	  	<!-- <td>Hình ảnh</td>
	    <td><input type="text" value="<?php //echo $dong['hinhanh'] ?>" name="hinhanh"></td> -->
	  </tr>
	  <tr>
	    <td colspan="2"><input name="suaslider" type="submit" value="Sửa danh mục sản phẩm"></td>
	  </tr>
	  <?php 	
	  } ?>
	 </form>
</table>