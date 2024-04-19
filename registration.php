<?php
require 'config.php';
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo 
        "<script>alert('Email already registered');</script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('', '$email', '$password')";
            mysqli_query($conn, $query);
            echo
            "<script>alert('Registration successfull');</script>";
        }
        else{
            echo
            "<script>alert('Password do not match');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Register Page</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="card" style="width: 20rem; height: 28rem;">
        <div class="card-body">
          <h5 class="card-title mx-auto my-2 mb-3 text-center" style="font-weight: bold;">Register Form</h5>
          <form class="" action="" method="post" autocomplete="off">
            <div class="mb-1">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" autocomplete="off" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
            </div>
            <button class="btn btn-primary my-1" type="submit" name="submit">Register</button>
          </form>
        </div>
      </div>
</body>
</html>


