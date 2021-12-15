<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address; 
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LML's Guide to AP CSP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a style="font-size: 45px; color:white";class="navbar-brand " href="index.html">LML</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span id=navbar class="navbar-toggler-icon"></span>
          </button>
          <div class="fab-container">
            <div class="fab fab-icon-holder">
              <img style="height:100%;width: 100%"; src="images/icon.png">
              <i style="color:transparent;";class="fas fa-question"></i>
            </div>
            <ul class="fab-options">
            <iframe src="https://avms-calculator.netlify.app/" style="border:0px #ffffff none;" name="myiFrame" scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="272px" allowfullscreen></iframe>     </div>
          </div>


          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li>
                <a class="nav-link" href="chapter1.html">Chapters</a>

              </li>
                <a class="nav-link" href="quizzes.html">Quizzes</a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="emulator.html">Python Emulator</a>
                  <a class="dropdown-item" href="calculator.html">Calculator</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="games.html">Games</a>
              <li class="nav-item">
                <a class="nav-link active" href="about.html">About</a>
              </li>
            </ul>
          <div class="fab-container">
            <div class="fab fab-icon-holder">
              <img style="height:100%;width: 100%"; src="images/icon.png">
              <i style="color:transparent;";class="fas fa-question"></i>
            </div>
            <ul class="fab-options">
            <iframe src="https://avms-calculator.netlify.app/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="372px" allowfullscreen></iframe>     </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Let us know about any questions or concerns.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
<!--            <div class="contact-address">-->
<!--              <i class="bi bi-geo-alt"></i>-->
<!--              <h3>Address</h3>-->
<!--              <address>A108 Adam Street, NY 535022, USA</address>-->
<!--            </div>-->
          </div>

<!--          <div class="col-md-4">-->
<!--            <div class="contact-phone">-->
<!--              <i class="bi bi-phone"></i>-->
<!--              <h3>Phone Number</h3>-->
<!--              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>-->
<!--            </div>-->
<!--          </div>-->

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:jahsh@interhax.org">contact@itnerhax.org</a></p>
            </div>
          </div>

        </div>

        <div class="form">
<!--          <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
<!--          <form action="https://mailthis.to/tointerhax@gmail.com" method="POST"> -->
          <form action="https://send.pageclip.co/1uAoxEcwh4hu14JGSEYRGkWszcrMDb7w" className="pageclip-form" method="post">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
<!--              <div class="loading">Loading</div>
             <div class="error-message"></div>
             <div class="sent-message">Your message has been sent. Thank you!</div> -->
            </div>
            <div class="text-center"><button class="pageclip-form__submit" type="submit" value="Send Email">Send Message</button></div>
<!--             <button class="pageclip-form__submit" type="button">
              <span>Submit</span>
            </button> -->
          </form>
        </div>

      </div>
<!--      <form action="https://mailthis.to/you@mail.com" method="POST">-->
<!--    <input type="text" name="name" placeholder="Your name">-->
<!--    <input type="email" name="_replyto" placeholder="Your email">-->
<!--    <input type="submit" value="Send Email">-->
</form>


        <footer style="background-color: #1a0600"; class="site-footer" role="contentinfo">
        <div class="row">
          <div class="col-12 text-md-center text-left">
             <p>
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

    <script src="js/main.js"></script>
    
  </body>
</html>