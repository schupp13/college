<?PHP session_start();?>
<?

function createSession($email, $password){
      include 'config.php';
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        
          if($row["studentEmail"] == $email && $row['studentPassword'] == $password){

            $_SESSION["firstName"] = $row["studentFirstName"];
            $_SESSION["lasName"] = $row["studentLastName"];
            $_SESSION["email"] = $row["studentEmail"];
            $_SESSION["phone"] = $row["studentPhone"];
            $_SESSION["gender"] = $row["studentGender"];
            $_SESSION["notes"] = $row["studentTextArea"];
            $_SESSION["streetAddress"] = $row["streetAddress"];
            $_SESSION["streetAddress2"] = $row["streetAddress2"];
            $_SESSION["city"] = $row["studentCity"];
            $_SESSION["state"] = $row["studentstate"];
            $_SESSION["postCode"] = $row["studentPostCode"];
            $_SESSION["password"] = $row["studentPassword"];
        }
      }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);



}
?>
