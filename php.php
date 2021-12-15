
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

    <div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('images/csing.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Chapter 1</span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>

    <section class="section blog element-animate">
      <div class="container">

        <div class="row justify-content-center mb-5 ">
          <div class="col-md-8 text-center">
            <h2 class=" heading mb-4">Introduction to Computer Science</h2>
            <p class="mb-5 lead">By the end of this chapter, you will be able to recount the defintion of computer science, history of computer, and the diffrent generations of computers. </p>
          </div>
        </div>
                    <h1 class="text-center">Contact Me</h1>
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <?php if (! empty($formErrors)) { ?>
                <div class="alert alert-danger alert-dismissible" role="start">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                        foreach($formErrors as $error) {
                            echo $error . '<br/>';
                        }
                    ?>
                </div>
                <?php } ?>
                <?php if (isset($success)) { echo $success; } ?>
                <div class="form-group">
                    <input 
                           class="username form-control" 
                           type="text" 
                           name="username" 
                           placeholder="Type Your Username"
                           value="<?php if (isset($user)) { echo $user; } ?>" />
                    <i class="fa fa-user fa-fw"></i>
                    <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        Username Must Be Larger Than <strong>3</strong> Characters
                    </div>
                </div>
                <div class="form-group">
                    <input 
                           class="email form-control" 
                           type="email" 
                           name="email" 
                           placeholder="Please Type a Valid Email" 
                           value="<?php if (isset($mail)) { echo $mail; } ?>" />
                    <i class="fa fa-envelope fa-fw"></i>
                    <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        Email Can't Be <strong>Empty</strong>
                    </div>
                </div>
                <input 
                       class="form-control" 
                       type="text" 
                       name="cellphone" 
                       placeholder="Type Your Cell Phone" 
                       value="<?php if (isset($cell)) { echo $cell; } ?>" />
                <i class="fa fa-phone fa-fw"></i>
                <div class="form-group">
                    <textarea 
                          class="message form-control" 
                          name="message"
                          placeholder="Your Message!"><?php if (isset($msg)) { echo $msg; } ?></textarea>
                    <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        Message Can\'t Be Less Than <strong>10</strong> Characters
                    </div>
                </div>
                <input 
                       class="btn btn-success" 
                       type="submit" 
                       value="Send Message" />
                <i class="fa fa-send fa-fw send-icon"></i>
            </form>
        </div>
        </div>
      </div>
    </section>


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