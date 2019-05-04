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
    <link rel="stylesheet" href="../css/dash.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

  </head>
  <body>
    <header>
      <div class="jumbotron jumbotron-fluid " id="indexHeader">
      <div class="container text-center">
        <?
        echo '<h1 id="dashHeader">'.$_SESSION["firstName"]. " ".$_SESSION["lastName"].'</h1>';
        echo '<h2>Student Dashboard</h2>';

        echo '<img src="../img/horse.png" alt="" style="width:20%;">';
        echo '<h4 id="dashP">Home of the Knights</h4>';
        ?>
      </div>
    </div>
  </header>
<div class="container mt-3">
  <h2><?=$_SESSION["firstName"]."'s "?>Dashboard</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#profile">Your Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#registeredCourses">Registered Courses</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#displayCourses">Eligiable Courses</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#displayCourses">Pay For Courses</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="signOutProcess.php">Sign Out</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="profile" class="container tab-pane active"><br>
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h3>Your Profile</h3>
              <? include 'displayProfile.php'?>
          </div>
          </div>
        </div>
    </div>
    <div id="registeredCourses" class="container tab-pane fade"><br>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Your Courses</h3>
            <? include 'displayRegCourse.php'?>
          </div>
        </div>
      </div>
    </div>
    <div id="displayCourses" class="container tab-pane fade"><br>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Eligiable Courses</h3>
            <? include 'displayCourses.php'?>
          </div>
        </div>
        </div>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Eligiable Courses</h3>
            <? include 'displayCourses.php'?>
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
