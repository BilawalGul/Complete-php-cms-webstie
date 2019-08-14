          <div class="container" id="new_most_viewd">
            <b>Most Viewed Posts</b><br>
            <small>⇩</small>
            <div class="row">
              <?php
                $stmt=mysqli_prepare($connection , "SELECT pic , alt_tag , menu , url , title , author ,date_time ,view ,comm_count  FROM post where status=? ORDER by view DESC LIMIT 3");
                $publish='publish';
                mysqli_stmt_bind_param($stmt , 's' , $publish);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt , $pic ,$alt , $menu , $url , $title , $author , $date_time , $view , $comm );
                while(mysqli_stmt_fetch($stmt)){
                  ?>
                      <div class="col-lg-4 col-md-4">
                        <div id="main_arr_viewd">
                        <img src="images/<?php echo bydefaultimage($pic);;?>" alt="<?php echo $alt;?>" class="img-fluid">
                          <span class="text-left"><?php echo ucfirst($menu);?></span><br>
                          <b>
                            <a href="post?/=<?php echo $url;?>">
                              <?php echo ucfirst($title);?>
                            </a>
                          </b>
                          <p> </p>
                          <span><?php echo ucfirst($author);?></span> || 
                          <span> <?php echo ucfirst($date_time);?></span> || 
                          <i class="fas fa-eye" id="eye"> <?php echo ucfirst($view);?></i> || 
                          <span class="fas fa-comment" id="eye"> <?php echo ucfirst($comm);?></span>
                        </div>
                      </div>
                
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>