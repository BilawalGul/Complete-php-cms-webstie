<?php

    if(isset($_POST['reset_password'])){
        $oldpassword=$_POST['oldpassword'];
        $newpassword=$_POST['newpassword'];
        $confirm=$_POST['Confirm'];
        $def_username=$_SESSION['default_username'];
        $query="SELECT * FROM profile Where default_username='$def_username'";
        $query_run=mysqli_query($connection , $query);
        $row=mysqli_fetch_array($query_run);
        $confirm_old=$row['confirm'];
        $rand=$row['rand_salt'];

        if($oldpassword == $confirm_old){
            if($newpassword === $confirm){
                $newpassword=crypt($newpassword , $rand);
                $query="UPDATE profile SET password='$newpassword' , confirm='$confirm' WHERE default_username='$def_username'";
                $query_run=mysqli_query($connection , $query);
                if(!$query_run){
                    die("QUERY FAILED". mysqli_error($connection));
                }else{
                    echo'<b style="color:green;">Successfully Update</b>';
                }
            }else{
                echo '<b style="color:red">Password and Confirm Password Not match</b>';
            }
        }else{
            echo '<b style="color:red">Your OLD password Is Not correct</b>';
        }
    }

?>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<h4>Reset Your Password</h4>
                	<form action="" method="POST">
                		<div class="form-group">
            			 <label>Old Password</label>
                		 <input type="password" class="form-control" name="oldpassword" placeholder="OldPassword" minlength="6" required>
                		</div>
                		<div class="form-group">
                		 <label>New Password</label>
                		 <input type="password" class="form-control" name="newpassword" placeholder="NewPassword" required>
                		</div>
                		<div class="form-group">
                		 <label>Confirm Password</label>
                		 <input type="password" class="form-control" name="Confirm" placeholder="Confirm Password" required>
                		</div>
                		<div class="form-group">
                		 <button class="btn btn-danger" type="submit" name="reset_password">Reset Password</button>
                		</div>  		
                	</form>
                </div>