<?php include 'include/connect.php' ?>
<?php include 'include/popup.php' ?>
<?php include 'include/function.php' ?>
<?php ob_start(); ?>

<?php 
use PHPMailer\PHPMailer\PHPMailer;

require('./classes/config.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SignUp | ItsMain</title>
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

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>ItsMain</b></a>
        </div>
        <div class="card">
            <div class="body">
                <?php

 require 'vendor/autoload.php';

                    if(isset($_POST['signup'])){
                        $username=trim(mysqli_real_escape_string($connection ,$_POST['username']));
                        $email=trim(mysqli_real_escape_string($connection ,$_POST['email']));
                        $password=trim(mysqli_real_escape_string($connection ,$_POST['password']));
                        $confirm=trim(mysqli_real_escape_string($connection ,$_POST['confirm']));
                        $secret='6LeLEm0UAAAAAG3ybWMyA9LFvtA1QvvXSZveT7C3';
                        $response=$_POST['g-recaptcha-response'];
                        $remoteip=$_SERVER['REMOTE_ADDR'];
                        $url=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip');
                        $result=json_decode($url ,TRUE);

                        if(empty($username)){
                            $error['username']='Empty User Name';
                        }
                    $query = "SELECT user_name FROM profile where user_name='{$username}'";
                    $query_run=mysqli_query($connection , $query);
                        if(mysqli_num_rows($query_run)>0){
                            echo'
                               <div class="text-center">
                            <b style="color:red;padding:5px;border:2px solid red;">
                                username not avalible!
                            </b>
                        </div>
                            ';
                        }else{
                            if(!empty($email)){
                           
                        $query = "SELECT email FROM profile where email='{$email}'";
                        $query_run=mysqli_query($connection , $query);
                        if(mysqli_num_rows($query_run)>0)
                        {
                            echo'
                               <div class="text-center">
                                    <b style="color:red;padding:5px;border:2px solid red;">
                                        Email Already register! <a href="logthisin">Click Here to login</a>
                                    </b>
                                </div>
                                ';
                        }else{ 
                                if($password !== $confirm)
                                {
                              echo'
                               <div class="text-center">
                                    <b style="color:red;padding:5px;border:2px solid red;">
                                        Password And Confirm Password Not Same 
                                    </b>
                                </div>
                                ';      
                                }else{
                                    // if($result['success'] !== 1){
                                    //     echo'
                                    //        <div class="text-center">
                                    //             <b style="color:red;padding:5px;border:2px solid red;">
                                    //                 Captcha No selected 
                                    //             </b>
                                    //         </div>
                                    //         '; 
                                    //     }else{



                        $username=$_POST['username'];
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        $confirm=$_POST['confirm'];

                        
                        

        date_default_timezone_set('Asia/Karachi');
        $date_time=date('Y-m-d H:m:s');

        $username=mysqli_real_escape_String($connection , $username);
        $email=mysqli_real_escape_String($connection , $email);
        $password=mysqli_real_escape_String($connection , $password);
        $confirm=mysqli_real_escape_String($connection , $confirm);
        

            $query="SELECT rand_salt FROM profile";
            $query_run=mysqli_query($connection , $query );
            Queryconfirm($query_run);
            
            $row=mysqli_fetch_array($query_run);
            $rand_salt=$row['rand_salt'];
            $password=crypt($password ,$rand_salt);
            $default_username=str_replace(' ', '-', $username);
            $length=100;
            $confirm_id=bin2hex(openssl_random_pseudo_bytes($length));
            $query_ins="INSERT INTO profile (user_name , email , password , confirm , user_role , date_time ,confirm_id , e_confirm , default_username) VALUES ( '{$username}' , '{$email}' , '{$password}' , '{$confirm}'  , 'author' , '{$date_time}' , '{$confirm_id}' , '0' ,  '{$default_username}')";
            $query_run_ins=mysqli_query($connection ,$query_ins);
            if(!$query_run_ins){
                die("Query Failed: ".mysqli_error($connection));
            }else{

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


                        $mail->addAddress($email , ucwords($username));
                          $mail->setFrom('itsmain@gmail.com');
                          $mail->subject='VEry Beauty full seubjke';
                          $mail->isHTML(true);
                          $mail->Body='
<div style="background:lightgreen; border:2px solid green; border-style: dashed; padding:20px; text-align:center; ">
    <h1>ItsMain</h1>
    <h2>Hy '.$username.'</h2>
    <p style="font-size:20px;"> Please Confirm Your Email by clicking the link below and login to your account </p>
    <a href="http://localhost/itsmain/confirm?username='.$username.'&confirm='.$confirm_id.'" style="background:#34e5b3; padding:15px; text-decoration:none; color:black; font-size:22px;">Confirm Your Email</a>
    <h5>Thanks!!</h5>ItsMain
</div>                          ';
                           if($mail->send()){
                                echo'<div class="alert alert-danger">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                     Please Confirm Your Email to Verify Your account </strong>
                                    </div>';
                            }else{
                              echo'<div class="alert alert-danger">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                     <strong>Problem in Creation Account Please try Again later . </strong>
                                    </div>';
                            } 
                 
                    }
// }
                                }
                             }

                    }else{
                        echo 'Empty Email Sorry';
                    }
          }  }
                        
                                      
                ?>
                <form id="sign_up" method="POST">
                    <div class="msg" style="margin-top:15px;">Register a new membership</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="User Name"  minlength="5" autocomplete="on" 
                            value="<?php echo isset($username) ? $username : '';?>" style="color:red;"required autofocus>
                            
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" autocomplete="on" value="<?php echo isset($email) ? $email : '';?>" style="color:red;" required>
                            
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6"  placeholder="Password (more than 6 with uppercase)" value="" style="color:red;" required>
                            
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" value="" style="color:red;"  required>  
                        </div>
                    </div>
                    <!-- recaptcha -->
                    <div class="g-recaptcha" data-sitekey="6LeLEm0UAAAAAF-wTViYeaFVaUuw6OQhk6JqpbVX"></div>
                    <!-- recaptcha end -->
                    <button class="trigger-btn btn btn-block btn-lg bg-pink waves-effect" type="submit" name="signup" style="margin-top: 10px;">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="logthisin">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- recaptcher -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
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