<?php
include './config.php';
$message = 'Welcome!';
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    try {
        $queryExec = mysqli_query($connection, $query);
        $message = "User Created successfully!";
    }
    catch(Exception $e) {
        $message = "User could not be created!";
    }
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    try {
        $queryExec = mysqli_query($connection, $query);
        $queryResult = mysqli_fetch_assoc($queryExec);
        if(!$queryResult) {
            $message = "User does not exist!";
        }
        else {
            $message = "User Logged In!";
            header("Location: index.html");
        }
    }
    catch(Exception $e) {
        $message = "Could not log In!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./login.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>
    <h5 class='message'><?php echo $message?></h5>


    <form action="./login.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
            <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
    </form>
</body>

</html>