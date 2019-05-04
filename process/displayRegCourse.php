
<h1>Current Registered Courses</h1>
<form class="form-group"action="dropProcess.php" method="post" style="background-color:transparent; padding:0; margin:0">
<table class="table table-striped table-sm table-responsive table-hover">
<tr class="text-center">
<th>Course Number</th>
<th>Course Name</th>
<th>Instructor</th>
<th>Time Period</th>
<th>Description</th>
<th>Price</th>
<th>Credits</th>
<th>Drop Course</th>
</tr>
<?php
include 'config.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT course_id FROM coursesSelected WHERE student_id='{$_SESSION['id']}'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$sql2 = "SELECT * FROM classes WHERE id = '{$row["course_id"]}'";
$result2 = mysqli_query($conn, $sql2);
while($row2 = mysqli_fetch_assoc($result2)){
echo "<tr>";
  echo'<td>'.$row2["courseNumber"].'</td>';
  echo'<td>'.$row2["courseName"].'</td>';
  echo'<td width="10%">'.$row2["instructor"].'</td>';
  echo'<td width="15%">'.$row2["days"].'</td>';
  echo'<td>'.$row2["description"].'</td>';
  echo'<td>'.$row2["cost"].'</td>';
  echo'<td>'.$row2["credits"].'</td>';
  // echo "<td> class='form-control' type='checkbox' name='class[{$row["id"]}]'></td>";
  echo '<td>
   <div class="form-group">
    <input style="background-color:"#65C0BA" width="50%"class="form-control" type="checkbox" name="class[]" value="'.$row['course_id'].'">
  </div>
   </td>';

echo '</tr>';
            }
        }
      }
?>
</table>
<button type="submit" name="button" class="btn btn-danger btn-large">Drop Course</button>
</form>
