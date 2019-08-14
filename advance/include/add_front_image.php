<?php 

                            if(isset($_POST['add_front'])){
                                $alt_tag=$_POST['alt_tag'];
                                date_default_timezone_set('Asia/Karachi');
                                $date_time=date('Y-m-d H:m:s');
                                $add_front_image=$_FILES['image']['name'];
                                $add_front_image_tamp=$_FILES['image']['tmp_name'];
                                move_uploaded_file($add_front_image_tamp, "../images/$add_front_image");

                    $query="INSERT INTO front_page (picture , alt_tag , date_time) VALUES ('{$add_front_image}','{$alt_tag}','{$date_time}')";
                    $query_run=mysqli_query($connection ,$query);
                    header('Location:front_image');
                    if(!$query){
                    die("QUERY FAILED". mysqli_error($connection));
                    }

                            }

                        ?>                       


                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-6" >

                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Alt tage</b>
                                                <small>Alt tag should be be define what the image mean (a blind man judge image any one translate to him)</small>
                                                <input type="text" name="alt_tag" class="form-control" placeholder="Alt_tag define what image about" />
                                            </div>
                                        </div>
            
                                        <div class="form-group">
                                            <div class="form-line" id="hash_file">
                                                <label for="upload" class="file-upload__label">upload button</label>
                                                <input type="file" name="image" class="file-upload__input" placeholder="image" /> 
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="sumbit" name="add_front" class="btn btn-danger">Add_banner</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="offset-col-lg-2"></div>
                                </div>
                            </form> 