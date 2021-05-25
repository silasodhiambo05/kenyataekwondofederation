<?php
include 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<link rel="stylesheet" href="fa/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="bs/js/jquery-3.3.1.js"></script>
  <script src="jquery/cdnjs/jquery.min.js"></script>
  <script src="bs/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="bs/css/bootstrap-theme.min.css">
  <script src="bs/js/bootstrapValidator.min.js"></script>
    <title>Kenya Taekwondo Federation</title>
</head>
<style>
    @media(max-width: 1000px){

      #rightlogo{
         display: none;
         width: 0px;
      }
</style>
<body>
<div id="heade">
<div class="container-fluid" id="header" >

<div class="col-md-2" id="logo">
 <img id="logo1" src="Images/logo.jpg" style="width:100px;height:100px;border-radius:40px;border:none;">    
</div>
<div class="col-md-8">

<h3>KENYA TAEKWONDO FEDERATION (KTF)</h3>
Affiliated to KNSC, NOCK, AFTU, WTF<br>
Headquarters: Kenya national Sports Council Offices- Msa Road<br>
P. O Box 61002-00200, Nairobi.<br>
</div>
<div class="col-md-1" id="rightlogo">
    <img id="logo1" src="Images/wt3.png" style="width:100px;height:100px;border-radius:40px;border:none;">
</div>
</div>
</div>
<div class="container-fluid">
  <h2 class="btn-info">Coach Registration Panel</h2> 
  <h4>Dear coach, ensure you go through all the following steps to complete your registration process. <a href="coach_login.php">Back To Login</a></h4> 
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
   include 'coach_registration_data_submission.php'; 
  include 'coach_registration_data.php';
  
   ?> 
</div>
<a href="coach_login.php">Back To Login</a>
</div>
<div class="col-md-2" style="min-height:340px;background:#ABC2CA" >
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
<h3>Social Media</h3>

<ul class="btn-primary">

    <li><img src="Images/44.jpg" style="width:30px;height:30px;margin-top:5px;"> facebook</li>
    <li><img src="Images/48.png" style="width:30px;height:30px;"> Twitter</li>
    <li><img src="Images/47.jpg" style="width:30px;height:30px;"> Instagram</li>
    <li><img src="Images/46.jpg" style="width:30px;height:30px;margin-top:5px;margin-bottom:5px;"> watsapp</li>
    <li><span class="glyphicon glyphicon-envelope"></span> enquire@ktf.com</li>
</ul>
    
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