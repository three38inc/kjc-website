<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
//	echo "No arguments Provided!";
	header("Location: ../contact-us.php?flag=1");
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@kristujayanti.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Web Contact: Enquery from Website"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from KJC website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: $email_address";	
if(mail($to,$email_subject,$email_body,$headers))
    header("Location: ../contact-us.php?flag=2");
else
    header("Location: ../contact-us.php?flag=3");
?>