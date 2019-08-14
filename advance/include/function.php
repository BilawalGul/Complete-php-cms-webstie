<?php

function is_admin($username)
{
	global $connection;
	$query ="SELECT user_role FROM profile WHERE user_name = '$username'";
	$query_run=mysqli_query($connection, $query);
	$row=mysqli_fetch_array($query_run);
	if($row['user_role'] == 'admin'){
		return true;
	}else{
		return false;
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