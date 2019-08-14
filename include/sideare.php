

          <!-- this is for the subscribe -->
          <?php
            if(isset($_POST['sub_btn'])){
               $sub=$_POST['subscribe'];
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
          <div class="card bg-light mb-3" >
               <div class="card-header">Subscribe for More Stuff</div>
               <div class="card-body">
                 <form style="background-color:#fff;" action="#subscribe" method="POST">
                 <input type="email" name="subscribe" class="form-control" placeholder="Enter Your Email"  id="subscribe"  required>
                 <br> <button type="submit" name="sub_btn" class="btn btn-outline-success text-center">Subscribe</button>
                 </form>
                </div>
          </div>

         
            




            <!-- this is for the Advrtisment -->
            <div class="card border-secondary mb-3" >
              
              <div class="card-body">
                <h4 class="card-title">ADVERTISEMENT</h4>
                <p class="card-text">This is portion is intentionally left blank for future use specially for advertisements</p>
              </div>
            </div>




            <!-- Question of the Day Quote of the Day Quiz section -->


            <div id="qusstion_full">
              <!-- Quote of the Day-->
              <div class="card text-white bg-info mb-3" >
                <div class="card-header text-center ">Quote</div>
                <?php 
                $query="SELECT * FROM quotes order by id DESC LIMIT 1";
                $query_run=mysqli_query($connection , $query);
                while($rows=mysqli_fetch_array($query_run)){
                  echo 
                  '
                  <div class="card-body">
                  <h5 class="card-title">'.ucwords($rows['author']).'</h5>
                  <p class="card-text">'.ucfirst($rows['text']).'</p>
                </div>
                  ';
                }

                ?>
                
                
              </div>
              






              <!-- Quiz section -->
              

            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Quiz</h4>
                <h6 class="card-subtitle mb-2 text-muted">Take a quiz</h6>
                <p class="card-text">Want to know your expertise and knowledge in your professional field?
                  <br />Click the link below to take a quick quiz
                </p>
                <a href="quiz">
                <button class="btn btn-outline-success" >Quiz</button>
                </a>
              </div>
            </div>




             <!-- for polling  -->
             <div class="card mb-3">
              <h3 class="card-header">LATEST NEWS</h3>
              
              <ul class="list-group list-group-flush">
                <?php 
                  $query="SELECT * FROM post where menu='news' ORDER by id DESC LIMIT 5";
                  $query_run=mysqli_query($connection , $query);
                  while($run=mysqli_fetch_array($query_run)){
                    ?>
                    <li class="list-group-item">
                      <a href="post?/=<?php echo $run['url']; ?>">
                        <?php echo $run['title']; ?>
                      </a>
                    </li>
                    
                    <?php
                      }
                    ?>
              </ul>
              
            </div>




        </div>