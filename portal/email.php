<?php
require 'PHPMailer-5.2.24/PHPMailerAutoload.php';
      $mail = new PHPMailer(true); 
      try{ 
    
    $mail->IsSMTP(true);
//$mail->SMTPDebug = 2;
$mail->From = "samsoftware2018@gmail.com";
$mail->FromName = "Mukurweini NG-CDF Help Desk";
$mail->Host = "smtp.gmail.com";
//$mail->Host = "email-smtp.us-east-1.amazonaws.com";
$mail->SMTPSecure= "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "samsoftware2018@gmail.com";
$mail->Password = "ndegwa2019";
$mail->AddAddress("mwanikisamuel91@gmail.com");
$mail->AddReplyTo("samsoftware2018@gmail.com");
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Subject = "Password Recovery";
$mail->Body = 'Your Password is ';

 $mail->Send();
 
 ?>
<script>
	window.alert("Password recovery has been sent into your email.");
	header("refresh:2; url=index.php");
</script>
 <?php
  
}catch(Exception $e)
{
  echo 'Sorry, we are Unable to send your password. Check your network connection';
  echo 'Mail error' . $mail->ErrorInfo;
  
  
}
?>