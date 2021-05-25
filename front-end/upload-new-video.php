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
     
       <div class="col-md-3">
       <div id="rightsidee" style="background:white;">
       <br>
       <a href="admin@home@panel.php"><button class="btn btn-primary"><span class="fa fa-arrow-left"></span>Back</button></a>
       <br>
       
       </div>
       	
       </div>
       <div class="col-md-9">
       <div id="min" style="min-height:450px;background:white;" >
       <br>
       <h3 class="btn-info" style="text-align:center;">Upload A video</h3>
       <form action="" method='post' enctype="multipart/form-data">
         <input type="file" name="file"/><br><br>
        <input type="submit" value="Upload" name="uploadvid" />
       </form>
        <?php 
        $name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($name)) {

$path= 'videos/';
if (empty($name))
{
echo "Please choose a file";
}
else if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}
?>
      
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