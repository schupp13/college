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
        <table class="table table-striped table-sm table-responsive table-hover">
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
