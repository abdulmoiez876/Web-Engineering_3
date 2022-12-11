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

    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./.css">

    <style>
        form {

            padding: 40px 80px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 1%;
        }

        .message {
            width: 50%;
            text-align: center;
            padding: 10px;
            position: absolute;
            margin-top: -10px;
            margin-left: 340px;
            background-color: rgb(144, 182, 231);
        }
    </style>
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
                            <a class="nav-link active text-light" href="./contactUs.php">Contact Us</a>
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

    <h5 class='message'><?php echo $message ?></h5>

    <!--Section: Contact v.2-->
    <section style="margin-top: 100px;" class="mb-4">
        <!-- <div class="container"> -->

        <div class="row" style="padding: 50px;">
            <form id="contact-form" name="contact-form" action="./contactUs.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <div class="text-center text-md-left">
                    <button class="btn btn-primary" type="submit" name='send'>Send</button>
                </div>
            </form>
            <!-- </div> -->

    </section>
    </div>
    <!--Section: Contact v.2-->
</body>

</html>