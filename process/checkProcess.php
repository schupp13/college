<?
//checks to see if email is already in the students Table
function checkStudents ($emailCheck) {
  include 'config.php';
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sqlSelect = "SELECT studentEmail FROM students";
  $resultSelect = mysqli_query($conn, $sqlSelect);
  $test=true;
  if (mysqli_num_rows($resultSelect) > 0) {
      // output data of each row

      while($row = mysqli_fetch_assoc($resultSelect)) {
        if($row["studentEmail"] == $emailCheck){
        $test=false;
      }
  }
  }
  mysqli_close($conn);

  return $test;
}
?>
<?
//checks to see if student is already signed up for a course.
function checkCourses($studentId, $courseId){
  include 'config.php';
  $currentCourses = array('');
  // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT course_id FROM coursesSelected WHERE student_id='{$studentId}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      array_push($currentCourses,$row['course_id']);
    }
} else {
    echo "0 results";
}
mysqli_close($conn);

return $currentCourses;
}
?>
