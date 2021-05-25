 <?php
 $dan_number='';
  $pass='';
  $email='';
  $dbnum='';
 if ($_POST['sign']) {

  $dan_number=$_POST['dan_number'];
  $pass=$_POST['password'];
     
  $sqls="SELECT dan_number,password,status FROM  athlete WHERE dan_number='$dan_number'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               $dbpassword=$rows['password'];
               $dbnum=$rows['dan_number'];
               $status=$rows['status'];
               
               
              }
              
        if ($pass===$dbpassword)
        {
          if ($status==='0') {
            ?>
      <script>
      alert("Sorry! Your account is inactive. Contact admin for more information");
      </script>
      <?php
          }
          else
          {
          $_SESSION['dan_number']=$dan_number;
            header("location: athlete_panel.php");

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