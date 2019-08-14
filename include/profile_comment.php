<h2 class="text-center"> User Comments Posts</h2>
<?php 

          $username=$_GET['/'];
          $query="SELECT * FROM comment where name='$username'";
          $query_run=mysqli_query($connection,$query);
          while($rows=mysqli_fetch_array($query_run)){
          $comm_text=$rows['text_cm'];
          $name=$rows['name'];
          $date_time=$rows['date_time'];
          $title= $rows['post_url'];
          $title=str_replace('-', ' ',$title);
        

                           
?>

        <div style="" id="main_profile_comment">
          <p><strong>ItsMain</strong> </p>
          <img src="images/<?php echo bydefaultprofile($image);?>" alt="image" class="img-fluid" id="p_img">
          <span><?php echo $name; ?>  ::</span><i id="p_date"> <?php echo $date_time; ?></i>
          <div id="post_image">
            <b>
              <a href="post?/=<?php echo $url; ?>">
                <?php echo $title; ?>
              </a>
            </b><br>
           <?php  echo $comm_text; ?>

          </div><hr>
        </div>

      <?php  }
      ?>
