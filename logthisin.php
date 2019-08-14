<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | itsmain</title>
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
<?php include 'include/connect.php';?>
<?php include 'include/function.php';?>
<?php ob_start(); ?>
<?php session_start(); ?>
<div class="text-center">
<b><a href="../itsmain/" style="color:black;">Back TO Home Page</a></b>
</div>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b> ItsMain</b></a>          
        </div>
        <div class="card">
            <div class="body">
                <?php
                if(isset($_POST['login'])){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $rememberme=@$_POST['rememberme'];
                    $username=mysqli_real_escape_string($connection , $username);
                    $password=mysqli_real_escape_string($connection , $password);
                    $query="SELECT * FROM profile where user_name='{$username}'";
                    $query_run=mysqli_query($connection , $query);
                    if(!$query_run){
                        die("Query Failed".mysqli_error($connection));
                    }

                    while ($rows=mysqli_fetch_array($query_run)) {
                         $id=$rows['id'];
                         $first_name=$rows['First_Name'];
                         $last_name=$rows['Last_Name'];
                         $user_name=$rows['user_name'];
                         $email=$rows['email'];
                         $user_role=$rows['user_role'];
                         $user_password=$rows['password'];
                         $user_image=$rows['image'];
                         $user_confirm=$rows['confirm'];
                         $user_e_confirm=$rows['e_confirm'];
                         $user_e_image=$rows['image'];
                         $def_username=$rows['default_username'];
                    }
                        $password=crypt($password , @$user_password);
                    if($username == @$user_name && $password == $user_password){
                        $cookie_time=60 * 60 * 24 * 30;
                        $cookie_time_on=$cookie_time + time();
                        if(isset($rememberme)){
                            setcookie('username' , $username , $cookie_time_on);
                            // setcookie('password' , $password , $cookie_time_on);
                        }else{
                            $cookie_time_off=time() - $cookie_time;
                            setcookie('username' ,' ' , $cookie_time_off);
                            // setcookie('password' , ' ' , $cookie_time_off);
                        }
                        if($user_e_confirm == 1){
                        $_SESSION['firstname']=$first_name;
                        $_SESSION['lastname']=$last_name;
                        $_SESSION['username']=$user_name;
                        $_SESSION['email']=$email;
                        $_SESSION['password']=$user_password;
                        $_SESSION['user_role']=$user_role;
                        $_SESSION['image']=$user_image;
                        $_SESSION['e_confirm']=$user_e_confirm;
                        $_SESSION['image']=$user_e_image;
                        $_SESSION['default_username']=$def_username;
                        header('Location:advance/dashboard');
                        }else
                        {
                             // redirect('logthisin');
                            // exit();
                            echo '<div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color:white;">&times;</a>
                              <strong>Email Not Verify ! Please Verify Your Email</strong>
                            </div>';
                        }
                    }else{
                     echo '<div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color:white;">&times;</a>
                              <strong>Incroccet Username Or Password!</strong>
                            </div>';
                    }
                    }
                ?>
<form id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div style="text-align:center;color: green;">
                        <?php 
                        if(isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);}
                        ?>  
                        <?php 
                        if(isset($_SESSION['reset'])){
                            echo $_SESSION['reset'];
                            unset($_SESSION['reset']);}
                        ?>     
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="username" value="<?php if(isset($_COOKIE['username'])){
                                echo $_COOKIE['username'];
                            } ?>" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" value="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink" value="1">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="login">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="signup">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password?forget=<?php echo uniqid(true);?>">Forgot Password?</a>
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