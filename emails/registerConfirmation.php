<?php

$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>Registration Confirmation Email</title>
</head>
<body>
<h1>Home of the Knights!</h1>
<p>Thank you for registering with Pseudo University! You can now login to register and pay for your courses.<br> Below is your profile information, please look it over to see if everyting is correct, if something doesn't appear correct, you can edit your profile when you login to your account.
</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <pschultz1988@gmail.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
