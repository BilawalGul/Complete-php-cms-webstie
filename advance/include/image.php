<?php
    if(isset($_POST['upd_image'])){

        $name=$_FILES['image']['name'];
        $tampName=$_FILES['image']['tmp_name'];
        $size=$_FILES['image']['size'];
        $type=$_FILES['image']['type'];
        $imageFileType = strtolower(pathinfo($name,PATHINFO_EXTENSION));
        if($size > 2000000){
            echo 'Image size must me 2MB or Less';
        }elseif($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType!== "jpeg"){
            echo  'Image Must be jpg , jpeg or png';
        }else{
            move_uploaded_file($tampName, "../images/".$name);
            $_SESSION['image'] = $name;
            $def_username=$_SESSION['default_username'];
            $query="UPDATE profile SET image='$name'  WHERE default_username='$def_username'";
            $query_run=mysqli_query($connection , $query);
            if(!$query_run){
                die("QUERY FAILED". mysqli_error($connection));
            }else{
                header("Location:editprofile");
            }
        }  
    }
?>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                	<h4>Update Your Image</h4>
                	<form action="" method="POST" enctype="multipart/form-data">
                		<div class="form-group">
            			 <label>Image</label>
                		 <input type="file" class="form-control" name="image" >
                		</div>
                		<div class="form-group">
                		 <button class="btn btn-danger" type="submit" name="upd_image">Update Image</button>
                		</div>
                		
                	</form>
                </div>
				