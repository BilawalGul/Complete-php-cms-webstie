<?php include 'include/connect.php';?>
<?php include 'include/function.php';?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 
use PHPMailer\PHPMailer\PHPMailer;

require('./classes/config.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Forget | itsmain</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="advance/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="advance/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="advance/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="advance/css/style.css" rel="stylesheet">
</head>

<body class="login-page">


<?php
 if(!isset($_GET['forget'])){
    header('Location:404');
 }
?>
<?php


    if(isset($_POST['send'])){
        $email=$_POST['email'];
        $length=50;
        $token=bin2hex(openssl_random_pseudo_bytes($length));
        $user_name='';
        $confirm_id='';

        $query = "SELECT email , user_name FROM profile WHERE email='$email'";
                  $query_run=mysqli_query($connection , $query);
                  if(mysqli_num_rows($query_run) > 0){
                    while($row=mysqli_fetch_array($query_run)){
                    $user_name=$row['user_name'];
                    
                }
                    $stmt=mysqli_prepare($connection , "UPDATE profile SET token='$token' WHERE email=?");
                    mysqli_stmt_bind_param($stmt , 's' ,$email);
                    mysqli_execute($stmt);

                  
                    include_once "PHPMailer/PHPMailer.php";
                    include_once "PHPMailer/Exception.php";
                    require 'vendor/autoload.php';
                    $mail =new PHPMailer(true);
                    

                        $mail->isSMTP();                                      
                        $mail->Host = config::SMTP_HOST;  
                        $mail->Username = config::SMTP_USER;                
                        $mail->Password = config::SMTP_PASSWORD;
                        $mail->Port = config::SMTP_PORT;                            
                        $mail->SMTPSecure = 'tls';
                        $mail->SMTPAuth = true;
                        $mail->isHTML(true);   
                        $mail->charset='UTF-8';


                        $mail->addAddress($email , ucwords($user_name));
                          $mail->setFrom('itsmain@gmail.com');
                          $mail->subject='VEry Beauty full seubjke';
                          $mail->isHTML(true);
                          $mail->Body='
<div style="background:lightgreen; border:2px solid green; border-style: dashed; padding:20px; text-align:center; ">
    <h1>ItsMain</h1>
    <h2>Hy '.$user_name.'</h2>
    <p style="font-size:20px;"> Reset your Password by clicking the link below and login to your account </p>
    <a href="http://localhost/itsmain/reset?email='.$email.'&token='.$token.'" style="background:#34e5b3; padding:15px; text-decoration:none; color:black; font-size:22px;">Confirm Your Email</a>
    <h5>Thanks!!</h5>ItsMain
</div>
                          ';

                          if($mail->send()){
                echo '<h2>Email Send Please Check your email or Spam Folder</h2>';
              }else{
                echo'<div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Problem sending Email ! Try again . </strong>
                      </div>';
              }                         
                        
                  }else{
                    echo  '<div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Sorry! Email Not Exists </strong>
                      </div>';
                  }


    }else{
        $message='';
    }
 

?>
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b> ItsMain</b></a>
            
        </div>
        <div class="card">
            <div class="body">


                

                <form id="" method="POST">
                    <?php  ?>
                    <span class="input-group-addon" style="background:white;border:none;">
                            <i class="material-icons" style="font-size: 55px;">lock</i>
                    </span>
                    <div class="msg">Forget Password</div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required autofocus>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="send">Send</button>
                        </div>
                    </div>
                    
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="signup">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="logthisin">login</a>
                        </div>
                    </div>
                    <?php ?>
                    <div class="row text-center">
                        <?php  ?>
                    </div>
                <?php  ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="advance/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="advance/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="advance/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="advance/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="advance/js/admin.js"></script>
    <script src="advance/js/pages/examples/sign-in.js"></script>
</body>

</html>