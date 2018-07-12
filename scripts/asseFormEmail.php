<?php

$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$sex = $_POST['sex'];

//Validate first
if(empty($firstName) || empty($middleName) || empty($lastName) || empty($sex)) 
{
    echo "All fields marked with asteriks are mandatory";
    exit;
}

$email_from = 'rohit@icaninc.ca';
$email_subject = "New ICAN contact form submission";
$email_body = "PERSONAL INFO\n".
              "NAME: $firstName $middleName $lastName\n".
              "SEX: $sex\n";

$to = "papercut@user.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: ../html/assessment.php");




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