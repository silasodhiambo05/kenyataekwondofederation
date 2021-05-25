<?php
if ($_POST['deleteAthlete']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT id,names,county,club,id_number,phone,dan_number FROM  athlete";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>Search Athlete to delete</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction1()" id="Input" class="form-control" placeholder="Enter KTF number to search"  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="tab" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Dan Number</th>
       <th>Full Names</th>
       <th>National ID</th>
       <th>County</th>
       <th>Club</th>
       <th>Phone Number</th>
       <th>Delete</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   { 
                        $athid=$row['id'];  
                   	    $fname=$row['names'];
			            $dan_number=$row['dan_number'];
						$county=$row['county'];
	                    $club=$row['club'];
						$phone=$row['phone'];
						$id_number=$row['id_number'];
						
                    ?>
                    <tbody>
						<tr id="tr">
         <td style=" background-color:white;" ><?php echo $dan_number;?></td>
         <td style=" background-color:lightgreen;"><?php echo $fname; ?></td>
         <td style="background-color:lightyellow;"><?php echo $id_number;?></td>
         <td style="background-color:lightgrey;"><?php echo $county;?></td>
         <td style="background-color:white;"><?php echo $club;?></td>
         <td style="background-color:lightgreen;"><?php echo $phone; ?></td> 
         <td style="background-color:lightyellow;" ><a href="athlete_details_delete.php?c=<?php echo $athid;?>"><button type='submit' class='btn btn-danger' name='viewPhone'><span class='glyphicon glyphicon-remove'></span> </button></a></td>
         </tr>
         </tbody>
         
    <?php 


						
			}
			?>
           </table>
           </div>
           </div>
           <a href="registeredAthetePdf.php"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php
}
?>