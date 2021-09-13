<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$size = $_POST['size'];

$email_from = "matthew.lsf.801@gmail.com";
$email_subject = "New Quote Request";
$email_body = "Name: $first_name $last_name\n".
                "Moving from: $from\n".
                "Moving To: $to\n".
                "Moving Date: $date\n".
                "Contact Number: $phone\n". 
                "Contact Email: $email\n". 
                "Move Size: $size\n";
$email_to = "mjosifovic227@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email\r\n";

mail($email_to, $email_subject, $email_body);

header("Location: contact.html");
?>