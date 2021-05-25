<?php
if ($_POST['registerClub']) {
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
        	<h3 class="text-center" style="color:maroon;"><span class="glyphicon glyphicon-pencil"></span> Register New Club/Institution</h3>
        </div>
        <form action="" method="post" id="adduser" class="jumbotron">
            
        	<div class="form-group">
        	Club/Institution Name:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-tent"></span>
        	<input type="text" name="name" placeholder="Enter name of club/Institution" class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
        	Coach Name:
            <div class="input-group ">

            <span class="input-group-addon glyphicon glyphicon-user"></span>
        	<select name="coach" class="form-control">
        	<option>---Select---</option>
                    <?php 
                    
					$sqlfetch1="SELECT name FROM coach";
                    $result1=mysqli_query($con,$sqlfetch1);

					while($row1=mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1['name'];?>">
                        <?php echo $row1['name'];?>
                        </option>
                        <?php endwhile;?>
                    </select>
        	</div>
        	</div>
        	<div class="form-group">
        	County Located:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-th"></span>
        	<input type="text" name="county" placeholder="Enter club/Institution location county" class="form-control">
        	</div>
        	</div>
        	
        	
        	<input type="submit" class="btn btn-success" value="Submit" name="creatnewclub">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
}
if ($_POST['creatnewclub']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        //$pass1=$_POST['password'];
        $club=$_POST['name'];
        $coach=$_POST['coach'];
        $county=$_POST['county'];
        date_default_timezone_set('Africa/Nairobi');
	    $now = new DateTime();
	    $time = $now->format('H:i');
	    $date = $now->format('Y-m-d');
        $sq="SELECT club_name FROM club WHERE club_name='$club'";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
       // $coach=0;
        while($row1=mysqli_fetch_array($results))
            {
              $dbid=$row1['club_name'];
            }
   
          if ($club===$dbid) {
          	?>
              <script>
              	alert("Sorry! Club with this name is already registered.")
              </script>
            	<?php
          }
          else
          {
              $sql1 = "INSERT INTO `club` (club_name,county,coach,date_registered) VALUES ('$club','$county','$coach','$date')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
											?>
		                                 <h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> You have successifully registered  <?php echo $club;?> as a new club.</h3>
		                                  <?php
		                              }
			
          }
                
}
?>