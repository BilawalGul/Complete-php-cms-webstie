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
                    <a href="editprofile">Edit Profile</a>
                  </h2>
                </div>
              </div>
            </div>

            <!-- Widgets -->
            <hr id="hr">
            <div class="row clearfix text-center">
                <img src="../images/<?php
                $query="SELECT * FROM front_page ORDER by id DESC LIMIT 1";
	              $query_run=mysqli_query($connection , $query);
	              while($rows=mysqli_fetch_array($query_run)){
	                $image=$rows['picture']; 
                echo $image;}
                ?>" width="100%" height="300px;">
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
		          $follower=$row['follow'];
		          $email=$row['email'];
		          $skill=$row['skilles'];
		        ?>
                <img src="../images/<?php echo $userimage;?>" id="profile_image">
            </div>
            <hr id="hr">
            <div class="row clearfix text-center" id="main_pro">
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;bottom: 5px;position: relative;">
                    <a href="#">Follower </a>
                  </h2>
                  <b><?php echo $follower;?></b>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;bottom: 5px;position: relative;">
                    <a href="#">Email</a>
                  </h2>
                  <b><?php echo $email;?></b>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;bottom: 5px;position: relative;">
                    <a href="dashboard">Date of Birth</a>
                  </h2>
                  <b><?php echo $date_of_birth;?></b>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;bottom: 5px;position: relative;">
                    <a href="dashboard">Join Date</a>
                  </h2>
                  <b><?php echo $date_time;?></b>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;bottom: 5px;position: relative;">
                    <a href="dashboard">website</a>
                  </h2>
                  <b><?php echo $website_name;?></b>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;bottom: 5px;position: relative;">
                    <a href="dashboard">Skilles</a>
                  </h2>
                  <b><?php echo $skill;?></b>
                </div>
            </div>
            <!-- second line widgets -->
            <div class="row clearfix " id="main_pro">
            	<div class="offset-lg-3"></div>
            	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="main_pro_mar">
            		<h2 class="text-center">Your All Post</h2>
<?php 

          $username=$_SESSION['default_username'];
          $query="SELECT * FROM profile where default_username='$username'";
                        $query_run=mysqli_query($connection,$query);
                        while($rows=mysqli_fetch_array($query_run)){
                          $profile_image=$rows['image'];

                      
         $stmt=mysqli_prepare($connection , "SELECT menu , comm_count ,author ,date_time , pic , title , likes ,url FROM post WHERE author=?  ORDER BY id ASC");
         $status="publish";
         mysqli_stmt_bind_param($stmt ,'s', $username );
         mysqli_stmt_execute($stmt);
         mysqli_stmt_bind_result($stmt , $menu , $comm_count, $author ,$date_time, $pic ,$title , $likes , $url);
         if(mysqli_stmt_num_rows($stmt) >= 0){
          while (mysqli_stmt_fetch($stmt)) {
?>

        <div style="" id="main_profile" style="width: 100%;">
          <p><strong>ItsMain</strong> on <?php echo $menu; ?> - <?php echo $comm_count; ?> comments</p>
          <img src="../images/<?php echo $profile_image;?>" alt="image" class="img-fluid" id="p_img">
          <span><?php echo $author; ?>  ::</span><i id="p_date"> <?php echo $date_time; ?></i>
          <div id="post_image">
            <img src="../images/<?php echo bydefaultimage($pic); ?>" class="img-fluid" width="100%"><br>
            <b>
              <a href="../post?/=<?php echo $url; ?>">
                <?php echo $title; ?>
              </a>
            </b><br>
            <i class="material-icons" title="Login And Recommended">
              favorite 
            </i><b style="padding-top: 10px; font-size: 16px;"> <?php echo $likes;?> Recommended</b>
          </div><hr>
        </div>

      <?php }}else{
        redirect('404');
      }}?>
            	</div>
            	<div class="offset-lg-3"></div>
            </div>
           
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
