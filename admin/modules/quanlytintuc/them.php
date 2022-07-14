<table border="1" width="100%" style="border-collapse: collapse;">
	<form enctype="multipart/form-data" action="modules/quanlytintuc/xuly.php" method="POST">
	  <tr>	
	  	<td>Tin tức</td>
	  	<td><input  type="text" name="tin"></td>	
	  </tr>	
	  <tr>	
	  	<td>Mô tả</td>
	  	<td><input  type="text" name="mota"></td>	
	  </tr>	
	  <tr>	
	  	<td>Content</td>
	  	<td><textarea rows="5" style="resize: none;" id="n"  name="content"></textarea></td>	
	  </tr>	
	  <!-- <tr>
	  	<td>Mô tả</td>
	    <td><input style="width: 100%" type="text" name="blog_des"></td>

	  </tr> -->
	  <!-- <tr>	 -->
	  <tr>	
	  	<td>Ngày</td>
	  	<td><input type="date" name="ngay"></td>	
	  </tr>	
	  <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>	
	  </tr>
	  <tr>
	    <td colspan="2"><input name="themtin" type="submit" value="Thêm Blog"></td>
	  </tr>
	 </form>
</table>