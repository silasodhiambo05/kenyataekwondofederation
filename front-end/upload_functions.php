<?php
if ($_POST['registernewSlider']) {
	date_default_timezone_set('Africa/Nairobi');
    $now = new DateTime();
    $hrs = $now->format('H');
    $mt = $now->format('i');
    $date = $now->format('Y-m-d');
    $time=$now->format('H:i');
    $mytime=$date.' At '.$time;
    $countTime=$now->format('YmdHi');

    //----------------------getting latestm in table slider
    $sql = "SELECT * FROM slider WHERE id='1'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $a=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='2'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $b=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='3'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $c=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='4'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $d=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='5'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $e=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='6'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $f=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='7'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $g=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='8'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $h=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM slider WHERE id='9'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $i=$row['time_counter'];
        
      }
       

  $minTime=min($a,$b,$c,$d,$e,$f,$g,$h,$i);
   //----------------------getting latestm in table frontgallery
    $sql = "SELECT * FROM frontgallery WHERE id='1'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $a1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='2'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $b1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='3'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $c1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='4'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $d1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='5'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $e1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='6'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $f1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='7'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $g1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='8'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $h1=$row['time_counter'];
        
      }
       
       

  $minTime1=min($a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1);

  //-------------------uploading image
	$title=$_POST['sliderTitle'];
	$desc=$_POST['description'];

	$target_dir = "slider_image/";
    $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
    $image2=basename( $_FILES["fileToUpload2"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        
        
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
        ?>
                                         <h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span>  Image was not uploaded because there exist an image with similiar name</h4>
                                          <?php
    
    
    $uploadOk = 0;
}
    
if ($_FILES["fileToUpload2"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, Image too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
                                            ?>
                                         <h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span>  Image was not uploaded because only JPG, JPEG, PNG & GIF files are allowed for the image</h4>
                                          <?php
                                      
    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo "Try Again Later ";
    
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
       $sql1 = "INSERT INTO `gallery` (image,title,description,time_uploaded,time_counter) VALUES ('$image2','$title','$desc','$mytime','$countTime')";
            
                                if (!mysqli_query($con,$sql1)) {
                                 
                                  echo 'Not received';
                                      }
                                    
                                        else
                                        {
                                          $sqz=mysqli_query($con,"UPDATE slider SET image='$image2',title='$title',time_uploaded='$mytime',time_counter='$countTime' WHERE time_counter='$minTime'");

                                          $sqz=mysqli_query($con,"UPDATE frontgallery SET image='$image2',title='$title',time_uploaded='$mytime',time_counter='$countTime' WHERE time_counter='$minTime1'");
                                            ?>
                                         <h6 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully Uploaded a New Image to Slider</h6>
                                          <?php
                                      }

    }
    else
    {

    }

}
}
//----------------------------editing current slide
if ($_POST['newregisternewSlider']) {
  date_default_timezone_set('Africa/Nairobi');
    $now = new DateTime();
    $hrs = $now->format('H');
    $mt = $now->format('i');
    $date = $now->format('Y-m-d');
    $time=$now->format('H:i');
    $mytime=$date.' At '.$time;
    $countTime=$now->format('YmdHi');

  $title=$_POST['newTitle'];
  $desc=$_POST['newdescription'];

  $target_dir = "slider_image/";
    $target_file = $target_dir . basename($_FILES["newfileToUpload2"]["name"]);
    $image2=basename( $_FILES["newfileToUpload2"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["newfileToUpload2"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        
        
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
        ?>
                                         <h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span>  Image was not uploaded because there exist an image with similiar name</h4>
                                          <?php
    
    
    $uploadOk = 0;
}
    
if ($_FILES["newfileToUpload2"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, Image too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
                                            ?>
                                         <h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span>  Image was not uploaded because only JPG, JPEG, PNG & GIF files are allowed for the image</h4>
                                          <?php
                                      
    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo "Try Again Later ";
    
} else {
    if (move_uploaded_file($_FILES["newfileToUpload2"]["tmp_name"], $target_file)) {
       $sql1 = "INSERT INTO `gallery` (image,title,description,time_uploaded,time_counter) VALUES ('$image2','$title','$desc','$mytime','$countTime')";
            
                                if (!mysqli_query($con,$sql1)) {
                                 
                                  echo 'Not received';
                                      }
                                    
                                        else
                                        {
                                          $sqz=mysqli_query($con,"UPDATE slider SET image='$image2',title='$title',time_uploaded='$mytime',time_counter='$countTime' WHERE id='$id'");

                                            ?>
                                         <h6 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully Uploaded a New Image to Slider</h6>
                                          <?php
                                      }

    }
    else
    {

    }

}
  }

  //uploading image to Gallery
  if ($_POST['registernewgallery']) {
  date_default_timezone_set('Africa/Nairobi');
    $now = new DateTime();
    $hrs = $now->format('H');
    $mt = $now->format('i');
    $date = $now->format('Y-m-d');
    $time=$now->format('H:i');
    $mytime=$date.' At '.$time;
    $countTime=$now->format('YmdHi');

    $sql = "SELECT * FROM frontgallery WHERE id='1'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $a1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='2'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $b1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='3'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $c1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='4'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $d1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='5'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $e1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='6'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $f1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='7'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $g1=$row['time_counter'];
        
      }
       $sql = "SELECT * FROM frontgallery WHERE id='8'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $h1=$row['time_counter'];
        
      }
       
       

  $minTime1=min($a1,$b1,$c1,$d1,$e1,$f1,$g1,$h1);

  //-------------------uploading image
  $title=$_POST['ImageGalleryTitle'];
  $desc=$_POST['ImageGallerydescription'];

  $target_dir = "slider_image/";
    $target_file = $target_dir . basename($_FILES["galleryfileToUpload2"]["name"]);
    $image2=basename( $_FILES["galleryfileToUpload2"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["galleryfileToUpload2"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        
        
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
        ?>
                                         <h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span>  Image was not uploaded because there exist an image with similiar name</h4>
                                          <?php
    
    
    $uploadOk = 0;
}
    
if ($_FILES["galleryfileToUpload2"]["size"] > 500000000000000000000000000000) {
    echo "Sorry, Image too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
                                            ?>
                                         <h4 class="btn-warning"><span class="glyphicon glyphicon-info-sign"></span>  Image was not uploaded because only JPG, JPEG, PNG & GIF files are allowed for the image</h4>
                                          <?php
                                      
    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   echo "Try Again Later ";
    
} else {
    if (move_uploaded_file($_FILES["galleryfileToUpload2"]["tmp_name"], $target_file)) {
       $sql1 = "INSERT INTO `gallery` (image,title,description,time_uploaded,time_counter) VALUES ('$image2','$title','$desc','$mytime','$countTime')";
            
                                if (!mysqli_query($con,$sql1)) {
                                 
                                  echo 'Not received';
                                      }
                                    
                                        else
                                        {
                      

                                          $sqz=mysqli_query($con,"UPDATE frontgallery SET image='$image2',title='$title',time_uploaded='$mytime',time_counter='$countTime' WHERE time_counter='$minTime1'");
                                            ?>
                                         <h6 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> You have successifully Uploaded a New Image to Gallery</h6>
                                          <?php
                                      }

    }
    else
    {

    }

}
  }


?>