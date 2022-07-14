<?php 	
	$sql_sua_blog = "SELECT * FROM tbl_tintuc WHERE id_tintuc='$_GET[idtintuc]' LIMIT 1";
	$query_sua_blog = mysqli_query($mysqli,$sql_sua_blog);

 ?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<form enctype="multipart/form-data" action="modules/quanlytintuc/xuly.php?idtintuc=<?php echo $_GET['idtintuc'] ?>" method="POST">
		<?php 	
			while ($dong = mysqli_fetch_array($query_sua_blog)) {
				
			
		 ?>
	  <tr>	
	  	<td>Tin tức</td>
	  	<td><input style="width: 100%" type="text" value="<?php echo $dong['tin'] ?>" name="tin"></td>	
	  </tr>
	  <tr>	
	  	<td>Content</td>
	  	<td><input style="width: 100%" type="text" value="<?php echo $dong['mota'] ?>" name="mota"></td>	
	  </tr>
	  <tr>	
	  	<td>Mô tả</td>
	  	<td><textarea rows="5" style="resize: none;" id="n" name="content"><?php echo $dong['content'] ?></textarea></td>	
	  </tr>		
	   <tr>
	  	<td>Ngày</td>
	    <td><input type="date" value="<?php echo $dong['ngay'] ?>" name="ngay"></td>
	  </tr>
	  <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlytintuc/uploads/<?php echo $dong['hinhanh'] ?>" width="150px" alt="">
	  	</td>	
	  	<!-- <td>Hình ảnh</td>
	    <td><input type="text" value="<?php //echo $dong['hinhanh'] ?>" name="hinhanh"></td> -->
	  </tr>
	  <tr>
	    <td colspan="2"><input name="suablog" type="submit" value="Sửa tin tức"></td>
	  </tr>
	  <?php 	
	  } ?>
	 </form>
</table>