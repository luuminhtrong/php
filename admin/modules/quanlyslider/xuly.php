<?php
include('../../config/config.php') ;

	$title = $_POST['title'];
	$tensanpham = $_POST['tensanpham'];

	//xu ly hinh anh
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
	if(isset($_POST['themslider'])){
		$sql_them = "INSERT INTO tbl_slider(title,tensanpham,hinhanh) VALUE('".$title."','".$tensanpham."','".$hinhanh."')";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		header('Location:../../index.php?action=quanlyslider&query=lietke');
	}elseif (isset($_POST['suaslider'])) {
		if($hinhanh!= ''){
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE  tbl_slider SET title='".$title."',tensanpham='".$tensanpham."',hinhanh='".$hinhanh."' WHERE id_slider='$_GET[idslider]' ";

		// xoa hinh anh cu
		$sql = "SELECT * FROM tbl_slider WHERE id_slider = '$_GET[idslider]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinhanh']);
		}
	}else{
		$sql_update = "UPDATE  tbl_slider SET title='".$title."',tensanpham='".$tensanpham."' WHERE id_slider='$_GET[idslider]' ";
	}
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlyslider&query=lietke');
	// }elseif (isset($_POST['suatuyen'])) {
	// 	$sql_update = "UPDATE  tbl_slider SET tuyenvc='".$tuyenvanchuyen."',gia='".$gia."',lienhe='".$lienhe."',hinhanh='".$hinhanh."' WHERE id='$_GET[idslider]' ";
	// 	mysqli_query($mysqli,$sql_update);
	// 	header('Location:../../index.php?action=vanchuyenduongbien&query=them');
	}else{
			$id = $_GET['idslider'];
		$sql = "SELECT * FROM tbl_slider WHERE id_slider = '$id' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinhanh']);
		}
		
		$sql_xoa = "DELETE FROM tbl_slider WHERE id_slider='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlyslider&query=lietke');
			}
 ?>