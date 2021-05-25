 <?php
  $pass='';
  $email='';
  $dbnum='';
 if (empty($_POST)===false) {

  $email=$_POST['email'];
  $pass=$_POST['password'];
     
  $sqls="SELECT designation,email,password FROM admin WHERE email='$email'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
                $designation=$rows['designation'];
               $dbpassword=$rows['password'];
               $dbemail=$rows['email'];
               
              }
              
        if ($pass===$dbpassword)
        {
          if ($designation==="cash") {
            $_SESSION['myemail']=$dbemail;
          $_SESSION['mypassword']=$dbpassword;
            header("location: @admin_@panel_@manage.php");
          }
          if ($designation==="secretary") {
            $_SESSION['myemail']=$dbemail;
          $_SESSION['mypassword']=$dbpassword;
            header("location: @admin_@panel_@manage_sec.php");
          }
          if ($designation==="chair") {
            $_SESSION['myemail']=$dbemail;
          $_SESSION['mypassword']=$dbpassword;
            header("location: @admin_@panel_@manage_chair.php");
          }
          
          

                             
        }
        else{
          ?>
      <script>
      alert("Wrong number or password");
      </script>
      <?php
        
        }
      
 }

             // echo $dbnum;
?>