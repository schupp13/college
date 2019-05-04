<?php session_start();?>
<?
$emailLogin = strtolower(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$passwordLogin = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
loginSession($emailLogin,$passwordLogin);


function loginSession($userEmail, $userPassword){
      include 'config.php';
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql ="SELECT * FROM students WHERE studentEmail = '{$userEmail}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          if($row["studentEmail"] == $userEmail && $row['studentPassword'] == md5($userPassword)){
            $_SESSION["id"]= $row["id"];
            $_SESSION["firstName"] = $row["studentFirstName"];
            $_SESSION["lastName"] = $row["studentLastName"];
            $_SESSION["email"] = $row["studentEmail"];
            $_SESSION["phone"] = $row["studentPhone"];
            $_SESSION["gender"] = $row["studentGender"];
            $_SESSION["notes"] = $row["studentTextArea"];
            $_SESSION["streetAddress"] = $row["studentAddress"];
            $_SESSION["streetAddress2"] = $row["studentAddress2"];
            $_SESSION["city"] = $row["studentCity"];
            $_SESSION["state"] = $row["studentState"];
            $_SESSION["postCode"] = $row["studentPostCode"];
            $_SESSION["password"] = $row["studentPassword"];
            $_SESSION["image"] = $row["studentImage"];
            header('Location: http://hello.schupp.webfactional.com/college/process/dashboard.php');
        }else{

        if($row["studentEmail"] == $userEmail && $row['studentPassword'] != $userPassword){
          $_SESSION["wrongPassword"] ="That is the wrong password. Please reset your password.";
          header('Location: http://hello.schupp.webfactional.com/college/navPages/userRegister.php');
        }
        if($row["studentEmail"] != $userEmail && $row['studentPassword'] == $userPassword){
          $_SESSION["noUser"] = "<h1 style='color:red'>You are currently not registered Please fill out the form below to register.</h1>";
          header('Location: http://hello.schupp.webfactional.com/college/navPages/userRegister.php');
        }
      }


}
}else {
   echo "0 results";
}
mysqli_close($conn);
}
?>
