<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
// Check for empty fields
if(($name)      ||
   ($email)     ||
   ($phone)     ||
   ($message)   ||
   filter_var($email,FILTER_VALIDATE_EMAIL)){
// Create the email and send the message
$to_add = "mike@proviewhome.com"; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$from_add = "no_reply@proviewhome.com";
$email_subject = "$name would like more information about ProView";
$email_body = "You've received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $from_add \n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address \n";
mail($to_add,$email_subject,$email_body,$headers);
return true;
   }else{
   echo "No arguments Provided!";
   return false;
   }
?>