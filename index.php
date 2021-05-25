<?php session_start()?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My personal website containing my profile and projects">
    <meta name="author" content="Jericho Jade Madolid">
    
    <title>Jericho Jade Madolid | Web Developer</title>
    <link rel="icon" href="images/dev.png" type="image/gif" sizes="16x16">
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/main.css">
    <link href="Assets/css/carousel.css" rel="stylesheet">

  </head>
  <body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-main-color">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="margin-left: 15px; margin-top: -20; margin-bottom: -40px;"><img src="images/avatar.PNG" width="50" alt="Avatar Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0" style="margin-left: 80%;">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<a onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/back-to-top.png" width="40px"></a>
<main id="home">
<?php
      if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show text-center" role="alert" style="margin-bottom: -10px; margin-top:15px;">
              <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
              ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php endif ?>
  <div id="myCarousel" class="carousel slide mt-0" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1" ></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-color: #f3f3f5; background-image: linear-gradient(-120deg, #Ec008B 0%, #352384, #333447">
        <div class="container">
          <div class="carousel-caption text-start">
            <div class="col-md-4 typewriter">
              <h3>Hi How are you?</h3>
            </div>
            <h1>I' am <br> Jericho Jade B. Madolid </h1><h3> Nice to meet you.</h3>
            <p><a class="btn btn-outline-light bg-main-color rounded-pill mt-2" href="#about" role="button"><strong>More about me</strong></a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item for-slide2">
        <div class="container">
          <div class="carousel-caption text-start">
            <div class="col-sm-4 typewriter">
              <h3>I can help you!</h3>
            </div>
            <h1>I' am <br> A web developer </h1><h3> I love building web applications</h3>
            <p><a class="btn btn-outline-light bg-main-color rounded-pill mt-2" href="#project" role="button"><strong>See my projects</strong></a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item for-slide3">
        <div class="container">
          <div class="carousel-caption text-start">
            <div class="col-sm-4 typewriter">
              <h3 class>Its my passion!</h3>
            </div>
            <h1>I' am <br> committed to build </h1> <h3>and maintain reliable web applications.</h3>
            <p><a class="btn btn-outline-light bg-main-color rounded-pill mt-2" href="#contact" role="button"><strong>Say Hello</strong></a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <!--About Me Section--->
  <div class="container marketing mb-4">
    <h5 class="featurette-heading mb-5 mt-0" style="text-align: center;" id="about">Coding is something I enjoy doing.</h5>
    <div class="row">
      <div class="col-md-8">
        <h4 class="text-center pt-4">
          I 'am currently a 4th year college taking up Bachelor of Science in Information Technology, I have taken many lessons in software development specially in web development. 
          Because of this pandemic, my schedule has become more flexible and it allows me to build web applications.
      </h4>
      </div>
      <div class="col-md-4 text-center mx-auto d-block pt-1">
        <img src="images/jericho.jpg" class="rounded-circle border border-dark mb-3" style="text-align: center;" width="200" height="200">
        <div class="row">
          <a href="images/Jericho Jade Madolid - Resume.pdf" target="_blank">
            <button class="btn btn-outline-dark rounded-pill"><strong>Download my CV</strong></button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Container ng mga SKILLS
  ================================================== -->
  <h6 class="featurette-heading mb-3 mt-0 text-center">Languages I learned</h6>
  <div class="container marketing shadow rounded" style="background-color: blueviolet; padding: 10px; color: white;">
    
    <div class="row text-center">
      <div class="col-md-2">
        <img src="images/HTML.png" class="bd-placeholder-img rounded-circle" width="150" height="150">
        <h2>HTML 5</h2>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-md-2">
        <img src="images/css3.png" class="bd-placeholder-img rounded-circle" width="150" height="150">
        <h2>CSS 3</h2>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-2">
        <img src="images/jslogo.png" class="bd-placeholder-img rounded-circle" width="150" height="150">
        <h2>JavaScript</h2>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-md-2">
        <img src="images/PHP.svg" class="bd-placeholder-img rounded-circle" width="150" height="150">
        <h2>PHP</h2>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-md-2">
        <img src="images/mysql.svg" class="bd-placeholder-img rounded-circle" width="150" height="150"">
        <h2>MySQL</h2>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-md-2">
        <img src="images/bootstrap.svg" class="bd-placeholder-img rounded-circle" width="150" height="150">
        <h2>Bootstrap</h2>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

    <!-- START THE FEATURETTES -->
  <div class="container marketing mt-3 text-center" id="project">

    <hr class="featurette-divider mb-4" id="about">
    <h2 class="featurette-heading mb-2 mt-0" style="text-align: center;">My Recent Projects</h2>
    <h4 class="mb-5 mt-0" style="text-align: center; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Here are some of my projects I've worked on recently</h4>
    <div class="row featurette text-light text-center">
        <div class="row mb-3">
            <div class="card mx-auto mb-3 shadow card-bg conImage" style="width: 21rem;">
              <img src="images/PaymentSystem.png" style="width: auto; height: 250px;" class="card-img-top img-fluid mt-2" alt="Jericho Jade">
              <div class="card-body">
              <h4 class="card-title"><strong>Payment System</strong></h4>
              <p class="card-text">Fully - responsive web application equipped with SMS Notification feature designed for both public and private high schools.</p>
              </div>
              <div class="overlay">
                <div class="text"><a href="https://enhspaymentsystem.herokuapp.com" class="btn btn-lg rounded-pill btn-outline-light bg-main-color">Visit Website</a></div>
              </div>
          </div>

          <div class="card mx-auto mb-3 shadow card-bg conImage" style="width: 21rem;">
            <img src="images/GradingSystem.png" style="width: auto; height: 250px;" class="card-img-top img-fluid mt-2" alt="Jericho Jade">
            <div class="card-body">
            <h5 class="card-title">Elementary Grading System</h5>
            <p class="card-text">A system designed for grade school teachers and students to easily manage grades and view online.</p>
            </div>
            <div class="overlay">
              <div class="text"><a href="https://elemgradingsystem.herokuapp.com/" class="btn btn-lg rounded-pill btn-outline-light bg-main-color">Visit Website</a></div>
            </div>
        </div>

        <div class="card mx-auto mb-3 shadow card-bg conImage" style="width: 21rem;">
          <img src="images/eerrs.png" style="width: auto; height: 250px;" class="card-img-top img-fluid mt-2" alt="Jericho Jade">
          <div class="card-body">
          <h5 class="card-title">Event Equipment Reservation</h5>
          <p class="card-text">A website for event equipment for rent and reservation.</p>
          </div>
          <div class="overlay">
            <div class="text">Website not yet deployed</div>
          </div>
      </div>
        </div>
        <div class="row text-center">
          <div class="col">
            <button class="btn btn-lg btn-outline-light bg-main-color rounded-pill">I'am excited to show you more soon!</button>
          </div>
        </div>
    </div>
  </div>
  <div class="container marketing">
    <hr class="featurette-divider" id="contact">
    <h2 class="featurette-heading mb-5 mt-0" style="text-align: center;">Thank you for taking the time, How can I help you today?</h2>
    <div class="row featurette">
      <div class="col-md-5">
        <img src="images/coffee.jpg" style="width: 500px; height: 500px;" class="shadow mb-5 bg-white rounded img-fluid">
      </div>
      <div class="col-md-7">
        <form action="includes/sendEmail.php" class="needs-validation" method="POST" novalidate>
          <div class="mb-3">
            <label class="form-label lead"><strong>Fullname</strong></label>
            <input type="email" class="form-control" name="name" placeholder="Your fullname" required="required" />
          </div>
          <div class="mb-3">
            <label class="form-label lead"><strong>Email address</strong></label>
            <input type="email" class="form-control" name="email" placeholder="Your email address" required="required" />
          </div>
          <div class="mb-3">
            <label class="form-label lead"><strong>Subject</strong></label>
            <input type="email" class="form-control" name="subject" placeholder="Enter a subject" required="required" />
          </div>
          <div class="mb-3">
            <label class="form-label lead"><strong>Message</strong></label>
            <textarea class="form-control" rows="7" name="message" required="required" ></textarea>
          </div>
          <div class="mb-3 text-center">
            <button type="submit" class="btn btn-outline-light bg-main-color btn-lg rounded-pill" name="send">Submit</button>
          </div>
        </form>
      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <div class="mb-3">
      <a href="https://www.facebook.com/aegon.madolid/" target="_blank" class="card-link"><img src="images/facebook.png" width="25px"></a>
      <a href="https://www.instagram.com/jericho.jade/" target="_blank" class="card-link"><img src="images/instagram.webp" width="25px"></a>
      <a href="https://github.com/Saserdote" target="_blank" class="card-link"><img src="images/github.png" width="25px"></a>
      <a href="https://www.linkedin.com/in/jericho-jade-madolid-12885568/" target="_blank" class="card-link"><img src="images/linkedin.png" width="25px"></a>
      <a href="https://www.facebook.com/aegon.madolid/" target="_blank" class="card-link"><img src="images/twitter.png" width="25px"></a>
    </div>
    Copyright &copy; 2020 - <script>document.write(new Date().getFullYear());</script> All rights reserved
  </footer>
</main>

  <script src="Assets/js/bootstrap.bundle.min.js"></script> 
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>  
  </body>
</html>