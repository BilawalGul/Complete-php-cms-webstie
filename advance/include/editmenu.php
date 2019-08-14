 <div class="container-fluid">
            <!-- CKEditor -->
            <?php
                if(isset($_GET['edit'])){
                    $edit=$_GET['edit'];
               
            ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">

                        <?php 

                            if(isset($_POST['menu_submit_upd'])){
                                $tutorials=$_POST['Tutorials'];
                                $Reviews=$_POST['Reviews'];
                                $robotics=$_POST['robotics'];
                                $news=$_POST['news'];
                                $ai=$_POST['ai'];

                    $query="UPDATE menu SET tutorials='$tutorials' , reviews='$Reviews' , Robotics='$robotics' , news='$news' , artificl='$ai' where id='$edit' ";
                    $query_run=mysqli_query($connection ,$query);
                    header('Location:menu');
                    if(!$query){
                    die("QUERY FAILED". mysqli_error($connection));
                    }
                    }

                        ?>

                        <form method="POST" action="">
                            <?php
                                $query="SELECT * FROM menu where id='$edit'";
                                $query_run=mysqli_query($connection , $query);
                                while($run=mysqli_fetch_array($query_run)){
                                    $id=$run['id'];
                                    $Tutorials=$run['tutorials'];
                                    $reviews=$run['reviews'];
                                    $robotics=$run['Robotics'];
                                    $news=$run['news'];
                                    $ai=$run['artificl'];
                            ?> 
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Tutorials</b>
                                                <input type="text" name="Tutorials" class="form-control" placeholder="Tutorials" value="<?php echo $Tutorials; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Reviews</b>
                                                <input type="text" name="Reviews" class="form-control" placeholder="Reviews" value="<?php echo $reviews; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Robotics</b>
                                                <input type="text" name="robotics" class="form-control" placeholder="Robotics" value="<?php echo $robotics; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>News</b>
                                                <input type="text" name="news" class="form-control" placeholder="news" value="<?php echo $news; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>A I</b>
                                                <input type="text" name="ai" class="form-control" placeholder="A I" value="<?php echo $ai; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                <button type="submit" data-color="red" class="btn bg-red waves-effect" name="menu_submit_upd">Update Menu </button>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </form> 



                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>