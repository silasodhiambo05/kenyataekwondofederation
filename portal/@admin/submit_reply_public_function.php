<?php
if ($_POST['submit_cancel_public']) {
	header("location: @admin_@panel_@manage.php");
}
if ($_POST['submit_reply_public']) {
	$reply=$_POST['text_reply'];

	date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');

      $sqz=mysqli_query($con,"UPDATE `public_messages` SET `reply`='$reply',date_replied WHERE id='$id'");
      echo "<h4 class='btn-warning'>Reply Sent Successifully</h4>";


      require 'PHPMailer-5.2.24/PHPMailerAutoload.php';
      $mail = new PHPMailer(true); 
      try{ 
    
    $mail->IsSMTP(true);
//$mail->SMTPDebug = 2;
$mail->From = "samsoftware2018@gmail.com";
$mail->FromName = "Kenya Taekwondo Federation Desk";
$mail->Host = "smtp.gmail.com";
//$mail->Host = "email-smtp.us-east-1.amazonaws.com";
$mail->SMTPSecure= "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "samsoftware2018@gmail.com";
$mail->Password = "samsoftware1820";
$mail->AddAddress($email);
$mail->AddReplyTo("samsoftware2018@gmail.com");
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Subject = "Reply to ".$subject;
$mail->Body =$reply;

 $mail->Send();

}catch(Exception $e)
{
  echo 'Unable send to notification email to client. Check your network connection';
  //echo 'Mail error' . $mail->ErrorInfo;
  
  
}
}

?>