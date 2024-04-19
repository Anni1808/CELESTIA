<?php 
require 'config.php';
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = "true";
            $_SESSION["id"] =$row["id"];
            header("Location: front.html");
        }
        else{
            echo
            "<script>alert('Wrong Password');</script>";
        }
    }
    else{
        echo
        "<script>alert('User not registered');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet">

</head>
<body>
  <div id="controls"></div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Login Page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> <!-- Updated class to justify-content-end -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

      <div class="card" style="width: 20rem; height: 26rem;">
        <div class="card-body">
          <h5 class="card-title mx-auto my-4 text-center" style="font-weight: bold;">Login Form</h5>
          <form class="" action="" method="post" autocomplete="off">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" autocomplete="off" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="alert alert-danger" role="alert" id="error" style="display: none;"></div>
            <div class="alert alert-success" role="alert" id="success" style="display: none;"></div>
            <button type="submit" name="submit" class="btn btn-primary my-2">Login</button>
          </form>
        </div>
      </div>
</body>
</html>

