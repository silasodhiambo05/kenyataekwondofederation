<?php
if ($_POST['referee_login']) {
  $pass='';
  $email='';
  $dbnum='';
  $ktf=$_POST['email'];
  $pass=$_POST['password'];
    
  $sqls="SELECT ktf_number,email,password,status FROM referee WHERE ktf_number='$ktf'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               
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
          
          $_SESSION['myemail']=$dbemail;
          $_SESSION['mypassword']=$dbpassword;
            header("location: referee_home_panel.php");
            }
                             
        }
        else{
          echo "<h4 class='btn-danger'>Error! Wrong Password or Email</h4>";
        
        }
      
 }

?>