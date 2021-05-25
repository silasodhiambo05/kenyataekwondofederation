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
       <br>
       <a href="gallery-management.php"><button class="btn btn-primary"><span class="fa fa-arrow-left"></span>Back</button></a>
       <br>
       
       
       </div>
        
       </div>
       <div class="col-md-10">
       <div id="min" style="min-height:450px;background:white;" >
       <?php
        $sql="SELECT * FROM  gallery WHERE id='$id'";
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
        
       <form action="" method="POST" style="text-align:center;">
       <h2>Are you sure you want to delete Above post?</h2>
       <a href="gallery-management.php"><button class="btn btn-success">No, Back Home</button></a>
       <input type="submit" name="yesDeletePost" value="Yes, Delete" class="btn btn-danger">
         

       </form>
       
       </div>
        
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

if ($_POST['yesDeletePost']) {
        $sql="DELETE FROM gallery WHERE id='$id'";
        if ($con->query($sql) === TRUE) {
           header("location: gallery-management.php");
       } else {
         ?>
         <script>
     alert("Error deleting Image");
         </script>
         <?php
             }
}
?>