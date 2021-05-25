 <?php
  $pass='';
  $email='';
  $dbnum='';
 if (empty($_POST)===false) {

  $email=$_POST['email'];
  $pass=$_POST['password'];
     
  $sqls="SELECT * FROM admin WHERE email='$email'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
                $usr=$rows['name'];
               $dbpassword=$rows['password'];
               $dbemail=$rows['email'];
               
              }
              
        if ($pass===$dbpassword)
        {
          $_SESSION['mynane']=$usr;
          $_SESSION['myemail']=$dbemail;
          $_SESSION['mypassword']=$dbpassword;
            header("location: admin@home@panel.php");

                             
        }
        else{
          ?>
      <script>
      alert("Wrong email or password");
      </script>
      <?php
        
        }
      
 }

             // echo $dbnum;
?>