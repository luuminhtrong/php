<?php 
	include('../../config/config.php');
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];

		$sql = "UPDATE tbl_cart set cart_status=0 where code_cart='".$code_cart."'";
		$query = mysqli_query($mysqli,$sql);
		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	}
	

 ?>