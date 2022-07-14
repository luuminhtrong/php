<?php
include('../../config/config.php') ;

	$tensanpham = $_POST['tensanpham'];
	$masp = $_POST['masanpham'];
	$giasp = $_POST['gia'];
	$mota = $_POST['mota'];
	$mausac = $_POST['mausac'];
	$kichthuoc = $_POST['kichthuoc'];
	$tinhtrang = $_POST['tinhtrang'];
	$danhmuc = $_POST['danhmuc'];

	//xu ly hinh anh
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;


	if(isset($_POST['themsanpham'])){


		$sql_them = "INSERT INTO tbl_sanpham(hinhanh,tensanpham,masanpham,gia,mota,tinhtrang,id_danhmuc) VALUE('".$hinhanh."','".$tensanpham."','".$masp."','".$giasp."','".$mota."','".$tinhtrang."','".$danhmuc."')";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		header('Location:../../index.php?action=quanlysp&query=lietke');
	}elseif (isset($_POST['suasanpham'])) {
		if($hinhanh!= ''){
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE  tbl_sanpham SET hinhanh='".$hinhanh."',tensanpham='".$tensanpham."',masanpham='".$masp."',gia='".$giasp."',mota='".$mota."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]' ";

		// xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinhanh']);
		}
	}else{
		$sql_update = "UPDATE  tbl_sanpham SET tensanpham='".$tensanpham."',masanpham='".$masp."',gia='".$giasp."',mota='".$mota."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]' ";
	}
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlysp&query=lietke');
	}else{
		$id = $_GET['idsanpham'];
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($query)) {
			unlink('uploads/'.$row['hinhanh']);
		}
		
		$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlysp&query=lietke');
			}
 ?>