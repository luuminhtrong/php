     <?php 
        include('../../admin/config/config.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(isset($_POST['themlienhe'])){
        $sql_them = "INSERT INTO tbl_lienhe(name,email,subject,message) VALUE('".$name."','".$email."','".$subject."','".$message."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?quanly=lienhe');
      ?> 