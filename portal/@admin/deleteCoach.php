<?php
if ($_POST['deleteCoach']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT id,name,national_id,phone,email FROM coach";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>Select Coach to delete</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction()" id="myInput" class="form-control" placeholder="Enter National ID number to search"  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_coach" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Full Name</th>
       <th>National ID</th>
       <th>Phone Number</th>
       <th>Email</th>
       <th>Delete</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $idn=$row['id'];
			            $name=$row['name'];
						$national_id=$row['national_id'];
	                    $email=$row['email'];
						$phone=$row['phone'];
						
                    ?>
                    <tbody>
						<tr id="tr">
         <td style=" background-color:white;" ><?php echo $name;?></td>
         <td style=" background-color:lightgreen;"><?php echo $national_id; ?></td>
         <td style="background-color:lightyellow;"><?php echo $phone;?></td>
         <td style="background-color:lightgrey;"><?php echo $email;?></td>
         
         <td style="background-color:lightyellow;" ><a href="delete_coach_function.php?c=<?php echo $idn;?>"><button type='submit' class='btn btn-danger' name='viewPhone'><span class='glyphicon glyphicon-remove'></span> </button></a></td>
         </tr>
         </tbody>
         
    <?php 


						
			}
			?>
           </table>
           </div>
           </div>
           <a href="#"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php
}

?>