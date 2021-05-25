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
?>
<div class="container-fluid" style="margin-top:-15px;">
<div  style="background:white; width:100%;">
    <div class="row">
     
       <div class="col-md-2">
       <div id="rightsidee" style="background:white;">
       <br>
       <a href="admin@home@panel.php"><button class="btn btn-primary"><span class="fa fa-arrow-left"></span>Back</button></a>
       <br>
       <h4><span class="fa fa-sliders"></span> Slides Management</h4>

       <form action="" method="POST"   >
        <input type="submit" name="uploadSlider" value="Upload New Image To Slider" class="btn btn-danger">
       
       </form>
       <?php
       include 'upload_functions.php';
       if ($_POST['uploadSlider']) {
         ?>
         <hr>
         <form action="" method="post" enctype="multipart/form-data" class="well">
       
     <h6> Upload a New Slider</6>

   <div class="form-group">
   
  <div class="input-group ">
  <span class="input-group-addon">Title</span>
  <input type="text"  name="sliderTitle" class="form-control" required="" >

  </div>
  </div>
  
  <div class="form-group">
 
   Give description of this Image
  <div class="input-group ">
  <span class="input-group-addon"><span class="glyphicon glyphicon-ruble"></span><br><span class="glyphicon glyphicon-pencil"></span></span>
  <textarea name="description" class="form-control" required=""></textarea>

  </div>
  </div>
  <div class="form-group">
          Attach Image Here.
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-picture"></span>
          <input type="file" name="fileToUpload2" id="fileToUpload2" class="form-control" required="";>
          </div>
          </div>
          <input type="submit" class="btn btn-success" value="Upload" name="registernewSlider">
  
</form>
       

         <?php
       }

       ?>
       
       </div>
       	
       </div>
       <div class="col-md-10">
       <div id="min" style="min-height:450px;background:white;" >
       <br>
       <h3 class="btn-info" style="text-align:center;">Current Images In The Slide</h3>
       <h4 style="text-align:center;">Chosen One to Change
        
       </h4>
       <?php
       //getting current slides
       $sql="SELECT * FROM slider";
        $result=mysqli_query($con,$sql) or die(mysql_error());
                  ?>
                  
                  <div id="table-wrapper1">
                  <div id="table-scroll1">
                 <table class="table table-bordered table-striped table-hover table-responsive">
             <thead>    
       <tr style="background-color:#286090; color:white;">
       
       </tr>
       </thead>
                  <?php
                
                  while($row=mysqli_fetch_array($result))
                   {    
                  $image=$row['image'];
                  $id=$row['id'];
                  $title=$row['title'];
                  $uploadTime=$row['time_uploaded'];
            
                    ?>
                    <tbody>
            <tr id="tr">
         <td><img class="thumbnail" src="slider_image/<?php echo $image;?>"style="height:50px;width:100px;"></td>
         <td><?php echo $title."<br>".$uploadTime;?></td>
         <td><a href="changing-slider-image.php?c=<?php echo $id;?>"><button class="btn btn-primary"><span class="fa fa-edit"></span>Edit</button></a></td>
         </tr>
         </tbody>
         
    <?php 


            
      }
      ?>
           </table>
           </div>
           </div>
         
       
       
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
?>