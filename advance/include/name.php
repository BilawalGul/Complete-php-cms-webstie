<?php
    if(isset($_POST['update_name'])){
        $First=$_POST['First_Name'];
        $Last=$_POST['Last_Name'];
        $def_username=$_SESSION['default_username'];
        $query="UPDATE profile SET First_Name='$First' , Last_Name='$Last' WHERE default_username='$def_username'";
        $query_run=mysqli_query($connection , $query);
        if(!$query_run){
            die("QUERY FAILED". mysqli_error($connection));
        }else{
            echo'<b style="color:green;">Successfully Update</b>';
        }
    }
?>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<h4>Update Your First And Last Name</h4>
                    <?php
                        $def_username=$_SESSION['default_username'];
                        $query="SELECT * FROM profile where default_username='$def_username'";
                        $query_run=mysqli_query($connection ,$query);
                        $row=mysqli_fetch_array($query_run);
                        $first=$row['First_Name'];
                        $last=$row['Last_Name'];
                    ?>
                    <form action="" method="POST">
                		<div class="form-group">
            			 <label>First Name</label>
                		 <input type="text" class="form-control" name="First_Name" placeholder="OldPassword" value="<?php echo $first;?>" required>
                		</div>
                		<div class="form-group">
                		 <label>Last Name</label>
                		 <input type="text" class="form-control" name="Last_Name" placeholder="NewPassword" value="<?php echo $last;?>" required>
                		</div>
                		<div class="form-group">
                		 <button class="btn btn-danger" type="submit" name="update_name">Update Name</button>
                		</div>
                	</form>
                </div>