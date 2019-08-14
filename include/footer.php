          <div id="footer">
          <div class="container">
            <b>1 MILLION READERS CAN’T BE WRONG </b>
            <p class="text-center">Own less, live more, and create space for the things you love. Get new <br>posts delivered right to your inbox</p>
            <div class="row">
              
              <?php
            if(isset($_POST['sub_btnnn'])){
              $sub=mysqli_real_escape_string($connection , $_POST['subscribe']);
              date_default_timezone_set('Asia/Karachi');
              $date_time=date("Y-m-d");

              $query = "SELECT email FROM subscribe WHERE email='$sub'";
                  $query_run=mysqli_query($connection , $query);
                  if(mysqli_num_rows($query_run) > 0){
                    $message=
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
                  $message= 
                    '
                      <div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Thanks! Successfully Subscribed!</strong>
                      </div>
                    ';
                     }

                  }

                  }else{
                    $message="";
                  }
                  ?>
              <div class="offset-lg-3"></div>
              <div class="col-lg-6 col-md-6 text-center" >
                <form class="form-inline text-center" id="footer_form" action="#footer" method="POST">
                  <?php echo $message;?>
                  <div class="input-group">
                     <input type="text" class="form-control" name="subscribe" placeholder="Subscribe for more" required>
                     <span class="input-group-btn">
                          <button type="submit"class="btn btn-default" name="sub_btnnn">SubScribe!</button>
                     </span>
                  </div>
                </form>
              </div>
              <div class="offset-lg-3"></div>

              
            </div>
          </div>
          <div class="container_follow" id="under_footer">
                <div class="col-lg-12 col-md-12">
                  <h2 class="text-center text-success">Follow Us </h2>
                  <center>
                    <a href="" title="facebook">
                     <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="" title="twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" title="instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                      <a href="" title="linkedin">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="" title="pinterest">
                      <i class="fab fa-pinterest-p"></i>
                    </a><br><br>
                    <i class="far fa-copyright"></i>
                    <i id="bottom_down">Copyright itsmain.co All right Resivred</i><br><br>
                  </center>
                </div>
                <!-- <a href="#" id="move_to_top" ><i class="material-icons" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left" >expand_less</i></a> -->
          </div>
        </div>



        <script type="text/javascript">   

        </script>