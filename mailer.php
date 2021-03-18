<?php
if(isset($_POST[‘submit’])) {

$to = “sejla.sakovic@gmail.com”;
$subject =  $_POST[‘subject’]
$name_field = $_POST[‘name’];
$email_field = $_POST[’email’];

if (eregi(”(\r|\n)”, $email_field)) {
die(”No spamming.”);
}

$message = $_POST[‘message’];
$body = “From: $name_field\n E-Mail: $email_field\n Message:\n $message”;

echo “Data has been submitted to $to!”;
mail($to, $subject, $body);
} else {
echo “blarg!”;
}
?>