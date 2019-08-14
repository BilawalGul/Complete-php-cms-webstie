 <div class="container-fluid">
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">

                        <?php 

                            if(isset($_POST['user_submit'])){
                                $first_name=$_POST['first_name'];
                                $last_name=$_POST['last_name'];
                                $user_name=$_POST['user_name'];
                                $email=$_POST['email'];
                                $password=$_POST['password'];
                                $confirm=$_POST['confirm'];
                                $status=$_POST['status'];
                                $desc=$_POST['desc'];
                                $web_n=$_POST['website_n'];
                                $web_l=$_POST['website_l'];
                                $facebook=$_POST['facebook'];
                                $instagram=$_POST['instagram'];
                                $twitter=$_POST['twitter'];
                                $add_user_image=$_FILES['image']['name'];
                                $add_user_image_tamp=$_FILES['image']['tmp_name'];
                                $default_username=str_replace(' ', '-', $user_name);

                                date_default_timezone_set('Asia/Karachi');
                                $date_time=date('Y-m-d H:m:s');
                                move_uploaded_file($add_user_image_tamp, "../images/$add_user_image");
                                $query="SELECT rand_salt FROM profile";
                                $query_run=mysqli_query($connection , $query );
                                if(!$query_run){
                                    die("Query Failed: ".mysqli_error($connection));
                                }
                                $row=mysqli_fetch_array($query_run);
                                $rand_salt=$row['rand_salt'];
                                $password=crypt($password ,$rand_salt);

                    $query="INSERT INTO profile (First_Name , Last_Name , user_name , email , password , confirm , image , user_role , date_time , description , facebook , twitter , instagram ,website_link , website_name , default_username , e_confirm , confirm_id) VALUES ( '{$first_name}' , '{$last_name}' , '{$user_name}' , '{$email}' , '{$password}', '{$confirm}' ,'{$add_user_image}' , '{$status}' , '{$date_time}' , '{$desc}' , '{$facebook}' , '{$twitter}' , '{$instagram}' , '{$web_n}' , '{$web_l}' ,'{$default_username}' , '1' , '0')";
                    $query_run=mysqli_query($connection ,$query);
                    header('Location:user');
                    if(!$query){
                    die("QUERY FAILED". mysqli_error($connection));
                    }
                    }

                        ?>

                        <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>First_Name</b>
                                                <input type="text" name="first_name" class="form-control" placeholder="first_name" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Last_Name</b>
                                                <input type="text" name="last_name" class="form-control" placeholder="last_name" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>user_name</b>
                                                <input type="text" name="user_name" class="form-control" placeholder="user_name" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Email</b>
                                                <input type="text" name="email" class="form-control" placeholder="email">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Password</b>
                                                <input type="text" name="password" class="form-control" placeholder="Password" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Confirm</b>
                                                <input type="text" name="confirm" class="form-control" placeholder="Confirm" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Website link</b>
                                                <input type="text" name="website_l" class="form-control" placeholder="website_link" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Website name</b>
                                                <input type="text" name="website_n" class="form-control" placeholder="website_name" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Image</b>
                                                <input type="file" name="image" class="form-control" placeholder="image" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Description</b>
                                                <input type="text" name="desc" class="form-control" placeholder="Description" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Facebook link</b>
                                                <input type="url" name="facebook" class="form-control" placeholder="facebook" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>twitter</b>
                                                <input type="url" name="twitter" class="form-control" placeholder="twitter" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>instagram</b>
                                                <input type="url" name="instagram" class="form-control" placeholder="instagram" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Status</b>
                                                <select name="status">
                                                    <option value="author">Author</option>
                                                    <option value="admin">admin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                                <button type="submit" data-color="red" class="btn bg-red waves-effect" name="user_submit">Add user</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form> 




                        </div>
                    </div>
                </div>
            </div>
        </div>