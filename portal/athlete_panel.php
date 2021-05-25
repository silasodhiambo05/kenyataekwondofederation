<?php
include 'core/init.php';
$dan_number= $_SESSION['dan_number'];
  
    if (empty($dan_number)===true) {
      header("location: index.php");
    }
    else
    {

      $sqls="SELECT names,photo FROM  athlete WHERE dan_number='$dan_number'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               $user=$rows['names'];
               $photo=$rows['photo'];
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

<h3 style="font-family: 'Comic Sans MS', cursive, sans-serif;">KENYA TAEKWONDO FEDERATION (KTF)</h3>

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
<nav class="navbar navbar-inverse" style="margin-top:-20px;">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span style="color:white;">Menu</span>
                               
      </button>
     
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li class="active"><a href=""><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="dropdown" style="color:red;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-pencil"></span> Apply Game<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
          <li><input type="submit" class="btn" name="viewUpcomingGames" value="Upcoming game/seminar" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="viewUpcomingGames" value="Apply for game/seminar" style="width:100%;border:none;"></li>
          
            </form>
          </ul>
        </li>
        <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-calendar"></span> Events<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="viewUpcomingGames" value="View upcoming events/seminars" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="viewPastEvent" value="View past events/seminars" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="viewUpcomingGames" value="apply events/seminars participation" style="width:100%;border:none;"></li>
             
              </form>
          </ul>
          </li>
        <li class="dropdown" style="color:red;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-registration-mark"></span> Ranking<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
            
            </form>
          </ul>
        </li>
        

        <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-envelope"></span> Messaging<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="askQuestion" value="Ask a question" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="myInbox" value="My Inbox" style="width:100%;border:none;"></li>
              
              </form>
          </ul>
          </li>
           <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> My Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="athlete_details.php"><button class="btn" style="width:100%;border:none;">View Profile </button></a></li>
              
              
              <li><a href="edit_athlete_details.php"><button class="btn" style="width:100%;border:none;">Edit Profile </button></a></li>
              <form action="" method="post">
              <li><input type="submit" class="btn" name="changePassword" value="Change Password" style="width:100%;border:none;"></li>
              
              </form>
          </ul>
          </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-check"></span> Help<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li></li>
              
              </form>
          </ul>
          </li>
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="index.php"><span class="glyphicon glyphicon-off"></span> Logout<span class="caret"></span></a>
          
          </li>
        
      </ul>
      
    </div>
    
  </div>
</nav>

</div>
<div class="container-fluid" style="margin-top:-20px;">

<div class="col-md-10" style="background:darkgrey;min-height:450px;">
<div id="manage_panel">
<br>

<?php
 date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Ymd');
       $sql="SELECT event_id,event_name,event_type,event_venue,event_date FROM events WHERE counter_date>'$date'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  while($row=mysqli_fetch_array($result))
                   {
                       $name=$row['event_name'];
                     }
        if (empty($name)) {
                       echo "<h4> No event posted currently</h4>";
                     }             
                else
                {

        $sql="SELECT event_id,event_name,event_type,event_venue,event_date FROM events WHERE counter_date>'$date'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h4 class="btn-success">List of upcoming events, you have a chance to apply!!!</h4>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_athlete" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Event Name</th>
       <th>Event Type</th>
       <th>Venue</th>
       <th>Date</th>
       <th>Apply</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {

                  $name=$row['event_name'];
                  $type=$row['event_type'];
                  $venue=$row['event_venue'];
                  $date=$row['event_date'];
                  $eid=$row['event_id'];
            
            
                    ?>
                    <tbody>
            <tr id="tr">
         <td style=" background-color:white;" ><?php echo $name;?></td>
         <td style=" background-color:lightgreen;"><?php echo $type; ?></td>
         <td style="background-color:lightyellow;"><?php echo $venue;?></td>
         <td style="background-color:lightgrey;"><?php echo $date;?></td>
         
         <td style="background-color:lightgreen;" ><a href="event_application.php?c=<?php echo $eid;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Apply</button></a></td>
         </tr>
         </tbody>
         
    <?php 


            
      }
      ?>
           </table>
           </div>
           </div>
           <?php
}


 include 'view_apply_event.php';
 include 'athlete_post_message.php';
?>
</div>
</div>
<div class="col-md-2" style="min-height:450px;background:#ABC2CA" >
<h4 class="btn-info"><span class="glyphicon glyphicon-calendar"></span> Upcoming events</h4>
<?php
include 'current_event_posting.php';
?>
 
</div>
</div>
<div class="container-fluid">
    
    
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
<?php
}
?>