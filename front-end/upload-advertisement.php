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
       
       </div>
       	
       </div>
       <div class="col-md-10">
       <div id="min" style="min-height:450px;background:white;" >
       <br>
      <?php
      //-----------------------------------------------hot advert
       $sql = "SELECT * FROM hot_advert";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         
         $hotAdvert=$row['description'];
      }

      

      //---------------getting top story
      $sql = "SELECT * FROM top_story";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         
         $topImage=$row['image'];
         $topTitle=$row['title'];
         $topDescr=$row['description'];
         $topTime=$row['date_uploaded'];
      }
      include 'advertisement-change-functions.php';
      ?>
      <h2>Top Story(Right Side)</h2>
      <img src="slider_image/<?php echo $topImage;?>" style="height:200px;width:250px;"><br>
      <b>Title:</b><?php echo $topTitle;?><br>
      <b>Description: </b><?php echo $topDescr;?><br>
      <b>Time Uploaded:</b> <?php echo $topTime;?><br>
      <div id="leftstory">
      <button class="btn btn-primary" onclick="changeLeftStory()"><span class="fa fa-edit"></span>Change</button>
      </div>
      <hr>
      <h2>Sliding Advert(At black Strip)</h2>
      <b>Current Advert:</b><?php echo $hotAdvert?><br>
      <div id="hotadvert">
        <button class="btn btn-primary" onclick="changeHotAdvert()"><span class="fa fa-edit"></span>Change</button>
        </div>
      <hr>
      
      <br><br><br>
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
<script>
  
   function changeLeftStory() {
     document.getElementById("leftstory").innerHTML='<form action="" method="post" enctype="multipart/form-data" class="well"><h4> Upload a New Post to replace above</4><div class="form-group"><div class="input-group "> <span class="input-group-addon">Title</span> <input type="text"  name="toleftTitle" class="form-control" required="" > </div> </div> <div class="form-group">Give description of this Image <div class="input-group "> <span class="input-group-addon"><span class="glyphicon glyphicon-ruble"></span><br><span class="glyphicon glyphicon-pencil"></span></span><textarea name="topleftdescription" class="form-control" required=""></textarea></div></div><div class="form-group">Attach Image Here.        <div class="input-group "> <span class="input-group-addon glyphicon glyphicon-picture"></span> <input type="file" name="topfileToUpload2" id="topfileToUpload2" class="form-control" required="";></div>         </div> <input type="submit" class="btn btn-success" value="Upload" name="topleftregisternew"></form>';
   }
   function changeHotAdvert()
   {
    document.getElementById("hotadvert").innerHTML='<h4>Type a new Advert to replace above post</h4> <form action="" method="post"> <div class="form-group">Give description of this Image <div class="input-group "> <span class="input-group-addon"><span class="glyphicon glyphicon-ruble"></span><br><span class="glyphicon glyphicon-pencil"></span></span><textarea name="hotadvertdescription" class="form-control" required=""></textarea></div></div><input type="submit" class="btn btn-success" value="Upload" name="hotadvertregisternew">';
   }
</script>