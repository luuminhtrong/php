<?php 
    if(isset($_POST['themlienhe'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql_lienhe = mysqli_query($mysqli,"INSERT INTO tbl_lienhe(name,email,subject,message) VALUE('".$name."','".$email."','".$subject."','".$message."')");
    if($sql_lienhe){
        echo '<p>gửi contact thành công</p>';
      header('location:index.php?quanly=lienhe');
    }
  } 
 ?>
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container"> 
            <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">SEND A MAIL</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <form enctype="" action="" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="name" placeholder="Your Name*">
                                        <input type="email" name="email" placeholder="Mail*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="subject" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" name="themlienhe" class="fv-btn">Send MESSAGE</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </section>