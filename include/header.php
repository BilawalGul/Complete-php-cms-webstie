 <!-- top line -->
    <div id="line">
      
    </div>


 <!-- Search Bar          LOGO                  Login -->
    <div class="container container-fluid">
      <div class="row" id="top">
        <div class="col-lg-4 col-md-4">
          
          <form action="search" method="GET">
            <input type="text" name="search" placeholder="Search.." class="fas fa-search">
          </form>
        </div>
        <div class="col-lg-4 col-md-4">
          <h2 class="text-center" id="hd" style="font-family: 'Bree Serif', serif;
">
            <a href="../itsmain/" style="text-decoration: none;">
              BRAQTSEY
            </a>
          </h2>
        </div>
          <div class="col-lg-4 col-md-4">
            <?php
              if(isloggedin()){
                echo 
                '
                <a href="logout">
                  <button class="btn btn-outline-success float-right disabled">LogOut</button>
                </a>

                ';
              }else{
                echo 
                '
                
                <a href="logthisin">
                  <button class="btn btn-outline-success float-right disabled">Login</button>
                </a>
                ';
              }
            ?>
            
          </div>
      </div>
    </div>



    <!-- Nav bar -->
    <div class="container">
      <div class="row">
        <nav class=" navbar navbar-expand-lg navbar-light justify-content-lg-center">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../itsmain/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        tutorials
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
                $query = "SELECT * FROM menu";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                  echo '
                    
                      
                        <a class="dropdown-item" href="menu?/='.$run['tutorials'].'">'.$run['tutorials'].'</a>
                      
                    
                  ';
                }

              ?>
              </div>
              </li>
              
              <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reviews
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
                $query = "SELECT * FROM menu";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                  echo '
                    
                      
                        <a class="dropdown-item" href="menu?/='.$run['reviews'].'">'.$run['reviews'].'</a>
                      
                    
                  ';
                }

              ?>
              </div>
              </li>
              <?php 
                $query = "SELECT * FROM menu";
                $query_run=mysqli_query($connection , $query);
                $run=mysqli_fetch_array($query_run);
                  echo '
                    
                      <li class="nav-item">
                        <a class="nav-link" href="menu?/='.str_replace(' ','-',$run['artificl']).'">'.$run['artificl'].'</a>
                        </li>
                      
                    
                  ';
                

              ?>
              <?php 
                $query = "SELECT * FROM menu";
                $query_run=mysqli_query($connection , $query);
                $run=mysqli_fetch_array($query_run);
                  echo '
                    
                      <li class="nav-item">
                        <a class="nav-link" href="menu?/='.$run['Robotics'].'">'.$run['Robotics'].'</a>
                        </li>
                              
                  ';

              ?>
              <?php 
                $query = "SELECT * FROM menu";
                $query_run=mysqli_query($connection , $query);
                $run=mysqli_fetch_array($query_run);
                  echo '
                    
                      <li class="nav-item">
                        <a class="nav-link" href="menu?/='.str_replace(' ','-',$run['news']).'">'.$run['news'].'</a>
                        </li>
                      
                    
                  ';
                

              ?>
              

              <li class="nav-item">
                <a class="nav-link" href="about-us">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us">Contact</a>
              </li>
              <?php if(isloggedin()): ?>
              <li class="nav-item">
                <a class="nav-link" href="advance/index" style="color:white;background:lightgreen;border-radius: 5px;">Admin</a>
              </li>               
              <?php endif; ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>