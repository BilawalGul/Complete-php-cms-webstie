<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/toplink.php'; ?>
    <title>Its-Main</title>

  </head>
  <body>
    

    <?php include 'include/header.php'; ?>

    <!-- Main Container -->
    <div class="containe" id="main">
      <img src="images/about-top.png" class="img-fluid" width="100%">
    </div>


        <!-- here the team area start -->
        <div class="container" id="team">
          <h2>Whats Its-Main Is All About</h2>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <center>
                <p>
                  Welcome, itsMain is a sub-organization of a company “chik”. ItsMain is being managed by a group of young entrepreneurs who are committed to help humanity and to spread knowledge. <br>

                  We are doing this because we love and care humans. We want to share the latest knowledge and concepts easy way.<br>
                  Our reviews will help you to buy the right product according to your needs. News will help you to stay up-to dated about the IT industry. Our tutorials teaches you the stuff in easiest and fastest way.<br>

                  Our vision is to keep the audience  up-to date and make knowledge easy for them to learn and make  them aware of the latest trends of IT industry. We are here to motivate the students towards research.<br>

                </p>
              </center>
            </div>
          </div>
        </div>


        <!-- there the subscribe area start -->
        



        <div class="containe" id="main_sub">
          <div class="container">
            <h5>Want to get action able information</h5>
            <h6>Then Subscribe Now</h6>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <img src="images/subscr1.png" class="image-fluid" style="width:80%">
              </div>
              <div class="col-lg-6 col-md-6">
              <?php
            if(isset($_POST['sub_btn'])){
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

              $query="INSERT INTO subscribe (email , date_time) VALUES ('{$sub}' , '{$date_time}')";
              $query_run=mysqli_query($connection ,$query);
              if(!$query_run){
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
                <form class="form-inline" id="footer_formm" action="#main_sub" method="POST">
                  <?php echo $message;?>
                  <div class="input-group">
                     <input type="text" class="form-control" name="subscribe" placeholder="Subscribe for more">
                     <span class="input-group-btn">
                          <button type="submit"class="btn btn-default" name="sub_btn">SubScribe <span>➜</span></button>
                     </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



        <div class="container" id="team">
          <h2> All About Us</h2>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <img src="images/about-itsmain.jpeg" class="img-fluid" alt="4 images in one frame of bilawal zuhair yasir iftikhar">
            </div>
            <div class="col-lg-6 col-md-12">
              <p>
                
                <b style="color:black;">Bilawal Gul</b><br>
                Bilawal is the co-founder and senior web developer at itsMain. His has strong grip in php and some its frameworks like laravel etc., javascript, html, css. He works on Content Management Systems, E-commerce etc.<Br>   
                <b style="color:black;">Iftikhar Saim</b><br>
                Saim is senior graphic designer and Networking Administrator at itsMain. He has upper hand on almost all versions of Adobe photoshop and Adobe Illustrator. He is also working on Adobe Photoshop 2018. He is the Network Administrator and done his Hawawei networking certification course<br>
                <b style="color:black;text-align: left;">Yasir Khan</b><br>
                Yasir is content writer and editor at itsMain. He is the Human Resource coordinator and marketing manager at itsMain. He works on javascript, html, css.<br>
                <b style="color:black;text-align: left;">M Zuhair Askari</b><br>
                zuhair is the co-founder and project manager at itsMain. He is Software Engineer manages stuff at itsMain, he works on C++, Python and doing research in Artificial Intelligence. 



              </p>
            </div>
          </div>
        </div>


          <div class="containerr" id="come_from">
            <h2>Where ItsMain Come From ??</h2>
            <div class="container">
              <div class="row">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8" id="come_from_p">
                  <p>
                    Moz, formerly SEOmoz, has a name that was inspired by organizations like DMOZ, Mozilla, and Chefmoz — all companies that strove for engaging their communities with openness and integrity. From the very beginning, we felt passionately about bringing that same integrity to the frustratingly opaque SEO industry.
                  </p>
                </div>
                <div class="offset-lg-2"></div>
              </div>
            </div>
          </div>


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


