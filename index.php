<?php
include './config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.104.2" />

  <title>Journalwide</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />

  <link href="bootstrap.min.css" rel="stylesheet" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, 0.1);
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
      box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
        inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    body {
      background-color: rgb(25, 23, 23);
    }

    .btp {
      text-decoration: none;
      color: white;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="imgs/logo.png" /></a>
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" href="#">All Stories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" href="#">World NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" href="#">About ME</a>
            </li>
            <li class="nav-item"></li>
          </ul>
          <ul class="me-auto mb-md-0 justify-content-end nav">
            <li class="nav-item">
              <div class="vr bg-light mt-2 align-middle"></div>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" href="#">Receive Monthly Blog NEWS Letter</a>
            </li>
            <li>
              <a href="./login.php" class="btn btn-primary">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <?php
        $queryCarouselData = "SELECT * FROM mainCarousel";
        $execCarouselData = mysqli_query($connection, $queryCarouselData);
        while ($resultCarouselData = mysqli_fetch_assoc($execCarouselData)) {
        ?>
          <div class="carousel-item active">
            <img src=<?php echo "$resultCarouselData[img]" ?> width="100%" height="100%" />
            <div class="container">
              <div class="carousel-caption text-start">
                <h1><?php echo "$resultCarouselData[description]" ?></h1>
                <p><?php echo "$resultCarouselData[date]" ?></p>
                <p><a class="btn btn-lg btn-light" href="#">Read More</a></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        <!-- 
                  <div class="carousel-item">
                    <img src="imgs/2.jpg" width="100%" height="100%" />
                    <div class="container">
                      <div class="carousel-caption text-start">
                        <h1>North Korea on the Move</h1>
                        <p>October 6, 2022</p>
                        <p>
                          <a class="btn btn-lg btn-light" href="#">Read More</a>
                        </p>
                      </div>
                    </div>
                  </div>
        
                  <div class="carousel-item">
                    <img src="imgs/3.jpg" width="100%" height="100%" />
                    <div class="container">
                      <div class="carousel-caption text-start">
                        <h1>The West could Annihilate Russia’s Troops</h1>
                        <p>October 13, 2022</p>
                        <p>
                          <a class="btn btn-lg btn-light" href="#">Read More</a>
                        </p>
                      </div>
                    </div>
                  </div> -->


      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="imgs/content1.jpg" width="90%" /><br /><br />
          <p>Netflix is Growing-Up</p>
          <br />
          <p><a class="btn btn-secondary" href="#">READ NOW</a></p>
        </div>
        <!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="imgs/content2.jpeg" width="90%" /><br /><br />
          <p>It’s a me, Chris Pratt!</p>
          <p><a class="btn btn-secondary" href="#">READ NOW</a></p>
        </div>
        <!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="imgs/content3.png" width="90%" /><br /><br />
          <p>A Booming Birthday Gift for Putin</p>
          <p><a class="btn btn-secondary" href="#">READ NOW</a></p>
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <p class="lead fw-medium">October 27, 2022</p>
          <h2 class="featurette-heading fw-bold lh-1 text-light">
            Will The Netherlands still Exist in 100 Years?
          </h2>
          <p class="lead text-light">
            The Netherlands is the world’s second-largest producer of
            greenhouse gases. The country also has an unfortunate propensity
            for natural flooding and is therefore highly susceptible to rising
            sea levels and other consequences of climate change.
          </p>
          <button type="button" class="btn btn-outline-light p-2">
            Read More
          </button>
        </div>
        <div class="col-md-5">
          <img src="imgs/content4.png" width="100%" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-bold lh-1 text-light">
            Hey there, I'm Carlo!
          </h2>
          <br />
          <p class="lead text-light">
            I love writing about what’s happening across the globe and giving
            my take on<br />it. I often talk with others about what’s
            happening, which turns into long<br />talks… exciting talks.<br />
            <br />I’ve always wanted to write blog articles, but I never
            really went for it until<br />now. I mainly write my opinions
            about global news, but I also like to write<br />about Tech! My
            writing style is primarily conversational, making it easy to<br />follow.
          </p>
          <br />
          <p>
            <button type="button" class="btn btn-outline-light p-2">
              About Me
            </button>
          </p>
        </div>
        <div class="col-md-5">
          <img src="imgs/aboutme.jpg" width="90%" height="90%" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <!-- /END THE FEATURETTES -->
    </div>

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#" class="btp">Back to top</a></p>
      <p>&copy; 2022 Journalwide. All rights reserved</p>
    </footer>
  </main>

  <script src="bootstrap.bundle.min.js"></script>
</body>

</html>