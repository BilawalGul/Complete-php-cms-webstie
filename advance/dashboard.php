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
    

<!-- NAV TAGE  start from here  -->
    <!-- Top Bar -->
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
<!-- main section -->
    <section class="content">
        











          <div class="container-fluid">
            <a class="btn btn-info" href="addyourpost" style="height: 40px;line-height: 25px;margin-bottom: 5px;font-size: 19px;background:blue !important;">ADD YOUR POST</a>
            <div class="row clearfix">
              <div class="block-header">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;bottom: 5px;position: relative;">
                    <a href="dashboard">DASHBOARD</a>
                  </h2>
                </div>
              </div>
              <div class="block-header">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;position:relative; bottom: 20px;">
                    <a href="profile">PROFILE</a>
                  </h2>
                </div>
              </div>
              <div class="block-header">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;position:relative; bottom: 20px;">
                    <a href="keywords">KEYWORDS</a>
                  </h2>
                </div>
              </div>
              <div class="block-header">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;position: relative; bottom: 20px;">
                    <a href="rules">RULES</a>
                  </h2>
                </div>
              </div>
            </div>

            <!-- Widgets -->
            
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">All POST</div>
                            <?php
                            $def_username=$_SESSION['default_username'];
                            $query="SELECT * FROM post Where author='$def_username'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>

                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    <a href="dashboard?source=all_post" class="btn btn-success" style="margin-bottom:20px;">Click to Show All Posts</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Publish POSTs</div>
                            <?php
                            $def_username=$_SESSION['default_username'];
                            $query="SELECT * FROM post WHERE author='$def_username' AND status='publish'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>

                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    <a href="dashboard?source=publish_post" class="btn btn-info" style="margin-bottom:20px;">Click to Show Publish Posts</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Draft POSTs</div>
                            <?php
                            $def_username=$_SESSION['default_username'];
                            $query="SELECT * FROM post WHERE author='$def_username' AND status='draft'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>

                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>

                    </div>
                    <a href="dashboard?source=drafts_post" class="btn btn-success" style="margin-bottom:20px;">Click to Show Drafts Posts</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Comments</div>
                            <?php
                            $def_username=$_SESSION['default_username'];
                            $query="SELECT comment.id ,comment.name , comment.post_url , comment.status , comment.text_cm , comment.date_time ,post.author, post.url FROM comment LEFT JOIN post ON comment.post_url=post.url WHERE post.author='$def_username'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    <a href="dashboard?source=comments" class="btn btn-danger" style="margin-bottom:20px;">Click to Show All Comments</a>
                </div>
            </div>
            <!-- second line widgets -->
           
            <?php
            if(isset($_GET['source'])){
              $source=$_GET['source'];
            }else{
            $source='';
            }
            switch ($source) {
              case 'all_post':
                include 'include/all_post.php';
                break;

              case 'publish_post':
                include 'include/publish_post.php';
                break;

              case 'drafts_post':
                include 'include/drafts_post.php';
                break;


              case 'comments':
                include 'include/comments.php';
                break;
              
              default:
                include 'include/cpu.php';
                break;
            }
            ?>
           
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            
            <!-- #END# CPU Usage -->
            <!-- #END# NoN Unique Visitor Counter -->
            </div>

            



    </section>
<!-- bottom link -->
    <?php include 'include/bottomlink.php';?>
</script>
</body>

</html>
