<?php
include 'core/init.php';
$count=$_GET['c'];
$sql="SELECT name,national_id,ktf_number,phone,email FROM coach WHERE id='$count'";
$result=mysqli_query($con,$sql) or die(mysql_error());
while($row=mysqli_fetch_array($result))
                   {    
                  
                  $name=$row['name'];
                  $national_id=$row['national_id'];
                  $email=$row['email'];
                  $phone=$row['phone'];
                  $ktf=$row['ktf_number'];
                  $password=$row['password'];
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
<h4>Administration Panel</h4>
</div>
<div class="col-md-1" id="rightlogo">
    <img id="logo1" src="Images/31.png" class="img-circle" style="width:100px;height:100px;">
</div>
</div>
</div>
<div class="container-fluid">
  <h2 class="btn-info" style="text-align:center;"><a href="@admin_@panel_@manage.php" style="float:left;color:white"><span class="glyphicon glyphicon-home"></span> Back Home</a>Delete Coach  <span class="glyphicon glyphicon-question-sign"></span></h2> 
  <div class="col-md-12 text text-center" >
  <p style="font-size:3em;color:red;"><span class="fa fa-warning" ></span></p>
    
  </div>
   
</div>

<div class="container-fluid ">
<div class="col-md-2">
  
</div>
<div class="col-md-8">
<h3 class="btn-danger"><span class="fa fa-warning"></span> Warning!! You are about to permanently delete the following Coach</h3>
<table class="table jumbotron table-responsive table-hover">
<tr>
  <td><b>Name:</b> </td><td style="color:#5F3A0E;"><?php echo $name;?></td>
</tr>
<tr>
  <td><b>KTF number:</b></td><td style="color:#5F3A0E;"><?php echo $ktf;?></td>
</tr>
<tr>
  <td><b>National ID:</b></td><td style="color:#5F3A0E;"><?php echo $national_id;?></td>
</tr>
<tr>
  <td><b>Phone number:</b></td><td style="color:#5F3A0E;"><?php echo $phone;?></td>
</tr>
  
</table>
  
</div>
<div class="col-md-2">
  
</div>

</div>

<div class="container-fluid">
<div class="col-md-1">
  
</div>
<div class="col-md-10">
<?php
if ($_POST['submit_delete_coach']) {
$sql = "DELETE FROM coach WHERE id='$count'";

if ($con->query($sql) === TRUE) {
  echo "<h4 class='btn-success'>Record deleted successifully</h4>";
} else {
    echo "<h4 class='btn-danger'>Error deleting record: </h4>" ;
} 
}
if ($_POST['cancel_delet_coach']) {
  header("location: @admin_@panel_@manage.php");
}
?>
<form action="" method="POST">
<br>
<input type="submit" name="submit_delete_coach" value="Yes, Delete" class="btn btn-danger">
<input type="submit" name="cancel_delet_coach" value="No, Do not Delete" class="btn btn-primary" style="float:right;">

</form>

<br>
<h4>Ensure you confirm your details well before delete<br></h4>
  <br>
</div>
<div class="col-md-1">
  
</div>

    
  </div>
  
</div>
<div class="container-fluid" class="jumbotron">


  
</div>
<div class="container-fluid">

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