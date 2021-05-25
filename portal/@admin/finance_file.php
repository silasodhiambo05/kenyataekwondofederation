<?php
if ($_POST['money_entering']) {
   ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
         <h3></h3>
         <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="background:white;width:100%;margin-top:-30px;">
        <div style="width:100%;text-align:center;">
            <h3 class="text-center" style="color:maroon;"><img src="Images/cash5.jpg" style="height:100px;width:100px;"> </h3>
        </div>
        <form action="" method="post" id="adduser" class="jumbotron">

        <div class="form-group">
            Enter Amount (Kshs):
            <div class="input-group ">
            <span class="input-group-addon">Kshs</span>
            <input type="text" name="amout_rec" style="font-weight:bold;" placeholder="0.0" class="form-control">
            </div>
            </div>
            <div class="form-group">
            Enter Reference Number:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-list-alt"></span>
            <input type="text" name="ref_number"  placeholder="Enter Reference number" class="form-control">
            </div>
            </div>
             <div class="form-group">
            Money received from:
            <div class="input-group ">

            <span class="input-group-addon glyphicon glyphicon-th"></span>
            <select name="giver" class="form-control">
            <option>---Select---</option>
            <option value="Donor">Donor</option>
            <option value="Sponsor">Sponsor</option>
            <option value="Ministry Fund">Ministry Fund</option>
                    
             </select>
            </div>
            </div>
            <div class="form-group">
            Specific Name for Giver:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-list-alt"></span>
            <input type="text" name="specific_name"  placeholder="Enter Specific name for the giver above" class="form-control">
            </div>
            </div>
            
            <div class="form-group">
            Beliefly describe purpose for this money:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-pencil"></span>
            <input type="text" name="belief_description"  placeholder="Describe purpose for this money" class="form-control">
            </div>
            </div>
            
            
            
            
            <input type="submit" class="btn btn-success" value="Submit" name="submit_money_in">
            
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>

        <?php
}
if ($_POST['submit_money_in']) {
    ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
     $specific_name=$_POST['specific_name'];   
    $money=$_POST['amout_rec'];
    $_SESSION['specific_name']=$specific_name;
    $ref_number=$_POST['ref_number'];
    $giver=$_POST['giver'];
    $desc=$_POST['belief_description'];
    $_SESSION['ref_number']=$ref_number;
    $_SESSION['money']=$money;
    $_SESSION['giver']=$giver;
    $_SESSION['desc']=$desc;
    
    date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');
      $year=$now->format('Y');
       echo "<h3 class='btn-warning'>Are you sure you want to deposit Kshs.".$money." Received from ".$giver."?</h3>";
       ?>
    <form action="" method="POST">
        <input type="submit" class="btn btn-primary" name="confirm_receive" value="Yes, Deposit">
        <input type="submit" class="btn btn-primary" name="cancel_receive" value="No, Cancel Transaction">
    </form>
       <?php

}
if ($_POST['confirm_receive']) {
    ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
   $ref_number=$_SESSION['ref_number'];
    $money=$_SESSION['money'];
    $giver=$_SESSION['giver'];
    $desc=$_SESSION['desc'];
    $specific_name=$_SESSION['specific_name'];
    date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');
      $year=$now->format('Y');
      $sql="SELECT * FROM current_balance";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $dbmoney=$row['amount'];
                  
                  }
                  $total_money=$money+$dbmoney;
          $sql1 = "INSERT INTO `money_in_out` (giver_receiver,specific_name,comment,amount_in,ref_number,transaction_date,transaction_year,user) VALUES ('$giver','$specific_name','$desc','$money','$ref_number','$date','$year','$user')";
            
                                if (!mysqli_query($con,$sql1)) {
                                 
                                  echo 'Not received';
                                      }
                                    
                                        else
                                        {
                                    $sqz=mysqli_query($con,"UPDATE `current_balance` SET `amount`='$total_money'");
                                            ?>
                                         <h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully deposited  Kshs.<?php echo $money;?> Total amount balance is <?php echo $total_money;?></h3>
                                          <?php
                                      }
       }
if ($_POST['cancel_receive']) {
           ?>
           <script>
           alert("Transaction Canceled");
           </script>

           <?php
}
if ($_POST['money_leaving']) {
    $sql="SELECT * FROM current_balance";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $dbmoney=$row['amount'];
                  
                  }
    ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
         
         <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
        <div style="background:white;width:100%;margin-top:-30px;">

        <div style="width:100%;text-align:center;">
            <h3 class="text-center" style="color:maroon;"><img src="Images/cash5.jpg" style="height:100px;width:100px;"> </h3>
            <h3>Available Cash: <?php echo $dbmoney.'/=';?></h3>
        </div>
        <form action="" method="post" id="adduser" class="jumbotron">

        <div class="form-group">
            Enter Amount Withdrawn (Kshs):
            <div class="input-group ">
            <span class="input-group-addon">Kshs</span>
            <input type="text" name="amout_deducted" style="font-weight:bold;" placeholder="0.0" class="form-control" required="">
            </div>
            </div>
            
             <div class="form-group">
            Money was awarded to:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-th"></span>
            <input type="text" name="amout_to" style="font-weight:bold;" placeholder="Receiver Name" required="">...
            <input type="text" name="amout_to_id" style="font-weight:bold;" placeholder="Receiver ID Number" required="">
            </div>
            </div>
            
            <div class="form-group">
            Beliefly describe how this money will be used:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-pencil"></span>
            <textarea class="form-control" name="how_used" required=""></textarea>
            </div>
            </div>

             <div class="form-group">
            Minutes For Approval
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-th"></span>
            <input type="text" name="minutes" class="form-control" style="font-weight:bold;" placeholder="Enter minutes number approving this widtdraw" required="">
            
            </div>
            </div>
            
            
            
            
            <input type="submit" class="btn btn-success" value="Submit" name="submit_money_out">
            
        </form>

        </div>
        </div>
        <div class="col-lg-1">
        </div>
        </div>

        <?php
    
}
if ($_POST['submit_money_out']) {
    ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
     $sql="SELECT * FROM current_balance";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $dbmoney=$row['amount'];
                  
                  }    
    $money_out=$_POST['amout_deducted'];
    $amout_to=$_POST['amout_to'];
    $how_used=$_POST['how_used'];
    $amout_to_id=$_POST['amout_to_id'];
    $minutes=$_POST['minutes'];
    
    $_SESSION['money_out']=$money_out;
    $_SESSION['amout_to']=$amout_to;
    $_SESSION['how_used']=$how_used;
    $_SESSION['amout_to_id']=$amout_to_id;
    $_SESSION['minutes']=$minutes;
    date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');
      $year=$now->format('Y');
       echo "<h3 class='btn-warning'>Are you sure you want to withdraw Kshs.".$money_out." from Kshs.".$dbmoney." available?</h3>";
       ?>
    <form action="" method="POST">
        <input type="submit" class="btn btn-primary" name="confirm_out" value="Yes, Withdraw">
        <input type="submit" class="btn btn-primary" name="cancel_out" value="No, Cancel Transaction">
    </form>
       <?php
}
if ($_POST['confirm_out']) {
    ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
    $sql="SELECT * FROM current_balance";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $dbmoney=$row['amount'];
                  
                  }
    $money_out=$_SESSION['money_out'];
    $amout_to=$_SESSION['amout_to'];
    $how_used=$_SESSION['how_used']; 
    $minutes= $_SESSION['minutes'];
    $amout_to_id=$_SESSION['amout_to_id'];
    date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');
      $year=$now->format('Y');
      $current_balance=$dbmoney-$money_out;
    if ($money_out>$dbmoney) {
                  echo "<h3 class='btn-danger'>Sorry! Kshs.".$money_out." is more than Kshs.".$dbmoney." available. Review your transaction!!</h3>";
               }
               else
               {
                $sql1 = "INSERT INTO `money_in_out` (giver_receiver,  specific_id,minutes,comment,amount_out,transaction_date,transaction_year,user) VALUES ('$amout_to','$amout_to_id','$minutes','$how_used','$money_out','$date','$year','$user')";
            
                                if (!mysqli_query($con,$sql1)) {
                                 
                                  echo 'Not received';
                                      }
                                    
                                        else
                                        {
                                    $sqz=mysqli_query($con,"UPDATE `current_balance` SET `amount`='$current_balance'");
                                            ?>
                                         <h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully withdraw  Kshs.<?php echo $money_out;?> Current balance is <?php echo $current_balance;?></h3>
                                          <?php
                                      }

               }           
}
if ($_POST['View_finance']) {
  $sql="SELECT * FROM current_balance";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $dbmoney=$row['amount'];
                  
                  }
     $members_cash=0;             
    $sql="SELECT * FROM money_in_out WHERE comment='Registration'";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $money_in=$row['amount_in'];
                  $members_cash=$members_cash+$money_in;
                  
                  }  
      $donor_cash=0;             
    $sql="SELECT * FROM money_in_out WHERE NOT comment='Registration'";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $money_in=$row['amount_in'];
                  $donor_cash=$donor_cash+$money_in;
                  
                  } 
      $to_cash=0;             
    $sql="SELECT * FROM money_in_out";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $money_in=$row['amount_in'];
                  $to_cash=$to_cash+$money_in;
                  
                  } 
    $spent_cash=0;             
    $sql="SELECT * FROM money_in_out";
      $result=mysqli_query($con,$sql) or die(mysql_error());
      while($row=mysqli_fetch_array($result))
                   {    
                  
                  $money_in=$row['amount_out'];
                  $spent_cash=$spent_cash+$money_in;
                  
                  }                                                   

 ?>
        <script>
            document.getElementById("magement_panel").innerHTML="";
        </script>
         <h3></h3>
         <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="background:white;width:100%;margin-top:-30px;">
        <div style="width:100%;text-align:center;">
            <h3 class="text-center" style="color:maroon;"><img src="Images/cash5.jpg" style="height:100px;width:100px;"> </h3>
            <h3>Belief Finanancial Analysis</h3>
        </div>
        <table class="table table-bordered">

          <tr>
            <td>Money fron Donor/Other funding</td><td><?php echo "Kshs. ".$donor_cash;?></td>
          </tr>
          <tr>
            <td>Members Contributions</td><td><?php echo "Kshs. ".$members_cash;?></td>
          </tr>
          <tr>
            <td>Total Amount Received</td><td><?php echo "Kshs. ".$to_cash;?></td>
          </tr>
          <tr>
            <td>Money Spent</td><td><?php echo "Kshs. ".$spent_cash;?></td>
          </tr>
          <tr>
            <td>Current Balance</td><td><?php echo "Kshs. ".$dbmoney;?></td>
          </tr>
        </table>
        <form action="" method="POST">
        <input type="submit" class="btn btn-success" name="fullstatement" value="Get full statement"> 
          
        </form>
        
        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>

        <?php
}
if ($_POST['fullstatement']) {
  date_default_timezone_set('Africa/Nairobi');
      $now = new DateTime();
      $time = $now->format('H:i');
      $date = $now->format('Y-m-d');
  ?>
        <script>
          document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        $sql="SELECT * FROM money_in_out";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  <h3>Finanancial statement as at <?php echo $date;?></h3>
                  
                  <div id="table-wrapper" >
                  <div id="table-scroll" style="height:400px;">
                 <table  id="table_club" class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Date</th>
       <th>Money in(Kshs)</th>
       <th>money_out(Kshs)</th>
       <th>Referee Number</th>
       <th>Giver/Receiver</th>
       <th>Description</th>
       <th>User</th>
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    
                    $dt=$row['transaction_date'];
                    $moneyin=$row['amount_in'];
                    $moneyout=$row['amount_out'];
                    $ref=$row['ref_number'];
                    $giver=$row['giver_receiver'];
                    $desc=$row['comment'];
                    $user=$row['user'];
            
                    ?>
                    <tbody>
            <tr id="tr">
         <td style=" background-color:white;" ><?php echo $dt;?></td>
         <td style=" background-color:lightgreen;"><?php echo $moneyin;?></td>
         <td style="background-color:lightyellow;"><?php echo $moneyout;?></td>
         <td style="background-color:lightgrey;"><?php echo $ref;?></td>
         <td style=" background-color:white;" ><?php echo $giver;?></td>
         <td style=" background-color:lightgreen;"><?php echo $desc;?></td>
         <td style="background-color:lightyellow;"><?php echo $user;?></td>
         </tr>
         </tbody>
         
    <?php 


            
      }
      ?>
           </table>
           </div>
           </div>
            <a href="fullstatement.php"><button class="btn" style="width:20%;background-color:maroon;color:white;float:right;margin-top:10px;"><span class="glyphicon glyphicon-file"></span> Export to pdf?</button></a>
           <?php
}

if ($_POST['confirmPayment']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>

        <h3 style="text-align:center;">Select Category of Payment Made</h3>
        <form action="" method="POST" style="text-align:center;">
        	<input type="submit" name="activateAccount" value="Confirm for Athlete" class="btn btn-primary">
        	<br>
        	<br>
        	<input type="submit" name="activate_coach_account" value="Confirm for Coach" class="btn btn-primary">
        	<br>
        	<br>
        	<input type="submit" name="activate_referee_account" value="Confirm for Referee" class="btn btn-primary">
        </form>
        <?php
}
if ($_POST['setRegistrationFees']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
         <h3></h3>
         <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="background:white;width:100%;">
        <div style="width:100%;text-align:center;">
        	<h3 class="text-center" style="color:maroon;"><span class="glyphicon glyphicon-pencil"></span> Set Amount to be paid by members/joing members</h3>
        </div>
        <form action="" method="post" id="adduser" class="jumbotron">
             <div class="form-group">
        	Select Group to Make This Payment:
            <div class="input-group ">

            <span class="input-group-addon glyphicon glyphicon-th"></span>
        	<select name="category" class="form-control">
        	<option>---Select---</option>
        	<option value="athlete">Athlete</option>
        	<option value="coach">Coach</option>
        	<option value="referee">Referee</option>
                    
             </select>
        	</div>
        	</div>
            
        	<div class="form-group">
        	Reason for this Payment:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-tent"></span>
        	<select name="reason" class="form-control">
        	<option>---Select---</option>
        	<option value="Registration">Registration</option>
        	<option value="event">Event Participation</option>
        	<option value="other">Other</option>
                    
             </select>
        	</div>
        	</div>
        	
        	<div class="form-group">
        	Enter Amount (Kshs):
            <div class="input-group ">
            <span class="input-group-addon">Kshs</span>
        	<input type="text" name="amout_set" style="font-weight:bold;" placeholder="0.0" class="form-control">
        	</div>
        	</div>
        	
        	
        	<input type="submit" class="btn btn-success" value="Submit" name="submit_payment_set">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>

        <?php
}
if ($_POST['submit_payment_set']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
       $category=$_POST['category'];
       $reason=$_POST['reason'];
       $amout_set=$_POST['amout_set']; 

        $sq="SELECT category,amount FROM payment_log WHERE category='$category'";
       $results=mysqli_query($con,$sq) or die(mysql_error());
                                
       // $coach=0;
        while($row1=mysqli_fetch_array($results))
            {
              $dbcat=$row1['category'];
              $dbamount=$row1['amount'];
            }
   
          if ($category===$dbcat) {
          	echo "<h3 class='btn-danger'><span class='glyphicon glyphicon-info-sign'>Sorry! Registration fees is already set as Kshs".$dbamount.". You can update this amount from finance menu above.</h3> ";
          }
          else
          {
          	$sql1 = "INSERT INTO `payment_log` (category,purpose,amount) VALUES ('$category','$reason','$amout_set')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
											?>
		                                 <h3 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully set  Kshs<?php echo $amout_set;?> as a new <?php echo $reason;?> fees for <?php echo $category;?></h3>
		                                  <?php
		                              }

          }
}
if ($_POST['updateRegistrationFess']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>

        <h3 style="text-align:center;">Select Category to make update for</h3>
        <form action="" method="POST" style="text-align:center;">
        	<input type="submit" name="update_athlete_payment" value="Update for Athlete" class="btn btn-primary">
        	<br>
        	<br>
        	<input type="submit" name="update_coach_payment" value="Update for Coach" class="btn btn-primary">
        	<br>
        	<br>
        	<input type="submit" name="activate_referee_account" value="Update for Referee" class="btn btn-primary">
        </form>
        <?php
}

?>