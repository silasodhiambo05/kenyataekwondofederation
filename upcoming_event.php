<?php
include 'header.php';
?>


<div class="container-fluid" id="toolbar" style="margin-top:-15px;">
<h2 class="btn-info">List of upcoming events</h2> 
  


</div>
<div class="container-fluid" style="margin-top:-20px;">


<div class="col-md-10">
<div id="register"  style="margin-top:10px;font-size:1.2em;">
<h4 style="color:gold;">Are you register to participate in one of the following events? Click on Apply and apply to participate if you have a KTF number. You can also <a style="color:red;" href="portal/registration.php">register here</a> to get a KTF number to qualify for participaton</h4> 
<?php
include 'portal/current_event_posting.php';
?>

</div>
<a href="index.php" style="color:blue;">Back Home</a>
</div>
<div class="col-md-2" style="min-height:340px;background:#ABC2CA;margin-top:10px;" >
<h6 class="btn-info"><span class="glyphicon glyphicon-pawn"></span><a href="portal/registration.php"> Register now</a></h6>
<h4>Guidelines</h4>
  <li>Click Bio Data and fill the form that will apear with your person details</li>

  <li>Click Academics details and fill the information that you have and ensure you submit them</li>
  <li>Click Sports details and fill the required fields with necessary information and ensure you submit them</li>
  <li>Finally, Click on Documents attachments, upload scanned documents in those field provided. These documents will be used to authenticated your details.</li>
  <li>Pay a registration fees of Kshs.1000 to Bussiness number 290***, account kenyataekwondo</li>
  <li>Ensure you pay this fees using Mpesa number you used to register</li>
  <li>Upone approval of your payment, your KTF number will be sent into your email</li>
</ul>
For more information contacts our head office 
</div>
</div>
<div class="container-fluid">
    <p class="marquee" style="width:100%;text-align:center;background:#4CAF50;color:white;font-size:1.5em;margin-top:10px;"><span>We are happy you have decided to join our team. For any question contact our administration offices. Thanks</span></p>
    
</div>

<?php
include 'footer.php';
?>
</body>
</html>