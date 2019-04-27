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
            <h4>Select the check box in the far right to add it to the Register list.</h4>
            <?
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
                  // output data of each row
                  ?>
                  <div class="table-responsive align-items-center">
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


                  <?
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                      echo'<td>'.$row["courseNumber"].'</td>';
                      echo'<td>'.$row["courseName"].'</td>';
                      echo'<td width="10%">'.$row["instructor"].'</td>';
                      echo'<td width="15%">'.$row["days"].'</td>';
                      echo'<td>'.$row["description"].'</td>';
                      echo'<td>'.$row["price"].'</td>';
                      echo'<td>'.$row["credits"].'</td>';
                      echo '<td>
                      <form class="form-group"action="courseProcess.php" method="post" style="background-color:transparent; padding:0; margin:0">
                      <div class="form-group">
                        <input style="background-color:"#65C0BA" class="form-control" type="checkbox" name="class[]" value="'.$row['id'].'">


                      </td>';
                    echo "</tr>";

                  }
                  ?>
                  <button type="submit" name="button">Register Courses</button>
                  </div>
                </form>
                  </table>
                </div><?
              } else {
                  echo "0 results";
              }
              mysqli_close($conn);
            ?>
          </div>
        </div>
      </div>
    </section>
