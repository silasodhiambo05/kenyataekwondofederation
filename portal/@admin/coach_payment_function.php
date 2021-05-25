<?php
if ($_POST['submit_payment']) {
	$amountPaid=$_POST['amountPaid'];
	$ref_number=$_POST['refNumber'];
	date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');
      $year=$now->format(Y);
       $user=$_SESSION['user'];
      $sql="SELECT * FROM current_balance";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                
                  $dbmoney=$row['amount'];
                  
                  }
       $total_money=$dbmoney+$amountPaid; 
       $giver='Coach ID Number '.$national_id;          
	
	if ($amountPaid == $payable) {
		$sql1 = "INSERT INTO `money_in_out` (giver_receiver,comment,amount_in,ref_number,transaction_date,transaction_year,user) VALUES ('$giver','$reason','$amountPaid','$ref_number','$date','$year','$user')";
            
                                if (!mysqli_query($con,$sql1)) {
                                 
                                  echo 'Not received';
                                      }
                                    
                                        else
                                        {
                               $sql1 = "INSERT INTO `transaction` 
(national_id,purpose,amount,ref_number,date_paid,status) VALUES ('$national_id','$reason','$amountPaid','$ref_number','$date','1')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{

											$sqz=mysqli_query($con,"UPDATE coach SET status='1' WHERE id_number='$national_id'");
											$sqz=mysqli_query($con,"UPDATE `current_balance` SET `amount`='$total_money'");
											?>
		                                 <h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> Payment of  <?php echo 'Kshs.'.$amountPaid.' reference number '.$ref_number;?> for <?php echo $name;?> Received successifully.</h3>
		                                  <?php
                      //--------------------------------------------------------------------------messsage
require_once ('AfricasTalkingGateway.php');

$username  = "samSoft";
$apikey    = "fe6e96184853055b01b29bda8187c4264c5c8e6d583d61d55d52f325dc8ab736";

$recipients  = $phone;

$message  = "You have successifully registered as coach in kenya taekwondo federation<br>Your KTF Number: ".$ktf."<br> Your Password: ".$password." <br>Loging to kenyataekwondo.co.ke/portal/coach_login.php to view and update your profile<br> Thanks for registering with Kenya Taekwondo Federation. Visit our website kenyataekwondo.co.ke";

$gateway  = new AfricasTalkingGateway($username, $apikey);

try{
  
  $results = $gateway->sendMessage($recipients,$message);

  foreach ($results as $result) {
      //echo "Number ".$result->number;
      //echo "Status ".$result->status;
      //echo "MessageID ".$result->messageId;
      //echo "Cost ".$result->cost."\n";
    
    } 
}
catch ( AfricasTalkingGatewayException $e)
{
  echo "Error occured ".$e->getMessage();
}
//543b2c54041a1cc0af4e701f211534f65aea9a45df7265af200ef0d1a452e1f1
//--------------------------------------------------------------------------message                         
                                          //-----------------------------email
   /* require 'PHPMailer-5.2.24/PHPMailerAutoload.php';
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
$mail->Password = "ndegwa2019";
$mail->AddAddress($email);
$mail->AddReplyTo("samsoftware2018@gmail.com");
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Subject = "Welcome Message";
$mail->Body = 'You have successifully registered as coach in kenya taekwondo federation<br>Your KTF Number:'.$ktf.'<br> Your Password:'.$password.'<br>Loging to kenyataekwondo.co.ke/portal/coach_login.php to view and update your profile<br> Thanks for registering with Kenya Taekwondo Federation. Visit our website kenyataekwondo.co.ke<br>KENYA TAEKWONDO FEDERATION (KTF)<br>
          Headquarters: Kenya national Sports Council Offices- Msa Road<br>

    P. O Box 61002-00200, Nairobi.<br>
    Tel: 074498539<br>
    NAIROBI<br>';

 $mail->Send();

}catch(Exception $e)
{
  echo 'Unable send to notification email to client. Check your network connection';
  echo 'Mail error' . $mail->ErrorInfo;
  
  
}
//-----------------------------email
*/




		                              }
                                      }
		
	}
	else
	{
		echo "<h3 class='btn-danger'>Error! Amount paid not enough for Payment</h3>";
	}
}

?>