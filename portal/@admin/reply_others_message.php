<?php
include 'core/init.php';
$id=$_GET['c'];
$sql="SELECT ktf_number,name,subject,message,date_sent FROM coach_messages WHERE id='$id'";
$result=mysqli_query($con,$sql) or die(mysql_error());
while($row=mysqli_fetch_array($result))
                   {
                   $ktf=$row['ktf_number'];    
                  $name=$row['name'];    
                    $mess_id=$row['id'];
                    $subject=$row['subject'];
                     $message=$row['message'];
                    $s_date=$row['date_sent'];
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
    <link rel="icon" href="Images/logo.jpg">
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
  <h2 class="btn-info" style="text-align:center;"><a href="@admin_@panel_@manage.php" style="float:left;color:white">Back Home</a>Public Messeges <img id="logo1" src="Images/reply.jpg" class="img-circle" style="width:30px;height:30px;"></h2> 
  <div class="col-md-12 text text-center" >
  <img id="logo1" src="Images/reply3.jpg" class="img-circle" style="width:150px;height:150px;">
    
  </div>
   
</div>

<div class="container-fluid ">
<div class="col-md-2">
  
</div
<div class="col-md-8">
<?php include 'submit_reply_other_function.php';?>
<table class="table jumbotron table-responsive table-hover">
<tr>
  <td><b>Sender Name:</b> </td><td style="color:#5F3A0E;"><?php echo $name;?></td>
</tr>
<tr>
  <td><b>Sender KTF number:</b> </td><td style="color:#5F3A0E;"><?php echo $ktf;?></td>
</tr>
<tr>
  <td><b>Subject:</b> </td><td style="color:#5F3A0E;"><?php echo $subject;?></td>
</tr>
<tr>
  <td><b>Messge:</b></td><td style="color:#5F3A0E;"><?php echo $message;?></td>
</tr>

<tr>
  <td><b>Date Sent:</b></td><td style="color:#5F3A0E;"><?php echo $s_date;?></td>
</tr>
  
</table>
  </div>
<div class="col-md-2">
  
</div
</div>
<div class="container-fluid">
<div class="col-md-1">
  
</div>
<div class="col-md-10">
<form action="" method="POST">
Type Reply
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<span class="glyphicon glyphicon-comment"></span>
</span>
<textarea name="text_reply" class="form-control">
  
</textarea>
</div>
  </div>
  <input type="submit" name="submit_reply_public" value="Reply" class="btn btn-success">
  <input type="submit" name="submit_cancel_public" value="Cancel" class="btn btn-danger" style="float:right;">
  <br>
  <br>
</form>
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