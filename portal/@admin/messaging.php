<?php
if ($_POST['replyMessage']) {
  ?>
    <script>
      document.getElementById("magement_panel").innerHTML="";
    </script>
    <div style="width:100%;text-align:center;">
    <br>
    <br>
    <h3>Select Category of Messages to reply</h3>
    <br>
    <br>
    <form action="" method="POST">
      <input type="submit" class="btn btn-primary" value="Public Messages(<?php echo $total_public_text;?>)" name="replypublic">
      <br>
      <br>
      <input type="submit" class="btn btn-primary" value="Athletes Messages(<?php echo $total_athlete_text;?>)" name="replyathlete">
      <br>
      <br>
      <input type="submit" class="btn btn-primary" value="Others Messages(<?php echo $total_other_text;?>)" name="replyOthers">
    </form>
</div>
  <?php
}
if ($_POST['replypublic']) {
	?>
    <script>
    	document.getElementById("magement_panel").innerHTML="";
    </script>

	<?php
	$sql="SELECT id,subject,message,email FROM public_messages";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of Unreplied messages From Public</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction1()" id="Input" class="form-control" placeholder=""  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="tab" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Subject</th>
       <th>Message</th>
       <th>Email</th>
       
       <th>Reply</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $mess_id=$row['id'];
			            $subject=$row['subject'];
						$message=$row['message'];
	                    $email=$row['email'];
						
						
                    ?>
                    <tbody>
						<tr id="tr">
         <td style=" background-color:white;" ><?php echo $subject;?></td>
         <td style=" background-color:lightgreen;"><?php echo $message; ?></td>
         <td style="background-color:lightyellow;"><?php echo $email;?></td>
         
         <td style="background-color:lightgrey;" ><a href="reply_public_message.php?c=<?php echo $mess_id;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Reply</button></a></td>
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
if ($_POST['replyathlete']) {
  ?>
    <script>
      document.getElementById("magement_panel").innerHTML="";
    </script>

  <?php
  $sql="SELECT id,name,subject,message,date_sent FROM athlete_messages WHERE reply='Pending'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of Unreplied messages From Athletes</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction1()" id="Input" class="form-control" placeholder=""  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="tab" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Sender Name</th>
       <th>Subject</th>
       <th>Message</th>
       <th>Date Sent</th>
       
       <th>Reply</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   { 
                    $name=$row['name'];    
                    $mess_id=$row['id'];
                    $subject=$row['subject'];
                     $message=$row['message'];
                    $s_date=$row['date_sent'];
            
            
                    ?>
                    <tbody>
            <tr id="tr">
          <td style="background-color:lightgrey;"><?php echo $name;?></td>  
         <td style=" background-color:white;" ><?php echo $subject;?></td>
         <td style=" background-color:lightgreen;"><?php echo $message; ?></td>
         <td style="background-color:lightyellow;"><?php echo $s_date;?></td>
         
         <td style="background-color:lightgrey;" ><a href="reply_athlete_message.php?c=<?php echo $mess_id;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Reply</button></a></td>
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
if ($_POST['replyOthers']) {
  ?>
    <script>
      document.getElementById("magement_panel").innerHTML="";
    </script>

  <?php
  $sql="SELECT id,name,subject,message,date_sent FROM coach_messages WHERE reply='Pending'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of Unreplied messages From Coaches,Referee and other officials</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction1()" id="Input" class="form-control" placeholder=""  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="tab" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Sender Name</th>
       <th>Subject</th>
       <th>Message</th>
       <th>Date Sent</th>
       
       <th>Reply</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   { 
                    $name=$row['name'];    
                    $mess_id=$row['id'];
                    $subject=$row['subject'];
                     $message=$row['message'];
                    $s_date=$row['date_sent'];
            
            
                    ?>
                    <tbody>
            <tr id="tr">
          <td style="background-color:lightgrey;"><?php echo $name;?></td>  
         <td style=" background-color:white;" ><?php echo $subject;?></td>
         <td style=" background-color:lightgreen;"><?php echo $message; ?></td>
         <td style="background-color:lightyellow;"><?php echo $s_date;?></td>
         
         <td style="background-color:lightgrey;" ><a href="reply_others_message.php?c=<?php echo $mess_id;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Reply</button></a></td>
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

?>