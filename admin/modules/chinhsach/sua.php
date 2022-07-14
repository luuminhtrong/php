<?php 	
	$sql_sua_chinhsach = "SELECT * FROM tbl_chinhsach WHERE id='$_GET[idchinhsach]' LIMIT 1";
	$query_sua_chinhsach = mysqli_query($mysqli,$sql_sua_chinhsach);

 ?>
<p>Sửa chính sách</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<form enctype="multipart/form-data" action="modules/chinhsach/xuly.php?idchinhsach=<?php echo $_GET['idchinhsach'] ?>" method="POST">
		<?php 	
			while ($dong = mysqli_fetch_array($query_sua_chinhsach)) {
				
			
		 ?>
	 
	  	<td>Nội dung</td>
	    <td><textarea rows="5" style="resize: none;" name="noidung"><?php echo $dong['noidung'] ?></textarea></td>
	  </tr>
	  
	  <tr>
	    <td colspan="2"><input name="suachinhsach" type="submit" value="Sửa Chính sách"></td>
	  </tr>
	  <?php 	
	  } ?>
	 </form>
</table>