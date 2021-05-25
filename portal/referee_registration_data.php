<?php
error_reporting(0);
$_SESSION['dan_number']="KTF/REF/0005";
$dan_num=$_SESSION['dan_number']; 

if ($_POST['bio']) {
	?>
			 <script>
			 	document.getElementById("register").innerHTML="";
			 </script>
					

<h3>Personal Details</h3>
   <form action="" method="POST" class="well">
    <div class="form-group">
                            <label for="inputParent_name">Full Names</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your names" type="text" name="names" required="" />
                            </div>
                        </div>
    <div class="form-group">
                            <label for="inputParent_name">Gender</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <select name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>                    

    <div class="form-group">
                            <label for="inputParent_name">County</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your residential county" type="text" name="county" required="" />
                            </div>
                        </div>
     
     
     <div class="form-group">
                            <label for="inputParent_name">Nationality</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your residential country" type="text" name="country" required="" />
                            </div>
                        </div> 

      
      <div class="form-group">
                            <label for="inputParent_name">Date of Birth</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your date of birth" type="date" name="dob" required="" />
                            </div>
                        </div> 

    <div class="form-group">
                            <label for="inputParent_name">Place of birth</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter place of birth" type="text" name="pob" required="" />
                            </div>
                        </div> 

    <div class="form-group">
                            <label for="inputParent_name">Passport Number(optional)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your passport number" type="text" name="pass_number" />
                            </div>
                        </div>

     <div class="form-group">
                            <label for="inputParent_name">National ID</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your national id number" type="text" name="id_number" required="" />
                            </div>
                        </div>  
     <div class="form-group">
                            <label for="inputParent_name">Phone Number (Your Mpesa number in this format +2547********)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="+25472159***" type="text" name="phone" required="" />
                            </div>
                        </div> 
      <div class="form-group">
                            <label for="inputParent_name">WT Licence Number(optional)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your licence number" type="text" name="licence" />
                            </div>
                        </div>  
      <div class="form-group">
                            <label for="inputParent_name">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your email" type="email" name="email" required="" />
                            </div>
                        </div> 
                        <input type="submit" name="submit_personal" class="btn btn-success" value="Submit Details">                                                                                                                                                               
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
                                <input class="form-control" placeholder="Enter name of your primary school" type="text" name="primary" required="";/>
                            </div>
                        </div>

     <div class="form-group">
                            <label for="inputParent_name">Primary School Grade</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter grade you got in primary" type="text" name="pgrade" required=""/>
                            </div>
                        </div> 
      <div class="form-group">
                            <label for="inputParent_name">High School Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter name of your high school" type="text" name="highschool" />
                            </div>
                        </div> 

     <div class="form-group">
                            <label for="inputParent_name">High School Grade</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter grade you got in high school" type="text" name="hgrade" />
                            </div>
                        </div> 

     <div class="form-group">
                            <label for="inputParent_name">College/University Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter name of your College/university" type="text" name="college" />
                            </div>
                        </div> 
     <div class="form-group">
                            <label for="inputParent_name">College/University Grade</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter grade you got in college/university" type="text" name="cgrade" />
                            </div>
                        </div>  
                         <input type="submit" name="submit_academics" class="btn btn-success" value="Submit Details">                                                                                         
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
   <select class="form-control" name="coaching">
   	<option>---Select---</option>
   	<option value="Class A">Class A</option>
   	<option value="Class B">Class B</option>
   	<option value="Class C">Class C</option>
   	<option value="Level 1">Level 1</option>
   	<option value="Level 2">Level 2</option>
   	<option value="Level 3">Level 3</option>
   </select>
   </div>
   <div class="form-group">
   Masters Course:
   <select class="form-control" name="mastering">
   	<option>---Select---</option>
   	<option value="Class A">Class A</option>
   	<option value="Class B">Class B</option>
   	<option value="Class C">Class C</option>
   	<option value="Level 1">Level 1</option>
   	<option value="Level 2">Level 2</option>
   	<option value="Level 3">Level 3</option>
   </select>
   </div>

   <h4 class="btn-info">Discipline</h4>
   <div class="form-group">
                            <label for="inputParent_name">Primary Sports</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter Primary Sports participated" type="text" name="psport" required=""/>
                            </div>
                        </div>

   <div class="form-group">
                            <label for="inputParent_name">Primary Sports Duration </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter Duration Taken in Primary Sports" type="text" name="pduration" required=""/>
                            </div>
                        </div>

     <div class="form-group">
                            <label for="inputParent_name">Other Sports</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter Other Sports participated" type="text" name="osport" />
                            </div>
                        </div>

   <div class="form-group">
                            <label for="inputParent_name">Other Sports Duration </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter Duration Taken in Other Sports" type="text" name="oduration" />
                            </div>
                        </div> 
                         <input type="submit" name="submit_sports" class="btn btn-success" value="Submit Details">                                        
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
   <h4 class="btn-info">Kindly ensure you attach clear picture with maximum size of 1000px by 1000px:</h4>
   <table class="table">
   	<tr>
   		<td>Personal Photo :</td><td> <input type="file" name="fileToUpload1" id="fileToUpload1" value="<?php echo $birth;?>"></td><td><input type="submit" value="Upload" name="submit_personal_photo" class="btn btn-primary"></td>
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
	
}
}

?>