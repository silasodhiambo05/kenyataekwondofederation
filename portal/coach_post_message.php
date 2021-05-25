<?php
if ($_POST['askQuestion']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="background:white;width:100%;">
        <div style="width:100%;text-align:center;">
        	<h3 class="text-center" style="color:maroon;"><span class="fa fa-question"></span> Send Question to Administration</h3>
        </div>
        <form action="" method="post" id="adduser" class="jumbotron">
            
        	<div class="form-group">
        	Subject:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        	<input type="text" name="subject" placeholder="Enter subject" class="form-control">
        	</div>
        	</div>
        	
        	<div class="form-group">
        	Type Question:
            <div class="input-group ">
             <span class="input-group-addon glyphicon glyphicon-comment"></span>
        	<textarea name="comment"  class="form-control"></textarea>
        	</div>
        	</div>
        	
        	
        	<input type="submit" class="btn btn-success" value="Submit" name="btnSubmitMessage">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
}
if ($_POST['btnSubmitMessage']) {
	$subject=$_POST['subject'];
	$comment=$_POST['comment'];
	
	date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');

	$sql1 = "INSERT INTO `coach_messages` 
				(ktf_number,name,subject,message,date_sent) VALUES ('$dan_number','$user','$subject','$comment','$date')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
											?>
		                                 <script>
		                                 	alert("Message received successifully. We will get back to you in next six working hours");
		                                 </script>
		                                  <?php
		                              }
}
if ($_POST['myInbox']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <h3 style="text-align:center;color:#286090;"><i class="fa fa-inbox"></i> My Inbox</h3>
        <?php
	$sql="SELECT subject,message,date_sent FROM coach_messages WHERE ktf_number='$dan_number'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  while($row=mysqli_fetch_array($result))
                   {
                       $message=$row['message'];
                     }
        if (empty($message)===true) {
                       echo "<h4> You currently dont have any message in your inbox</h4>";
                     }             
                else
                {

        $sql="SELECT subject,message,date_sent,reply,date_reply FROM coach_messages WHERE ktf_number='$dan_number'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  
                  <div id="table-wrapper">
                  <div id="table-scroll">

                 <table  id="table_athlete" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Message</th>
       <th>Reply</th>
       
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $subject=$row['subject'];
			            $message=$row['message'];
						$date_sent=$row['date_sent'];
	                    $reply=$row['reply'];
						$date_reply=$row['date_reply'];
						
						
                    ?>
                    <tbody>
						<tr id="tr">
         <td style=" background-color:white;" ><?php echo '<h >'.$subject.'</h><br>'.$date_sent.'<br>'.$message;?></td>
         <td style=" background-color:lightgreen;"><?php echo $date_reply.'<br>'.$reply; ?></td>
         
         </tr>
         </tbody>
         
    <?php 


						
			}
			?>
           </table>
           </div>
           </div>
           <?php
}
}
?>