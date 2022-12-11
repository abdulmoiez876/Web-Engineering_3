<?php
include './config.php';

$message = "We would be happy to hear from you! : )";
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $querySubmit = "INSERT INTO contactUs(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
    try {
        if(mysqli_query($connection, $querySubmit)) {
            $message = 'Feedback Submitted successfully!';
        }
        else {
            $message = 'Feedback could not be Submitted';
        }
    } catch (Exception $e) {
        $message = 'Feedback could not be Submitted';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/" />
    <link rel="stylesheet" href="./contactUs.css">
    <link href="bootstrap.min.css" rel="stylesheet" />
</head>

<body class="body">
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
              <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./global.php">Global</a></li>
                <li><a class="dropdown-item" href="./movies.php">Movies Video TV</a></li>
                <li><a class="dropdown-item" href="./space.php">Space</a></li>
              </ul>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" href="./world.php">World NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-secondary" href="./contactUs.php">Contact Us</a>
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

    <!-- <h5 class='message'><?php echo $message ?></h5> -->

    <!--Section: Contact v.2-->
    <section style="margin-top: 100px;" class=" card mb-4">
        <!-- <div class="container"> -->
        <div><h3 class="text-center my-4" style="font-weight:bold;font-family:Helvetica;">Contact Us</h3></div>
        <div class="row" style="padding-left: 50px; padding-right:50px;">
            <form id="contact-form" name="contact-form" action="./contactUs.php" method="POST">
                <div>
                  <div >
                      <label for="name" class="">Your name</label>
                      <input type="text" id="name" name="name" class="form-control" required>
                  </div>
                  <div class="mt-3">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                  </div>

                  <div class="mt-3">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>

                        <div class="mt-3">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                        </div>

                </div>

                <div class="text-center mt-4 text-md-left mb-4">
                    <button class="btn btn-outline-secondary" type="submit" name='send'>Submit</button>
                </div>
            </form>
            <!-- </div> -->

    </section>
    </div>
    <!--Section: Contact v.2-->
</body>

</html>