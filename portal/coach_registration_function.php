<?php
if (empty($_POST)===false) {
if ($_POST['submit_coach']) {
	$name=$_POST['name'];
	$c_id=$_POST['c_id'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$pass1=$_POST['password1'];
	$pass2=$_POST['password2'];

   $sqlsc = "SELECT number FROM coach_log";
                $result = mysqli_query($con, $sqlsc);
                if (mysqli_num_rows($result) > 0)
				   {
                     while($rowi = mysqli_fetch_assoc($result))
						 {
						$index=$rowi['number'];
                           
                      }
                          
                      }
                 $num=$index+1;     
                if(strlen($num)===3)
				{
					$zero='';
				}
        if(strlen($num)===3)
        {
          $zero='0';
        }
				 if(strlen($num)===2)
				{
					$zero='00';
				}
				if(strlen($num)===1)
				{
					$zero='000';
				}


					   
				$dan='KTF/COH/'.$zero.$num;


	if ($pass1===$pass2) {
	$sq="SELECT national_id FROM coach WHERE national_id='$c_id'";
      $results=mysqli_query($con,$sq) or die(mysql_error());
                                
        $coach=0;
        while($row1=mysqli_fetch_array($results))
            {
              $dbid=$row1['national_id'];
              
            }
    
          if ($c_id===$dbid) {
          	
            	echo "<h4 class='btn-danger'>Error!! Person with this national ID is already registered Coach.</h4>";
          }
          else
          {
              $sql1 = "INSERT INTO `coach` 
				(name,national_id,ktf_number,phone,email,password) VALUES ('$name','$c_id','$dan','$phone','$email','$pass1')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
											?>
		                                 <h5 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> Registration application success. Pay registration fees of Kshs.1000 to business number 290***, account kenyataekwondo to get a KTF number. Ensure you pay using Mpesa number you used to register.</h5>
		                                  <?php
		                                 $sqz=mysqli_query($con,"UPDATE coach_log SET number='$num'");
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
$mail->Password = "2019Ndegwa";
$mail->AddAddress($email);
$mail->AddReplyTo("samsoftware2018@gmail.com");
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Subject = "Welcome Message";
$mail->Body = 'Your registration application was received successifully. Your will be given a KTF number once your registration fees is received.<br>Pay registration fees of Kshs.1000 to business number 290***, account kenyataekwondo<br> Thanks for registering with Kenya Taekwondo Federation. Ensure you pay using Mpesa number you used to register. Visit our website kenyataekwondo.co.ke<br>KENYA TAEKWONDO FEDERATION (KTF)<br>
          Headquarters: Kenya national Sports Council Offices- Msa Road<br>

    P. O Box 61002-00200, Nairobi.<br>
    Tel: 074498539<br>
    NAIROBI<br>';

 $mail->Send();

}catch(Exception $e)
{
  echo 'We are Unable to send Message in your email. Check your network connection';
  //echo 'Mail error' . $mail->ErrorInfo;
  
  
} 
		                              }
			
          }
      }
	else
	{
		echo "<h4 class='btn-danger'>Error!! Passwords mismatch</h4>";
	}
}
}
?>