<?php
include 'header.php';
?>

<div class="container-fluid">
  <h2 class="btn-info">Athletes Registration Panel</h2> 
  <h4>Dear athlete, ensure you go through all the following steps to complete your registration process. <a href="index.php">Back To Login</a></h4> 
</div>
<div class="container-fluid" id="toolbar">
<form action="" method="POST">
  <ul class="nav nav-tabs">
  
  <li class="active"><input type="submit" name="bio" value="Bio Data"></li>
  <li><input type="submit" name="academics" value="Academic Details"></li>
  <li><input type="submit" name="sports" value="Sports Details"></li>
  <li><input type="submit" name="attachments" value="Documents Attachments"></li>

</ul> 
</form>
</div>
<div class="container-fluid" style="margin-top:-20px;">

<div class="col-md-10">
<div id="register"  style="margin-top:10px;">
<h3>Personal Details</h3>
   <form action="" method="POST" class="jumbotron">
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
                            <label for="inputParent_name">Club/Institution</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <select name="coach" class="form-control">
          <option>---Select---</option>
                    <?php 
                    
          $sqlfetch1="SELECT * FROM club WHERE status='1'";
                    $result1=mysqli_query($con,$sqlfetch1);

          while($row1=mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1['name'];?>">
                        <?php echo $row1['club_name'];?>
                        </option>
                        <?php endwhile;?>
                    </select>
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
                            <label for="inputParent_name">Coach Name</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter name of your coach" type="text" name="coach" required="" />
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
                            <label for="inputParent_name">Phone Number (Your Mpesa number)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter your phone number" type="text" name="phone" required=""  id="myPhone" onkeyup="validatePhone()"/>
                                
                            </div>
                        </div> 
                        <div id="error"></div>
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
                        <input type="submit" name="submit_personal" class="btn btn-success" value="Submit Details" id="btnBioo">                                                                                                                                                               
   </form>
   <?php
   include 'registration_data_submission.php'; 
  include 'registration_data.php';
  
   ?> 
</div>
<a href="index.php">Back To Login</a>
</div>
<div class="col-md-2" style="min-height:340px;background:#ABC2CA;margin-top:20px;" >
<h6 class="btn-info"><span class="glyphicon glyphicon-pawn"></span> Registration guidelines</h6>
<ul>
  <li>Click Bio Data and fill the form that will apear with your person details</li>

  <li>Click Academics details and fill the information that you have and ensure you submit them</li>
  <li>Click Sports details and fill the required fields with necessary information and ensure you submit them</li>
  <li>Finally, Click on Documents attachments, upload scanned documents in those field provided. These documents will be used to authenticated your details.</li>
  <li>Pay a registration fees of Kshs.1000 to Bussiness number 290***, account kenyataekwondo</li>
  <li>Ensure you pay this fees using Mpesa number you used to register</li>
  <li>Upone approval of your payment, your KTF number will be sent into your email</li>
</ul>
For more information contacts our head office 
</div>
</div>
<div class="container-fluid">
    <p class="marquee" style="width:100%;text-align:center;background:#4CAF50;color:white;font-size:1.5em;margin-top:10px;"><span>We are happy you have decided to join our team. For any question contact our administration offices. Thanks</span></p>
    
</div>


<div class="container-fluid">
    <div id="foot" style="clear:both;
    background:#303030;
    color:white;
    text-align:center;
    padding:40px;">
      
          KENYA TAEKWONDO FEDERATION (KTF)<br>
          Headquarters: Kenya national Sports Council Offices- Msa Road<br>

    P. O Box 61002-00200, Nairobi.<br>
    Tel: 074498539<br>
    NAIROBI<br>
    <p>Affiliated to KNSC, NOCK, AFTU, WTF<br></p>
    &copy; Kenya Taekwondo Federation 2018. All rights reserved
   
      </div>
      </div>
</body>
</html>