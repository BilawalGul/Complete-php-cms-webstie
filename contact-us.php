<!doctype html>
<html lang="en">
  <head>
    <?php include 'include/toplink.php'; ?>
    <title>Its-Main</title>

  </head>
  <body>
    


    <?php include 'include/header.php'; ?>

    <!-- contact us from here -->
    <div class="contanie" id="contant_banner">
      <h1>We Love To Here From You!</h1>
      <h2>Contact Us</h2>
      <div class="container">  
        <div class="row">
          <div class="col-lg-12">
            <img src="images/contact-banner.png" class="img-fluid" id="contact_done">
          </div>
        </div>
      </div>
    </div>

    <!-- Main Container -->
    <div class="container" id="main">
      <div class="row">
        <!-- For the Shares -->
        
        <div class="col-lg-5 col-md-5" id="side_contact">
          <h3>Love To see you Here</h3>
          <p>If you have any Query or You Need <br> any help about the topic of website we will warmly welcome your message . We are happy to answer  any question you have or provide you with estimate so dont hasitate to contact with us We Will right back soon . or any business contact us throug give email below .</p>
          <img src="images/side_contact_email.png" alt="the envalope image" class="imag-fluid">
          <br><br>
          <b>
            <a href="mailto:bizypros@gmail.com" target="_top">
              bizypros@gmail.com
            </a>
          </b>
          <br><br>
          <img src="images/address.png" alt="location image" class="imag-fluid"><br><br><b >Main Bazar Cant Point second Floor Abbottabad (PAKISTAN)</b>
        </div>

        <!-- Contact ARea Start From HEre -->
        <div class="col-lg-7 col-md-7">
          <div id="comment">
            <?php
            use PHPMailer\PHPMailer\PHPMailer;
            include_once "PHPMailer/PHPMailer.php";
            include_once "PHPMailer/Exception.php";
            $message="";
            if(isset($_POST['submit'])){
              $name=mysqli_real_escape_string($connection ,$_POST['name']);
              $email=mysqli_real_escape_string($connection ,$_POST['email']);
              $subject=mysqli_real_escape_string($connection ,$_POST['subject']);
              $body=mysqli_real_escape_string($connection ,$_POST['message']);

              $mail = new PHPMailer();
              $mail->addAddress('bilawalawan747@gmail.com' , 'Bilawal Gul');
              $mail->setFrom($email);
              $mail->subject=$subject;
              $mail->isHTML(true);
              $mail->Body=$body;

              if($mail->send()){
                echo  '<div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Thanks! for contacting Us we will right back soon </strong>
                      </div>';
              }else{
                echo'<div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Problem sending Email ! Try again . </strong>
                      </div>';
              }

            }
          ?>
            <form rol="form" method="POST" action="#contact_done">
              <div class="form-group">
                <label for="email">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name"  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter Your Email"  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" name="subject" placeholder="Enter Your Subject"  class="form-control" required>
              </div>
              <div class="form-group">
                <label for="Message">MEssage</label>
                <textarea class="form-control" name="message" placeholder="Enter Your Message" col="1000" rows="10" required></textarea>
              </div>
              <button type="submit" class="btn btn-info" name="submit">Send</button>
            </form>
          </div>
        </div>

      </div>


            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105628.06530865554!2d73.16589853974745!3d34.175061254959445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38de3111557ac517%3A0x6e59a635b12e952c!2sAbbottabad%2C+Pakistan!5e0!3m2!1sen!2s!4v1505542165554" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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


