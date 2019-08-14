<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/toplink.php'; ?>
    
    <title>Search ItsMain</title>

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
          if(isset($_GET['search'])){
            $search=mysqli_real_escape_string($connection , $_GET['search']);     
            $query=mysqli_query($connection, "SELECT * FROM post WHERE title LIKE '%$search%' OR text LIKE '%$search%' OR tags LIKE '%$search%'");
              if(mysqli_num_rows($query)>0){
               while($key=mysqli_fetch_array($query)) {
                $pic=$key['pic'];
                $alt=$key['alt_tag'];
                $menu=$key['menu'];
                $url=$key['url'];
                $title=$key['title'];
                $author=$key['author'];
                $date_time=$key['date_time'];
                $comm_count=$key['comm_count'];
             

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
              }
            }else{
              echo '<div class="text-center" style="text-align:center;margin:0 auto;">
                      <h2>NO RESULT FOUND SORRY</h2>
                    </div>';
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


