<?php session_start();?>
<?
include 'config.php';
// Create connection


foreach($_POST['class'] as $class) {
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO coursesSelected (student_id, course_id)
  VALUES ('{$_SESSION['id']}','{$class}')";



  if (mysqli_query($conn, $sql)) {
  
      header('Location: http://hello.schupp.webfactional.com/college/process/dashboard.php');
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}


?>
