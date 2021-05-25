<?php
    include 'core/init.php';
    $usr=$_SESSION['mynane'];
    $password=$_SESSION['mypassword'];
    $username=$_SESSION['myemail'];
    if (empty($username)===true) {
      header("location: index.php");
    }
    else
    {
include 'header.php';
?>
<div class="container-fluid" style="margin-top:-15px;">
<div  style="background:#F1F1F1; width:100%;">
    <div class="row">
     
       <div class="col-md-2">
       <div id="rightsidee" style="background:white;">
       <br><br>
       <b style="color:green;">Web Management</b>
       <a href="sliders-management.php"><button class="btn btn-primary" style="width:100%;"><span class="fa fa-sliders"></span> Upload Slide</button></a><br>
       <a href="gallery-management.php"><button class="btn btn-primary" style="width:100%;"><span class="fa fa-camera-retro"></span> Upload  Image</button></a><br>
       <button class="btn btn-primary" style="width:100%;"><span class="fa fa-file-video-o"></span> Upload Video</button><br>
       <a href="upload-advertisement.php"><button class="btn btn-primary" style="width:100%;"><span class="glyphicon glyphicon-bullhorn"></span> Post Advert</button></a><br>
       <button class="btn btn-primary" style="width:100%;"><span class="fa fa-newspaper-o"></span> Post News</button><br>
       <a href="upload-advertisement.php"> <button class="btn btn-primary" style="width:100%;"><span class="fa fa-newspaper-o"></span> Edit Top Story</button></a><br><br>
       <i style="color:blue;">Click any button above to change contents of website www.kenyataekwondo.co.ke</i> 

         
       
       </div>
       	
       </div>
       <div class="col-md-10">
       
       <div class="ror" id="min" style="min-height:450px;background:white;text-align:center;" >

       <br><br><br><br>
       
       <div class="col-md-4">
      
       <button class="img-circle" style="height:200px;width:200px;background:grey;font-size:2em;"><span class="fa fa-camera-retro"></span> <br>35<br>Images</button><br>
       <span style="color:red;font-size:2em;" class="fa fa-spinner fa-spin"></span>
       </div>
        <div class="col-md-4">
        <button class="img-circle" style="height:200px;width:200px;background:grey;font-size:2em;"><span class="fa fa-sliders"></span><br> 30<br>Slides</button>
        <br>
       <span style="color:green;font-size:2em;" class="fa fa-spinner fa-spin"></span>
       </div>
        <div class="col-md-4">
        <button class="img-circle" style="height:200px;width:200px;background:grey;font-size:2em;"><span class="fa fa-file-video-o"></span><br> 35<br>Videos</button>
        <br>
       <span style="color:black;font-size:2em;" class="fa fa-spinner fa-spin"></span>
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
}
?>