<p>Thêm sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<form enctype="multipart/form-data" action="modules/quanlysp/xuly.php" method="POST">
	  <tr>	
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" style="width: 100%;border:none" name="tensanpham"></td>	
	  </tr>	
	  <tr>	
	  	<td>Mã sản phẩm</td>
	  	<td><input type="text" style="width: 100%;border:none" name="masanpham"></td>	
	  </tr>
	  <tr>	
	  	<td>Giá sản phẩm</td>
	  	<td><input type="text" style="width: 100%;border:none" name="gia"></td>	
	  </tr>
	  <tr>	
	  	<td>Mô tả sản phẩm</td>
	  	<td><textarea rows="10" style="width: 100%;border:none" id="n" name="mota" style="resize: none;" ></textarea></td>	
	  </tr>
	  <tr>	
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>	
	  </tr>
	  
	  <!-- <tr>	
	  	<td>Nội dung</td>
	  	<td><textarea rows="10" name="noidung" style="resize: none;" ></textarea></td>	
	  </tr>
	  <tr> -->
	  	<td>Danh mục sản phẩm</td>
	    <td><select name="danhmuc">
	    	<?php 
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmucsanpham ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
	    	 ?>
	    	 	<option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>

	    	 <?php 
	    	}
	    	  ?>
	    </select></td>
	  </tr>
	  <tr>
	  	<td>Tình trạng</td>
	    <td><select name="tinhtrang">
	    	<option value="1">Kích hoạt</option>
	    	<option value="0">Ẩn</option>
	    </select></td>
	  </tr>
	  <tr>
	    <td colspan="2"><input name="themsanpham" type="submit" value="Thêm sản phẩm"></td>
	  </tr>
	 </form>
</table>