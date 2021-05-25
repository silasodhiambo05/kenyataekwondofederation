<?php
include 'core/init.php';
$dan_number= $_SESSION['dan_number'];
  
    if (empty($dan_number)===true) {
      header("location: index.php");
    }
    else
    {
     $count=$_GET['c'];
      $sqls="SELECT names,photo FROM  athlete WHERE dan_number='$dan_number'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               $user=$rows['names'];
               $photo=$rows['photo'];
              }
      $sqls="SELECT event_name,event_type,event_venue,event_date FROM events WHERE event_id='$count'";
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
  <h5 class="btn-success" style="text-align:right;"> <?php echo '<img src="@admin/photograph/'.$photo.'" class="img-circle" style="height:20px;width:20px;"> '.' '.$user.' ';?><a href="index.php"><span class="glyphicon glyphicon-off"></span> .</a></h5> 
   
</div>
<div class="container-fluid" id="toolbar">
<h2 class="btn-info"><i>Event Participation Application</i></h2>

</div>

<div class="container-fluid" >
  <div style="background:darkgrey;font-size:2em;">
  <h5 style="color:red;">Already applied for this event? <a href="athlete_panel.php">Back Home</a></h5>
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
 <td style="color:green;"> <span class="glyphicon glyphicon-calendar"></span> Event Date:</td><td style="color:red;font-size:0.7em;"> <?php echo "$date";?></td>
 </tr>
  </table>

   </div> 
</div>

<div class="container-fluid">

<form action="" method="POST" class="jumbotron">
<h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span> Are you sure you want to apply for <?php echo $name.', '.$type;?>?</h4>
<input type="submit" class="btn btn-success" name="submit_applications" value="Yes, I want to Apply">
<input type="submit" class="btn btn-success" name="no_applications" value="No, Back Home">
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
  header("location: athlete_panel.php");
}
if ($_POST['submit_applications']) {
   date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');

      $sqls="SELECT event_id FROM  events_application WHERE event_id='$count' AND ktf_number='$dan_number'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               
               $id=$rows['event_id'];
              }
              if (empty($id)===false) {
                ?>
                      <script>
                        alert("Sorry! You have already applied for this event. Your application is under process");
                      </script>

                      <?php
              }
              else
              {
        
              $sql1 = "INSERT INTO `events_application` (event_id,event_name,event_date,ktf_number,applicant_name,date_applied) VALUES ('$count','$name','$edate','$dan_number','$user','$date')";
      
                              if (!mysqli_query($con,$sql1)) {
                             
                              echo 'Not received';
                              }
                                  
                    else
                    {
                      ?>
                      <script>
                        alert("Application Successifully Received. Your application will be confirmed in next six working hours.");
                      </script>

                      <?php
                                  }
                                }
}
?>