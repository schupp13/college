<?php session_start();?>
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
require_once "checkProcess.php";
$check = checkStudents($email);
// if the the function returns true then the studnet is not in the system already
if($check){
  $sql= "INSERT INTO students (studentFirstName, studentLastName, studentEmail, studentPhone, studentGender, studentTextArea, studentAddress, studentAddress2, studentCity, studentState, studentPostCode, studentPassword)
   VALUES('{$firstName}','{$lastName}','{$email}','{$phone}','{$gender}','{$notes}','{$streetAddress}','{$streetAddress2}','{$city}','{$state}','{$postCode}','{$password}')";

  if (mysqli_query($conn, $sql)) {
    require_once "loginProcess.php";
    loginSession($email,$password);

  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}else{
    $_SESSION['alreadyUser'] = "<h1 style='color:red'>That email is already a memeber in the account.</h1> ";
    header('Location: http://hello.schupp.webfactional.com/college/navPages/userRegister.php');

}
mysqli_close($conn);
?>
