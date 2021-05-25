<?php
include 'core/init.php';
$count=$_SESSION['myktf'];
   $sql="SELECT * FROM  coach WHERE dan_number='$count'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                
                  while($row=mysqli_fetch_array($result))
                   {    
            $fname=$row['names'];
            $county=$row['county'];
            $coach=$row['coach'];
            $club=$row['club'];
            $country=$row['country'];
            $dob=$row['dob'];
            $pob=$row['pob'];
            $pass_number=$row['pass_number'];
            $id_number=$row['id_number'];
            $phone=$row['phone'];
            $license=$row['lincense'];
            $email=$row['email'];
            $primary=$row['primary_name'];
            $primary_grade=$row['primary_grade'];
            $highschool=$row['highschool'];
            $highschool_grade=$row['highschool_grade'];
            $college=$row['college'];
            $college_grade=$row['college_grade'];
            $coaching_course=$row['coaching_course'];
            $master_course=$row['master_course'];
            $psport=$row['psport'];
            $pduration=$row['pduration'];
            $osport=$row['osport'];
            $oduration=$row['oduration'];

            $personal_photo=$row['photo'];
            $birth=$row['birth_cert_image'];
            $id=$row['nationalid_image'];
            $passport=$row['passport_image'];
            $st_id=$row['jobid_image'];
            $nhif=$row['nhif_image'];
            $sec_cert=$row['secondary_image'];
            $dip_cert=$row['diploma_image'];
            
           }
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

</div>
<div class="col-md-1" id="rightlogo">
    <img id="logo1" src="Images/31.png" style="width:100px;height:100px;border-radius:40px;border:none;">
</div>
</div>
</div>
<div class="container-fluid">
  <h2 class="btn-info"><a href="athlete_panel.php"><button class="btn btn-success"><span class="glyphicon glyphicon-home"></span> Back Home</button></a>  Your details are as follow </h2> 
   
</div>

<div class="container-fluid ">

<div class="col-md-4 well" >
  
  <table class="table table-bordered">
  <?php echo '<tr><img src="@admin/photograph/'.$personal_photo.'" class="img-circle" style="height:100px;width:100px;"></tr>';?>
    <tr>
      <td><b>Dan Number:</b></td><td><?php echo $count;?></td>
    </tr>
    <tr>
      <td><b>Full Name:</b></td><td><?php echo $fname;?></td>
    </tr>
  
    <tr>
      <td><b>National ID:</b></td><td><?php echo $id_number;?></td>
    </tr>
    <tr>
      <td><b>Passport Number</b></td><td><?php echo $pass_number;?></td>
    </tr>
    <tr>
      <td><b>Gender</b></td><td><?php echo 'Male';?></td>
    </tr>
  </table>
  
</div>
<div class="col-md-4 well">
<table class="table table-bordered">
<tr>
      <td><b>Phone Number</b></td><td><?php echo $phone;?></td>
    </tr>

    <tr>
      <td><b>Email:</b></td><td><?php echo $email;?></td>
    </tr>
    <tr>
      <td><b>Nationality:</b></td><td><?php echo $country;?></td>
    </tr>
  
    <tr>
      <td><b>County:</b></td><td><?php echo $county;?></td>
    </tr>
    <tr>
      <td><b>Place of Birth</b></td><td><?php echo $pob;?></td>
    </tr>
    <tr>
      <td><b>Date of Birth</b></td><td><?php echo $dob;?></td>
    </tr>
    <tr>
      <td><b>Club</b></td><td><?php echo $club;?></td>
    </tr>
    <tr>
      <td><b>Coach:</b></td><td><?php echo $coach;?></td>
    </tr>
  </table>

</div>
<div class="col-md-4 well">
<table class="table table-bordered">
    
    <tr>
      <td><b>Primary School:</b></td><td><?php echo $primary;?></td>
    </tr>
  
    <tr>
      <td><b>KCPE Grade:</b></td><td><?php echo $primary_grade;?></td>
    </tr>
    <tr>
      <td><b>High School</b></td><td><?php echo $highschool;?></td>
    </tr>
    <tr>
      <td><b>KCSE Grade</b></td><td><?php echo $highschool_grade;?></td>
    </tr>
    <tr>
      <td><b>College/University</b></td><td><?php echo $college;?></td>
    </tr>
    <tr>
      <td><b>College Grade</b></td><td><?php echo $college_grade;?></td>
    </tr>
  </table>
  
</div>
</div>

<div class="container-fluid">
<div class="col-md-0"></div>
<div class="col-md-12 well">
<h3 style="color:green">Taekwondo learning Development</h3>
<table class="table table-bordered">
<tr>
      <td><b>Coaching Course</b></td><td><?php echo $coaching_course;?></td>
    </tr>
    <tr>
      <td><b>Masters Courses</b></td><td><?php echo $master_course;?></td>
    </tr>
  </table>
  </div>
  <div class="col-md-0">
    
  </div>
  
</div>
<div class="container-fluid" class="jumbotron">

<div class="col-md-0"></div>
<div class="col-md-12 well">
<h3 style="color:green">Displine</h3>
<table class="table table-bordered">
<tr>
      <td><b>Primary Sports</b></td><td><?php echo $psport;?></td><td><b>Duration</b></td><td><?php echo $pduration;?></td>
    </tr>
    <tr>
      <td><b>Other Sports</b></td><td><?php echo $master_course;?></td><td><b>Duration</b></td><td><?php echo $oduration;?></td>
    </tr>
  </table>
  </div>
  <div class="col-md-0">
    
  </div>
  
</div>
<div class="container-fluid">
<div id="cert" style="background:red;">
<div class="col-md-3">
<h5>Birth Certificate</h5>
  <?php echo '<tr><img src="@admin/birth_cert/'.$birth.'"  style="height:150px;width:150px;"></tr>';?>
</div>
<div class="col-md-3">
<h5>National ID</h5>
  <?php echo '<tr><img src="@admin/national_id/'.$id.'" style="height:150px;width:150px;""></tr>';?>
</div>
<div class="col-md-3">
<h5>Passport</h5>
  <?php echo '<tr><img src="@admin/passport/'.$passport.'" style="height:150px;width:150px;"></tr>';?>
</div>
<div class="col-md-3">
<h5>Student/Job ID</h5>
  <?php echo '<tr><img src="@admin/job_id/'.$st_id.'" style="height:150px;width:150px;"></tr>';?>
</div>
</div>
<div class="container-fluid well">
<div class="col-md-3">
<h5>NHIF Card</h5>
  <?php echo '<tr><img src="@admin/NHIF/'.$nhif.'" style="height:150px;width:150px;"></tr>';?>
</div>
<div class="col-md-3">
<h5>High School Certificate</h5>
  <?php echo '<tr><img src="@admin/Highschool_cert/'.$sec_cert.'" style="height:150px;width:150px;"></tr>';?>
</div>
<div class="col-md-3">
<h5>Higher Education Certificate</h5>
  <?php echo '<tr><img src="@admin/diploma_cert/'.$dip_cert.'" style="height:150px;width:150px;"></tr>';?>
</div>
<div class="col-md-3">
  
</div>
</div>
</div>
<div class="container-fluid">
<div class="well">
<a href="athlete_panel.php"><button class="btn btn-success"><span class="glyphicon glyphicon-home"></span> Ok, Back Home</button></a>
</div>
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