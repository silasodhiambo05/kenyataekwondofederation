<?php
error_reporting(0);
$dan_num=$_SESSION['dan_number']; 
if ($_POST['bio']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
					

<h3>Personal Details</h3>
 
   <form action="" method="POST" class="jumbotron">
    <div class="form-group">
                            <label for="inputParent_name">Full Names</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $user;?>" type="text" name="names" required="" />
                            </div>
                        </div>
    <div class="form-group">
                            <label for="inputParent_name">Gender</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input name="gender" class="form-control" type="text" value="<?php echo $gender;?>">
                                    
                            </div>
                        </div>                    

    <div class="form-group">
                            <label for="inputParent_name">County</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control"  type="text" name="county" value="<?php echo $county;?>" />
                            </div>
                        </div>
     
     <div class="form-group">
                            <label for="inputParent_name">Club/Institution</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $club;?>" type="text" name="club" required="" />
                            </div>
                        </div>
     <div class="form-group">
                            <label for="inputParent_name">Nationality</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $country;?>" type="text" name="country" required="" />
                            </div>
                        </div> 

      <div class="form-group">
                            <label for="inputParent_name">Coach Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $coach;?>" type="text" name="coach" required="" />
                            </div>
                        </div> 
      <div class="form-group">
                            <label for="inputParent_name">Date of Birth</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $dob;?>" type="text" name="dob" required="" />
                            </div>
                        </div> 

    <div class="form-group">
                            <label for="inputParent_name">Place of birth</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $pob;?>" type="text" name="pob" required="" />
                            </div>
                        </div> 

    <div class="form-group">
                            <label for="inputParent_name">Passport Number(optional)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $pass_number;?>" type="text" name="pass_number" />
                            </div>
                        </div>

     <div class="form-group">
                            <label for="inputParent_name">National ID</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $id_number;?>" type="text" name="id_number" required="" />
                            </div>
                        </div>  
     <div class="form-group">
                            <label for="inputParent_name">Phone Number (Your Mpesa number)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $phone;?>" type="text" name="phone" required="" />
                            </div>
                        </div> 
      <div class="form-group">
                            <label for="inputParent_name">WT Licence Number(optional)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $license;?>" type="text" name="licence" />
                            </div>
                        </div>  
      <div class="form-group">
                            <label for="inputParent_name">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $email;?>" type="email" name="email" required="" />
                            </div>
                        </div> 
                        <input type="submit" name="submit_personal" class="btn btn-success" value="Update">                                                                                                                                                               
   </form>


		       <?php
	
}
if ($_POST['academics']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php
			 if (empty($dan_num)=== true) {
                	 echo '<h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> Sorry! You need to register your bio data first so that you can be assigned a ktf number</h3>';
                }
                else
                {

			 ?>
	<h3>Academics Details</h3>
   <form action="" method="POST" class="jumbotron">
   <div class="form-group">
                            <label for="inputParent_name">Primary School Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $primary;?>" type="text" name="primary" required="";/>
                            </div>
                        </div>

     <div class="form-group">
                            <label for="inputParent_name">Primary School Grade</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $primary_grade;?>" type="text" name="pgrade" required=""/>
                            </div>
                        </div> 
      <div class="form-group">
                            <label for="inputParent_name">High School Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $highschool;?>" type="text" name="highschool" />
                            </div>
                        </div> 

     <div class="form-group">
                            <label for="inputParent_name">High School Grade</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $highschool_grade;?>" type="text" name="hgrade" />
                            </div>
                        </div> 

     <div class="form-group">
                            <label for="inputParent_name">College/University Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $college;?>" type="text" name="college" />
                            </div>
                        </div> 
     <div class="form-group">
                            <label for="inputParent_name">College/University Grade</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $college_grade;?>" type="text" name="cgrade" />
                            </div>
                        </div>  
                         <input type="submit" name="submit_academics" class="btn btn-success" value="Update">                                                                                         
   </form>		 
									
		       <?php
		   }
	
}
if ($_POST['sports']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php
			 if (empty($dan_num)=== true) {
                	 echo '<h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> Sorry! You need to register your bio data first so that you can be assigned a ktf number</h3>';
                }
                else
                {

			 ?>
	<h3 >Sports Details</h3>
   <form action="" method="POST" class="jumbotron">
   <h4 class="btn-info">Taekwondo learning development</h4>
   <div class="form-group">
   Coaching Course:
   <input class="form-control" name="coaching" type="text" value="<?php echo $coaching_course;?>">
   	
   </div>
   <div class="form-group">
   Masters Course:
   <input class="form-control" name="mastering" type="text" value="<?php echo $master_course;?>">
   
   </div>

   <h4 class="btn-info">Displine</h4>
   <div class="form-group">
                            <label for="inputParent_name">Primary Sports</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $psport;?>" type="text" name="psport" required=""/>
                            </div>
                        </div>

   <div class="form-group">
                            <label for="inputParent_name">Primary Sports Duration </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $pduration;?>" type="text" name="pduration" required=""/>
                            </div>
                        </div>

     <div class="form-group">
                            <label for="inputParent_name">Other Sports</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $osport;?>" type="text" name="osport" />
                            </div>
                        </div>

   <div class="form-group">
                            <label for="inputParent_name">Other Sports Duration </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" value="<?php echo $oduration;?>" type="text" name="oduration" />
                            </div>
                        </div> 
                         <input type="submit" name="submit_sports" class="btn btn-success" value="Update">                                        
   </form>		 
									
		       <?php
		   }
	
}
if ($_POST['attachments']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
			 <?php
			 if (empty($dan_num)=== true) {
                	 echo '<h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> Sorry! You need to register your bio data first so that you can be assigned a ktf number</h3>';
                }
                else
                {

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
	
}
}

?>