<?php
if ($_POST['topleftregisternew']) {
  date_default_timezone_set('Africa/Nairobi');
    $now = new DateTime();
    $hrs = $now->format('H');
    $mt = $now->format('i');
    $date = $now->format('Y-m-d');
  $leftTitle=$_POST['toleftTitle'];
  $leftDescr=$_POST['topleftdescription'];

    $target_dir = "slider_image/";
    $target_file = $target_dir . basename($_FILES["topfileToUpload2"]["name"]);
    $image2=basename( $_FILES["topfileToUpload2"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["topfileToUpload2"]["tmp_name"]);
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
    
if ($_FILES["topfileToUpload2"]["size"] > 500000000000000000000000000000) {
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
    if (move_uploaded_file($_FILES["topfileToUpload2"]["tmp_name"], $target_file)) {
      
         $sqz=mysqli_query($con,"UPDATE top_story SET image='$image2',title='$leftTitle',description='$leftDescr',date_uploaded='$date'");
         ?>
         <script>
       alert("Post Successifully Changed");
       </script>
         <?php
                                    
    }
    else
    {

    }

}
	
}
if ($_POST['hotadvertregisternew']) {
  $desc=$_POST['hotadvertdescription'];
  $sqz=mysqli_query($con,"UPDATE hot_advert SET description='$desc'");
         ?>
         <script>
       alert("Post Successifully Changed");
       </script>
         <?php
	
}

?>