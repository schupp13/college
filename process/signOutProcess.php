<?session_start();?>
<?php

session_unset();

// destroy the session
session_destroy();

header('Location: http://hello.schupp.webfactional.com/college/index.php');
 ?>
