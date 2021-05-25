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
       $giver='Athletee ID Number '.$national_id;
	
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
											$sqz=mysqli_query($con,"UPDATE coach SET status='1' WHERE national_id='$national_id'");
											$sqz=mysqli_query($con,"UPDATE `current_balance` SET `amount`='$total_money'");
											
											?>
		                                 <h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> Payment of  <?php echo 'Kshs.'.$amountPaid.' reference number '.$ref_number;?> for <?php echo $name;?> Received successifully.</h3>
		                                  <?php
		                                  $sqz=mysqli_query($con,"UPDATE `athlete` SET `status`='1' WHERE id='$count'");
	
}
}
}
}

?>