<?php include 'include/toplink.php';?>
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
    <nav class="navbar"style="background:lightblue;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard">Its-Main</a>
                <a class="navbar-brand"  href="../../itsmain/" target="_obstart">Main_index_page</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <?php
                if(is_admin($_SESSION['username'])){
                  echo
                  '
                    <ul class="nav navbar-nav navbar-left">
                      <li>
                        <a href="index" style="color:black">Admin</a>
                      </li>
                    </ul>
                  ';
                }
              ?>
              
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="../logout.php" >Sign Out</a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- left slider -->
    <section style=""> 
      <aside id="leftsidebar" class="sidebar">
        <?php
        $def_username=$_SESSION['default_username'];
          $query="SELECT * FROM profile where default_username='$def_username'";
          $query_run=mysqli_query($connection , $query);
          $row=mysqli_fetch_array($query_run);
          $userimage=$row['image'];
          $username=$row['user_name'];
          $website_name=$row['website_name'];
          $website_link=$row['website_link'];
          $date_of_birth=$row['date_of_birth'];
          $date_time=$row['date_time'];
        ?>
        <div class="text-center" id="left_side">
          <img src="../images/<?php echo $userimage; ?>">
          <h2><?php echo $username;?></h2>
        </div>
        <div class="card mb-3">
          <h3 class="card-header">Website</h3>              
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="<?php echo $website_link; ?>" target="_blank">
                <i class="fa fa-globe"></i>
                  <b><?php echo $website_name;?></b>
              </a>
            </li>  
          </ul>    
        </div>
        <div class="card mb-3">
          <h3 class="card-header">Date Of Birth</h3>              
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <i class="fa fa-globe"></i>
                <b><?php echo $date_of_birth; ?></b>
            </li>  
          </ul>    
        </div>
        <div class="card mb-3">
          <h3 class="card-header">Join Date</h3>              
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <i class="fa fa-globe"></i>
                <b><?php echo $date_time;?></b>
            </li>  
          </ul>    
        </div>
      </aside>
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
        $title=$_POST['title'];
        $url=str_replace(" ","-",$_POST['url']);
        $google_title=$_POST['google-title'];
        $meta=$_POST['meta'];
        $menu=$_POST['menu'];
        $status='status';
        $text=$_POST['text'];
        $alt_tag=$_POST['alt_tag'];
        $tags=$_POST['tags'];

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
                    echo '<div class="alert alert-info" style="padding:20px;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>POST Added !! Waiting for Approvel <a href="dashboard" style="color:black">Click Here to See the Post</a></strong>
                      </div>';
                }

    }


?>


                        <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Title (use keyword in title)</b>
                                                <input type="text" name="title" class="form-control" placeholder="Title (use keyword in title)" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>URL ( Only Keyword ) </b>
                                                <input type="text" name="url" class="form-control" placeholder="url ( Only Keyword )" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Google-title ( if possible first use keyowrd like (island || Ultimated Guide)</b>
                                                <input type="text" name="google-title" class="form-control" placeholder="google-Title ( if possible first use keyowrd like (island || Ultimated Guide) )" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>MEta DEscription (Meta DEscription only 150 words More Not allow)</b>
                                                <input type="text" name="meta" class="form-control" maxlength="150" placeholder="Meta DEscription only 150 words More Not allow"  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Alt tage Alt tag should be keyword</b>
                                                <input type="text" name="alt_tag" class="form-control" placeholder="Alt tag should be keyword" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <b>Tags each tag seprate with space comma space ( , )( DO this Must )</b>
                                                <input type="text" name="tags" class="form-control" placeholder="each tag seprate with space comma space ( , )( DO this Must )" />
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
