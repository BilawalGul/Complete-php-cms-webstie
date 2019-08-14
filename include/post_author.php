        <?php

        $stmt=mysqli_prepare($connection, "SELECT user_name , description , facebook , twitter , instagram , First_Name FROM profile where user_name=?");
        mysqli_stmt_bind_param($stmt , 'i' , $author);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt , $username , $description , $facebook , $twitter , $instagram ,$firstname );
        while(mysqli_stmt_fetch($stmt)){
}
        ?>



        <div id="important_main" class="d-none d-sm-block">
          <div class="pull-left" id="importan_pic"><?php echo substr($firstname, 0 ,1); ?></div>
          <b>About The Author</b>
          <h6><?php echo $username; ?></h6>
          <p><?php echo $description; ?>
            <div id="follow_author">
              <a href="<?php echo $facebook;?>" title="facebook" id="f">
               <i class="fab fa-facebook-square"></i>
              </a>
              <a href="<?php echo $twitter;?>" title="twitter" id="t">
              <i class="fab fa-twitter"></i>
              </a>
              <a href="<?php echo $instagram; ?>" title="instagram" id="i">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </p>
        </div>

        <?php?>