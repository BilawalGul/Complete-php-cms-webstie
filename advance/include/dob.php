<?php
    if(isset($_POST['dob_button'])){
        $dob=$_POST['dob'];
        $def_username=$_SESSION['default_username'];
        $query="UPDATE profile SET date_of_birth='$dob' WHERE default_username='$def_username'";
        $query_run=mysqli_query($connection , $query);
        if(!$query_run){
            die("QUERY FAILED". mysqli_error($connection));
        }else{
            header("Location:editprofile");
        }
    }
?>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <?php
        $def_username=$_SESSION['default_username'];
        $query="SELECT * FROM profile where default_username='$def_username'";
        $query_run=mysqli_query($connection ,$query);
        $row=mysqli_fetch_array($query_run);
        $date_of_birth=$row['date_of_birth'];
    ?>
                	<h4>Update Your Date Of Birth</h4>
                	<form action="" method="POST">
                		<div class="form-group">
            			 <label>Date of Birth</label>
                		 <input type="text" class="form-control" name="dob" placeholder="(month / day / Year) (12 / 5 / 97)" value="<?php echo $date_of_birth; ?>"required>
                		</div>
                		<div class="form-group">
                		 <button class="btn btn-danger" type="submit" name="dob_button">Update DoB</button>
                		</div>
                		
                	</form>
                </div>