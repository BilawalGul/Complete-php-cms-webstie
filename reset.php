<?php ob_start(); ?>
<?php include 'include/connect.php';?>
<?php include 'include/function.php';?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reset | itsmain</title>
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
<div class="text-center">
<b><a href="../itsmain/" style="color:black;">Back TO Home Page</a></b>
</div>

<?php 

        if(!isset($_GET['email']) && !isset($_GET['token'])){
            header('Location:../itsmain/');
        }
    // $token='8d86eec25418c28ff87462e0229b500a948f37f42f8a730cba340539a3b725c9f42af58096c976dbee07809c3e2dc476552a';
    $email= 'bilawalawan747@hotmail.com';
    $stmt=mysqli_prepare($connection , "SELECT user_name ,email , token FROM profile where token=?");
    mysqli_stmt_bind_param($stmt , 's' , $_GET['token']);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt ,$username ,$email ,$token);
    mysqli_stmt_close($stmt);

     // if(isset($_GET['token']) !== $token && isset($_GET['email']) !== $email){
     //     header('Location:../itsmain/');
     // }


    if(isset($_POST['reset'])){
        $password=mysqli_real_escape_string($connection , $_POST['password']);
        $c_password=mysqli_real_escape_string($connection , $_POST['confirm-password']);
        if($password==$c_password){
            $query="SELECT rand_salt FROM profile";
            $query_run=mysqli_query($connection , $query );
            Queryconfirm($query_run);
            
            $row=mysqli_fetch_array($query_run);
            $rand_salt=$row['rand_salt'];
            $password=crypt($password ,$rand_salt);

            if($stmt=mysqli_prepare($connection , "UPDATE profile SET token='' , password='{$password}', confirm='{$c_password}' where email=? ")){
            mysqli_stmt_bind_param($stmt , 's' , $_GET['email']);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_affected_rows($stmt) >= 0 ){
                $_SESSION['reset']='<h5>Your Password is Reset Successfully Login In With New Password</h5>';
                header('Location:/itsmain/logthisin');
            }
            mysqli_stmt_close($stmt);

          }

        }else{
            echo '<h5 style="color:red;">password and confirm password not same</h5>';
        }
    }

?>


<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b> ItsMain</b></a>
            
        </div>
        <div class="card">
            <div class="body">



                <form id="sign_in" method="POST">
                    <div class="msg">
                        <h4>Reset Your Password</h4>
                        
                        <span class="input-group-addon" style="background:white;border:none;">
                            <img src="https://png.icons8.com/ios/50/000000/re-enter-pincode-filled.png">
                        </span>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="password ( 6 char )" minlength="6" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"><b>check</b></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm-password" placeholder="confirm-password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="reset">Reset</button>
                        </div>
                    </div>
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