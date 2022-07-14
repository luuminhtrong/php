<?php
include('../../config/config.php') ;

	$tendanhmuc = $_POST['tendanhmuc'];
	if(isset($_POST['themdanhmuc'])){
		$sql_them = "INSERT INTO tbl_danhmucsanpham(tendanhmuc) VALUE('".$tendanhmuc."')";
		mysqli_query($mysqli,$sql_them);
		header('Location:../../index.php?action=danhmucsanpham&query=lietke');
	}elseif (isset($_POST['suadanhmuc'])) {
		$sql_update = "UPDATE  tbl_danhmucsanpham SET tendanhmuc='".$tendanhmuc."' WHERE id_danhmuc='$_GET[iddanhmucsanpham]' ";
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=danhmucsanpham&query=lietke');
	}else{
		$id = $_GET['iddanhmucsanpham'];
		$sql_xoa = "DELETE FROM tbl_danhmucsanpham WHERE id_danhmuc='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=danhmucsanpham&query=lietke');
			}
 ?>