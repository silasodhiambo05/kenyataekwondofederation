<?php
$sqls="SELECT name FROM  admin WHERE email='$myemail'";
          $results=mysqli_query($con,$sqls) or die(mysql_error());
          while($rows=mysqli_fetch_array($results))
              {
               $user=$rows['name'];
               
              }
        $_SESSION['myuser']=$user;      
       $sq="SELECT * FROM athlete ";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
        $athlete=0;
        while($row1=mysqli_fetch_array($results))
            {
              $athlete=$athlete+1;
            } 

       $sq="SELECT * FROM coach";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
        $total_coach=0;
        while($row1=mysqli_fetch_array($results))
            {
              $total_coach=$total_coach+1;
            }
        $sq="SELECT * FROM referee";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
        $total_referee=0;
        while($row1=mysqli_fetch_array($results))
            {
              $total_referee=$total_referee+1;
            }    
      $sq="SELECT * FROM club";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
        $total_club=0;
        while($row1=mysqli_fetch_array($results))
            {
              $total_club=$total_club+1;
            }  

     $sq="SELECT * FROM events";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
        $total_events=0;
        while($row1=mysqli_fetch_array($results))
            {
              $total_events=$total_events+1;
            }                   
//---------------------------------------------------------------------------messages count
     $sql="SELECT * FROM public_messages WHERE reply='Pending'";
     $result=mysqli_query($con,$sql) or die(mysql_error());
     $total_public_text=0; 
     while($row=mysqli_fetch_array($result))
                   {
                       $total_public_text=$total_public_text+1;
                   }
   $sql="SELECT * FROM athlete_messages WHERE reply='Pending'";
     $result=mysqli_query($con,$sql) or die(mysql_error());
     $total_athlete_text=0; 
     while($row=mysqli_fetch_array($result))
                   {
                       $total_athlete_text=$total_athlete_text+1;
                   } 

   $sql="SELECT * FROM coach_messages WHERE reply='Pending'";
     $result=mysqli_query($con,$sql) or die(mysql_error());
     $total_other_text=0; 
     while($row=mysqli_fetch_array($result))
                   {
                       $total_other_text=$total_other_text+1;
                   } 

    $total_texts= $total_public_text+$total_athlete_text+$total_other_text;                                                 
//---------------------------------------------------------------------------messages end count


?>