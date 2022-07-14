<?php 	
	$mysqli = new mysqli("localhost","root","","doantotnghiep");
	// Check connection
	if ($mysqli->connect_error) {
	  echo "Ket noi loi" . $mysqli->connect_error;
	  exit();
	}
 ?>