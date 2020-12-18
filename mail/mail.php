<?php $FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $LastName \n Message: $message";
$recipient = "teof95@gmail.com";
$subject = "contactform";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>