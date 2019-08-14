<!DOCTYPE html>
<html>
<head>
  <?php include 'include/toplink.php';?>

<!-- this is for the follow area -->
<?php

if(isset($_POST['follow'])){
  $url=mysqli_real_escape_string(trim($connection ,$_POST['url']));
  $user_id=mysqli_real_escape_string(trim($connection ,$_POST['user_id']));

  // Select query from post
    $query="SELECT * FROM profile where default_username='$url'";
    $query_run=mysqli_query($connection , $query);
    $row=mysqli_fetch_array($query_run);
    $follow=$row['follow'];

  $stmt=("UPDATE profile SET follow=$follow+1 WHERE default_username='$url'");
  mysqli_query($connection , $stmt); 

  $stmt=$connection->prepare("INSERT INTO follow (user_id , user_url) VALUES (? , ?)");
  $stmt->bind_param('is' , $user_id , $url);
  $stmt->execute();
}

?>
<?php

// un follow

if(isset($_POST['unfollow'])){
  $url=mysqli_real_escape_string($connection ,$_POST['url']);
  $user_id=mysqli_real_escape_string($connection ,$_POST['user_id']);

  // Select query from post
    $query="SELECT * FROM profile where default_username='$url'";
    $query_run=mysqli_query($connection , $query);
    $row=mysqli_fetch_array($query_run);
    $follow=$row['follow'];

 // DELETE LIKE
     $query ="DELETE FROM follow WHERE  user_id='$user_id'";
    mysqli_query($connection , $query); 

  // Update query
    $query ="UPDATE profile SET follow=$follow-1 WHERE default_username='$url'";
    mysqli_query($connection , $query);
    exit();
}

?>

  <?php

  if(isset($_GET['/'])){
    $username=mysqli_real_escape_string($connection ,$_GET['/']);
    $query="SELECT * FROM profile WHERE default_username='$username'";
    Queryconfirm($query);
    $query_run=mysqli_query($connection , $query);
    while ($run=mysqli_fetch_array($query_run)) {
      $user_namee=$run['default_username'];
    
   echo '<title> '.ucwords($run['user_name']). ' - ItsMain</title>'; 
}
         
  ?>
</head>
<body>
  <!-- header include -->
  <?php include 'include/header.php'?>
<hr>
<div style="background:white;">
  <div calss="container">

        <div class="col-lg-12 text-center" id="top_profile">
          <a href="profile?/=<?php echo $user_namee;?>&source=posts">
            <?php
            $query = "SELECT * FROM post where author='$username'";
            $mysqli_query=mysqli_query($connection ,$query);
            $count=mysqli_num_rows($mysqli_query);
                      echo 'Articles '.$count.''; 
                      ?>
          </a>  
          <a href="profile?/=<?php echo $user_name;?>&source=comment">
          <?php
            $query = "SELECT * FROM comment where name='$username'";
            $mysqli_query=mysqli_query($connection ,$query);
            $count=mysqli_num_rows($mysqli_query);
                      echo 'Comments '.$count.''; 
                      ?> 
          </a> 
          <a href="profile?/=<?php echo $user_namee;?>&source=likes">
            <?php
            $query = "SELECT * FROM likes where author='$username'";
            $mysqli_query=mysqli_query($connection ,$query);
            $count=mysqli_num_rows($mysqli_query);
                      echo 'Recommended '.$count.''; 
                      ?> 
          </a>
          <a href="#">
            <?php
            $query = "SELECT * FROM follow where user_url='$username'";
            $mysqli_query=mysqli_query($connection ,$query);
            $count=mysqli_num_rows($mysqli_query);
                      echo 'Follower '.$count.''; 
                      ?> 
          </a> 
        </div>

  </div>
</div>
<div style="background:#e0f9f6;">
  <div class="container">
    <div class="row" > <!-- row start from here -->
  		<div class="col-lg-3"> <!--left col-->
        <!-- Image And USer Name Section -->
        <?php
        $stmt=mysqli_query($connection , "SELECT * FROM profile WHERE default_username='$username'");
         if(mysqli_num_rows($stmt) > 0){
          while ($row=mysqli_fetch_array($stmt)) { 
            $image=$row['image'];
            $user_name=$row['default_username'];
            $web_name=$row['website_name'];
            $web_link=$row['website_link'];
            $date_time=$row['date_time'];
            $facebook=$row['facebook'];
            $twitter=$row['twitter'];
            $instagram=$row['instagram'];
            ?>

        <div class="text-center" id="profile">
          <img src="images/<?php echo $image; ?>" class="img-rounded img-thumbnail" alt="avatar">
          <h2><?php echo $user_name; ?></h2>
          <h2 style="color:green">
            <?php
  if(isloggedin()){?>
            <a href="" class=" <?php if(followthisuser($username)){
              echo 'unfollow';}else{ echo 'follow';}?>">
              <?php
                if(followthisuser($username)){
                  echo '<button class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="You Already Follow">unfollow</button>';
                }else{
                  echo '<button class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Click and follow">Follow</button>';
                }
?>
            </a>
          <?php }else {?>
            <button class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="Login And Follow user">
              Follow  
            </button>
          <?php } ?>
          </h2>
        </div>
        </hr><br> 

         
        <!-- Website Section -->
        <div class="card mb-3">
          <h3 class="card-header">Website</h3>              
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="<?php echo $web_link; ?>" target="_blank">
                <i class="fa fa-globe"></i>
                <?php echo $web_name; ?>
              </a>
            </li>  
          </ul>    
        </div>
        
        <!-- Join Section Start  -->
        <div class="card mb-3">
          <h5 class="card-header">
            <a href="profile?/=<?php echo $user_name;?>&source=about">
              <i class="fas fa-user"></i>
              <b class="text-center"> About </b>
            </a>
          </h5>               
        </div> 
         <!-- About -->
         <div class="card mb-3">
          <h5 class="card-header">
            <i class="fas fa-user-clock"></i>
            Join<b class="float-right"> <?php echo $date_time; ?></b>
          </h5>               
        </div> 
        <!-- Activity Section Start From Here -->
        <div class="card mb-3" id="activity">
          <h3 class="card-header">Activity</h3>              
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="">
                Share
              </a><span class="float-right">10</span>
            </li>  
            <li class="list-group-item">
              <a href="profile?/=<?php echo $user_name;?>&source=likes">
                Likes  
              </a>
              <span class="float-right">
                <?php
                  $query = "SELECT * FROM likes where author='$username'";
                  $mysqli_query=mysqli_query($connection ,$query);
                  $count=mysqli_num_rows($mysqli_query);
                          echo $count; 
                ?>
              </span>
            </li>
            <li class="list-group-item">
              <a href="profile?/=<?php echo $user_name;?>&source=comment">
                Comments
              </a>
              <span class="float-right">
                <?php
                  $query = "SELECT * FROM comment where name='$username'";
                  $mysqli_query=mysqli_query($connection ,$query);
                  $count=mysqli_num_rows($mysqli_query);
                          echo $count; 
                ?>
              </span>
            </li>
            <li class="list-group-item">
              <a href="profile?/=<?php echo $user_namee;?>">
                Posts
              </a>
              <span class="float-right">
                <?php
                  $query = "SELECT * FROM post where author='$username'";
                  $mysqli_query=mysqli_query($connection ,$query);
                  $count=mysqli_num_rows($mysqli_query);
                          echo $count; 
                ?>       
              </span>
            </li>
          </ul>    
        </div>     
           <!-- Social Media Section Start From Here  -->
        <div class="card mb-3">
          <h3 class="card-header">Social Media</h3>              
          <ul class="list-group list-group-flush" id="social_profile">
            <li class="list-group-item">
              <a href="<?php echo $facebook; ?>">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a href="<?php echo $twitter; ?>" title="twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="<?php echo $instagram; ?>" title="instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </li>  
          </ul>    
        </div>
      </div><!--/col-3-->
<?php
           }
         }else{
          redirect('404');
         }
          }else{
          redirect('404');
         }?>

    	<div class="col-lg-6"><!--col 6 start from here -->

        <?php
          if(isset($_GET['source'])){
            $source=mysqli_real_escape_string($connection ,$_GET['source']);
          }else{
            $source='';
          }
          switch ($source) {
            case 'comment':
              include 'include/profile_comment.php';
              break;
              case 'posts':
              include 'include/profile_post.php';
              break;
              case 'likes':
              include 'include/profile_like.php';
              break;
              case 'about':
              include 'include/profile_about.php';
              break;
              case 'follower':
              include 'include/profile_follower.php';
              break;
            
            default:
               include'include/profile_post.php'; 
              break;
          }


        ?>

        
        
        
        
      </div><!--col 6 end here -->


      <div class="col-lg-3"><!-- col start from Here-->
      <div id="latest_recomendation">
      <i class="far fa-heart"></i>
      <b>Latest Recomendations</b>
      <hr>
        <?php 
          $username=mysqli_real_escape_string($connection ,$_GET['/']);
          $query="SELECT * FROM likes where author='$username' ";
            $query_run=mysqli_query($connection,$query);
            while($rows=mysqli_fetch_array($query_run)){
              $post_url=$rows['post_url'];                   
         $stmt=mysqli_prepare($connection , "SELECT  comm_count , pic , title  FROM post WHERE url=? AND status=?  ORDER BY id DESC");
         $status="publish";
         mysqli_stmt_bind_param($stmt ,'ss', $post_url , $status);
         mysqli_stmt_execute($stmt);
         Queryconfirm($stmt);
         mysqli_stmt_bind_result($stmt ,  $comm_count, $pic ,$title);
         if(mysqli_stmt_num_rows($stmt) >= 0){
          while (mysqli_stmt_fetch($stmt)) {
        ?>
          <p>
            <img src="images/<?php echo bydefaultimage($pic); ?>" alt="recomended" >
            <a href=""><?php echo $title; ?></a><br>
            comments <?php echo $comm_count; ?><hr id="hr_p">
          </p>
        <?php }}else{echo 'Still No Recomendation';}} ?>
        </div>
      </div><!-- COl End HERE -->
    </div><!--/row-->
  <!-- Footer Include here -->
</div><!-- container end Here -->
  <?php include 'include/footer.php';?> 
  <!-- Bottom Link Include -->
  <?php include 'include/bottomlink.php';?>

  <script type="text/javascript">
    $(document).ready(function(){
      $("[data-toggle='tooltip']").tooltip();
      // follow
      $('.follow').click(function(){
        var user_id='<?php echo loggedinid(); ?>';
        var url='<?php echo $username;?>';
        $.ajax({
          url:'profile?/=<?php echo $username;?>',
          type:'post',
          data:{
            'follow':1,
            'url':url,
            'user_id':user_id
          }
        });
      });
      // unfollow 
      $('.unfollow').click(function(){
        
        var user_id='<?php echo loggedinid(); ?>';
        var url='<?php echo $username;?>';
        $.ajax({
          url:'profile?/=<?php echo $username;?>',
          type:'post',
          data:{
            'unfollow':1,
            'url':url,
            'user_id':user_id
          }
        });
      });

    });
  </script>

  </body>