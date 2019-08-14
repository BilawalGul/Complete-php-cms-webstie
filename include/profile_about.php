<div style="" id="main_profile_about">
  <?php
  $username=$_GET['/'];
  $stmt=$connection->prepare("SELECT image , user_name , description FROM profile WHERE default_username=?");
  $stmt->bind_param( 's' , $username);
  $stmt->execute();
  $stmt->bind_result( $image , $username ,$description);
  while($stmt->fetch()){
  ?>
          <img src="images/<?php echo $image; ?>" class="img-fluid">
          <h1><?php echo $username; ?></h1>
          <p>
            <?php echo $description;?>
          </p>
        </div>
  <?php } ?>