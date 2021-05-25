<?php
if ($_POST['viewAthlete']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT names,county,club,id_number,phone,dan_number FROM  athlete";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of all reigistered Athletes</h3>
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
       <th>More</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $fname=$row['names'];
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
         <td style="background-color:lightyellow;" ><a href="athlete_details.php?c=<?php echo $dan_number;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> View</button></a></td>
         </tr>
         </tbody>
         
    <?php 


						
			}
			?>
           </table>
           </div>
           </div>
           <b>Total Athletes: <?php echo $athlete;?></b>
           <a href="all_athletee_pdf.php"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php
}
if ($_POST['activateAccount']) {
  ?>
        <script>
          document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT id,names,county,club,id_number,phone,dan_number FROM  athlete WHERE status='0'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of all inactive athlete accounts</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction2()" id="Input" class="form-control" placeholder="Enter name to search"  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="tab2" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Dan Number</th>
       <th>Full Names</th>
       <th>National ID</th>
       <th>County</th>
       <th>Club</th>
       <th>Phone Number</th>
       <th>More</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {   
                   $id=$row['id'];
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
         <td style="background-color:lightyellow;" ><a href="athlete_payment.php?c=<?php echo $id;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Acivate</button></a></td>
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
<script type="text/javascript">
	function myFunction1() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("Input");
        filter = input.value.toUpperCase();
        table = document.getElementById("tab");
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
      function myFunction2() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("Input");
        filter = input.value.toUpperCase();
        table = document.getElementById("tab2");
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
</script>