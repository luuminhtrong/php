<?php
include('../../config/config.php') ;

	
	$blog_detail = $_POST['blog_detail'];
	$blog_des = $_POST['blog_des'];
	$blog_day = $_POST['blog_day'];
	

	//xu ly hinh anh
	
	if(isset($_POST['themcs'])){
		$sql_them = "INSERT INTO tbl_blog(blog_detail) VALUE('".$blog_detail."'	)";
		mysqli_query($mysqli,$sql_them);
		header('Location:../../index.php?action=chinhsach&query=lietke');
	}elseif (isset($_POST['suachinhsach'])) {
		$sql_update = "UPDATE  tbl_chinhsach SET noidung='".$noidung."' WHERE id='$_GET[idchinhsach]' ";
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=chinhsach&query=lietke');
	// }elseif (isset($_POST['suatuyen'])) {
	// 	$sql_update = "UPDATE  tbl_vcduonghangkhong SET tuyenvc='".$tuyenvanchuyen."',gia='".$gia."',lienhe='".$lienhe."',hinhanh='".$hinhanh."' WHERE id='$_GET[idvcduonghangkhong]' ";
	// 	mysqli_query($mysqli,$sql_update);
	// 	header('Location:../../index.php?action=vanchuyenduonghangkhong&query=them');
	}else{
		$id = $_GET['idchinhsach'];
		$sql_xoa = "DELETE FROM tbl_chinhsach WHERE id='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=chinhsach&query=lietke');
			}
 ?>