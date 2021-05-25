<?php
include 'core/init.php';
$myemail= $_SESSION['myemail'];
$mypassword=$_SESSION['mypassword'];
  
    if (empty($myemail)===true) {
      header("location: index.php");
    }
    else
    {
      include 'management_counting_file.php';
      $_SESSION['user']=$user;

      
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

<h3 style="font-family: 'Comic Sans MS', cursive, sans-serif;">KENYA TAEKWONDO FEDERATION (KTF)</h3>
<h4>Administration Panel (SECRETARY)</h4>

</div>
<div class="col-md-1" id="rightlogo">
    <img id="logo1" src="Images/wt3.png" style="width:100px;height:100px;border-radius:40px;border:none;">
</div>
</div>
</div>
<div class="container-fluid">
  <h5 class="btn-success" style="text-align:right;"><span class="glyphicon glyphicon-user"></span> <?php echo $user;?> <a href="index.php" style="color:red;"><span class="glyphicon glyphicon-off" ></span>...</a></h5> 
   
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
             <li><input type="submit" class="btn" name="viewAthlete" value="View Athletes" style="width:100%;border:none;"></li>
             <li><input type="submit" class="btn" name="registerAthlete" value="Register Athlete" style="width:100%;border:none;"></li>
             <li><input type="submit" class="btn" name="updateAthlete" value="Update Athlete" style="width:100%;border:none;"></li>
             <li><input type="submit" class="btn" name="deleteAthlete" value="Delete Athlete" style="width:100%;border:none;"></li>
             <li><input type="submit" class="btn" name="awardAthlete" value="Award Athletes" style="width:100%;border:none;"></li>
             <li><input type="submit" class="btn" name="activateAccount" value="Activate Account" style="width:100%;border:none;"></li>
             <li><input type="submit" class="btn" name="blockAccount" value="Block Account" style="width:100%;border:none;"></li>
             
            </form>
          </ul>
        </li>
        <li class="dropdown" style="color:red;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span> Coach<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
          <li><input type="submit" class="btn" name="viewCoach" value="View Coaches" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="registerCoach" value="Register Coach" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="activate_coach_account" value="Activate Account" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="block_coach_account" value="Block Account" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="viewCoach" value="Update Coach" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="deleteCoach" value="Delete Coach" style="width:100%;border:none;"></li>
            
            </form>
          </ul>
        </li>
        <li class="dropdown" style="color:red;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-scale"></span> Referee<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
          <li><input type="submit" class="btn" name="viewReferee" value="View Referees" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="registerReferee" value="Register Referee" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="activate_referee_account" value="Activate Account" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="block_referee_account" value="Block Account" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="viewReferee" value="Update Referee" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="deleteReferee" value="Delete Referee" style="width:100%;border:none;"></li>
            
            </form>
          </ul>
        </li>
        <li class="dropdown" style="color:red;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tent"></span> Clubs<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
          <li><input type="submit" class="btn" name="activateClub" value="Accept Clubs/Institution" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="viewClub" value="View Clubs/Institution" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="registerClub" value="Register Clubs/Institution" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="viewClub" value="Update Clubs/Institution" style="width:100%;border:none;"></li>
          <li><input type="submit" class="btn" name="viewClub" value="Delete Clubs/Institution" style="width:100%;border:none;"></li>
            
            </form>
          </ul>
        </li>
        <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-calendar"></span> Events<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="viewEvents" value="View events/seminars" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="approve_event_applications" value="Approve Event Applications" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="confirm_event_participation" value="confirm Event Participation" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="uploadEvent" value="Upload events/seminars" style="width:100%;border:none;"></li>
              <li><input type="submit"  class="btn"  name="viewEvents" value="Update events/seminars" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="viewEvents" value="Remove events/seminar" style="width:100%;border:none;"></li>
              
              </form>
          </ul>
          </li>
        <li class="dropdown" style="color:red;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-briefcase"></span> Finance<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <form action="" method="post">
          <li><input type="submit" class="btn" name="money_entering" value="Deposit Cash" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="money_leaving" value="Widthdraw Cash" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="View_finance" value="View finance status" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="setRegistrationFees" value="Set Registration Fees" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="updateRegistrationFess" value="Update Registration Fees" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="confirmPayment" value="Confirm Payment" style="width:100%;border:none;"></li>
            
            </form>
          </ul>
        </li>
        <?php 
        if ($total_texts == '0') {
          ?>
          <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-envelope"></span> Messaging<i style="color:red;"><span class="glyphicon glyphicon-caret"></span></i></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="replyMessage" value="Reply Messages" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="postMessage" value="Post Message" style="width:100%;border:none;"></li>
             
              </form>
          </ul>
          </li>
          <?php
        }
        else
        {

        ?>

        <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-envelope"></span> Messaging<i style="color:red;"><span class="glyphicon glyphicon-bell"></span><?php echo $total_texts;?></i></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="replyMessage" value="Reply Messages" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="postMessage" value="Post Message" style="width:100%;border:none;"></li>
             
              </form>
          </ul>
          </li>
          <?php
          }
          ?>
          <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-upload"></span> Uploads<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="photoUpload" value="Upoad Photos" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="documentUpload" value="Upload Documents" style="width:100%;border:none;"></li>
             
              </form>
          </ul>
          </li>
           <li class="dropdown" style="color:red;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Settings<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <form action="" method="post">
              <li><input type="submit" class="btn" name="viewUser" value="View Users" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="newUser" value="Add User" style="width:100%;border:none;"></li>
              <li><input type="submit" class="btn" name="removeUser" value="Remove User" style="width:100%;border:none;"></li>
              
              </form>
          </ul>
          </li>
        <li class="dropdown" style="color:red;">
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
<div class="col-md-2" style="min-height:550px;background:#ABC2CA">

<h4 class="btn-info"><span class="glyphicon glyphicon-bookmark"></span> Quick Action</h4>
<form action="" method="POST">
<input type="submit" class="btn btn-primary" name="viewAthlete" style="width:100%;margin-bottom:2px;" value="Approve Athlete" >
<input type="submit" class="btn btn-primary" name="viewCoach" style="width:100%;margin-bottom:2px;" value="Approve Activate" >
<input type="submit" class="btn btn-primary" name="viewReferee" style="width:100%;margin-bottom:2px;" value="Approve Account" >
<input type="submit" class="btn btn-primary" name="uploadEvent" style="width:100%;margin-bottom:2px;" value="Upload Events" >
<input type="submit" class="btn btn-primary" name="approve_event_applications" style="width:100%;margin-bottom:2px;" value="Approve Event Applications" >
<input type="submit" class="btn btn-primary" name="confirm_event_participation" style="width:100%;margin-bottom:2px;" value="Confirm Event Participation" >


<input type="submit" class="btn btn-primary" name="viewCoach" style="width:100%;margin-bottom:2px;" value="View  Coaches" >
<input type="submit" class="btn btn-primary" name="viewClub" style="width:100%;margin-bottom:2px;" value="View  clubs" >
</form>
</div>
<div class="col-md-8">
<br>
<div id="magement_panel">

<div class="row">
           <div class="col-lg-4">
        <button class="btn btn-primary " style="height:100px;width:80%;margin-left:10px;"><span class="glyphicon glyphicon-book"></span><br> <?php echo $athlete;?><br>Registered Athletes</button>
        </div>
        <div class="col-lg-4">
        <button class="btn btn-primary " style="height:100px;width:80%;margin-left:10px;"><span class="glyphicon glyphicon-list-alt"></span><br> <?php echo $total_coach;?><br>Registered Coaches</button>
        </div>
        <div class="col-lg-4">
        <button class="btn btn-primary " style="height:100px;width:80%;margin-left:10px;"><span class="glyphicon glyphicon-thumbs-up"></span><br> <?php echo $total_referee;?><br>Registered Referees</button>
        </div>
         </div>
         <br>
         <br>
         <div class="row">
           <div class="col-lg-4">
           <button class="btn btn-primary " style="height:100px;width:80%;margin-left:10px;"><span class="glyphicon glyphicon-calendar"></span><br> <?php echo $total_events;?><br>Upcoming Events</button>
        
        </div>
        <div class="col-lg-4">
        <button class="btn btn-primary " style="height:100px;width:80%;margin-left:10px;"><span class="glyphicon glyphicon-calendar"></span><br> <?php echo $total_club;?><br>Clubs Registered<br></button>
        </div>
        <div class="col-lg-4">
        <button class="btn btn-primary " style="height:100px;width:80%;margin-left:10px;"><span class="glyphicon glyphicon-envelope"></span><br><?php echo $total_texts;?><br> Tickets</button>
        
        </div>
         </div>
<?php
//--------------------------------------------------------management files
include 'viewAthlete_secretary.php';
include 'coach_registration.php';
include 'view_manage_coach.php';
include 'club_registration.php';
include 'view_manage_club.php';
include 'view_manage_event.php';
include 'events_registration.php';
include 'events_application_approval.php';
include 'event_participation.php';
include 'view_manage_referee.php';
include 'messaging.php';
include 'deleteAthlete.php';
include 'deleteCoach.php';
include 'deleteReferee.php';
include 'uploadPhotos.php';
include 'finance_file.php';
include 'manage_users.php';

//--------------------------------------------------------management files


?>


</div>
</div>
<div class="col-md-2" style="min-height:550px;background:#ABC2CA" >
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