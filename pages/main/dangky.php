<?php
    if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
    if($sql_dangky){
      $_SESSION['dangky'] = $tenkhachhang;
      $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
      header('location:index.php?quanly=index');
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
          <h3 class="heading">????ng k??</h3>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="fullname" class="form-label">T??n ?????y ?????</label>
            <input  name="hovaten" type="text" placeholder="VD: Nguy???n V??n A" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input  name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">??i???n tho???i</label>
            <input  name="dienthoai" type="text" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">?????a ch???</label>
            <input  name="diachi" type="text" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="password" class="form-label">M???t kh???u</label>
            <input   name="matkhau" type="password" placeholder="Nh???p m???t kh???u" class="form-control">
            <span class="form-message"></span>
          </div>
          <button  class="form-submit" type="submit" name="dangky">????ng k??</button>
          <br>
          <a href="index.php?quanly=dangnhap">????ng nh???p n???u c?? t??i kho???n</a>
        </form>
  </div>
<div class="offset__wrapper">
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
</div>