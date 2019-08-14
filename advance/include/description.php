<?php
    if(isset($_POST['upd_description'])){
        $description=$_POST['text'];
        $def_username=$_SESSION['default_username'];
        $query="UPDATE profile SET description='$description' WHERE default_username='$def_username'";
        $query_run=mysqli_query($connection , $query);
        if(!$query_run){
            die("QUERY FAILED". mysqli_error($connection));
        }else{
            echo'<b style="color:green;">Successfully Update</b>';
        }
    }
?>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<h4>Update Description</h4>
                    <?php
                        $def_username=$_SESSION['default_username'];
                        $query="SELECT * FROM profile where default_username='$def_username'";
                        $query_run=mysqli_query($connection ,$query);
                        $row=mysqli_fetch_array($query_run);
                        $description=$row['description'];
                    ?>
                	<form action="" method="POST">
                		<div class="form-group">
                		 <textarea cols="50" rows="6" name="text" required><?php echo $description; ?></textarea>
                		</div>
                		<div class="form-group">
                		 <button class="btn btn-danger" type="submit" name="upd_description">Update Description</button>
                		</div>
                		
                	</form>
                </div>