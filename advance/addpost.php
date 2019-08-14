<?php include 'include/toplink.php';?>
<?php
if(!is_admin($_SESSION['username'])){
    header('Location:dashboard');
}
?>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    

        <!-- NAV TAGE  start from here  -->

            <?php include 'include/nav.php'; ?>



    <!-- #Top Bar -->
    <section>
         <!-- LEFT SLIDER START FROM HERE -->
        <?php include 'include/leftslider.php';?>




        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- CKEditor -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
<?php
    if(isset($_POST['addpost'])){
        $title=htmlspecialchars($_POST['title']);
        $url=str_replace(" ","-",$_POST['url']);
        $google_title=htmlspecialchars($_POST['google-title']);
        $meta=htmlspecialchars($_POST['meta']);
        $menu=$_POST['menu'];
        $status=htmlspecialchars($_POST['status']);
        $text=htmlspecialchars($_POST['text']);
        $alt_tag=htmlspecialchars($_POST['alt_tag']);
        $tags=htmlspecialchars($_POST['tags']);

        $add_post_image=$_FILES['image']['name'];
        $add_post_image_tamp=$_FILES['image']['tmp_name'];

        date_default_timezone_set('Asia/Karachi');
        $date_time=date('Y-m-d H:m:s');
        move_uploaded_file($add_post_image_tamp, "../images/$add_post_image");
        $user=str_replace(' ' , '-', $_SESSION['username']);
        $user_image=$_SESSION['image'];
        $query="INSERT INTO post (title , url , url_title , meta , alt_tag , pic , menu ,text ,author , status , tags , date_time ,user_image) VALUES ('{$title}','{$url}','{$google_title}','{$meta}','{$alt_tag}','{$add_post_image}','{$menu}','{$text}','{$user}','{$status}', '{$tags}' ,'{$date_time}' ,'{$user_image}')";
                $query_run=mysqli_query($connection,$query);
                if(!$query_run){
                    die("QUERY FAILED". mysqli_error($connection));
                }else{
                    echo '<div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Post ADD successfully <a href="allpost.php" style="color:black">Click Here to See the Post</a></strong>
                      </div>';
                }

    }


?>


                        <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Title</b>
                                                <input type="text" name="title" class="form-control" placeholder="Title (use keyword also in title)" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>URL</b>
                                                <input type="text" name="url" class="form-control" placeholder="url ( Only Keyword )" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Google-title</b>
                                                <input type="text" name="google-title" class="form-control" placeholder="google-Title ( if possible first use keyowrd like (island || Ultimated Guide) )" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>MEta DEscription</b>
                                                <input type="text" name="meta" class="form-control" maxlength="150" placeholder="Meta DEscription only 150 words More Not allow"  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Alt tage</b>
                                                <input type="text" name="alt_tag" class="form-control" placeholder="Alt tag should be keyword" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Tags</b>
                                                <input type="text" name="tags" class="form-control" placeholder="each tag seprate with space,space ( DO this Must )" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Image</b>
                                                <input type="file" name="image" class="form-control" placeholder="image" />
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
                        <option id="draft">draft</option>
        <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea id="ckeditor" name="text">
                                                 </textarea>
                                                 <script>
                                                    CKEDITOR.replace( 'text' );
                                                </script>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="sumbit" name="addpost" class="btn btn-danger">Add Post</button>
                                            </div>
                                        </div>

                
                                    </div>
                                </div>
                            </form> 





                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CKEditor -->
            
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Ckeditor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
