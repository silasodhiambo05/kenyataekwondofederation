<!DOCTYPE html>
<html lang="en">
<head>
	<title>Front End | Kenya Taekwondo Federation</title>
  <link rel="icon" href="Images/logo.jpg">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="custom.css">
  <script src="jquery/cdnjs/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <script src="bootstrap/js/bootstrapValidator.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<style>
    #img1{
        height: 580px;
      }
  #logo1{
    height: 100px;
    width: 100px;
  } 
  @media(max-width: 1000px){

      #rightlogo{
         display: none;
         width: 0px;
      }
      #img1{
        height: 300px;
      }
      
      #hd{
         display: none;
         width: 0px;
      }
      #header1{
         display: none;
         width: 0px;
      }
      #right{
         display: none;
         width: 0px;
      }
      #leftt{
         display: none;
         width: 0px;
      }
      
      #brs{
        margin-top: 30px;
      }
    }
    /* Dropdown Button */
.dropbtn {
    background-color:#2B2B2B;
    color: red;
    padding: 16px;
    font-size: 16px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: maroon;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #007844;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color:#007844;
} 

</style>

<body>
    
<div class="container-fluid">
	<div id="logo">
            <div class="row">
                <div class="col-xs-12 col-lg-2" style="text-align:center;">
	<img id="logo1" src="Images/logo.jpg"  style="border:none;margin-top:1px;">
        </div>
                <div class="col-xs-12 col-lg-8">
                    <h3 style="color:black;text-align:center;"><strong>KENYA TAEKWONDO FEDERATION</strong><br> <i style="color:#007844;">(KTF)</i></h3>
                    <h4 style="color:black;text-align:center;">Website Front End</h4>
                </div>
                <div class="col-md-1" id="rightlogo">
  <img id="logo1" src="Images/wt3.png"  style="width:200px;height:100px;border:none;margin-top:2px;"> 
</div>
            </div>
            
	</div>
</div>
<div class="container-fluid">
<div style="width:100%;text-align:right;background:#ACF08E;">
<?php echo '<span class="glyphicon glyphicon-user"> </span> '.$usr.' ';?>
<a href="index.php" title="Logout"><span class="glyphicon glyphicon-off"> </span> .</a>
</div>
</div>
<div class="container-fluid">
<nav class="navbar navbar-inverse">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span style="color:white;">Menu</span>
                               
      </button>
     
    <div class="collapse navbar-collapse" id="myNavbar"  >
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin@home@panel.php" style="color:white;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          
        
        <li class="dropdown">
        <a class="dropbtn" href="#" style="color:white;"><span class="fa fa-upload"></span> Manage Uploads<span class="caret"></span></a>
          <div class="dropdown-content">
              <a href="sliders-management.php" style="width:100%;border:none;" class="btn">Manage Top Slides </a>
              
              <a href="gallery-management.php" style="width:100%;border:none;" class="btn">Manage Gallery</a>
              
              
          </div>
          </li>
        <li class="dropdown">
        <a class="dropbtn" href="#" style="color:white;"><span class="fa fa-file-video-o"></span> Manage Videos<span class="caret"></span></a>
          <div class="dropdown-content">
              
              <a href="upload-new-video.php" style="width:100%;border:none;" class="btn">Upload New Video</a>
              <a href="#" style="width:100%;border:none;" class="btn">Delete Video</a>
              <a href="#" style="width:100%;border:none;" class="btn">View Videos</a>
              
          </div>
          </li>
        <li class="dropdown" style="color:red;" >
          <a  href="upload-advertisement.php" style="color:white;"><span class="glyphicon glyphicon-bullhorn"></span>  Upload/Remove Advert</a>
          
        </li>
        <li class="dropdown" style="color:red;" >
          <a  href="#" style="color:white;"><span class="fa fa-newspaper-o"></span> Manage News</a>
          
        </li>
        
        <li class="dropdown">
        <a  href="upload-advertisement.php" style="color:white;"><span class="fa fa-thumbs-o-up" style="color:white;"></span> Manage Top Story</a>
          
          </li>
          
      </ul>
      
    </div>
    
  </div>
</nav>
	
</div>