<?php
include('../../config/config.php') ;

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$mesage = $_POST['message'];
	if(isset($_POST['themlienhe'])){
		$sql_them = "INSERT INTO tbl_lienhe(tendanhmuc) VALUE('".$tendanhmuc."')";
		mysqli_query($mysqli,$sql_them);
		header('Location:../../index.php?action=lienhe&query=lietke');
	}else{
		$id = $_GET['idlienhe'];
		$sql_xoa = "DELETE FROM tbl_lienhe WHERE id_lienhe='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlylienhe&query=lietke');
			}
 ?>