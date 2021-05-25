<?php
if ($_POST['coach_login']) {
  $pass='';
  $email='';
  $dbnum='';
  $ktf=$_POST['email'];
  $pass=$_POST['password'];
     
  $sqls="SELECT dan_number,email,password,status FROM coach WHERE dan_number='$ktf'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
                $dbktf=$rows['dan_number'];
               $dbpassword=$rows['password'];
               $dbemail=$rows['email'];
               $status=$rows['status'];
               
              }
              
        if ($pass===$dbpassword)
        {
        	if ($status==='0') {
        		echo "<h4 class='btn-warning'>Sorry! Your account is inactive. Contact administrator for more information</h4>";
        	}
        	else
        	{
          
          $_SESSION['myktf']=$dbktf;
          $_SESSION['mypassword']=$dbpassword;
            header("location: coach_home_panel.php");
            }
                             
        }
        else{
          echo "<h4 class='btn-danger'>Error! Wrong Password or Email</h4>";
        
        }
      
 }

?>