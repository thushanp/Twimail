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
            <a class="navbar-brand" href="/index.html">Hey!</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#upload">Upload Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#call">Make A Call</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
        <div class="container">
            <div class="intro-message">
                <h1>Cherokee Acq./Bowery</h1>
                <h3>Parth</h3>
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
    <section id="upload" class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Upload your voice message</h2>
                    <p class="lead">1. Stages 1-4 are setting up your message, contact me if you need help at any stage <br>
                    2. Record your message through your Skype headset or your mobile phone <br>
                    3. Upload your message here (MP3 format preferred, there are free converters <a href="http://www.zamzar.com/">online</a> if you need) <br>
                    4. Listen to your recording here to make sure it worked and sounds the way you like. If the upload worked, the link should open a music player in your browser. If the link downloads the file, then your format is incorrect and you need to convert to MP3.</p>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <img class="img-fluid" src="img/bearbull.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
    </section>

    <section id="call" class="content-section-b">
        <div class="container">
            <div class="row">
             <div class="col-lg-5 offset-lg-2">
                    <img class="img-fluid" src="img/bowery.jpg" alt="">
                </div>
            <div class="col-lg-5">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                    <h2 class="section-heading">Call Someone</h2>
                    <p class="lead">Now that you're set up, you don't need to repeat Steps 1-4 again until you want to upload a new voice message or you close your browser. <br><br>
                    5. You can make a call here by typing in the number in Oklahoma you want to dial in the format +14054355647 (no spaces, hyphens, etc.)</p>
                </div>
            </div>

        </div>
    </section>

    <aside class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Contact Thushan if anything breaks<br>+1 617-515-9619</h2>
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
                    <a href="\index.html">Home</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a type="page-scroll" href="#upload">Upload Message</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a type="page-scroll" href="#call">Make A Call</a>
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
