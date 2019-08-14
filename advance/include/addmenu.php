 <div class="container-fluid">
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">

                        <?php 

                            if(isset($_POST['menu_submit'])){
                                $tutorials=$_POST['Tutorials'];
                                $Reviews=$_POST['Reviews'];
                                $robotics=$_POST['robotics'];
                                $news=$_POST['news'];
                                $ai=$_POST['ai'];

                    $query="INSERT INTO menu (tutorials , reviews , Robotics , news , artificl) VALUES ('{$tutorials}','{$Reviews}','{$robotics}','{$news}','{$ai}')";
                    $query_run=mysqli_query($connection ,$query);
                    header('Location:menu');
                    if(!$query){
                    die("QUERY FAILED". mysqli_error($connection));
                    }
                    }

                        ?>

                        <form method="POST" action="">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Tutorials</b>
                                                <input type="text" name="Tutorials" class="form-control" placeholder="Tutorials" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Reviews</b>
                                                <input type="text" name="Reviews" class="form-control" placeholder="Reviews" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Robotics</b>
                                                <input type="text" name="robotics" class="form-control" placeholder="Robotics" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>News</b>
                                                <input type="text" name="news" class="form-control" placeholder="news">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>A I</b>
                                                <input type="text" name="ai" class="form-control" placeholder="A I" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            
                                                <button type="submit" data-color="red" class="btn bg-red waves-effect" name="menu_submit">Add Menu</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form> 




                        </div>
                    </div>
                </div>
            </div>
        </div>