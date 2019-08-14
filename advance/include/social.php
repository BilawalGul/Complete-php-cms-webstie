<?php
    if(isset($_POST['social'])){
        $facebook=$_POST['facebook'];
        $instagram=$_POST['instagram'];
        $twitter=$_POST['twitter'];
        $def_username=$_SESSION['default_username'];
        $query="UPDATE profile SET facebook='$facebook' , twitter='$twitter' , instagram='$instagram' WHERE default_username='$def_username'";
        $query_run=mysqli_query($connection , $query);
        if(!$query_run){
            die("QUERY FAILED". mysqli_error($connection));
        }else{
            echo'<b style="color:green;">Successfully Update</b>';
        }
    }
?>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h4>Update Social Media link</h4>
                    <?php
                        $def_username=$_SESSION['default_username'];
                        $query="SELECT * FROM profile where default_username='$def_username'";
                        $query_run=mysqli_query($connection ,$query);
                        $row=mysqli_fetch_array($query_run);
                        $facebook=$row['facebook'];
                        $twitter=$row['twitter'];
                        $instagram=$row['instagram'];
                    ?>
                	<form action="" method="POST">
                		<div class="form-group">
            			 <label>Old Password</label>
                		 <input type="url" class="form-control" name="facebook" placeholder="Facebook" value="<?php echo $facebook;?>">
                		</div>
                		<div class="form-group">
                		 <label>New Password</label>
                		 <input type="url" class="form-control" name="instagram" placeholder="Instagram" value="<?php echo $twitter;?>" >
                		</div>
                		<div class="form-group">
                		 <label>Twitter</label>
                		 <input type="url" class="form-control" name="twitter" placeholder="Twitter" value="<?php echo $instagram;?>" >
                		</div>
                		<div class="form-group">
                		 <button class="btn btn-danger" type="submit" name="social">Update Social Media link</button>
                		</div>
                		
                	</form>
                </div>