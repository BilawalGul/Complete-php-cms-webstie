<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/toplink.php'; ?>

   <!-- this is for like button  -->
 <?php
  if(isset($_POST['liked'])){
    $url=mysqli_real_escape_string($connection ,$_POST['url']);
    $user_id=mysqli_real_escape_string($connection ,$_POST['user_id']);

    // Select query from post
    $query="SELECT * FROM post where url='$url'";
    $query_run=mysqli_query($connection , $query);
    $row=mysqli_fetch_array($query_run);
    $like=$row['likes'];
    $author=$row['author'];
    $de_author=str_replace(' ', '-', $author);  
    // Update query
    $query ="UPDATE post SET likes = $like + 1 WHERE url='$url'";
    mysqli_query($connection , $query);

    // Insert query
    $query ="INSERT INTO likes (user_id , post_url , author) VALUES ('{$user_id}' , '{$url}' , '{$de_author}')";
    mysqli_query($connection , $query);
  }
?> 
  <!--  This is for unlike button   -->
  <?php
  if(isset($_POST['unliked'])){
    $url=$_POST['url'];
    $user_id=$_POST['user_id'];

    // Select query from post
    $query="SELECT * FROM post where url='{$url}'";
    $query_run=mysqli_query($connection , $query);
    $row=mysqli_fetch_array($query_run);
    $like=$row['likes'];
    // DELETE LIKE
     $query ="DELETE FROM likes WHERE post_url='$url' AND user_id='$user_id'";
    mysqli_query($connection , $query);
    // Update query
    $query ="UPDATE post SET likes = $like - 1 WHERE url='$url'";
    mysqli_query($connection , $query);
    exit();
  }
?>





    <?php
    if(isset($_GET['/'])){
      $id=mysqli_real_escape_string($connection ,$_GET['/']);
      $query=mysqli_prepare($connection , "UPDATE post SET view=view+1 WHERE url=?");
      mysqli_stmt_bind_param($query , 's' , $id);
      mysqli_stmt_execute($query);
      Queryconfirm($query);


      $stmt=mysqli_prepare($connection , "SELECT url_title , meta FROM post where url=? AND status=?");
      $publish='publish';
      mysqli_stmt_bind_param($stmt , 'ss' , $id ,$publish);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_bind_result($stmt , $google_title , $meta);
      while(mysqli_stmt_fetch($stmt)){
      
    ?>
    <link rel="canonical" href="">
    <title><?php echo ucwords($google_title); ?>-ItsMain</title>
    <meta name="description" content="<?php echo $meta;}?>">
    

  </head>
  <body>


<?php include 'include/header.php'; ?>




      <div class="container">
         <div class="article-image-and-heading">
          <?php 
          
          $stmt=mysqli_prepare($connection , "SELECT pic , title ,author ,date_time ,comm_count ,text , tags , url FROM post where url=? AND status=?");
          $publish='publish';
          mysqli_set_charset($connection,"UTF-8");
          mysqli_stmt_bind_param($stmt , 'ss' , $id ,$publish);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_bind_result($stmt , $image , $title , $author , $date_time , $comment ,$text ,$tags,$url);
          $result = mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) !== 0){
          while($run=mysqli_stmt_fetch($stmt)){
          

          ?>
          <img src="images/<?php echo bydefaultimage($image); ?>" class="img-fluid" >
            <div class="col-lg-8 offset-md-1">
              <h1 class="text-center"><?php echo $title; ?></h1>
              <center>
                <span><?php echo $author; ?> !! </span>
                <span> <?php echo $date_time; ?></span>
                <span> !! 3.6k share</span>
                <span> !! 50 <?php echo $comment; ?></span>
              </center>
            </div>
        </div>
      </div>



    <!-- Main Container -->
    <div class="container" id="main">
      <div class="row">
        <!-- For the Shares -->
        <div class="col-lg-1" id="post_share">
          <center >
            <p>Share<br>259</p>
            <a href="http://www.facebook.com/sharer.php?u=http://localhost/itsmain/post?/=<?php echo $url;?>" title="facebook" id="f" target="_blank">
             <i class="fab fa-facebook-square"></i>
            </a>
            <a href="http://twitter.com/share?text=%20intersting%20blog&url=http://www.infodemands.com/" title="twitter" target="_blank" id="t">
            <i class="fab fa-twitter"></i>
            </a>
            <a href="https://plus.google.com/share?url=http://localhost/itsmain/post?/=<?php echo $url;?>" title="Google plus" id="i" target="_blank">
              <i class="fab fa-google"></i>
            </a>
        </div>

        <!-- the main par where the blog show -->
        <div class="col-lg-8 " id="post">

          <p  id="text">
            <?php echo $text; ?> 

                   <?php mysqli_stmt_free_result($stmt); ?> 
            <hr>
<p id="recommended">
<?php
  if(isloggedin()){?>

            <a href="" class="
            <?php
            if(userlikedthispost($id)){
              echo 'unlike';
            }else{
              echo 'like';
            }
            ?>
            "> 
                <?php
                  if(userlikedthispost($id)){
                    echo '<i class="material-icons" id="dil" data-toggle="tooltip" data-placement="top" title="You Already Recommended">
                            favorite 
                          </i>';
                  }else{
                    echo '<i class="material-icons" id="undil" data-toggle="tooltip" data-placement="top" title="Want To Recommended">
                            favorite 
                          </i> Click To Recommended';
                  }
                  ?>
              </i> 
            </a><br>

 <?php }else{ ?>

            <a class=""> 
                  <i class="material-icons" id="undil" data-toggle="tooltip" data-placement="top" title="Login And Recommended">
                    favorite 
                  </i> You Need to <a href="logthisin" style="color:blue"> LOGIN </a> to Favorite 
              </a><br>
            
        <?php }?>  
        <?php

              $query="SELECT likes FROM post WHERE url='$id'";
              $query_run=mysqli_query($connection , $query);
              while ($row=mysqli_fetch_array($query_run)) {
                $liked=$row['likes'];
                if($liked>0){
                  echo '<b> '.$liked.' Recommendations</b><br>';
                }else
                echo '';
              }
              ?>                
          </p>
            <hr>
          <p>
            <!-- <a href="" id="comm">
              <span class="fas fa-comments float-right"> <?php //echo $comment; ?></span>
            </a> -->
          </p>

        


        <!-- author show haere under the post -->
        
        <?php
        $stmt= "SELECT * FROM profile where default_username='$author'";
        $query_run=mysqli_query($connection , $stmt);
        while($row=mysqli_fetch_array($query_run)){
          $username=$row['user_name'];
          $description=$row['description'];
          $facebook=$row['facebook'];
           $twitter=$row['twitter'];
           $instagram=$row['instagram'];
           $firstname=$row['First_Name'];
           $def_username=$row['default_username'];

        ?>

        <div id="important_main" class="d-none d-sm-block">
          <div class="pull-left" id="importan_pic"><?php echo ucfirst(substr($firstname, 0 ,1)); ?></div>
          <b>About The Author</b>
          <h6>
            <a href="profile?/=<?php echo $def_username;?>">
              <?php echo $username; ?>
             </a>
          </h6>
          <p><?php echo $description; ?>
            <div id="follow_author">
              <a href="<?php echo $facebook;?>" title="facebook" id="f" target="_blank">
               <i class="fab fa-facebook-square"></i>
              </a>
              <a href="<?php echo $twitter;?>" title="twitter" id="t" target="_blank">
              <i class="fab fa-twitter"></i>
              </a>
              <a href="<?php echo $instagram; ?>" title="instagram" id="i" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </p>
        </div>
<?php } ?>
       <!-- the author area end here  -->


        <div id="comment_shown">
          <div id="now">
            <b>Comments</b>
          </div>
          <?php
          if(isset($_GET['/'])){
          $id=mysqli_real_escape_string($connection ,$_GET['/']);
          $stmt = mysqli_prepare($connection , "SELECT website , name , date_time , text_cm FROM comment WHERE post_url=? AND status=? ORDER BY id DESC");
          $approve="approve";
          mysqli_stmt_bind_param($stmt , 'ss' , $id ,$approve);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_bind_result($stmt , $website , $name , $date_time , $text_cm);
          while(mysqli_stmt_fetch($stmt)){

            ?>

              <div class="media">
                <div class="media-left"> 
                    <img src="images/user.png" class="media-object" style="" alt="comment-image">
                </div>
                <div class="media-body">
                  <h4 class="media-heading" id="hhh">
                    <a href="<?php echo $website; ?>" target="_blank"class="text-info">
                      <?php echo $name; ?> 
                    </a>
                    <span> ➜ <?php echo $date_time; ?></span>
                  </h4>
                  <p id="hhh2"><?php echo $text_cm; ?></p>
                </div> 
                <div id="reply"></div>
              </div>
              <hr>

          <?php
          } 
        }
          ?>
                        
          </div>




          <!-- commetn put here -->


          <div id="comment_form">
            <h3 class="display-6 mb-8">Enter Comment</h3>
            <?php
            
             
            if(isset($_POST['comm_submit'])){
              $email=mysqli_real_escape_string($connection ,$_POST['email']);
              $website=mysqli_real_escape_string($connection ,$_POST['web']);
              $text=mysqli_real_escape_string($connection ,$_POST['comment']);
              date_default_timezone_set('Asia/Karachi');
              $date_time=date("Y-m-d");
              if(isloggedin()){
                $name=str_replace(' ', '-', $_SESSION['username']);
              }else{
                $name=mysqli_real_escape_string($connection , $_POST['name']);
              }
              $stmt=mysqli_prepare($connection , "INSERT INTO comment (name , post_url ,  email , website , text_cm , date_time , status ) VALUES (? , ? , ? , ? , ? ,? , ?) " );
              $status='unapprove';
              mysqli_stmt_bind_param($stmt , 'sssssss' , $name , $id, $email , $website , $text, $date_time ,$status);
              mysqli_execute($stmt);
              if(!$stmt){
                 echo "QUERY FAILED". mysqli_error($connection);
                 }else{
                  echo 
                    '
                      <div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Comment Submit ! Wating for Approvel</strong>
                      </div>
                    ';
                     }
                     //  count the commment 
              $query=mysqli_prepare($connection , "UPDATE post SET comm_count=comm_count+1 WHERE url=?");
              mysqli_stmt_bind_param($query , 's' , $id);
              mysqli_stmt_execute($query);
              Queryconfirm($query);
            }
            ?>
            <form rol="form" action="#comment-submit" method="post" >
              <div class="row" id="comment-submit">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div>
                <div class="col">
                  <input type="email" class="form-control" placeholder=" Email" name="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="Comment">Website</label>
                <input type="url" name="web" placeholder="https://www.example.com (Optional)"  class="form-control">
              </div>
              <div class="form-group">
                <label for="Comment">Comment</label>
                <textarea class="form-control" name="comment" placeholder="Enter Your comment" col="10" rows="6" required></textarea>
              </div>
              <button type="submit" class="btn btn-info" name="comm_submit">S u b m i t</button>
            </form>
          </div>
        </div>



           



        <!-- The Latest posts start from here -->
            <div class="col-lg-3" id="latest_posts ">


              <!-- this is for the subscribe -->
          <?php
            if(isset($_POST['sub_btn'])){
              $sub=mysqli_real_escape_string($connection ,$_POST['subscribe']);
              date_default_timezone_set('Asia/Karachi');
              $date_time=date("Y-m-d");

              $query = "SELECT email FROM subscribe WHERE email='$sub'";
                  $query_run=mysqli_query($connection , $query);
                  if(mysqli_num_rows($query_run) > 0){
                    echo
                    '
                      <div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Already Subscribe!</strong>
                      </div>
                    ';
                  }else{

              $stmt=mysqli_prepare($connection , "INSERT INTO subscribe (email , date_time) VALUES (? , ?)");
              mysqli_stmt_bind_param($stmt , 'ss' , $sub ,$date_time);
              mysqli_execute($stmt);
              
              if(!$stmt){
                 echo "QUERY FAILED". mysqli_error($connection);
                 }else{
                  echo 
                    '
                      <div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Thanks! Successfully Subscribed!</strong>
                      </div>
                    ';
                     }

                  }

                  }
                 ?>
        <div class="card bg-light mb-3" style="max-width: 100%;">
               <div class="card-header">Subscribe for More Stuff</div>
               <div class="card-body">
                 <form style="background-color:#fff;" action="#subscribe" method="POST">
                 <input type="email" name="subscribe" class="form-control" placeholder="Enter Your Email"  id="subscribe"  required>
                 <br>
                 <center> 
                 <button type="submit" name="sub_btn" class="btn btn-outline-success text-center">Subscribe</button>
               </center>
                 </form>
                </div>
          </div>




               <!-- this is for the Advrtisment -->
            <div class="advri1">
              ADV
            </div>


            <div id="tags">
              <b>TAGS</b><br>
              <?php
               echo '<span>'.str_replace(" , ", "</span> <span>", $tags).'</span>';
               ?>
            </div>

            <?php }}else{
          header('Location:404');
             }} ?>
              <h3 class="display-">Latest Posts</h3>
              <?php 
              $i=1;
              $stmt=mysqli_prepare($connection , "SELECT url ,title ,date_time ,comm_count FROM post where status=? ORDER by id DESC LIMIT 6");
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
                    <a href="post?/=<?php echo $url; ?>">
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
              <!-- this is the advrstiment place -->
                  <div id="post_advt_page_fixed" class="d-none d-xl-block d-none d-lg-block d-xl-none d-none d-md-block d-lg-none">
                    ADVT
                  </div>
            </div>
      </div>
     </div>






          <!-- There is the Most viewed posts shownnnnnn -->
          <?php include  'include/mostview.php'?>

          <!-- contribution area start from here -->
            

          <!--  there the footer Area start -->
          <?php include 'include/footer.php'; ?>



          <!--  bottom link -->
          <?php include 'include/bottomlink.php'?>

          <script type="text/javascript">
            $(document).ready(function(){
              $("[data-toggle='tooltip']").tooltip();
              // like function 
              $('.like').click(function(){
                $('#dil').css("color","red");
                
               
                var url = '<?php echo $id; ?>';
                var user_id = '<?php echo loggedinid(); ?>';

                $.ajax({
                        url: "post.php?/=<?php echo $id; ?>",
                        type: 'post',
                        data: {
                            'liked': 1,
                            'url': url,
                            'user_id': user_id
                        }
                      });
              });

              // unlike function
              $('.unlike').click(function(){
                $('#dil').css('color', 'black');
               
                var url = '<?php echo $id; ?>';
                var user_id = '<?php echo loggedinid(); ?>';

                $.ajax({
                        url: "post.php?/=<?php echo $id; ?>",
                        type: 'post',
                        data: {
                            'unliked': 1,
                            'url': url,
                            'user_id': user_id
                        }
                      });

              });

            });
          </script>
    
  </body>
</html>


