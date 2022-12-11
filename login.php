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
            header("Location: index.php");
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
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./login.css">

</head>

<body>
    <form action="./login.php" method="POST" class="card mt-4">
        <div class="text-center mb-3"><img class="card-img-top" src="./imgs/newsletter-logo.png"/></div>
        <div class="mb-3">
            <label for="username" class="form-label"><b>User Name</b></label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
            <span id="emailHelp" class="form-text text-secondary">We'll never share your username with anyone else.</span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"><b>Password</b></label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <div>
        <button type="submit" name="login" class="btn my-4">Login</button>
        <button type="submit" name="signup" class="btn my-4">Sign Up</button>
        </div>
        
    </form>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>