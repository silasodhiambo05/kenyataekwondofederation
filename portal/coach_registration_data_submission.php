<?php
if ($_POST['submit_personal']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php
	$names=$_POST['names'];
	$county=$_POST['county'];
	$club=$_POST['club'];
	$country=$_POST['country'];
	$coach=$_POST['coach'];
	$dob=$_POST['dob'];
	$pob=$_POST['pob'];
	$pass_number=$_POST['pass_number'];
	$id_number=$_POST['id_number'];
	$phone=$_POST['phone'];
	$licence=$_POST['licence'];
	$email=$_POST['email'];
  $gender=$_POST['gender'];
    $index="";
    $dbyear="";
    $sqlsc = "SELECT number FROM coach_log";
                $result = mysqli_query($con, $sqlsc);
                if (mysqli_num_rows($result) > 0)
				   {
                     while($rowi = mysqli_fetch_assoc($result))
						 {
							    $index=$rowi['number'];
                   //$dbyear=$rowi['year'];
		                      
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
				$pass=$num.$dbyear;

				$sql1 = "INSERT INTO `coach` 
				(names,gender,county,coach,club,country,dob,pob,pass_number,id_number,phone,dan_number,lincense,email,password) 
				        VALUES ('$names','$gender','$county','$coach','$club','$country','$dob','$pob','$dan','$id_number','$phone','$dan','$licence','$email','$pass')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
	 /*require 'PHPMailer-5.2.24/PHPMailerAutoload.php';
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
$mail->Body = 'Your registration application was received successifully. Your will be given a KTF number once your registration fees is received.<br>Pay registration fees of Kshs.1000 to business number 290020, account kenyataekwondoS<br> Thanks for registering with Kenya Taekwondo Federation.Ensure you pay using Mpesa number you used to register.  Visit our website kenyataekwondo.co.ke<br>KENYA TAEKWONDO FEDERATION (KTF)<br>
          Headquarters: Kenya national Sports Council Offices- Msa Road<br>

    P. O Box 61002-00200, Nairobi.<br>
    Tel: 074498539<br>
    NAIROBI<br>';

 $mail->Send();

}catch(Exception $e)
{
  echo 'We are Unable to send Message in your email. Check your network connection';
  //echo 'Mail error' . $mail->ErrorInfo;
  
  
}*/
//--------------------------------------------------------------------------messsage
require_once ('AfricasTalkingGateway.php');

$username  = "samSoft";
$apikey    = "fe6e96184853055b01b29bda8187c4264c5c8e6d583d61d55d52f325dc8ab736";

$recipients  = $phone;

$message  = "Kenya Taekwondo Federation<br> Registration application success. Pay application fees of Kshs.1000 to business number 290***, using your national id as account number. Ensure you pay using Mpesa number you used to register.";

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
											?>
		                                 <h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> Registration application success. Pay application fees of Kshs.1000 to business number 290***, using your national id as account number. Ensure you pay using Mpesa number you used to register.</h3>
		                                    
		                                  <?php 
		                                  $sqz=mysqli_query($con,"UPDATE coach_log SET number='$num'");
		                                  $_SESSION['dan_number']=$dan;
		                                  

		                              }
			

}

if ($_POST['submit_academics']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php
			 $dan_num=$_SESSION['dan_number'];
			 $primary=$_POST['primary'];
			 $pgrade=$_POST['pgrade'];
			 $highschool=$_POST['highschool'];
			 $hgrade=$_POST['hgrade'];
			 $college=$_POST['college'];
			 $cgrade=$_POST['cgrade'];
			 

			  $sqz=mysqli_query($con,"UPDATE coach SET primary_name='$primary',primary_grade='$pgrade',highschool='$highschool', 	highschool_grade='$hgrade',college='$college',college_grade='$cgrade' WHERE dan_number='$dan_num'");

			  

			 echo '<h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully register your academics details.  Click sports details above to register your sports details</h3>';
			
}
if ($_POST['submit_sports']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php
			 $dan_num=$_SESSION['dan_number'];
			 $mastering=$_POST['mastering'];
			 $coaching=$_POST['coaching'];
			 $psport=$_POST['psport'];
			 $pduration=$_POST['pduration'];
			 $osport=$_POST['osport'];
			 $oduration=$_POST['oduration'];
              
			 $sqz=mysqli_query($con,"UPDATE coach SET coaching_course='$coaching',master_course='$mastering',psport='$psport',pduration='$pduration',osport='$osport',oduration='$oduration' WHERE dan_number='$dan_num'");

			 echo '<h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully registered your sports details.  Click documents attachment above to upload photos of your documents</h3>';


}
if ($_POST['submit_personal_photo']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/photograph/";
    $target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
    $image1=basename( $_FILES["fileToUpload1"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Rename the Image your KTF number before uploading ";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload1"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET photo='$image1' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
if ($_POST['submit_bcertificate']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/birth_cert/";
    $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
    $image2=basename( $_FILES["fileToUpload2"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Rename the Image your KTF number before uploading ";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload2"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET birth_cert_image='$image2' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
if ($_POST['submit_id']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/national_id/";
    $target_file = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
    $image3=basename( $_FILES["fileToUpload3"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Rename the Image your KTF number before uploading ";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload3"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET nationalid_image='$image3' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
if ($_POST['submit_passport']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/passport/";
    $target_file = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
    $image4=basename( $_FILES["fileToUpload4"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Name the image your Id number";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload4"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET passport_image='$image4' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
if ($_POST['submit_job_id']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/job_id/";
    $target_file = $target_dir . basename($_FILES["fileToUpload5"]["name"]);
    $image5=basename( $_FILES["fileToUpload5"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload5"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Rename the Image your KTF number before uploading ";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload5"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload5"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET jobid_image='$image5' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
if ($_POST['submit_nhif']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/NHIF/";
    $target_file = $target_dir . basename($_FILES["fileToUpload6"]["name"]);
    $image6=basename( $_FILES["fileToUpload6"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload6"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Rename the Image your KTF number before uploading ";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload6"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload6"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET nhif_image='$image6' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
if ($_POST['submit_highschool']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/Highschool_cert/";
    $target_file = $target_dir . basename($_FILES["fileToUpload7"]["name"]);
    $image7=basename( $_FILES["fileToUpload7"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload7"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Rename the Image your KTF number before uploading ";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload7"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload7"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET secondary_image='$image7' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}
if ($_POST['submit_degree']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php

	$dan_num=$_SESSION['dan_number'];
	$target_dir = "@admin/diploma_cert/";
    $target_file = $target_dir . basename($_FILES["fileToUpload8"]["name"]);
    $image8=basename( $_FILES["fileToUpload8"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload8"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Error! There is a problem with this image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
    echo "Error! . Rename the Image your KTF number before uploading ";
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload8"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload8"]["tmp_name"], $target_file)) {

    	$sqz=mysqli_query($con,"UPDATE coach SET diploma_image='$image8' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">Kindly ensure you attach clear pictures of the following:</h4>
   <h4 class="btn-warning">Image uploaded successifully</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Birth Certificate :</td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>National ID :</td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Passport :</td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Student/Job ID :</td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>NHIF :</td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>High School Certificate :</td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
   	</tr>
   	<tr>
   		<td>Certificate/Diploma/Degree/Master :</td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
   	</tr>
   </table>
    	
   </form>							
<?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}


?>