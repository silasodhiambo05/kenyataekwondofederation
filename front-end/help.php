<?php
    include 'core/init.php';
   $pfno= $_SESSION['number'];
     $password=$_SESSION['password'];
    $username=$_SESSION['username'];
    if (empty($username)===true) {
      header("location: index.php");
    }
    else
    {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Mukerweini cdf bursary</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="custom.css">
  <script src="jquery/cdnjs/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <script src="bootstrap/js/bootstrapValidator.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<style>
  @media(max-width: 1000px){

      #rightside{
         display: none;
         width: 0px;
      }
      #leftside{
        font-size: 1.5em;

      }
      
      
      
  }
</style>
<body>
    
<div class="container-fluid">
	<div id="logo">
            <div class="row">
                <div class="col-xs-12 col-lg-3" style="text-align:center;">
	<img id="logo1" src="Images/cddf.png" style="width:100px;height:100px;">
        </div>
                <div class="col-xs-12 col-lg-9">
                    <div id="title">
				<h1>Mukurweini Constituency Development Fund</h1>
                                <div id="motto" style="text-align:center;">Bursary Fund Information Management System</div>
				
				</div>
                </div>
            </div>
            
	</div>
</div>
<div class="container-fluid">
<div style="width:100%;text-align:right;background:#ACF08E;">
<?php echo '<span class="glyphicon glyphicon-user"> </span> '.$username.' ';?>
<a href="index.php" title="Logout"><span class="glyphicon glyphicon-off"> </span> .</a>
</div>
</div>

<div class="container-fluid">

<div class="col-xs-2">

<a href="admin@home@panel.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-home"></span> Back Home</button></a>
</div>
<div class="col-xs-9">
<h3 class="btn-primary">Help site</h3>
<h4 style="font-weight:bold;">What is Mukurweini CDF Bursary Fund Information Management System (MUCBIMS)?</h4>
<ul>
  <li>MUCBIMS is a computer software to efficiently manage and store Mukurweini CDF bursary fund information in a secure manner.</li>
  <li>This software was developed in year 2018 under direction of Mukureini CDF chairman.</li>
</ul>
<h4 style="font-weight:bold;">MUCBIMS Core Objectives?</h4>
<ul>
  <li>To Students apply for bursary fund online</li>
  <li>To store and process applicant information as per requirement</li>
  <li>To allow administration allocate fund to student depend on the information given</li>
  <li>To analyse allocation breakdown</li>
  <li>To print out any allocation information as per information given</li>
</ul>

</div>
<div class="col-xs-1">
</div>

</div>
<div class="container-fluid">
<div id="footer">
		
		National Government Constituency Development Fund<br>
		Mukurweini Constituency<br>
		P.O Box 8-10103<br>
		Tel: 074498539<br>
		MUKURWEINI<br>
		<p><b>Vision:</b> <i>To be a leading public institution in the effective and efficient management of devolved fund</i></p>
		&copy; Mukurweini Constituency Development Fund 2018. All rights reserved
		</div>
	
</div>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){

      $('#adduser').bootstrapValidator({
        feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'

        },
        fields: {
          cpass1: {
            validators: {
              notEmpty: {
                message: 'Please provide your password'
              },
              stringLength: {
                min: 8, message: 'Password should be atleast 8 characters'

              },

              //emailAddress:{
                //message: 'Provide provide valid email'
              //},
              regexp: {
                regexp: /^[a-zA-Z0-9@.]+$/,
                message: 'Your email should'
              }


            }

          },
          newusername: {
            validators:{
              notEmpty: {
                message: 'username cannot be empty'

              },
              stringLength: {
                min: 3, message: 'Username should be atleast 3 characters'

              }
            }

          },
          userpfno: {
            validators:{
              notEmpty: {
                message: 'pf number cannot be empty'

              },
              stringLength: {
                min: 3, message: 'PF number length should be atleast 3'

              }
            }

          },
          newuserpass: {
            validators:{
              notEmpty: {
                message: 'password cannot be empty'

              },
              stringLength: {
                min: 8, message: 'Password length should be atleast 8'

              }
            }

          },
          pass1: {
            validators:{
              notEmpty: {
                message: 'password cannot be empty'

              },
              stringLength: {
                min: 8, message: 'Password length should be atleast 8'

              }
            }

          },
          newpass1: {
            validators:{
              notEmpty: {
                message: 'password cannot be empty'

              },
              stringLength: {
                min: 8, message: 'Password length should be atleast 8'

              }
            }

          },
          newpass2: {
            validators:{
              notEmpty: {
                message: 'password cannot be empty'

              },
              stringLength: {
                min: 8, message: 'Password length should be atleast 8'

              }
            }

          },

          email: {
            validators:{
              emailAddress:{
                message: 'Provide valid email'
              }

            }
          }

        }

      });
      

    });
  </script>
<?php
}
?>