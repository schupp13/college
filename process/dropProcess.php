<?php session_start();?>
<?php
include 'config.php';
// Create connection
if ($_POST['class'] > 0) {
    foreach ($_POST['class'] as $class) {
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // sql to delete a record
        $sql = "DELETE FROM coursesSelected WHERE course_id='{$class}' AND student_id='{$_SESSION['id']}'";

        if (mysqli_query($conn, $sql)) {
            header('Location: http://hello.schupp.webfactional.com/college/process/dashboard.php');
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
} else {
    header('Location: http://hello.schupp.webfactional.com/college/process/dashboard.php');
}
mysqli_close($conn);
?>
