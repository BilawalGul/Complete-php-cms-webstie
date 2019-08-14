<!-- this is for author only author related post shown form here  -->
<?php 
   if(!is_admin($_SESSION['username'])):
?>
<div class="container-fluid">
            <div class="block-header">
                <h2>
                    All Posts - ItsMain
                </h2>
                <h3 class="text-center">
                    <a href="index.php">Back to Home</a> 
                </h3>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <?php include 'include/delete_model.php';?>
                            <h2>
                                Exportable table - ItsMain
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>menu</th>
                                            <th>author</th>
                                            <th>Url</th>
                                            <th>Googl title</th>
                                            <th>Stats</th>
                                            <th>C cont</th>
                                            <th>View</th>
                                            <th>Date</th>
                                            <th>Dlt</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
                $user=$_SESSION['username'];
                $query="SELECT * FROM post WHERE author='$user' ORDER by id DESC";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                    $id=$run['id'];
                    $title=$run['title'];
                    $image=$run['pic'];
                    $text=$run['text'];
                    $menu=$run['menu'];
                    $author=$run['author'];
                    $url=$run['url'];
                    $google_title=$run['url_title'];
                    $meta=$run['meta'];
                    $status=$run['status'];
                    $comm_count=$run['comm_count'];
                    $view=$run['view'];
                    $date=$run['date_time'];
                    $tag=$run['tags'];
                    $alt_tag=$run['alt_tag']
                

            ?> 


                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><small><a href="../post.php?/=<?php echo $run['url'];?>" target="_blank"><?php echo $title; ?></a></small></td>
                                            <td><img src="../images/<?php echo $image; ?>" style="width:50px;"></td>
                                            <td><small><?php echo $menu; ?></small></td>
                                            <td><small><?php echo $author; ?></small></td>
                                            <td><small><?php echo $url; ?></small></td>
                                            <td><small><?php echo $google_title; ?></small></td>
                                            <?php
                                            if($status=='publish'){
                                                echo 
                                                '
<td><small style="background:lightgreen;padding:5px;border-radius: 2px;">'.$status.'</small></td>
                                                ';
                                            }else{
echo 
                                                '
<td><small style="background:red;color:white;padding:5px;border-radius: 2px;">'.$status.'</small></td>
                                                ';
}

                                                ?>
                                            
                                            
                                            
                                            <td><small><?php echo $comm_count; ?></small></td>
                                            <td><small><?php echo $view; ?></small></td>
                                            <td><small><?php echo $date; ?></small></td>
                                            <!-- <td><a href="allpost.php?delete=<?php //echo $id;?>" data-toggle="modal" data-target="#myModal" ><i class="material-icons">
                                                delete
                                                </i></a></td> -->
                                                <td><a  href="allpost?delete=<?php echo $id ?>" ><i class="material-icons">
                                                delete
                                                </i></a></td>
                                            <td><a href="allpost.php?source=edit_post&edit=<?php echo $id; ?>">Edit</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <?php
                                  if(isset($_GET['delete'])){
                                  $delete=$_GET['delete'];
                                  $query="DELETE FROM post WHERE id='$delete'";
                                  $delete_query=mysqli_query($connection,$query);
                                  header("Location:allpost.php");
                                  if(!$delete_query){
                                    die("QUERY FAILED". mysqli_error($connection));
                                  }

                                  }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
<?php else: ?>
<?php endif; ?>



<!-- this is only for admin all data shown form here  -->


       <?php 
       if(is_admin($_SESSION['username'])):
       ?>
<div class="container-fluid">
            <div class="block-header">
                <h2>
                    All Posts - ItsMain
                </h2>
                <h3 class="text-center">
                    <a href="index.php">Back to Home</a> 
                </h3>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <?php include 'include/delete_model.php';?>
                            <h2>
                                Exportable table - ItsMain
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>menu</th>
                                            <th>author</th>
                                            <th>Url</th>
                                            <th>Googl title</th>
                                            <th>Stats</th>
                                            <th>C cont</th>
                                            <th>View</th>
                                            <th>likes</th>
                                            <th>Date</th>
                                            <th>Dlt</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
                $query="SELECT * FROM post  ORDER by id DESC";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                    $id=$run['id'];
                    $title=$run['title'];
                    $image=$run['pic'];
                    $text=$run['text'];
                    $menu=$run['menu'];
                    $author=$run['author'];
                    $url=$run['url'];
                    $google_title=$run['url_title'];
                    $meta=$run['meta'];
                    $status=$run['status'];
                    $comm_count=$run['comm_count'];
                    $view=$run['view'];
                    $date=$run['date_time'];
                    $tag=$run['tags'];
                    $alt_tag=$run['alt_tag'];
                    $like=$run['likes'];
                

            ?> 


                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><small><a href="../post.php?/=<?php echo $run['url'];?>" target="_blank"><?php echo $title; ?></a></small></td>
                                            <td><img src="../images/<?php echo $image; ?>" style="width:50px;"></td>
                                            <td><small><?php echo $menu; ?></small></td>
                                            <td><small><?php echo $author; ?></small></td>
                                            <td><small><?php echo $url; ?></small></td>
                                            <td><small><?php echo $google_title; ?></small></td>
                                            <?php
                                            if($status=='publish'){
                                                echo 
                                                '
<td><small style="background:lightgreen;padding:5px;border-radius: 2px;">'.$status.'</small></td>
                                                ';
                                            }else{
echo 
                                                '
<td><small style="background:red;color:white;padding:5px;border-radius: 2px;">'.$status.'</small></td>
                                                ';
}

                                                ?>
                                                                                      
                                            
                                            <td><small style="background:orange;border-radius: 10px;padding:5px;color:white;"><?php echo $comm_count; ?></small></td>
                                            <td>
                                                <a onClick="javascript: return confirm('Are you sure you want to Rest viwes to 0');" href="allpost?view=<?php echo $id; ?>">
                                                    <small style="background:red;border-radius: 10px;padding:5px;color:white;">
                                                        <?php echo $view; ?>
                                                    </small>
                                                </a>
                                            </td>
                                            <td><small style="background:lightblue;border-radius: 10px;padding:5px;"><?php echo $like; ?></small></td>
                                            <td><small><?php echo $date; ?></small></td>
                                            <!-- <td><a href="allpost.php?delete=<?php //echo $id;?>" data-toggle="modal" data-target="#myModal" ><i class="material-icons">
                                                delete
                                                </i></a></td> -->
                                            <td>
                                                <a onClick="javascript: return confirm('Are you sure you want to delete');" href="allpost?delete=<?php echo $id ;?>">
                                                    <i class="material-icons">
                                                    delete
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="allpost?source=edit_post&edit=<?php echo $id; ?>">Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <!--  REset the view form post -->
                                <?php
                                  if(isset($_GET['view'])){
                                  $delete_view=$_GET['view'];
                                  $query="UPDATE post set view='0' WHERE id='{$delete_view}'";
                                  $view_query=mysqli_query($connection,$query);
                                  header("Location:allpost");
                                  if(!$view_query){
                                    die("QUERY FAILED". mysqli_error($connection));
                                  }

                                  }
                                ?>  
                                <!-- delete the post -->
                                <?php
                                  if(isset($_GET['delete'])){
                                  $delete=$_GET['delete'];
                                  $query="DELETE FROM post WHERE id='$delete'";
                                  $delete_query=mysqli_query($connection,$query);
                                  // header("Location:allpost");
                                  if(!$delete_query){
                                    die("QUERY FAILED". mysqli_error($connection));
                                  }

                                  }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        <?php else: ?>

        <?php endif; ?>