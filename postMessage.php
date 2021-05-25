<?php
if ($_POST['submitcoment']) {
	$subject=$_POST['subject'];
	$comment=$_POST['comment'];
	$email=$_POST['email'];

	date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');

	$sql1 = "INSERT INTO `public_messages` 
				(subject,message,email,date_sent,reply) VALUES ('$subject','$comment','$email','$date','1')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
											?>
		                                 <script>
		                                 	alert("Message received successifully. We will get back to you in next six working hours");
		                                 </script>
		                                  <?php
		                              }
}


?>