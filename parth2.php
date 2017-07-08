<!DOCTYPE html>
<html lang="en">

<link rel="shortcut icon" type="image/png" href="/img/torusblue.png"/>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parth's Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="vendor/css/landing-page2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="#">Hey!</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#musicvid">Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
        <div class="container">
            <div class="intro-message">
                <h1>Thushan Puhalendran</h1>
                <h3>Testing Grounds</h3>
                <hr class="intro-divider">
                <ul class="list-inline intro-social-buttons">
                    <li class="list-inline-item">
                        <a href="http://www.github.com/thushanp" class="btn btn-secondary btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/thushan-puhalendran/" class="btn btn-secondary btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <section id="about" class="content-section-a">

        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">What is this?<br>Glad you asked</h2>
                    <p class="lead">Hey, I'm Thushan Puhalendran, a rising sophomore studying Applied Mathematics at Harvard University. Here's a temporary placeholder for my website - I'll probably be using this to host/test some various bits and pieces for projects I'm working on so it might be pretty messy for now until I get around to actually building it.</p>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <img class="img-fluid" src="img/Harvard.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
    </section>

    <section id="musicvid" class="content-section-b">
        <div class="container">
            <div class="row">
             <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cQ3HD_3C75M" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-5">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                    <h2 class="section-heading">Music<br>Acoustic Guitar</h2>
                    <p class="lead">I've been playing guitar for as long as I can remember, here's a quick sample of me at the Harvard Freshman Talent Show in 2016, feel free to let me know what you think.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="services" class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 push-lg-7">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Bowery/Cherokee<br>Twilio Automated Calling</h2>
                    <p class="lead"><p>
                Parth's voice is hosted at <a href="http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/parth.php">http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/parth.php</a>
                </p>
                <p>
                Audio Test:
                <br>
                <audio controls preload="none">
                    <source src="http://com.twilio.music.guitars.s3.amazonaws.com/Pitx_-_A_Thought.mp3" type="audio/mpeg">
                    Your browser does not support the audio tag. Contact Thushan.
                </audio>
                </p>
                </p>
                </div>
                <div class="col-lg-5 pull-lg-5">
                    <img class="img-fluid" src="img/bowery.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </section>
    <!-- /.content-section-b -->

    <section id="contact" class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Bored?<br>You should be.</h2>
                    <p class="lead">That's it for now I'm afraid, I'll get around to porting over my other projects onto here eventually. Go live life, play poker and check back again soon - that's what I'll be doing.</p>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <img class="img-fluid" src="img/poker.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </section>
    <!-- /.content-section-a -->

    <aside class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Contact me! <br>+1 617-515-9619</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">
                            <a href="https://github.com/thushanp" class="btn btn-secondary btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/thushan-puhalendran/" class="btn btn-secondary btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </aside>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Home</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a type="page-scroll" href="#about">About</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a type="page-scroll" href="#musicvid">Music</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a type="page-scroll" href="#services">Services</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a type="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <p class="copyright text-muted small">Copyright &copy; Thushan Puhalendran, 2017. All Rights Reserved</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
