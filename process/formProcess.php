<?PHP session_start();?>
<?
include 'config.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstName = ucfirst(filter_var($_POST['firstName'], FILTER_SANITIZE_STRING));
$lastName = ucfirst(filter_var($_POST['lastName'], FILTER_SANITIZE_STRING));
$email = strtolower(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
$notes = filter_var($_POST['notes'], FILTER_SANITIZE_STRING);
$streetAddress = filter_var($_POST['streetAddress'], FILTER_SANITIZE_STRING);
$streetAddress2 = filter_var($_POST['streetAddress2'], FILTER_SANITIZE_STRING);
$city = ucwords(filter_var($_POST['city'], FILTER_SANITIZE_STRING));
$state = ucwords(filter_var($_POST['state'], FILTER_SANITIZE_STRING));
$postCode = filter_var($_POST['postCode'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

//calls function to see if there is already a student in the system with the same email
if(checkStudents($email)){
  $sqlInsert = "INSERT INTO students (studentFirstName, studentLastName, studentEmail, studentPhone, studentGender, studentTextArea, studentAddress, studentAddress2, studentCity, studentState, studentPostCode, studentPassword)
   VALUES('{$firstName}','{$lastName}','{$email}','{$phone}','{$gender}','{$notes}','{$streetAddress}','{$streetAddress2}','{$city}','{$state}','{$postCode}','{$password}')";

  if (mysqli_query($conn, $sqlInsert)) {
      header('Location: http://hello.schupp.webfactional.com/college/userSpecific/dashboard.php');
      echo "Account created successfully";
      require_once "sessionProcess.php";// creating a session
      createSession($email,$username);
      //Creating Session variables
    //sending user to dashboard

  } else {
      echo "Error: " . $sqlInsert . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);


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
