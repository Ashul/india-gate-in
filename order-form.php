<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$town = $_POST['town'];
$cname = $_POST['cname'];
$order_note = $_POST['order_note'];


$formcontent="First Name: $fname \n Last Name: $lname  \n Message: $message \n  Phone: $phone  \n Email ID: $email  \nTown/City: $town  \n Company Name: $cname  \n\n Order Note: $order_note  \n\n  ";
$recipient = "info@indiagateltd.com";
$subject = "Order Query Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You ";
header("Refresh: 1; url=https://www.indiagateltd.com/thank-you.html");
 
//Print_r($_POST);

?>