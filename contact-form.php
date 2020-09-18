<?php
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['subject'];



$formcontent="First Name: $first_name \n Last Name: $last_name  \n Message: $message \n  Mobile No: $phone  \n Email ID: $email  \n\n  ";
$recipient = "info@indiagateltd.com";
$subject = "Contact Query Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You ";
header("Refresh: 1; url=https://www.indiagateltd.com/thank-you.html");
 
//Print_r($_POST);

?>