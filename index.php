<!DOCTYPE html>
<html lang="en">

<head>
  <title>About - Krishna Mitesh Gurung</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
  <link rel="icon" href="images/title-icon.png">


<body>


  <div class="container-fluid">
    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <i class="fas fa-user-tie"><a class="navbar-brand mx-2" href="#">
            <h5><strong>Krishna Mitesh Gurung</strong></h5>
          </a></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home <i class="fas fa-home fa-fw"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About <i class="fas fa-user-circle fa-fw"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolios">Portfolios <i class="far fa-file-powerpoint fa-fw"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact <i class="far fa-envelope fa-fw"></i></a>
            </li>
          </ul>

          <!--
      <span class="navbar-text">
        Navbar text with an inline element
      </span>

    -->

      </nav>

    </section>
  </div>



  <div class="row row1 text-white">
    <div class="col-lg-7">
      <!-- image slide show -->
      <div class="container mt-4 mb-4">
        <section id="imagesslider">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block h-100" src="images/mitesh.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block " src="images/mitesh2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block " src="images/mitesh3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </section>
      </div> <!-- end of container -->
    </div> <!-- end of column -->


    <!-- about page -->
    <div class=col-lg-5>
      <section id="about">
        <h4 class="text-center mt-4">About <i class="fas fa-user-circle fa-fw"></i></h4>
        <div class="container about_container mt-5">
          <address>
            <h3 id="name">Krishna Mitesh Gurung</h3></br>
            <h4 id="career">Web Developer</h4>
            <a id="myemail" href="mailto:webmaster@example.com">mitesh_grg@hotmail.com</a>
            <ul id = "p_links">
              <li><a href="https://github.com/kmitesh" target="_blank">GitHub</a></li>
              <li>|</li>
              <li><a href="https://uk.linkedin.com/in/mitesh-gurung-738456ab" target="_blank">linkedin</a></li>
              <li>|</li>
              <li><a href="cv.html" target="_blank">CV</a></li>
            </ul>
          </address>
          <p class="about_paragraph">
            A self-taught developer, passionate about new emerging technology trends.
            Learning to be more creative and always researching for a better solution to the problem in a way to improve my coding skills.
            A foundation degree holder in software development wanting to explore, experience and willing to face many challenges in the IT Company.

          </p>
      </section>
    </div>

  </div> <!-- end of column -->

  </div> <!-- end of row -->




  <!-- portfolio page -->
  <section id="portfolios">
    <h4 class="text-center mt-5 mb-5"><i class="fas fa-arrow-circle-down fa-fw"></i> Portfolios <i class="fas fa-arrow-circle-down fa-fw"></i></h4>
    <div class="container">

      <hr>

      <div class="row">

        <div class="col col-xl-6 col-lg-6 col-md-6 col-12">

          <div class="card cardSet2 text-white">
            <div class="card-body text-center"> <img src="images/vanilla-js.png" class="img-fluid" alt="Cakes" />
              <h5 class="card-title mt-3 text-dark">Vanilla Js Form</h5>
              <p class="card-text mt-4 text-secondary">A simple interactie user input field build using vanilla js where user can insert data and delete.</p>
              <a href="https://github.com/kmitesh/vanilla-js-form" class="btn btn-success">GitHub link</a>
              <a href="https://stoic-clarke-22521f.netlify.app/" class="btn btn-primary">Website</a>
            </div>
          </div>

        </div> <!-- end of col -->

        <div class="col col-xl-6 col-lg-6 col-md-6 col-12">

          <div class="card cardSet2 text-white">
            <div class="card-body text-center"> <img src="images/mitisha.png" class="img-fluid" alt="About Horse Equipments" />
              <h5 class="card-title mt-3 text-dark">Bootstrap 4 Project</h5>
              <p class="card-text mt-4 text-secondary">Developed personal portfolio for my client using css 3 flexbox, media queries and grid layout.</p>
              <a href="https://github.com/kmitesh/Mitisha" class="btn btn-success">GitHub link</a>
              <a href="https://blissful-mcclintock-e2b5b5.netlify.app/" class="btn btn-primary">Website</a>
            </div>
          </div>

        </div> <!-- end of col -->


      </div> <!-- end of row -->

    </div> <!-- end of card -deck -->
    <hr>
    </div> <!-- end of a container -->

  </section>



  <!-- contact us page -->
  <section id="contact">

    <h4 class="text-center mt-3 mb-4">Contact <i class="far fa-envelope fa-fw"></i></h4>

    <hr>

    <div class="container">

      <form method="post" action="" role="form">

        <div class="form-group">
          <label for="contact name">Name</label>
          <input type="text" class="form-control" id="contactname" placeholder="Enter Name">
        </div>

        <div class="form-group">
          <label for="contactmail">Email Address</label>
          <input type="email" class="form-control" id="contactemail" placeholder="Enter Email">
        </div>

        <div class="form-group">
          <label for="contactmail">Subject</label>
          <input type="text" class="form-control" id="contactsubject" placeholder="Enter Subject">
        </div>

        <div class="form-group">
          <label for="contactmessage">Message </label>
          <textarea class="form-control" id="contactmessage" rows="6"></textarea>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary mb-4">Submit</button>
        </div>

      </form>
    </div>

  </section>



  <!-- footer section -->
  <section id="footer">

    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12 mt-5 mb-2">
          <h6>Follow me on <i class="fab fa-staylinked"></i></h6>
        </div>
        <div class="col-lg-12">
          <a href=""><i class="fab fa-instagram fa-lg fa-fw"></i></a>
          <a href=""><i class="fab fa-facebook fa-lg fa-fw"></i></a>
          <a href=""><i class="fab fa-github fa-lg fa-fw"></i></a>
          <a href=""><i class="fab fa-linkedin-in fa-lg fa-fw"></i></a>
        </div>
        <div class="col-lg-12 mt-3 mb-3 text-secondary">
          <p id="paragraphfooter">Copyright<i class="far fa-copyright fa-fw"></i>2019 | All rights reserved | This website is designed/developed by Krishna Mitesh Gurung</p>
        </div>

      </div>
    </div>


  </section>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
