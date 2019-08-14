<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Exportable table - ItsMain (<b>All Posts</b>)
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>image</th>
                                            <th>text</th>
                                            <th>Status</th>
                                            <th>view</th>
                                            <th>comm count</th>
                                            <th>like</th>
                                            <th>author</th>
                                            <th>Date</th>
                                            <th>edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
            $def_username=$_SESSION['default_username'];
                $query="SELECT * FROM post WHERE author='$def_username'";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                    $id=$run['id'];
                    $title=$run['title'];
                    $image=$run['pic'];
                    $text=$run['text'];
                    $status=$run['status'];
                    $view=$run['view'];
                    $comm=$run['comm_count'];
                    $like=$run['likes'];
                    $author=$run['author'];
                    $date_time=$run['date_time'];
                    $url=$run['url'];
                

            ?> 


                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td><a href="../post?/=<?php echo $url;?>" target="_blank"><?php echo $title;?></a></td>
                                            <td><img src="../images/<?php echo $image;?>" width="50px;"/></td>
                                            <td><?php echo substr($text , 0 ,10);?></td>
                                            <td>
                                            <?php 
                                            if($status=='publish'){
                                                echo '<b style="background:lightgreen;padding:5px;">'.$status.'</b>';
                                            }else{
                                                echo '<b style="background:red;padding:5px;">'.$status.'</b>';
                                            }
                                            ?>
                                            <td><b style="background:purple;padding:5px;border-radius:5px;color:white"><?php echo $view;?></b></td>
                                            <td><b style="background:orange;padding:5px;border-radius:5px;color:white"><?php echo $comm;?></b></td>
                                            <td><b style="background:khaki;padding:5px;border-radius:5px;color:black"><?php echo $like;?></b></td>
                                            <td><?php echo $author;?></td>
                                            <td><?php echo $date_time;?></td>
                                            <td>edit</td>
                                        </tr>

                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>