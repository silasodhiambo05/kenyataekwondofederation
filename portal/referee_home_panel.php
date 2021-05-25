<?php
include 'core/init.php';
$myemail= $_SESSION['myemail'];
$mypassword=$_SESSION['mypassword'];
  
    if (empty($myemail)===true) {
      header("location: coach_login.php");
    }
    else
    {

      $sqls="SELECT name FROM  referee WHERE email='$myemail'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               $user=$rows['name'];
               $dan_number=$rows['ktf_number'];
               
              }
        $_SESSION['myuser']=$user; 

      $sqls="SELECT club_name,county,coach,date_registered FROM  club WHERE coach='$user'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               $club=$rows['club_name'];
               $date_reg=$rows['date_registered'];
               $county=$rows['county'];
               
              }
         $_SESSION['club']=$club;
        $sqls="SELECT * FROM athlete WHERE club='$club'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          $athletes=0;
          while($rows=mysqli_fetch_array($results))
              {
               $athletes=$athletes+1;
              }
         date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Ymd');
       $sql="SELECT * FROM events WHERE counter_date>'$date'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  $events=0;
                  while($row=mysqli_fetch_array($result))
                   {
                       $events=$events+1;
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
<div class="container-fluid" id="header" style="margin-bottom:-10px;">

<div class="col-md-2" id="logo">
 <img id="logo1" src="Images/logo.jpg" class="img-circle" style="width:100px;height:100px;border-radius:40px;border:none;">    
</div>
<div class="col-md-8">

<h3>KENYA TAEKWONDO FEDERATION (KTF)</h3>
<h4>Referee Panel</h4>

</div>
<div class="col-md-1" id="rightlogo">
    <img id="logo1" src="Images/wt3.png" style="width:100px;height:100px;border-radius:40px;border:none;">
</div>
</div>
</div>
<div class="container-fluid">
  <h5 class="btn-success" style="text-align:right;"><span class="glyphicon glyphicon-user"></span> <?php echo $user;?> <a href="coach_login.php" style="color:red;"><span class="glyphicon glyphicon-off" ></span>...</a></h5> 
   
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-pawn"></span> Athletes<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
             <li><input type="submit" class="btn" name="viewAthlete_referee" value="View Athletes" style="width:100%;border:none;"></li>
             
            </form>
          </ul>
        </li>
        
        <li class="dropdown" style="color:red;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tent"></span> Clubs<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
         
          <li><input type="submit" class="btn" name="viewOtherClub" value="View Registered Clubs" style="width:100%;border:none;"></li>
          
            </form>
          </ul>
        </li>
        <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-calendar"></span> Events<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="viewEvents" value="View events/seminars" style="width:100%;"></li>
              <li><input type="submit" class="btn" name="viewEvents" value="Apply event participation" style="width:100%;"></li>
              
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Settings<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="viewProfile" value="My Account" style="width:100%;border:none;"></li>
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
        
      </ul>
      
    </div>
    
  </div>
</nav>

</div>
<div class="container-fluid" style="margin-top:-20px;">
<div class="col-md-2" style="min-height:450px;background:#ABC2CA">

<h4 class="btn-info"><span class="glyphicon glyphicon-bell"></span> Notification</h4>

  <p class="btn-warning" style="border-radius:10px;text-align:center;"><span class="glyphicon glyphicon-pencil"></span> Online mass registration of athletes is ongoing, advise your member to visit our website and register under this club</p>
  
  <p class="btn-warning" style="border-radius:10px;text-align:center;"><span class="glyphicon glyphicon-bullhorn"></span> East Africa Universities games begins on 17th December at University of Dodoma in Tanzania, Kindly prepare your team well.</p>


</div>
<div class="col-md-8">
<br>
<div id="magement_panel">
<?php
if (empty($club)===0) {
  echo '<h3 class="btn-info">You are currently dont have any club. Contact admin to register a club</h3>';
}
else
{
  echo '<h3 class="btn-info">You are currently coach for '.$club.' Taekwondo.</h3>';
  
  ?>
  <br>
  <br>
  <div class="row">
  <div class="col-md-1 img-circle">
    
  </div>
  <div class="col-md-2 img-circle btn-primary" style="min-height:100px;color:white;text-align:center;font-size:2em;">
  <?php echo $athletes;?><br>Athletes
    
  </div>
  <div class="col-md-1 img-circle">
    
  </div>
  <div class="col-md-2 img-circle btn-primary" style="min-height:100px;color:white;text-align:center;font-size:2em;">
  <?php echo $events;?><br>Events
    
  </div>
  <div class="col-md-1 img-circle">
    
  </div>
  <div class="col-md-2 img-circle btn-primary" style="min-height:100px;color:white;text-align:center;font-size:2em;">
  <?php echo 0;?><br>Tickets
    
  </div>
  <div class="col-md-1 img-circle">
    
  </div>
    
  </div>

  <?php
}
//-------------------------------------------------------------------------management files
include 'viewAthlete.php';
include 'referee_view_clubs.php';
include 'club_profile.php';
include 'referee_view_events.php';
include 'coach_post_message.php';
//-------------------------------------------------------------------------management files

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