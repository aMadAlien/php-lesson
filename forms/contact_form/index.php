<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailHeader = "From:".$name."<".$email.">\r\n";

$recipient = "arbeiraten@gmail.com";

mail($recipient, $subject, $message, $mailHeader)
or die("Error!");

echo "meessage send";