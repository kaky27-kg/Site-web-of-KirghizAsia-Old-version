<?php
$TO = "kirghizasia@gmail.com";
$h = "From: " . $TO;
$subject = "sujet_du_mail";
$message = "";
while (list($key, $val) = each($HTTP_POST_VARS)) {$message .= "$key : $val\n";}
mail($TO, $subject, $message, $h);
Header("Location: https://www.kirghizasia.com/mail.php");
?>