<?php
if ($_POST['confirm_event_participation']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT id,event_id,event_name,ktf_number,applicant_name,date_applied FROM events_application WHERE status='Approved' AND participation_status='0'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>Confirm whether the following participated in named events</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction()" id="myInput" class="form-control" placeholder="Enter ktf number to search"  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_participation" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>No.</th>
       <th>Event</th>
       <th>Applicant Name</th>
       <th>Applicant KTF number</th>
       <th>Date Applied</th>
       
       <th>Approve</th>
       </tr>
       </thead>
                  <?php
                  $n=1;
                  while($row=mysqli_fetch_array($result))
                   {    $id=$row['id'];
                         $eve=$row['event_name'];
			            $ktf=$row['ktf_number'];
						$name=$row['applicant_name'];
	                    $date=$row['date_applied'];

						
                    ?>
                    <tbody>
						<tr id="tr">
		 				
         <td style=" background-color:white;" ><?php echo $n;?></td>
         <td style="background-color:lightgrey;"><?php echo $eve;?></td>
         <td style=" background-color:lightgreen;"><?php echo $name; ?></td>
         <td style="background-color:lightyellow;"><?php echo $ktf?></td>
         <td style="background-color:lightgrey;"><?php echo $date;?></td>
         
         <td style="background-color:lightgreen;" ><a href="approve_reject_participation.php?c=<?php echo $id;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Confirm</button></a></td>
         </tr>
         </tbody>
        
    <?php 
$n=$n+1; 

						
			}
			?>
           </table>
           </div>
           </div>
           <a href="#"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php
}
?>
<script type="text/javascript">
	function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("table_participation");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[3];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";

            } else {
              tr[i].style.display = "none";

            }
          }
        }
      }
</script>