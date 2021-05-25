<?php
if ($_POST['uploadEvent']) {
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
        	<h3 class="text-center" style="color:maroon;"><span class="glyphicon glyphicon-pencil"></span> Upload a new Event</h3>
        </div>
        <form action="" method="post" id="adduser" class="jumbotron">
           
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-th"></span>
        	<input type="text" name="event_name" placeholder="Enter name of event " class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-th"></span>
        	<input type="text" name="event_type" placeholder="Enter type of event" class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-tent"></span>
        	<input type="text" name="event_venue" placeholder="Enter venue to host event" class="form-control">
        	</div>
        	</div>
        	<div class="form-group">
        	Event Date (when it will take place):
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-calendar"></span>
        	<input type="date" name="event_date" placeholder="Enter venue to host event" class="form-control">
        	</div>
        	</div>
        	
        	<input type="submit" class="btn btn-success" value="Submit" name="creatnewevent">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
        
}
if ($_POST['creatnewevent']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        //$pass1=$_POST['password'];
        $event_name=$_POST['event_name'];
        $event_type=$_POST['event_type'];
        $event_venue=$_POST['event_venue'];
        $event_date=$_POST['event_date'];
        
         $str='"'.$event_date.'"';
         $a=$str[1];
         $b=$str[2];
         $c=$str[3];
         $d=$str[4];
         $e=$str[6];
         $f=$str[7];
         $g=$str[9];
         $h=$str[10];

         $counter_date=$a.$b.$c.$d.$e.$f.$g.$h;

        date_default_timezone_set('Africa/Nairobi');
	    $now = new DateTime();
	    $time = $now->format('H:i');
	    $date = $now->format('Y-m-d');
        
              $sql1 = "INSERT INTO `events` (event_name,event_type,event_venue,event_date,counter_date) VALUES ('$event_name','$event_type','$event_venue','$event_date','$counter_date')";
			
	                            if (!mysqli_query($con,$sql1)) {
		                         
		                          echo 'Not received';
				                      }
	                                
										else
										{
											?>
		                                 <h3 class="btn-danger"><span class="glyphicon glyphicon-info-sign"></span> You have successifully registered  new event.</h3>
		                                  <?php
		                              }
			
          }
                
?>