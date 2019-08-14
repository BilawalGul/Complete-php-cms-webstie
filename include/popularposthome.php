
            <h3>Popular Posts</h3>
            <?php 
              $i=1;
              $stmt=mysqli_prepare($connection , "SELECT url ,title ,date_time ,comm_count FROM post where status=? ORDER by likes DESC LIMIT 6");
              $publish='publish';
              mysqli_stmt_bind_param($stmt , 's' , $publish);
              mysqli_stmt_execute($stmt);
              mysqli_stmt_bind_result($stmt , $url ,$title ,$dat_time ,$comm_count);
              while(mysqli_stmt_fetch($stmt)){
                ?>
              <div class="media">
                <h4>0 <?php echo $i; ?></h4>
                <div class="media-body">
                  <h5 class="mt-0">
                    <a href="post?/='.$run['url'].'">
                      <?php echo $title; ?>
                    </a>
                  </h5>
                  <p id="posted"><?php echo $dat_time; ?> <span class="fas fa-thumbs-up">1</span> comment <?php echo $comm_count; ?></p>
                </div>
              </div>

          <?php
            $i++;
            }
          ?>
              
             