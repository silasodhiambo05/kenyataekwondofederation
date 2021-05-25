<?php
    include 'core/init.php';
  
     /*$password=$_SESSION['password'];
    $username=$_SESSION['username'];
    if (empty($username)===true) {
      header("location: index.php");
    }
    else
    {*/  
include 'header.php';
$id=$_GET['c'];
?>
<div class="container-fluid" style="margin-top:-15px;">
<div  style="background:white; width:100%;">
    <div class="row">
     
       <div class="col-md-2">
       <div id="rightsidee" style="background:white;">
       <a href="sliders-management.php"><button class="btn btn-primary"><span class="fa fa-arrow-left"></span>Back</button></a>
       
       </div>
       	
       </div>
       <div class="col-md-4">
       <div id="min" style="min-height:450px;background:white;" >
       <h2> Upload New Image</h2>

         <form action="" method="post" enctype="multipart/form-data" class="well">
       
     <?php include 'upload_functions.php';?>

   <div class="form-group">
   
  <div class="input-group ">
  <span class="input-group-addon">New Title</span>
  <input type="text"  name="newTitle" class="form-control" required="" >

  </div>
  </div>
  
  <div class="form-group">
 
   Give description of this Image
  <div class="input-group ">
  <span class="input-group-addon"><span class="glyphicon glyphicon-ruble"></span><br><span class="glyphicon glyphicon-pencil"></span></span>
  <textarea name="newdescription" class="form-control" required=""></textarea>

  </div>
  </div>
  <div class="form-group">
          Attach New Image Here.
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-picture"></span>
          <input type="file" name="newfileToUpload2" id="newfileToUpload2" class="form-control" required="";>
          </div>
          </div>
          <input type="submit" class="btn btn-success" value="Upload" name="newregisternewSlider">
  
</form>
       
       </div>
       	
       </div>
       <div class="col-md-5">
       <?php
        $sql="SELECT * FROM  slider WHERE id='$id'";
                  $result=mysqli_query($con,$sql) or die(mysql_error());
                $fname='';
                  while($row=mysqli_fetch_array($result))
                   {    
                  $image=$row['image'];
                  $title=$row['title'];
                  $uploadTime=$row['time_uploaded'];
                  
                   }

         
       ?>
       <h2 style="text-align:center;">Current Image</h2>
       <h4 style="text-align:center;"> <img src="slider_image/<?php echo $image;?> " style='width:150px;height:150px;'></h4>
       <h4 style="text-align:center;"> <?php echo $title;?></h4>
       
       <h4 style="text-align:center;"><b>Time Uploaded: </b><?php echo $uploadTime;?></h4>
        
       </div>
       <div class="col-md-1">
       </div>
       
       </div> 
    </div>

</div>
<?php
include 'footer.php';
?>

</body>
</html>
<?php
//}
?>