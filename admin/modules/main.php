
		<?php 
			if (isset($_GET['action']) && $_GET['query']) {
				$tam = $_GET['action'];
				$query = $_GET['query'];
			}else
			{
				$tam = '';
				$query = '';
			}
			if ($tam == 'danhmucsanpham' && $query=='lietke') {
				// include("modules/vanchuyenduongbien/them.php");
				include("modules/danhmucsanpham/lietke.php");

			}elseif ($tam == 'danhmucsanpham' && $query=='sua') {
				include("modules/danhmucsanpham/sua.php");

			}elseif ($tam == 'danhmucsanpham' && $query=='them') {
				include("modules/danhmucsanpham/them.php");
			// 	include("modules/quanlysp/lietke.php");
			}elseif ($tam == 'quanlysp' && $query=='lietke') {
				include("modules/quanlysp/lietke.php");
			}elseif ($tam == 'quanlysp' && $query=='sua') {
				include("modules/quanlysp/sua.php");

			}elseif ($tam == 'quanlysp' && $query=='them') {
				include("modules/quanlysp/them.php");
			// 	include("modules/quanlysp/lietke.php");
			}elseif ($tam == 'quanlyslider' && $query=='lietke') {
				include("modules/quanlyslider/lietke.php");
			}elseif ($tam == 'quanlyslider' && $query=='sua') {
				include("modules/quanlyslider/sua.php");

			}elseif ($tam == 'quanlyslider' && $query=='them') {
				include("modules/quanlyslider/them.php");
			// 	include("modules/quanlysp/lietke.php");
			}elseif ($tam == 'quanlytintuc' && $query=='lietke') {
				include("modules/quanlytintuc/lietke.php");
			}elseif ($tam == 'quanlytintuc' && $query=='sua') {
				include("modules/quanlytintuc/sua.php");

			}elseif ($tam == 'quanlytintuc' && $query=='them') {
				include("modules/quanlytintuc/them.php");
			// 	include("modules/quanlysp/lietke.php");
			}elseif ($tam == 'chinhsach' && $query=='lietke') {
				include("modules/chinhsach/lietke.php");
			}elseif ($tam == 'chinhsach' && $query=='sua') {
				include("modules/chinhsach/sua.php");

			}elseif ($tam == 'chinhsach' && $query=='them') {
				include("modules/chinhsach/them.php");
			// 	include("modules/quanlysp/lietke.php");
			}
			elseif ($tam == 'quanlydonhang' && $query=='lietke') {
				include("modules/quanlydonhang/lietke.php");
			// 	include("modules/quanlysp/lietke.php");
			}elseif ($tam == 'donhang' && $query=='xemdonhang') {
				include("modules/quanlydonhang/xemdonhang.php");
			// 	include("modules/quanlysp/lietke.php");
			}elseif ($tam == 'quanlylienhe' && $query=='lietke') {
				include("modules/quanlylienhe/lietke.php");
			}
			else{
				include("modules/dashboard.php");
			}

				 ?>		
