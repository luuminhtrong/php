<?php
	include('../../config/config.php') ;
	$tin = $_POST['tin'];
	$mota = $_POST['mota'];
	$ngay = $_POST['ngay'];
	$content = $_POST['content'];

	//xu ly hinh anh
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
	if(isset($_POST['themtin'])){
		$sql_them = "INSERT INTO tbl_tintuc(tin,mota,content,ngay,hinhanh) VALUE('".$tin."','".$mota."','".$content."','".$ngay."','".$hinhanh."')";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		header('Location:../../index.php?action=quanlytintuc&query=lietke');
	}elseif (isset($_POST['suablog'])) {
		if($hinhanh!= ''){
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_tintuc SET tin='".$tin."',mota='".$mota."',content='".$content."',ngay='".$ngay."',hinhanh='".$hinhanh."' WHERE id_tintuc='$_GET[idtintuc]' ";

		// xoa hinh anh cu
		$sql = "SELECT * FROM tbl_tintuc WHERE id_tintuc = '$_GET[idtintuc]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinhanh']);
		}
	}else{
		$sql_update = "UPDATE  tbl_tintuc SET tin='".$tin."',mota='".$mota."',content='".$content."',ngay='".$ngay."' WHERE id_tintuc='$_GET[idtintuc]' ";
	}
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlytintuc&query=lietke');
	// }elseif (isset($_POST['suatuyen'])) {
	// 	$sql_update = "UPDATE  tbl_tintuc SET tuyenvc='".$tuyenvanchuyen."',gia='".$gia."',lienhe='".$lienhe."',hinhanh='".$hinhanh."' WHERE id='$_GET[idtintuc]' ";
	// 	mysqli_query($mysqli,$sql_update);
	// 	header('Location:../../index.php?action=vanchuyenduongbien&query=them');
	}else{
			$id = $_GET['idtintuc'];
		$sql = "SELECT * FROM tbl_tintuc WHERE id_tintuc = '$id' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinhanh']);
		}
		
		$sql_xoa = "DELETE FROM tbl_tintuc WHERE id_tintuc='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlytintuc&query=lietke');
			}
 ?>