<h2 class="text-center">These Posts Are Liked By User</h2>
<?php 

          $username=$_GET['/'];
          $query="SELECT * FROM likes where author='$username' ";
            $query_run=mysqli_query($connection,$query);
            while($rows=mysqli_fetch_array($query_run)){
              $post_url=$rows['post_url'];

                              
         $stmt=mysqli_prepare($connection , "SELECT menu , comm_count ,author ,date_time , pic , title , likes ,url ,user_image FROM post WHERE url=? AND status=? ORDER BY id ASC");
         $status="publish";
         mysqli_stmt_bind_param($stmt ,'ss', $post_url , $status);
         mysqli_stmt_execute($stmt);
         Queryconfirm($stmt);
         mysqli_stmt_bind_result($stmt , $menu , $comm_count, $author ,$date_time, $pic ,$title , $likes , $url ,$user_image);
         if(mysqli_stmt_num_rows($stmt) >= 0){
          while (mysqli_stmt_fetch($stmt)) {
?>
        
<div style="" id="main_profile">
          <p><strong>ItsMain</strong> on <?php echo $menu; ?> - <?php echo $comm_count; ?> comments</p>
          <img src="images/<?php echo bydefaultprofile($image); ?>" alt="image" class="img-fluid" id="p_img">
          <span><?php echo $author; ?>  ::</span><i id="p_date"> <?php echo $date_time; ?></i>
          <div id="post_image">
            <img src="images/<?php echo bydefaultimage($pic); ?>" class="img-fluid">
            <b>
              <a href="post?/=<?php echo $url; ?>">
                <?php echo $title; ?>
              </a>
            </b><br>
            <i class="material-icons" title="Login And Recommended">
              favorite 
            </i><b style="padding-top: 10px; font-size: 16px;"> <?php echo $likes;?> Recommended</b>
          </div><hr>
        </div>

      <?php }} }?>