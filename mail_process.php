<?php
$myemail = '1mihirpandya@gmail.com';
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$to = $myemail;
$email_subject = "from ".$name. "; Email: ".$email_address;
$email_body =
"$message";
mail($to,$email_subject,$email_body);
header('Location: http://www.mihirpandya.net/index.html#contact'); 
echo '<script language="javascript">';
echo 'alert("Message successfully sent.")';
echo '</script>';
exit;
?>