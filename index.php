<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/toplink.php'; ?>
    <title>BRAQTSEY</title>

  </head>
  <body>
    


<?php include 'include/header.php'; ?>


    <div class="container">
      <div class="row">
        <!-- articles -->
        <div class="col-lg-8" id="main-media">
              <ul class="list-unstyled">
                <li class="media">
                  <a href="">
                    <?php 
                      $query="SELECT * FROM front_page ORDER by id DESC LIMIT 1";
                      $query_run=mysqli_query($connection , $query);
                      while($rows=mysqli_fetch_array($query_run)){
                        $image=$rows['picture'];
                        $alt=$rows['alt_tag'];
                      
                    ?>
    <img class="img " src="images/<?php echo $image; ?>" style="width:100%;height:auto;margin:0 auto;" alt="<?php echo $alt; ?>" >
  <?php } ?>
                  </a>
                </li>
              </ul>
          </div>
        
          <div class="col-lg-4" id="main-media">
            <?php 
              $query="SELECT * FROM post where status='publish' ORDER by id DESC LIMIT 2";
              $query_run=mysqli_query($connection , $query);
              while($run=mysqli_fetch_array($query_run)){
                echo 
                '
                  <ul class="list-unstyled">
                    <li class="media">
                      <a href="post?/='.$run['url'].'">
                        <img class="mr-3" src="images/'. bydefaultimage($run['pic']).'" alt="Generic placeholder image" >
                      </a>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">
                          <a href="post?/='.$run['url'].'">
                            '.ucwords($run['title']).'
                          </a>
                        </h6>
                        <p class="justify-content-md-center">
                         '.ucwords(substr($run['text'],0,50)).'
                        </p>
                        <a href="#" id="author">'.ucwords($run['author']).'</a> <p id="posted">'.$run['date_time'].' comment '.$run['comm_count'].'</p><br>
                      </div>
                    </li>
                  </ul>
                ';
              }
            ?>
              
          </div>
      </div>
    </div>






    <!-- Main Container -->
    <div class="container" id="main">
      <div class="row">
        <!-- For the Shares -->
        <?php include 'include/share.php'; ?>




        <!-- articles -->
        <div class="col-lg-7 col-md-7 d-none d-sm-block" id="main-media">
          
          <?php 
          $query="SELECT * FROM post where status='publish' ORDER by id DESC LIMIT 5";
          $query_run=mysqli_query($connection , $query);
          while($run=mysqli_fetch_array($query_run)){
            echo 
            '
              <ul class="list-unstyled">
                <li class="media">
                  <a href="post?/='.$run['url'].'">
                    <img class="mr-3" src="images/'.bydefaultimage($run['pic']).'" alt="Generic placeholder image" >
                  </a>
                  <div class="media-body">
                    <h3 class="mt-0 mb-1">
                      <a href="post?/='.$run['url'].'">
                        '.ucwords($run['title']).'
                      </a>
                    </h3>
                    <p class="justify-content-md-center">
                     '.ucwords(substr($run['text'],0,150)).'....
                    </p>
                    
                    '.ucwords($run['author']).' 
                     <p id="posted">'.$run['date_time'].' <span class="fas fa-thumbs-up">1 </span> comment '.$run['comm_count'].'</p><br>
                  </div>
                </li>
              </ul>
            ';
          }
        ?>
          
        </div>

        <!-- this is for the mobile  -->
              <div class="col-lg-8 d-none d-sm-block d-md-none d-block d-sm-none">


                <?php 
                  $query="SELECT * FROM post where status='publish' ORDER by id DESC LIMIT 5";
                  $query_run=mysqli_query($connection , $query);
                  while($run=mysqli_fetch_array($query_run)){
                    echo 
                    '
                      <div class="panel panel-default" id="panel">
                        <a href="post?/='.$run['url'].'">
                          <img src="images/'.bydefaultimage($run['pic']).'">
                        </a>
                        <div class="panel-heading">
                         <h5><a href="post?/='.$run['url'].'">
                          '.ucwords($run['title']).'</a>
                        </h5>
                        </div>
                        <div class="panel-body">
                          <a href="#" id="author">'.ucwords($run['author']).' </a><p id="posted">'.$run['date_time'].' || <span class="fas fa-thumbs-up">1</span> || comment '.$run['comm_count'].'</p> 
                        </div>
                      </div>
                    ';
                  }
                ?>



                
                
              </div>






        <!-- side area -->
        <div class="col-lg-4 col-md-4" id="subscribe">
          <?php include 'include/sideare.php';?>

        </div>
    </div>








<!--  New main Area start  THis is for the advirstiment -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="col-lg-2">
            </div>
            <div clss="col-lg-8 col-md-8" id="adv_la">
              <!-- Advertisment -->
              
            </div>
            <div class="col-lg-2 col-md-2">
            </div>
          </div>
        </div>
      </div>

      

      <!-- New main Area start from Here -->
      <div class="container" id="main_adv_2nd">
        <div class="row">
          

            <!-- the  advrtisment place -->
            <!-- the  follow place -->
            <?php include 'include/follow.php';?>

            <!-- Blogs sidessss -->

              <div class="col-lg-8 col-md-8 d-none d-sm-block" id="main-media">
          
          <?php 
          $query="SELECT * FROM post where status='publish' ORDER by id DESC LIMIT 5 ,10";
          $query_run=mysqli_query($connection , $query);
          while($run=mysqli_fetch_array($query_run)){
            echo 
            '
              <ul class="list-unstyled">
                <li class="media">
                  <a href="post?/='.$run['url'].'">
                    <img class="mr-3" src="images/'.bydefaultimage($run['pic']).'" alt="Generic placeholder image" >
                  </a>
                  <div class="media-body">
                    <h3 class="mt-0 mb-1">
                      <a href="post?/='.$run['url'].'">
                        '.ucwords($run['title']).'
                      </a>
                    </h3>
                    <p class="justify-content-md-center">
                     '.ucwords(substr($run['text'],0,150)).'....
                    </p><div></div>
                    <a href="#" id="author">'.ucwords($run['author']).' </a> <p id="posted">'.$run['date_time'].' <span class="fas fa-thumbs-up">1 </span> comment '.$run['comm_count'].'</p><br>
                  </div>
                </li>
              </ul>
            ';
          }
        ?>
          
        </div>
              <!-- this is for the mobile  -->
              <div class="col-lg-8 d-none d-sm-block d-md-none d-block d-sm-none">
                <?php 
          $query="SELECT * FROM post where status='publish' ORDER by id DESC LIMIT 5,10";
          $query_run=mysqli_query($connection , $query);
          while($run=mysqli_fetch_array($query_run)){
            echo 
            '
              <div class="panel panel-default" id="panel">
                  <a href="post?/='.$run['url'].'">
                    <img src="images/'.bydefaultimage($run['pic']).'" class="img-fluid">
                  </a>
                  <div class="panel-heading">
                   <h5><a href="post?/='.$run['url'].'">
                    '.ucwords($run['title']).'</a>
                  </h5>
                  </div>
                  <div class="panel-body">
                    <a href="#" id="author">'.ucwords($run['author']).' </a><p id="posted">'.$run['date_time'].' || <span class="fas fa-thumbs-up">1</span> || comment '.$run['comm_count'].'</p> 
                  </div>
                </div>
            ';
          }
        ?>
                

              </div>











            <!-- Most New post side -->
            <div class="col-lg-3 col-md-3" id="latest_posts">
              <?php include 'include/popularposthome.php';?>
            </div>



            <!-- this is for the Advrtisment -->
            <div class="advri1">
              ADV
            </div>

        </div>
      </div>
    </div>



        <!-- There is the Most viewed posts shownnnnnn -->
          <?php include  'include/mostview.php'?>

          <!-- contribution area start from here -->
            <div class="container" id="contribution">
              <?php include 'include/contribution.php'; ?>
            </div>



          <!--  there the footer Area start -->
        <?php include 'include/footer.php'; ?>



        <!--  bottom link -->
        <?php include 'include/bottomlink.php'?>
  </body>
</html>


