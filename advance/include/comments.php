<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Exportable table - ItsMain (<b>Comment Page</b>)
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>comment</th>
                                            <th>Post</th>
                                            <th>status</th>
                                            <th>date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
                $def_username=$_SESSION['default_username'];
                $query="SELECT comment.id ,comment.name , comment.post_url , comment.status , comment.text_cm , comment.date_time ,post.author, post.url FROM comment LEFT JOIN post ON comment.post_url=post.url WHERE post.author='$def_username'";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                    $id=$run['id'];
                    $name=$run['name'];
                    $post=$run['post_url'];
                    $status=$run['status'];
                    $comment=$run['text_cm'];
                    $date_time=$run['date_time'];
                               

            ?> 


                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $name;?></td>
                                            <td><?php echo $comment;?></td>
                                            <td><a href="../post?/=<?php echo $post;?>" target="_blank"><?php echo $post;?></a></td>
                                            <td><?php echo $status;?></td>
                                            <td><?php echo $date_time;?></td>
                                            
                                        </tr>
                                    <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>