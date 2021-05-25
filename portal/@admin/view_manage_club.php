<?php
if ($_POST['viewClub']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT club_id,club_name,county,coach,date_registered FROM club";
        $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of all reigistered Clubs/Institutions</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction()" id="myInput" class="form-control" placeholder="Enter club name to search"  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_club" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Club Name</th>
       <th>County Located</th>
       <th>Coach</th>
       <th>Date Registered</th>
       <th>More</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $idn=$row['club_id'];
			            $name=$row['club_name'];
						$county=$row['county'];
	                    $coach=$row['coach'];
						$date_registered=$row['date_registered'];
						
                    ?>
                    <tbody>
						<tr id="tr">
         <td style=" background-color:white;" ><?php echo $name;?></td>
         <td style=" background-color:lightgreen;"><?php echo $county; ?></td>
         <td style="background-color:lightyellow;"><?php echo $coach;?></td>
         <td style="background-color:lightgrey;"><?php echo $date_registered;?></td>
         
         <td style="background-color:lightyellow;" ><a href="#?c=<?php echo $idn;?>"><button type='submit' class='btn btn-primary' name='viewPhone'><span class='glyphicon glyphicon-check'></span> Update/Delete</button></a></td>
         </tr>
         </tbody>
         
    <?php 


						
			}
			?>
           </table>
           </div>
           </div>
           <a href="all_club_pdf.php"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php
}
if ($_POST['activateClub']) {
  ?>
        <script>
          document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT club_id FROM club WHERE status='0'";
        $result=mysqli_query($con,$sql) or die(mysql_error());
        while($row=mysqli_fetch_array($result))
                   {
                     $idn=$row['club_id'];
                   }
                   
                   if (empty($idn)==true) {
                     echo "<h2>No club have sent request</h2>";
                   }
                   else
                   {
                    $sql="SELECT club_id,club_name,county,coach,date_registered FROM club WHERE status='0'";
                    $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>List of all reigistered Clubs/Institutions</h3>
                  <form action="" method="POST" name="st_details" >
       <div class="form-group" style="margin-top:10px;">
       <div class="input-group ">
    <span class="input-group-addon glyphicon glyphicon-search"></span>
        <input type="text" onkeyup="myFunction()" id="myInput" class="form-control" placeholder="Enter club name to search"  style="width:60%; height:30px; float: center; ">
      </div>
      </div>
       </form>
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_club" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Club Name</th>
       <th>County Located</th>
       <th>Coach</th>
       <th>Date Registered</th>
       <th>More</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    $idn=$row['club_id'];
                  $name=$row['club_name'];
            $county=$row['county'];
                      $coach=$row['coach'];
            $date_registered=$row['date_registered'];
            
                    ?>
                    <tbody>
            <tr id="tr">
         <td style=" background-color:white;" ><?php echo $name;?></td>
         <td style=" background-color:lightgreen;"><?php echo $county; ?></td>
         <td style="background-color:lightyellow;"><?php echo $coach;?></td>
         <td style="background-color:lightgrey;"><?php echo $date_registered;?></td>
         
         <td style="background-color:lightyellow;" ><a href="club_payment.php?c=<?php echo $idn;?>"><button type='submit' class='btn btn-primary' name='accept_club'><span class='glyphicon glyphicon-check'></span> Accept</button></a></td>
         </tr>
         </tbody>
         
    <?php 


            
      }
      ?>
           </table>
           </div>
           </div>
           <a href="all_club_pdf.php"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php


                   }

}
?>
<script type="text/javascript">
	function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("table_club");
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