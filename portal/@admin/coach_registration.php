<?php
if ($_POST['registerCoach']) {
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
        	<h3 class="text-center" style="color:maroon;"><span class="glyphicon glyphicon-pencil"></span> Register New Coach</h3>
        </div>
        <form action="" method="post" id="adduser" class="jumbotron">
            <div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
        	<input type="password" name="password" placeholder="Enter your password" class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-user"></span>
        	<input type="text" name="names" placeholder="Enter coach full Names " class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-th"></span>
        	<input type="text" name="n_id" placeholder="Enter coach national ID" class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        	<input type="text" name="email" placeholder="Enter email for coach " class="form-control">
        	</div>
        	</div>
        	
        	<input type="submit" class="btn btn-success" value="Submit" name="creatnewcoach">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
}
if ($_POST['creatnewcoach']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $pass1=$_POST['password'];
        $fullname=$_POST['names'];
        $n_id=$_POST['n_id'];
        $email=$_POST['email'];
        $sq="SELECT national_id FROM coach WHERE national_id='$n_id'";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
        $coach=0;
        while($row1=mysqli_fetch_array($results))
            {
              $dbid=$row1['national_id'];
            }
    if ($mypassword===$pass1) {
          if ($n_id===$dbid) {
          	?>
              <script>
              	alert("Sorry! Person with this national ID is already registered Coach.")
              </script>
            	<?php
          }
          else
          {
              $sql1 = "INSERT INTO `coach` 
				(name,national_id,email,password) VALUES ('$fullname','$n_id','$email','$n_id')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
											?>
		                                 <h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> You have successifully registered  <?php echo $fullname;?> as a coach. Default password is his/her national ID</h3>
		                                  <?php
		                              }
			
          }
            }
            else{
            	?>
              <script>
              	alert("Sorry! You entered a wrong password")
              </script>
            	<?php
            }        
}

?>