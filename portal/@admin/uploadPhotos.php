<?php
if ($_POST['photoUpload']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="background:white;width:100%;">
        
        	<h3 class="text-center" style="color:maroon;"><span class="fa fa-cloud-upload"></span> Upload Photos to Public</h3>
       
        <form action="" method="post" id="adduser" class="jumbotron" enctype="multipart/form-data">
            <div class="form-group">
            Select Image:
            <div class="input-group ">
            
        	<input type="file" name="fileToUpload2" id="fileToUpload2" style="height:30px;font-size:1.5em;" >
        	</div>
        	</div>
        	<div class="form-group">
        	Comment:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-comment"></span>
        	<input type="text" name="comment" placeholder="Do you have something to say about this image " class="form-control">
        	</div>
        	</div>
        	
        	
        	<input type="submit" class="btn btn-success" value="Submit" name="uploadNow">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
        <?php
	
}
if ($_POST['uploadNow']) {
	?>
        <script>
        	document.getElementById("magement_panel").innerHTML="";
        </script>
        <?php
        //$pass1=$_POST['password'];
        $comment=$_POST['comment'];
        
        date_default_timezone_set('Africa/Nairobi');
	    $now = new DateTime();
	    $time = $now->format('H:i');
	    $date = $now->format('Y-m-d');
        
                //--------------------------------------------------------------------------------geting image
    $target_dir = "gallery/";
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
    
                                            ?>
                                         <h4 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> Image was not uploaded due to some technical problems.</h4>
                                          <?php
                                     
    
} else {
    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
        $sql1 = "INSERT INTO `gallery` (image,comment) VALUES ('$image2','$comment')";
            
                                if (!mysqli_query($con,$sql1)) {
                                 
                                  echo 'Not received';
                                      }
                                    
                                        else
                                        {
                                            ?>
                                         <h4 class="btn-success"><span class="glyphicon glyphicon-info-sign"></span> Image Uploaded successifully</h4>

                                         <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
        <div style="background:white;width:100%;">
        
        	<h3 class="text-center" style="color:maroon;"><span class="fa fa-cloud-upload"></span> Upload Photos to Public</h3>
       
        <form action="" method="post" id="adduser" class="jumbotron" enctype="multipart/form-data">
            <div class="form-group">
            Select Image:
            <div class="input-group ">
            
        	<input type="file" name="fileToUpload2" id="fileToUpload2" style="height:30px;font-size:1.5em;" >
        	</div>
        	</div>
        	<div class="form-group">
        	Comment:
            <div class="input-group ">
            <span class="input-group-addon glyphicon glyphicon-comment"></span>
        	<input type="text" name="comment" placeholder="Do you have something to say about this image " class="form-control">
        	</div>
        	</div>
        	
        	
        	<input type="submit" class="btn btn-success" value="Submit" name="uploadNow">
        	
        </form>

        </div>
        </div>
        <div class="col-lg-2">
        </div>
        </div>
                                          <?php
                                      }

    }
    else
    {

    }
                //----------------------------------------------------------------------------------ending image
            	
                                  }
                                      
           
}
?>