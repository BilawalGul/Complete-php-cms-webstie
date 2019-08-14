<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/toplink.php'; ?>
    <?php 
      if(isset($_GET['/'])){
            $menu=mysqli_real_escape_string(trim($connection ,$_GET['/']));
    ?>
    <title><?php echo strtoupper($menu);?></title>

  </head>
  <body>
    


   <?php include 'include/header.php'; ?>


    <!-- Main Container -->
    <div class="container" id="main">
      <div class="row">
        <!-- For the Shares -->
        


        <!-- About ARea Start From HEre -->
        <div class="col-lg-12 col-md-12">
          <div class="container" id="new_most_viewd">
            <div class="row">
              <?php 
              
      $stmt=mysqli_prepare($connection , "SELECT pic , title , author , date_time , comm_count , text , url , menu , alt_tag FROM post where status=? AND menu=?");
      $publish='publish';
      mysqli_stmt_bind_param($stmt , 'ss' , $publish , $menu);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_bind_result($stmt , $pic , $title , $author , $date_time , $comm_count , $text , $url ,$menu ,$alt);
        $result = mysqli_stmt_store_result($stmt);
                  if(mysqli_stmt_num_rows($stmt) === 0)
                  {
                    
                     header('Location:404');
                  }else{
                  
                 
                  while(mysqli_stmt_fetch($stmt)){

              ?>
              <div class="col-lg-4 col-md-4">
                <div id="main_arr_viewd">
                <img src="images/<?php  echo bydefaultimage($pic);;?>" alt="<?php echo $alt;?>" class="img-fluid">
                  <span class="text-left"><?php echo ucfirst($menu);?></span><br>
                  <b>
                    <a href="post?/=<?php echo $url; ?>">
                      <?php echo ucfirst($title);?>
                    </a>
                  </b>
                  <p> </p>
                  <span><?php echo $author; ?></span> || 
                  <span><?php echo $date_time; ?></span> ||  
                  <span class="fas fa-comment" id="eye"> <?php echo $comm_count; ?></span>
                </div>
              </div>
              <?php
                    } mysqli_stmt_close($stmt);
                 }
                 }
              ?>
              
              
            </div>
          </div>
        </div>


        



        



      </div>
    </div>






          <!-- There is the Most viewed posts shownnnnnn -->
          <?php include  'include/mostview.php'?>

           <!--  there the footer Area start -->
          <?php include 'include/footer.php'; ?>


          <!--  bottom link -->
          <?php include 'include/bottomlink.php'?>
  </body>
</html>


