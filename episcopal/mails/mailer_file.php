<?php 

include ("formmail.class.php");
//include ("html_functions.php");

$mail = new formmail;
$mail->send_file_attached();

?>
