
<?php
    if(isset($_POST['update_website'])){
        $weblink=$_POST['weblink'];
        $webname=$_POST['webname'];
        if(empty($weblink) || empty($webname)){
            echo'<b style="color:red;">Fileds Are Empty Sorry</b>';
        }else{
        $def_username=$_SESSION['default_username'];
        $query="UPDATE profile SET website_link='$weblink' , website_name='$webname' WHERE default_username='$def_username'";
        $query_run=mysqli_query($connection , $query);
        if(!$query_run){
            die("QUERY FAILED". mysqli_error($connection));
        }else{
            echo '<b style="color:green;">Successfully Update</b>';
        }
    }
    }
?>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <?php
        $def_username=$_SESSION['default_username'];
        $query="SELECT * FROM profile where default_username='$def_username'";
        $query_run=mysqli_query($connection ,$query);
        $row=mysqli_fetch_array($query_run);
        $weblink=$row['website_link'];
        $webname=$row['website_name'];

    ?>
                	<h4>Update Your Website</h4>
                    
                	<form action="" method="POST">
                		<div class="form-group">
            			 <label>Wbsite Link</label>
                		 <input type="text" class="form-control" name="weblink" placeholder="website link (https://www.example.com)" value="<?php echo $weblink;?>" requried>
                		</div>
                		<div class="form-group">
                		 <label>Website Name</label>
                		 <input type="text" class="form-control" name="webname" placeholder="website Name (www.example.com)" value="<?php echo $webname;?>" requried>
                		</div>
                		<div class="form-group">
                		 <button class="btn btn-danger" type="submit" name="update_website">Update_Website</button>
                		</div>
                		
                	</form>
                   
                </div>