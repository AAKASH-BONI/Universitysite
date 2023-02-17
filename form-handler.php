<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// or vha se jo data ayega vo yha post se ayega or apne apne var me staore hojayega

$email_from = 'info@yourwebsites.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n".

        // so yeh bta rha ki data kaise ayenge or kaise show krwana hai

$to = 'Akashsharmaaaa36@gmail.com';
$headers = "from: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// so yeh kisko behj rha or kise aya or agr reply krna toh uska email

mail($to,$email_subject,$email_body,$headers);
// ky ky jana cahiye vo behjga

header("location: contact.html");
// file name kha se lega user ka info
?>
