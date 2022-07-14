<?php 	
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);

 ?>
<p>Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<?php 	
			while ($row = mysqli_fetch_array($query_sua_sp)) {
				
			
		 ?>
	<form enctype="multipart/form-data" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="POST">
		
	  <tr>	
	  	<td>Tên sản phẩm</td>
	  	<td><input style="width: 100%;border:none" type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>	
	  </tr>	
	  <tr>	
	  	<td>Mã sản phẩm</td>
	  	<td><input style="width: 100%;border:none" type="text" value="<?php echo $row['masanpham'] ?>"  name="masanpham"></td>	
	  </tr>
	  <tr>	
	  	<td>Giá sản phẩm</td>
	  	<td><input style="width: 100%;border:none" type="text" value="<?php echo $row['gia'] ?>" name="gia"></td>	
	  </tr>	
	   <tr>	
	  	<td>Mô tả</td>
	  	<td><textarea style="width: 100%;border:none" id="n" rows="10" name="mota" style="resize: none;" ><?php echo $row['mota'] ?></textarea></td>	
	  </tr> 
	  <tr>	
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt="">
	  	</td>	
	  </tr>
	  <tr>
	  	<td>Danh mục sản phẩm</td>
	    <td><select name="danhmuc">
	    	<?php 
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmucsanpham ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
	    			if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
	    	 ?>
	    	 	<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>

	    	 <?php 
	    	}else{
	    		?>
	    		<option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    	<?php
	    		}
	    	}
	    	  ?>
	    </select></td>
	  </tr>
	  <tr>
	  	<td>Tình trạng</td>
	    <td><select name="tinhtrang">
	    	<?php 
	    		if($row['tinhtrang']==1){
	    	 ?>
	    	<option value="1" selected="">Kích hoạt</option>
	    	<option value="0">Ẩn</option>
	    	<?php 
	    		}else{
	    			?>
	    	<option value="1">Kích hoạt</option>
	    	<option value="0" selected="">Ẩn</option>		
	    	<?php
	    		}
	    	 ?>
	    </select></td>
	  </tr>
	  <tr>
	    <td colspan="2"><input name="suasanpham" type="submit" value="Sửa sản phẩm"></td>
	  </tr>
	  
	 </form>
	 <?php 
	}
	  ?>
</table>