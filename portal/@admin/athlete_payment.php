<?php
include 'core/init.php';
$count=$_GET['c'];
$sql="SELECT names,id_number,phone,dan_number,email,password FROM athlete WHERE id='$count'";
$result=mysqli_query($con,$sql) or die(mysql_error());
while($row=mysqli_fetch_array($result))
                   {    
                  
                  $name=$row['names'];
                  $national_id=$row['id_number'];
                  $email=$row['email'];
                  $phone=$row['phone'];
                  $ktf=$row['dan_number'];
                  $password=$row['password'];
                  }
  $payable=1000;
  $reason='Registration';                
   
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
  <h2 class="btn-info" style="text-align:center;"><a href="@admin_@panel_@manage.php" style="float:left;color:white">Back Home</a>Athlete Payment Panel <img id="logo1" src="Images/cash2.jpg" class="img-circle" style="width:30px;height:30px;"></h2> 
  <div class="col-md-12 text text-center" >
  <img id="logo1" src="Images/cash5.jpg" class="img-circle" style="width:150px;height:150px;">
    
  </div>
   
</div>

<div class="container-fluid ">
<div class="col-md-2">
  
</div>
<div class="col-md-8">
<table class="table jumbotron table-responsive table-hover">
<tr>
  <td><b>Payement For:</b> </td><td style="color:#5F3A0E;"><?php echo $reason;?></td>
</tr>
<tr>
  <td><b>Amount Payable:</b></td><td style="color:#5F3A0E;"><?php echo $payable;?></td>
</tr>
<tr>
  <td><b>Athlete Name:</b></td><td style="color:#5F3A0E;"><?php echo $name;?></td>
</tr>
<tr>
  <td><b>Coach National ID:</b></td><td style="color:#5F3A0E;"><?php echo $national_id;?></td>
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
include 'athlete_payment_function.php';
?>
<form action="" method="POST"  style="font-size:1.5em;">
Amount Paid (Kshs.):
<input style="height:50px;font-size:1.5em;" type="number" name="amountPaid" placeholder="0.0" class="form-control" required="">
<br>
Payment Ref. Number
<input style="height:50px;font-size:1.5em;" type="text" name="refNumber" placeholder="" class="form-control" required="">
<br>
<input type="submit" name="submit_payment" value="Accept Payment" class="btn btn-primary">
<input type="submit" name="cancel_payment" value="Cancel Transaction" class="btn btn-danger" style="float:right;">

</form>

<br>
<h4>Ensure you confirm your entries well before submission<br></h4>
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