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

  <title>Space NEWS</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />

  <link href="bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background-color: black;
      font-family: Helvetica, Arial, sans-serif;
    }

    .login-btn {
      margin-right: 30px;
    }

    .c-btn {
      color: white;
    }

    .oc-cat {
      gap: 3%;
      margin-top: 5%;
    }

    .c1 {
      margin-left: 3%;
    }

    .c-heading {
      margin-top: 10%;
    }

    .btn-read {
      width: 50%;
    }

    .read-more {
      font-size: 90%;
    }
  </style>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php"><img src="imgs/logo.png" /></a>
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <button class="btn btn-outline-secondary c-btn dropdown-toggle text-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./global.php">Global</a></li>
                  <li><a class="dropdown-item" href="./movies.php">Movies Video TV</a></li>
                  <li><a class="dropdown-item text-secondary" href="./space.php">Space</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" href="world.php">World NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" href="./contactUs.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="vr bg-light mx-4 mt-3"></a>
            </li>
            <li>
              <a class="nav-link active text-light" href="./newsletter.php">Receive Monthly Blog NEWS Letter</a>
            </li>
          </ul>
          <a href="./login.php" class="btn btn-outline-light login-btn">Login</a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="c-heading text-center">
      <h2 style="color: white; font-weight:bold">Space</h2>
    </div>

    <div class="row pt-4 g-0 oc-cat">

      <?php
      $spaceQuery = "SELECT * FROM space";
      $spaceExec = mysqli_query($connection, $spaceQuery);
      while ($spaceResult = mysqli_fetch_assoc($spaceExec)) {
      ?>
        <div class="card col-md-2 c1">
          <img src="<?php echo $spaceResult['img']?>" class="card-img-top" alt="space-img">
          <div class="card-body">
            <span><?php echo $spaceResult['date']?></span>
            <p class="text-dark"><b><?php echo $spaceResult['title']?></b></p>
            <span><a class="btn btn-read btn-dark" href="#"><small class="read-more">Read More</small></a></span>
          </div>
        </div>
      <?php
      }
      ?>


      <!-- <div class="card col-md-2">
        <img src="./imgs/2.jpg" class="card-img-top" alt="space-img">
        <div class="card-body">
          <span>October 06, 2022</span>
          <p class="text-dark"><b>North Korea on the Move</b></p>
          <span><a class="btn btn-read btn-dark" href="#"><small class="read-more">Read More</small></a></span>
        </div>
      </div> -->

    </div>
  </main>

  <script src="bootstrap.bundle.min.js"></script>
</body>

</html>