<?php
    function redirect($location= NULL){
        global $connection;
        if($location !==NULL){
            header('Location:'.$location.'');
        }
    }

?>
<?php

function Queryconfirm($query){
global $connection;
if(!$query){
	die('Query Failed '. mysqli_error($connection));
}
}

?>
 <?php

function user_exist($username){
global $connection;
$query = "SELECT user_name FROM profile where user_name='{$username}'";
$query_run=mysqli_query($connection , $query);
if(mysqli_num_rows($query_run)>0){
	return false;
}else{
	return true;
}

}
?>
<?php

function email_exist($email){
global $connection;

$query = "SELECT email FROM profile where email='{$email}'";
$query_run=mysqli_query($connection , $query);
if(mysqli_num_rows($query_run)>0){
	return false;
}else{
	return true;
}

}
?>
<!-- this fuction for the request for post -->
<?php

function ifthismethod($method=null){
    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){
        return  true;
    }else{
        return false;
    }
}

?>
<!-- this function is for the check logg in -->
<?php 

    function isloggedin(){
        if(isset($_SESSION['user_role'])){
            return true;
        }
            return false;
        
    }

?>
<!-- for like ifloggedin -->
<?php
    function loggedinid(){
        global $connection;
        if(isloggedin()){
            $session=$_SESSION['username'];
            $query ="SELECT * FROM profile WHERE user_name='$session'";
            $query_run=mysqli_query($connection , $query);
            Queryconfirm($query_run);
            $row=mysqli_fetch_array($query_run);
            if(mysqli_num_rows($query_run)>0){
            $userid=$row['id'];
            return $userid;
            }else{
                echo '<h1>LOg in please then like </h1>';
            }
        }
        else{
            return false;
        }

    }
?>
<!-- user liked this post -->
<?php 

    function userlikedthispost($post_id=''){
        global $connection;
        $query ="SELECT * FROM likes WHERE user_id=".loggedinid()." AND post_url='{$post_id}'";
        $query_run=mysqli_query($connection , $query);
        Queryconfirm($query_run);
        if(mysqli_num_rows($query_run)>=1){
            return true;
        }else{
            return false;
        }

    }

?>
<!-- user follow post  -->
<?php 

    function followthisuser($post_id=''){
        global $connection;
        $query ="SELECT * FROM follow WHERE user_id=".loggedinid()." AND user_url='{$post_id}'";
        $query_run=mysqli_query($connection , $query);
        Queryconfirm($query_run);
        if(mysqli_num_rows($query_run)>=1){
            return  true;
        }else{
            return  false;
        }

    }

?>

<!-- if user log in and redirect -->
<?php

    function ifuserloginandredirect($redloction=null){
        if(isloggedin()){
            return true;
        }
    }

?>
<!-- this function for the default image  -->
<?php

    function bydefaultimage($image=''){
        if(!$image){
            return 'itsmain.jpeg';
        }else{
            return $image;
        }
    }

?>
<!-- profile liked area -->
<?php

    function bydefaultprofile($wow=''){
        if(!$wow){
            return 'likeprofile.png';
        }else{
            return $wow;
        }
    }

?>