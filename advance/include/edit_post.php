
<div class="card">
    <div class="body">
        <?php
        if(isset($_GET['edit'])){
            $edit=$_GET['edit'];
            ?>
<?php
    if(isset($_POST['addpost'])){
        $title=$_POST['title'];
        $url=str_replace(" ","-",$_POST['url']);
        $google_title=$_POST['google-title'];
        $meta=$_POST['meta'];
        $menu=$_POST['menu'];
        $status=$_POST['status'];
        $text=$_POST['text'];
        $alt_tag=$_POST['alt_tag'];
        $tags=$_POST['tags'];

        $add_post_image=$_FILES['image']['name'];
        $add_post_image_tamp=$_FILES['image']['tmp_name'];

        date_default_timezone_set('Asia/Karachi');
        $date_time=date('Y-m-d H:m:s');
        move_uploaded_file($add_post_image_tamp, "../images/$add_post_image");
        // $user=$_SESSION['username'];
        if(empty($add_post_image)){
                        $query="SELECT * FROM post where id='$edit'";
                        $query_run=mysqli_query($connection,$query);
                        while($rows=mysqli_fetch_array($query_run)){
                          $add_post_image=$rows['pic'];


                        }
                      }
        $query="UPDATE post SET title='$title' , url='$url' , url_title='$google_title' , meta='$meta' , alt_tag='$alt_tag' , pic='$add_post_image' , menu='$menu' ,text='$text' , status='$status' , tags='$tags' , date_time='$date_time' where id='$edit' ";
                $query_run=mysqli_query($connection,$query);
                if(!$query_run){
                    die("QUERY FAILED". mysqli_error($connection));
                }else{
                    echo '<div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Post update successfully <a href="allpost.php" style="color:black">Click Here to See the Post</a></strong>
                      </div>';
                }

    }


?>


                        <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <?php
                                        $query="SELECT * FROM post Where id='$edit' ORDER by id DESC";
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
                                    
                                    <div class="col-lg-10" style="margin-left:50px;margin-right:50px;">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Title</b>
                                                <small>Title (use keyword also in title)</small>
                                                <input type="text" name="title" class="form-control" placeholder="Title (use keyword also in title)" value="<?php echo $title;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>URL</b>
                                                <small>url ( Only Keyword )</small>
                                                <input type="text" name="url" class="form-control" placeholder="url ( Only Keyword )" value="<?php echo $url;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Google-title</b>
                                                <small>google-Title ( if possible first use keyowrd like (island || Ultimated Guide)</small>
                                                <input type="text" name="google-title" class="form-control" placeholder="google-Title ( if possible first use keyowrd like (island || Ultimated Guide) )"  value="<?php echo $google_title;?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>MEta DEscription</b>
                                                <small>Meta DEscription only 150 words More Not allow</small>
                                                <input type="text" name="meta" class="form-control" max="10" placeholder="Meta DEscription only 150 words More Not allow" value="<?php echo $meta;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Alt tage</b>
                                                <small>Alt tag should be keyword</small>
                                                <input type="text" name="alt_tag" class="form-control" placeholder="Alt tag should be keyword" value="<?php echo $alt_tag;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Tags</b>
                                                <small>each tag seprate with space,space ( DO this Must )</small>
                                                <input type="text" name="tags" class="form-control" placeholder="each tag seprate with space,space ( DO this Must )" value="<?php echo $tag;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Image</b>
                                                <input type="file" name="image" class="form-control" placeholder="image"  />
                                                <img src="../images/<?php echo $image;?>" width="100px">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Menu</b><br>
                                                <select name="menu">
                     <?php
                       
                              
                              $query="SELECT * FROM menu";
                              $run_query_catagories=mysqli_query($connection,$query);
                              while ($run=mysqli_fetch_array($run_query_catagories)) {
                                
                                $tutorials=$run["tutorials"];
                                $reviews=$run["reviews"];
                                $robotics=$run["Robotics"];
                                $news=$run['news'];
                                $artif=$run['artificl'];
                                  echo '
                                  <option value="'.$tutorials.'">'.$tutorials.'</option>
                                  <option value="'.$reviews.'">'.$reviews.'</option>
                                  <option value="'.$robotics.'">'.$robotics.'</option>
                                  <option value="'.$news.'">'.$news.'</option>
                                  <option value="'.$artif.'">'.$artif.'</option>
                                  
                                  ';
                                       }

                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Status</b><br>
                                                <select name="status">
        <?php 
            if(!is_admin($_SESSION['username'])):
        ?>
                        <option id="draft">draft</option>
        <?php 
            else:
        ?>

                        <option value="publish">publish</option>
                        <option value="draft">draft</option>
        <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea id="ckeditor" name="text">
                                                    <?php echo $text;?>
                                                 </textarea>
                                                 <script>
                                                    CKEDITOR.replace( 'text' );
                                                </script>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="sumbit" name="addpost" class="btn btn-danger">Update Post</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } }  ?>

                                    <div class="offset-col-lg-2"></div>
                                </div>
                            </form> 





                            
                        </div>
                    </div>