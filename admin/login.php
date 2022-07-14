<?php   
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin where username='".$taikhoan."'  AND password='".$matkhau."' LIMIT 1"  ;
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index.php");
        }else{
            echo '<script> alert("tài khoản hoặc mật khẩu không đúng")</script>';
            header("Location:login.php");
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=   ">
    <title> Đăng nhập Admin</title>
    <style type="text/css">
        body{
            background:#f2f2f2;
        }
        .wrapper-login{
            width: 20%;
            margin: 0 auto;
        }
        table.table-login{
            width:  100%;
        }
        table.table-login tr td{
            padding: 5px;
        }
    </style>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <!--  -->
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="" autocomplete="off" method="POST" class="user">
                                        <div class="form-group">
                                            <input  class="form-control form-control-user"
                                                name="username"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input  class="form-control form-control-user"
                                               name="password"  placeholder="Password">
                                        </div>
                                        <input class="btn btn-primary btn-user btn-block" type="submit" name="dangnhap" value="Đăng nhập"></td>
                                 
                                        <hr>
                                       
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
</html> 