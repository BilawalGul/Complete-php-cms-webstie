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
            <div class="row clearfix">
              <div class="block-header text-center">
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
            </div>

            <!-- Widgets -->
            <hr id="hr">
            <div class="row clearfix" id="update_buttons">
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <a href="editprofile?main=reset">
                        <button class="btn btn-danger">Reset Password</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <a href="editprofile?main=name">
                        <button class="btn btn-danger">Update Name</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <a href="editprofile?main=social">
                        <button class="btn btn-danger">update_social_media</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <a href="editprofile?main=website">
                        <button class="btn btn-danger">update website</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <a href="editprofile?main=description">
                        <button class="btn btn-danger">Update Description</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    <a href="editprofile?main=dob">
                        <button class="btn btn-danger">Update Date of Birth</button>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                   <a href="editprofile?main=image">
                        <button class="btn btn-danger">Update Image</button>
                    </a> 
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                   <a href="editprofile?main=skill">
                        <button class="btn btn-danger">Update Skill</button>
                    </a> 
                </div>
            </div>


            <div class="row clearfix">
                <!-- reset password -->
                <!-- social -->
                <!-- name -->
                
                <?php
                    if(isset($_GET['main'])){
                        $main=$_GET['main'];
                    }else{
                        $main='';
                    }
                    switch ($main) {
                        case 'reset':
                            include 'include/reset.php';
                            break;
                        case 'name':
                            include 'include/name.php';
                            break;
                        case 'social':
                            include 'include/social.php';
                            break;
                    }
                ?>

            </div>
            <hr>
            <div class="row clearfix">
                
                <?php
                    if(isset($_GET['main'])){
                        $main=$_GET['main'];
                    }else{
                        $main='';
                    }
                    switch ($main) {
                        case 'website':
                            include 'include/website.php';
                            break;
                        case 'dob':
                            include 'include/dob.php';
                            break;
                        case 'description':
                            include 'include/description.php';
                            break;
                        case 'image':
                            include 'include/image.php';
                            break;
                        case 'skill':
                            include 'include/skill.php';
                            break;
                    }
                ?>
                
                
                
            </div>
            <!-- second line widgets -->
            
           
            
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
