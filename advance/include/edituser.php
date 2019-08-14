 <div class="container-fluid">
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <?php
                            if(isset($_GET['edit'])){
                                $edit=$_GET['edit'];
                            
                            ?>

                        <?php 

                            if(isset($_POST['user_submit'])){
                                $first_name=$_POST['first_name'];
                                $last_name=$_POST['last_name'];
                                $user_name=$_POST['user_name'];
                                $email=$_POST['email'];
                                 $web_l=$_POST['web_l'];
                                $web_n=$_POST['web_n'];
                                $status=$_POST['status'];
                                $add_user_image=$_FILES['image']['name'];
                                $add_user_image_tamp=$_FILES['image']['tmp_name'];
                                date_default_timezone_set('Asia/Karachi');
                                $date_time=date('Y-m-d H:m:s');
                                $desc=$_POST['desc'];
                                $facebook=$_POST['facebook'];
                                $instagram=$_POST['instagram'];
                                $twitter=$_POST['twitter'];
                                $default_username=str_replace(' ', '-', $user_name);
                                move_uploaded_file($add_user_image_tamp, "../images/$add_user_image");
                                if(empty($add_user_image)){
                                    $query="SELECT * FROM profile where id='$edit'";
                                    $query_run=mysqli_query($connection,$query);
                                    while($rows=mysqli_fetch_array($query_run)){
                                      $add_user_image=$rows['image'];
                                    }
                                  }

            // $query="SELECT rand_salt FROM profile where id='$edit'";
            // $query_run=mysqli_query($connection , $query );
            // if(!$query_run){
            //     die("Query Failed: ".mysqli_error($connection));
            // }
            // $row=mysqli_fetch_array($query_run);
            // $rand_salt=$row['rand_salt'];
            // $password=crypt($password ,$rand_salt);
                    $_SESSION['username'] = $user_name;
                    $_SESSION['image'] = $add_user_image;
                    $_SESSION['username'] = $first_name;
                    $_SESSION['username'] = $last_name;
                    $query="UPDATE profile SET First_Name='$first_name' , Last_Name='$last_name' , user_name='$user_name' , email='$email' ,image='$add_user_image' , user_role='$status' , date_time='$date_time' ,description='$desc' , facebook='$facebook' , twitter='$twitter' , instagram='$instagram' ,website_link='$web_l' , website_name='$web_n' , default_username='$default_username' WHERE id='$edit'";
                    $query_run=mysqli_query($connection ,$query);
                     header('Location:user');
                    if(!$query){
                    die("QUERY FAILED". mysqli_error($connection));
                    }
                    }
                        ?>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <?php
                                $query="SELECT * FROM profile where id='$edit'";
                                $query_run=mysqli_query($connection , $query);
                                while($run=mysqli_fetch_array($query_run)){
                                    $id=$run['id'];
                                    $first_name=$run['First_Name'];
                                    $last_name=$run['Last_Name'];
                                    $user_name=$run['user_name'];
                                    $email=$run['email'];
                                    $status=$run['user_role'];
                                    $image=$run['image'];
                                    $web_name=$run['website_name'];
                                    $web_link=$run['website_link'];
                                    $description=$run['description'];
                                    $facebook=$run['facebook'];
                                    $instagram=$run['instagram'];
                                    $twitter=$run['twitter'];
                            ?> 
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>First_Name</b>
                                                <input type="text" name="first_name" class="form-control" placeholder="first_name"  value="<?php echo $first_name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Last_Name</b>
                                                <input type="text" name="last_name" class="form-control" placeholder="last_name" value="<?php echo $last_name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>user_name</b>
                                                <input type="text" name="user_name" class="form-control" placeholder="user_name" value="<?php echo $user_name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Email</b>
                                                <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        
                                       <div class="form-group">
                                            <div class="form-line">
                                                <b>website_name</b>
                                                <input type="text" name="web_n" class="form-control" placeholder="web_name" value="<?php echo $web_name; ?>" >
                                            </div>
                                        </div> 
                                         <div class="form-group">
                                            <div class="form-line">
                                                <b>website_link</b>
                                                <input type="text" name="web_l" class="form-control" placeholder="Web_link" value="<?php echo $web_link; ?>" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Image</b>
                                                <input type="file" name="image" class="form-control" placeholder="image" >
                                                <img src="../images/<?php echo $image;?>" width="100px";>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Description</b>
                                                <input type="text" name="desc" class="form-control" value="<?php echo $description; ?>" placeholder="Description" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Facebook link</b>
                                                <input type="url" name="facebook" class="form-control" value="<?php echo $facebook; ?>" placeholder="facebook" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>twitter</b>
                                                <input type="url" name="twitter" class="form-control" value="<?php echo $twitter; ?>" placeholder="twitter" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>instagram</b>
                                                <input type="url" name="instagram" class="form-control" value="<?php echo $instagram; ?>" placeholder="instagram" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Status</b>
                                                <select name="status">
                                                    <?php
                                                    if($status=='admin'){
                                                        echo '<option value="admin">admin</option>';
                                                    }else{
                                                        echo '<option value="author">author</option>
                                                        <option value="admin">admin</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                                <button type="submit" data-color="red" class="btn bg-red waves-effect" name="user_submit">Update user</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php } }?>
                            </form> 




                        </div>
                    </div>
                </div>
            </div>
        </div>