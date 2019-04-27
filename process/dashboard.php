<?php session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pseudo University</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm  navbar-light">
  <ul class="navbar-nav nav-justified w-100">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Academics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Admissions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Student Life</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Research</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Athletics</a>
    </li>
    <li class="nav-item signUpButton">
      <a class="nav-link btn btn-info" href="navPages/userRegister.php">Sign Up</a>
    </li>
    <li class="nav-item loginButton">
      <a class="nav-link btn btn-info">Sign Out</a>
    </li>

  </ul>
</nav>
    <header>
      <div class="jumbotron jumbotron-fluid" id="indexHeader">
      <div class="container text-center">
        <?
        echo '<h1 id=dashHeader> Welcome '.$_SESSION["firstName"].'!</h1>';
        echo '<p id="dashP">Home of the Knights</p>';
        ?>
      </div>
    </div>
    </header>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="../img/img_avatar1.png" alt="Card image">
        <div class="card-body">
          <h4 class="card-title"><?=$_SESSION["firstName"]?></h4>
          <h4 class="card-title"><?=$_SESSION["lastName"]?></h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">Edit Profile</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <a href="registerCourses.php" class="btn btn-info">Register For Courses</a>
    </div>
  </div>
</div>

      
  </body>
</html>
