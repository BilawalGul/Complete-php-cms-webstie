<?php include 'include/connect.php';?>
<?php include 'include/function.php';?>
<?php ob_start(); ?>
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
<body>
    

<?php
 if(!isset($_GET['username']) && !isset($_GET['confirm'])){
    header('Location:../404');
 }
?>

    <?php

    if(isset($_GET['username']) && isset($_GET['confirm']))
    {

        $username=mysqli_real_escape_string($connection , $_GET['username']);
        $confirm=mysqli_real_escape_string($connection , $_GET['confirm']);
        $query="SELECT confirm_id FROM profile where user_name='$username'";
        $query_run=mysqli_query($connection ,$query);
        $run=mysqli_fetch_array($query_run);
        $confirm_id=$run['confirm_id'];

        if($confirm == $confirm_id)
        {
            $query="UPDATE profile SET e_confirm='1' , confirm_id='0' Where user_name='$username'";
            $query_run=mysqli_query($connection , $query);
            $_SESSION['message'] = "<h5>Thanks! Your Email Verify Now Login In To Your Account</h5>";
            redirect("logthisin");

        }else
        {
            redirect('404');
            echo '
            <div class="text-center" style="margin-top:20%;">
                <h1>Invalid!!!!! COde and USername</h1>
            </div>
                ';
        }
    }

    ?>










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