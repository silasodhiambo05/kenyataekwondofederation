<?php
include 'core/init.php';
$admin= $_SESSION['myuser'];
  
    if (empty($admin)===true) {
      header("location: index.php");
    }
    else
    {
     $count=$_GET['c'];

     $sqls="SELECT * FROM events_application WHERE id='$count'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
                  $eid=$rows['event_id'];
                  $name=$rows['event_name'];
                  $app_name=$rows['applicant_name'];
                  $type=$rows['event_type'];
                  $dan_number=$rows['ktf_number'];
                  $adate=$rows['date_applied'];
                  $edate=$rows['event_date'];
              }  

      $sqls="SELECT names,photo FROM  athlete WHERE dan_number='$dan_number'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               $user=$rows['names'];
               $photo=$rows['photo'];
              }


      $sqls="SELECT event_name,event_type,event_venue,event_date FROM events WHERE event_id='$eid'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
                  $name=$rows['event_name'];
                  $type=$rows['event_type'];
                  $venue=$rows['event_venue'];
                  $edate=$rows['event_date'];
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
      #table-wrapper {
  position:relative;
}
#table-scroll {
  height:200px;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}
#table-wrapper table * {
  
}
#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  border:1px solid red;
}
</style>
<body>
<div id="heade">
<div class="container-fluid" id="header" style="margin-bottom:-10px;">

<div class="col-md-2" id="logo">
 <img id="logo1" src="Images/logo.jpg" style="width:100px;height:100px;border-radius:40px;border:none;">    
</div>
<div class="col-md-8">

<h3>KENYA TAEKWONDO FEDERATION (KTF)</h3>

</div>
<div class="col-md-1" id="rightlogo">
    <img id="logo1" src="Images/wt3.png" style="width:100px;height:100px;border-radius:40px;border:none;">
</div>
</div>
</div>
<div class="container-fluid">
  <h5 class="btn-success" style="text-align:right;"> <span class="glyphicon glyphicon-user"></span> <?php echo $admin;?><a href="index.php"><span class="glyphicon glyphicon-off"></span> .</a></h5> 
   
</div>
<div class="container-fluid" id="toolbar">
<h2 class="btn-info"><i>Event Participation Confirmation</i></h2>
<a href="@admin_@panel_@manage.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Back Home</button></a>
</div>

<div class="container-fluid" >
  <div style="background:darkgrey;font-size:2em;">
  <h5 style="color:red;">Already Confirmed <a href="@admin_@panel_@manage.php">Back Home</a></h5>
  <table class="table table-bordered table-hover table-responsive">
  <tr>
  <td style="color:green;"><span class="glyphicon glyphicon-th-large"></span> Event Name: </td><td style="color:red;font-size:0.7em;"><?php echo "$name";?></td>
  </tr>
  
  <tr>
  <td style="color:green;"><span class="glyphicon glyphicon-th"></span> Event Type:</td><td style="color:red;font-size:0.7em;"> <?php echo "$type";?></td>
  </tr>
  
  <tr>
  <td style="color:green;"><span class="glyphicon glyphicon-tent"></span> Event Venue:</td><td style="color:red;font-size:0.7em;"> <?php echo "$venue";?></td>
  </tr>
  
  <tr>
 <td style="color:green;"> <span class="glyphicon glyphicon-calendar"></span> Event Date:</td><td style="color:red;font-size:0.7em;"> <?php echo "$edate";?></td>
 </tr>
  </table>

   </div> 
</div>

<div class="container-fluid">

<form action="" method="POST" class="jumbotron">
<h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span> Confirm whether <?php echo $app_name.' participated in '.$name.', '.$type;?>?</h4>
<div class="form-group">
Enter Marks/Points/Position Awarded (Give a description of award if any)
<div class="input-group ">
 <span class="input-group-addon glyphicon glyphicon-gift"></span>
<input class="form-control" name="marks" type="text">
</div>
</div>
<input type="submit" class="btn btn-success" name="submit_applications" value="Confirm">
<input type="submit" class="btn btn-danger" name="no_applications" value="No, Did not participate" style="float:right;">
</form>
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
<?php
}
if ($_POST['no_applications']) {
  header("location: @admin_@panel_@manage.php");
}
if ($_POST['submit_applications']) {
   date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');

      $marks=$_POST['marks'];

      $sqz=mysqli_query($con,"UPDATE events_application SET participation_status='1',award='$marks' WHERE id='$count'");
        
       ?>
    <script>
      alert("You have successifully confirmed event participation");
    </script>
    <?php                           
                                

}
?>