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
          <a class="nav-link" href="../index.php">Home</a>
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
          <a class="nav-link btn btn-info active" href=>Sign Up</a>
        </li>
        <li class="nav-item loginButton">
            <a href="signOutProcess.php"class="nav-link btn btn-info">Sign Out</a>
        </li>
      </ul>
    </nav>
    <header>
      <div class="jumbotron jumbotron-fluid" id="indexHeader">
      <div class="container text-center">
        <?php
        echo '<h1 id=courseJumbo> Welcome '.$_SESSION["firstName"].'!</h1>';
        ?>
        <p id="coursep">Let's register for your courses!</p>
      </div>
    </div>
    </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Choose from the list of classes below.</h4>
            <?php
            include 'config.php';
            // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
              // Check connection
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              $sql = "SELECT * FROM classes";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                  // output data of each row?>
                  <div class="table-responsive align-items-center">
                    <form class="form-group"action="courseProcess.php" method="post" style="background-color:transparent; padding:0; margin:0">
                    <table class="table table-striped">
                    <tr class="text-center">
                      <th>Course Number</th>
                      <th>Course Name</th>
                      <th>Instructor</th>
                      <th>Time Period</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Credits</th>
                      <th>Register</th>
                    </tr>
                  <?php
                  while ($row = mysqli_fetch_assoc($result)) {
                    require_once "checkProcess.php";
                    $check = checkCourses($_SESSION["id"], $row["id"]);
                    if ($check) {
                      // code...
                      echo "<tr>";
                      echo'<td>'.$row["courseNumber"].'</td>';
                      echo'<td>'.$row["courseName"].'</td>';
                      echo'<td width="10%">'.$row["instructor"].'</td>';
                      echo'<td width="15%">'.$row["days"].'</td>';
                      echo'<td>'.$row["description"].'</td>';
                      echo'<td>'.$row["cost"].'</td>';
                      echo'<td>'.$row["credits"].'</td>';
                      echo '<td>
                      <div class="form-group">
                        <input style="background-color:"#65C0BA" margin:"25px" width="50%"class="form-control" type="checkbox" name="class[]" value="'.$row['id'].'">
                        </div>
                      </td>';
                      echo "</tr>";
                  }
                } ?>
                  </table>
                  <button type="submit" name="button" class="btn btn-info btn-lg">Register Courses</button>
                  </form>
                </div><?php
              } else {
                  echo "0 results";
              }
              mysqli_close($conn);
            ?>
          </div>
        </div>
      </div>
    </section>
