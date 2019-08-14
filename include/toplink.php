<?php include 'include/connect.php'; ?>
<?php session_start() ?>
<?php include 'function.php'; ?>
<?php ob_start() ?>
<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <!-- font Awsome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <!-- Link to css -->
    <link rel="stylesheet" type="text/css" href="/itsmain/css/style.css">
    <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="/itsmain/css/lux.css" />
    <!-- Metiral Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- Unique Visitor -->
      <?php
// this is for the location of ther user 
    $ip_add=@getenv('REMOTE_ADDR');
    $location=@unserialize( file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip_add"));
    $country=strtolower($location['geoplugin_countryName']);
    $city=strtolower($location['geoplugin_city']);
    $region=strtolower($location['geoplugin_regionName']);
    date_default_timezone_set('Asia/Karachi');
    $date_time=date('Y-m-d H:m:s');

      $ip=$_SERVER['REMOTE_ADDR'];
      $query="SELECT * FROM uniq_visitor WHERE ip='$ip'";
      $query_run=mysqli_query($connection , $query);
      if(mysqli_num_rows($query_run)==0){
        $insert="INSERT INTO uniq_visitor (ip , country , region , city , date_time) VALUES('$ip' , '$country' , '$region' , '$city' , '$date_time')";
        $query_run=mysqli_query($connection , $insert );
      }
      ?>
    
<!-- Visitor -->
<?php

// this is for the location of ther user 
    $ip_add=@getenv('REMOTE_ADDR');
    $location=@unserialize( file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip_add"));
    $country=strtolower($location['geoplugin_countryName']);
    $city=strtolower($location['geoplugin_city']);
    $region=strtolower($location['geoplugin_regionName']);
    date_default_timezone_set('Asia/Karachi');
    $date_time=date('Y-m-d H:m:s');


      $ip=$_SERVER['REMOTE_ADDR'];
      $query="SELECT * FROM visitor WHERE ip='$ip'";
      $query_run=mysqli_query($connection , $query);
      if(mysqli_num_rows($query_run)==0){
        $insert="INSERT INTO visitor (ip , country , region , city , date_time) VALUES('$ip' , '$country' , '$region' , '$city' , '$date_time')";
        $query_run=mysqli_query($connection , $insert );
      }else{
        $update="INSERT INTO visitor (ip , country , region , city , date_time) VALUES('$ip' , '$country' , '$region' , '$city' , '$date_time')";
        $update_query=mysqli_query($connection , $update);
      }
      ?>
    
    <!-- this is for decting the browser  -->

    <?php
      date_default_timezone_set('Asia/Karachi');
      $date_time=date('Y-m-d H:m:s');
      $browser=get_browser(null , true);
      $browser=strtolower($browser['browser']);
      $query="SELECT * FROM browser WHERE browser='$browser'";
      $query_run=mysqli_query($connection , $query);
      if(mysqli_num_rows($query_run)==0){
        $insert="INSERT INTO browser (browser , date_time) VALUES('$browser' , '$date_time')";
        $query_run=mysqli_query($connection , $insert );
      }else{
        $update="INSERT INTO browser (browser , date_time) VALUES('$browser' , '$date_time')";
        $update_query=mysqli_query($connection , $update);
      }
      ?>