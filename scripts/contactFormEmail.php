<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['msg'];

//Validate first
if(empty($name) || empty($visitor_email) || empty($subject) || empty($message)) 
{
    echo "Name, email, subject and message fields are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'rohit@icaninc.ca';
$email_subject = "New ICAN contact form submission";
$email_body = "You have received a new message on your website from $name.\n".
							"Here is the message:\n $message.";

$to = "papercut@user.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: ../html/contact.php");

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}	
?>