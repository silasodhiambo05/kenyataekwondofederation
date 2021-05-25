<?php
date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Ymd');
       $sql="SELECT event_id,event_name,event_type,event_venue,event_date FROM events WHERE counter_date>'$date'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  while($row=mysqli_fetch_array($result))
                   {
                       $name=$row['event_name'];
                     }
        if (empty($name)) {
                       echo "<h4> No event posted currently</h4>";
                     }             
                else
                {

        $sql="SELECT event_id,event_name,event_type,event_venue,event_date FROM events WHERE counter_date>'$date'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_athlete" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Event Name</th>
       <th>Event Type</th>
       <th>Venue</th>
       <th>Date</th>
       <th>Apply</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $name=$row['event_name'];
			            $type=$row['event_type'];
						$venue=$row['event_venue'];
	                    $date=$row['event_date'];
						$eid=$row['event_id'];
						
						
                    ?>
                    <tbody>
						<tr id="tr">
         <td style=" background-color:white;" ><?php echo $name;?></td>
         <td style=" background-color:lightgreen;"><?php echo $type; ?></td>
         <td style="background-color:lightyellow;"><?php echo $venue;?></td>
         <td style="background-color:lightgrey;"><?php echo $date;?></td>
         
         <td style="background-color:lightgreen;" ><a href="portal/index.php?c=<?php echo $eid;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Apply</button></a></td>
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