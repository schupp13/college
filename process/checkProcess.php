<?

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
