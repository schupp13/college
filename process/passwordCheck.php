<?

if ($_POST["password"] === $_POST["confirmPassword"]) {

  $_SESSION['passwordMatch'] = "Password is confirmed";
   header('Location:http://hello.schupp.webfactional.com/college/navPages/userRegister.php');
}
else {
  $_SESSION['passwordNoMatch'] = "Password is confirmed";
   header('Location: http://hello.schupp.webfactional.com/college/navPages/userRegister.php');
}

?>
