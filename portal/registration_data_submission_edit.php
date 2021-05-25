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
    $sqz=mysqli_query($con,"UPDATE athlete SET names='$names',gender='$gender',county='$county',coach='$coach',club='$club',country='$country',dob='$dob',pob='$pob',pass_number='$pass_number',id_number='$id_number',phone='$phone',lincense='$licence',email='$email' WHERE dan_number='$dan_number'");
    echo '<h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> You have successifully updated your Personal details. </h3>';
    
				
			

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
			 

			  $sqz=mysqli_query($con,"UPDATE athlete SET primary_name='$primary',primary_grade='$pgrade',highschool='$highschool', 	highschool_grade='$hgrade',college='$college',college_grade='$cgrade' WHERE dan_number='$dan_num'");

			  

			 echo '<h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> You have successifully updated your academics details. </h3>';
			
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
              
			 $sqz=mysqli_query($con,"UPDATE athlete SET coaching_course='$coaching',master_course='$mastering',psport='$psport',pduration='$pduration',osport='$osport',oduration='$oduration' WHERE dan_number='$dan_num'");

			 echo '<h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> You have successifully updated your sports details.  </h3>';


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

    	$sqz=mysqli_query($con,"UPDATE athlete SET photo='$image1' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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

    	$sqz=mysqli_query($con,"UPDATE athlete SET birth_cert_image='$image2' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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

    	$sqz=mysqli_query($con,"UPDATE athlete SET nationalid_image='$image3' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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
    echo "Error! . Rename the Image your KTF number before uploading ";
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

    	$sqz=mysqli_query($con,"UPDATE athlete SET passport_image='$image4' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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

    	$sqz=mysqli_query($con,"UPDATE athlete SET jobid_image='$image5' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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

    	$sqz=mysqli_query($con,"UPDATE athlete SET nhif_image='$image6' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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

    	$sqz=mysqli_query($con,"UPDATE athlete SET secondary_image='$image7' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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

    	$sqz=mysqli_query($con,"UPDATE athlete SET diploma_image='$image8' WHERE `dan_number`='$dan_num'");

    	?>
       
        <h3 >Documents' Photos Attachments</h3>
   <form action="" method="POST" class="jumbotron" enctype="multipart/form-data">
   <h4 class="btn-info">To change current document click on browse to select new image</h4>
   <table class="table table-bordered table-hover">
   <tr>
       <th>Document</th><th>Current Image</th><th>Select New Image</th><th>Upload New Image</th>
   </tr>
    <tr>
        <td>Personal Photo :</td><td><?php echo '<img src="@admin/photograph/'.$photo.'"  style="height:100px;width:100px;">';?> </td><td> <input type="file" name="fileToUpload1" id="fileToUpload1"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Birth Certificate :</td><td><?php echo '<img src="@admin/birth_cert/'.$birth.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload2" id="fileToUpload2"></td><td><input type="submit" value="Upload" name="submit_bcertificate" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>National ID :</td><td><?php echo '<img src="@admin/national_id/'.$id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload3" id="fileToUpload3"></td><td><input type="submit" value="Upload" name="submit_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Passport :</td><td><?php echo '<img src="@admin/passport/'.$passport.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload4" id="fileToUpload4"></td><td><input type="submit" value="Upload" name="submit_passport" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Student/Job ID :</td><td><?php echo '<img src="@admin/job_id/'.$st_id.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload5" id="fileToUpload5"></td><td><input type="submit" value="Upload" name="submit_job_id" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>NHIF :</td><td><?php echo '<img src="@admin/NHIF/'.$nhif.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload6" id="fileToUpload6"></td><td><input type="submit" value="Upload" name="submit_nhif" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>High School Certificate :</td><td><?php echo '<img src="@admin/Highschool_cert/'.$sec_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload7" id="fileToUpload7"></td><td><input type="submit" value="Upload" name="submit_highschool" class="btn btn-primary"></td>
    </tr>
    <tr>
        <td>Certificate/Diploma/Degree/Master :</td><td><?php echo '<img src="@admin/diploma_cert/'.$dip_cert.'"  style="height:100px;width:100px;">';?></td><td> <input type="file" name="fileToUpload8" id="fileToUpload8"></td><td><input type="submit" value="Upload" name="submit_degree" class="btn btn-primary"></td>
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