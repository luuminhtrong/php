<?php 
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['matkhau']);
		$sql = "SELECT * FROM tbl_dangky where email='".$email."'  AND matkhau='".$matkhau."' LIMIT 1"  ;
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
      $_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo 'Sai mật khẩu';
		}
	}
 ?>
 <style type="text/css">
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  html {
    color: #333;
    font-size: 62.5%;
    font-family: "Open Sans", sans-serif;
  }
  .main {
    background: #f1f1f1;
    min-height: 100vh;
    display: flex;
    justify-content: center;
  }
  .form {
    width: 360px;
    min-height: 100px;
    padding: 32px 24px;
    text-align: center;
    background: #fff;
    border-radius: 2px;
    margin: 24px;
    align-self: center;
    box-shadow: 0 2px 5px 0 rgba(51, 62, 73, 0.1);
  }
  .form .heading {
    font-size: 2rem;
  }
  .form .desc {
    text-align: center;
    color: #636d77;
    font-size: 1.6rem;
    font-weight: lighter;
    line-height: 2.4rem;
    margin-top: 16px;
    font-weight: 300;
  }
  
  .form-group {
    display: flex;
    margin-bottom: 16px;
    flex-direction: column;
  }
  
  .form-label,
  .form-message {
    text-align: left;
  }
  
  .form-label {
    font-weight: 700;
    padding-bottom: 6px;
    line-height: 1.8rem;
    font-size: 1.4rem;
  }
  
  .form-control {
    height: 40px;
    padding: 8px 12px;
    border: 1px solid #b3b3b3;
    border-radius: 3px;
    outline: none;
    font-size: 1.4rem;
  }
  
  .form-control:hover {
    border-color: #1dbfaf;
  }
  
  .form-group.invalid .form-control {
    border-color: #f33a58;
  }
  
  .form-group.invalid .form-message {
    color: #f33a58;
  }
  
  .form-message {
    font-size: 1.2rem;
    line-height: 1.6rem;
    padding: 4px 0 0;
  }
  
  .form-submit {
    outline: none;
    background-color: #1dbfaf;
    margin-top: 12px;
    padding: 12px 16px;
    font-weight: 600;
    color: #fff;
    border: none;
    width: 100%;
    font-size: 14px;
    border-radius: 8px;
    cursor: pointer;
  }
  
  .form-submit:hover {
    background-color: #1ac7b6;
  }
  
  .spacer {
    margin-top: 36px;
  }

</style>

<div class="main">
        <form action="" method="POST" class="form" id="form-1">
          <h3 class="heading">Đăng nhập</h3>
          <div class="spacer"></div>
      
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input  name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
            <span class="form-message"></span>
          </div>

      
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input   name="matkhau" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <!-- <div class="form-group">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
            <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
            <span class="form-message"></span>
          </div> -->
          
          <button  class="form-submit" type="submit" name="dangnhap">Đăng nhập</button>
        </form>
  </div>

<!-- <form action="" autocomplete="off" method="POST">
			<table class="table-login" width="50%" style="margin: auto; margin-bottom: 20px;margin-top: 20px;"  border="1" style="text-align: center;border-collapse: collapse;">
				<tr>
					<td colspan="2"><h1>Đăng nhập khách hàng</h1></td>
				</tr>
				<tr>
					<td>Tài khoản</td>
					<td><input type="text" size="50" name="email" placeholder="Email..."></td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input type="password" size="50"name="password" placeholder="Mật khẩu..."></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
				</tr>
			</table>
		</form> -->

		<div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="index.php?quanly=timkiem" method="POST">
                                    <input name="tukhoa" placeholder="Search here... " type="text">
                                    <button name="timkiem" type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
           
        </div>
        <!-- End Offset Wrapper -->