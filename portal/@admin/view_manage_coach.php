<?php
if ($_POST['viewCoach']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT id,names,id_number,phone,email FROM coach";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of all reigistered Coaches</h3>
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
       <th>More</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $idn=$row['id'];
			            $name=$row['names'];
						$national_id=$row['id_number'];
	                    $email=$row['email'];
						$phone=$row['phone'];
						
                    ?>
                    <tbody>
						<tr id="tr">
         <td style=" background-color:white;" ><?php echo $name;?></td>
         <td style=" background-color:lightgreen;"><?php echo $national_id; ?></td>
         <td style="background-color:lightyellow;"><?php echo $phone;?></td>
         <td style="background-color:lightgrey;"><?php echo $email;?></td>
         
         <td style="background-color:lightyellow;" ><a href="coach_details.php?c=<?php echo $idn;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> View</button></a></td>
         </tr>
         </tbody>
         
    <?php 


						
			}
			?>
           </table>
           </div>
           </div>
           Total Coaches: <?php echo $total_coach;?>
           <a href="all_coaches.php"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php
}
if ($_POST['activate_coach_account']) {
  ?>
        <script>
          document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT id,names,id_number,phone,email FROM coach WHERE status='0'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of inactive accounts for coaches</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction_active()" id="myInput" class="form-control" placeholder="Enter Name number to search"  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_active" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Full Name</th>
       <th>National ID</th>
       <th>Phone Number</th>
       <th>Email</th>
       <th>More</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    
                  $idn=$row['id'];
                  $name=$row['names'];
                  $national_id=$row['id_number'];
                  $email=$row['email'];
                  $phone=$row['phone'];
            
                    ?>
                    <tbody>
            <tr id="tr">
         <td style=" background-color:white;" ><?php echo $name;?></td>
         <td style=" background-color:lightgreen;"><?php echo $national_id; ?></td>
         <td style="background-color:lightyellow;"><?php echo $phone;?></td>
         <td style="background-color:lightgrey;"><?php echo $email;?></td>
         
         <td style="background-color:lightyellow;" ><a href="coach_payment.php?c=<?php echo $idn;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Activate</button></a></td>
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
<script type="text/javascript">
	function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("table_coach");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";

            } else {
              tr[i].style.display = "none";

            }
          }
        }
      }
      function myFunction_active() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("table_active");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
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