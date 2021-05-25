<?php
if ($_POST['newUser']) {
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
        	<img src="Images/User.png" style="width:100px;height:100px;" >
        	<h3 class="text-center" style="color:maroon;">Add new user</h3>
        </div>
        <form action="" method="post" id="adduser">
            <div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
        	<input type="password" name="cpass1" placeholder="Enter your password" class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-user"></span>
        	<input type="text" name="newusername" placeholder="Enter username for new User " class="form-control">
        	</div>
        	</div>
        	
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-envelope"></span>
        	<input type="text" name="email" placeholder="Enter email for new user " class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
        	<input type="password" name="newuserpass" placeholder="Enter password for new user" class="form-control">
        	</div>
        	</div>
        	<input type="submit" class="btn btn-success" value="Submit" name="createnew">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
}
if ($_POST['createnew']) {
	$cpass1=$_POST['cpass1'];
	$newusername=$_POST['newusername'];
	//$userpfno=$_POST['userpfno'];
	$email=$_POST['email'];
	$newuserpass=$_POST['newuserpass'];
    $dbpf='';
	$sql="SELECT email FROM  admin WHERE email='$email'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  while($row=mysqli_fetch_array($result))
                   {
                        $dbemail=$row['email'];
                   }
                  
	if ($cpass1===$mypassword) {
		if (empty($dbemail)===true) {
			$sql1 = "INSERT INTO `admin` (name,designation,email,password) VALUES ('$newusername','Admin','$email','$newuserpass')";
	                           if (!mysqli_query($con,$sql1)) {
		                          echo 'Unable to add';
				                      }
	                                else {
                                    
                                     ?>
                                       <script>
                                       alert("New User added successfully");
                                       </script>
                                     <?php
                                            
                                        }
		}
		else
		{
			?>
         <script>
         	alert("Sorry! staff with this email exist in the system. Use a different email");
         </script>
		<?php
		}

		
	}
	else
	{
		?>
         <script>
         	alert("Sorry! you provided wrong password. Unable to add new user");
         </script>
		<?php
	}
}
if ($_POST['viewUser']) {
    ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
   $sql="SELECT name,email FROM admin";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3 style="color:gold;">List of all users with access to this system</h3>
                  
                  <div id="table-wrapper">
                  <div id="table-scroll">
                 <table  id="table_coach" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>No.</th>
       <th>Name</th>
       <th>Email</th>
       
       </tr>
       </thead>
                  <?php
                $no=1;
                  while($row=mysqli_fetch_array($result))
                   {    
                        
                        $name=$row['name'];
                        
                        $email=$row['email'];

                       
                        
                    ?>
                    <tbody>
                        <tr id="tr">
         <td style=" background-color:white;" ><?php echo $no;?></td>
         <td style=" background-color:lightgreen;"><?php echo $name; ?></td>
         <td style="background-color:lightyellow;"><?php echo $email;?></td>
         
         </tr>
         </tbody>
         
    <?php 


           $no++;             
            }
            ?>
           </table>
           </div>
           </div>
           
           <?php
}
if ($_POST['removeUser']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="width:100%;background:white;border-radius:20px;text-align:center;">
        <br>
         <b>
        <h3>User Removal</h3>
        <form action="" method="post" style="text-align:center;">
        <br>
        <b>
        
        <br>Select email of staff you want to delete:
    <select name="delemail" class="form-control" >
    <?php
   
       $sqlfetch1="SELECT email FROM admin";
                    $result1=mysqli_query($con,$sqlfetch1);
					while($row1=mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1['email'];?>">
                        <?php echo $row1['email'];?>
                        </option>
                        <?php endwhile;?>
                    </select>
                    <br>
                    <b>
                    <input type="submit" name="getpf" value="Continue" class="btn btn-success">
                    </form>
                    <br>
                    <b>
                    </div>
        
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
}

if ($_POST['getpf']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
    $no=$_POST['delemail'];
    $_SESSION['delemail']=$no;
    $sql="SELECT email FROM  admin WHERE email='$no'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  while($row=mysqli_fetch_array($result))
                   {
                        $dbuser=$row['email'];
                   }   

                   ?>
                    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="width:100%;background:white;border-radius:20px;text-align:center;">
        <br>
         <b>
        
        <form action="" method="post" style="text-align:center">
        <br>
        <img src="Images/warning.png" style="height:150px;width:150px;">
        <h3>User Removal</h3>
        <b>
        Are you sure you want to completely remove <?php echo ' Staff with email '.$no.'?<br>';

        ?>
        <br>
         <b>
         <a href=""><button  class="btn btn-success">No</button></a>
         <input type="submit" name="detenow" value="Yes" class="btn btn-success">

                    </form>
                    <br>
                    <b>
                    </div>
        
        </div>
        <div class="col-lg-2">
        </div>
        </div>

                   <?php 
}
if ($_POST['detenow']) {
	$no=$_SESSION['delemail'];
	$sql = "DELETE FROM admin WHERE email='$no'";
	 if ($con->query($sql) === TRUE) {
                               ?>
         <script>
         	alert("User removed successfully");
         </script>
		<?php
             }
             else
             {

	echo "Unable to delete";

}
}
if ($_POST['myacccount']) {
	?>
        <script>
        	document.getElementById("hom").innerHTML="";
        </script>
        <?php
    
    $sql="SELECT username,pf_number,email FROM  admin WHERE pf_number='$pfno'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  while($row=mysqli_fetch_array($result))
                   {
                        $dbuser=$row['username'];
                        $email=$row['email'];
                   }   

                   ?>
                    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="width:100%;background:white;border-radius:20px;text-align:center;">
        <br>
         <b>
        <h3>Edit your account details</h3>
        <form action="" method="post">
        <br>
        <b>
        PF Number: <input type="text" class="form-control" readonly value="<?php echo $pfno;?>">
        Username: <input type="text" name="myname" class="form-control" value="<?php echo $dbuser;?>">
        Email: <input type="email" name="myemail" class="form-control" value="<?php echo $email;?>">
        <br>
         <b>
         <a href=""><button  class="btn btn-success">Cancel</button></a>
         <input type="submit" name="updatedetails" value="Update" class="btn btn-success">

                    </form>
                    <br>
                    <b>
                    </div>
        
        </div>
        <div class="col-lg-2">
        </div>
        </div>

                   <?php 
	
}
if ($_POST['updatedetails']) {
	$myname=$_POST['myname'];
	$myemail=$_POST['myemail'];
	$sqz=mysqli_query($con,"UPDATE admin SET username='$myname',email='$myemail' WHERE pf_number='$pfno'");
	  ?>
         <script>
         	alert("Details updated successifully");
         </script>
		<?php
	
}
if ($_POST['changePassword']) {
	?>
        <script>
        	document.getElementById("hom").innerHTML="";
        </script>
        <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="background:white;width:100%;border-radius:20px;">
        <div style="width:100%;text-align:center;">
        	<img src="Images/pass.jpg" style="width:100px;height:100px;" >
        	<h3 class="text-center" style="color:maroon;">Add new user</h3>
        </div>
        <form action="" method="post" id="adduser">
            <div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
        	<input type="password" name="pass1" placeholder="Enter your current password" class="form-control">
        	</div>
        	</div>
        	
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
        	<input type="password" name="newpass1" placeholder="Enter new password" class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-lock"></span>
        	<input type="password" name="newpass2" placeholder="Enter new password again" class="form-control">
        	</div>
        	</div>
        	<a href=""><button class="btn btn-success">Cancel</button>
        	<input type="submit" class="btn btn-success" value="Reset" name="resetPassword" style="float:right;">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
	
}
if ($_POST['resetPassword']) {
	$pass1=$_POST['pass1'];
	$newpass1=$_POST['newpass1'];
	$newpass2=$_POST['newpass2'];
	if ($pass1===$password) {
		if ($newpass1===$newpass2) {
			$sqz=mysqli_query($con,"UPDATE admin SET password='$newpass2' WHERE pf_number='$pfno'");
			?>
         <script>
         	alert("Password changed successifully");
         </script>
		<?php
        
			
		}
		else
		{
			?>
         <script>
         	alert("Sorry! Wrong password confirmation");
         </script>
		<?php

		}
	}
	else
	{
		?>
         <script>
         	alert("Sorry! You entered wrong current password");
         </script>
		<?php
	}
}
?>