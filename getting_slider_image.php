<?php
//Getting images for sliders from table slider
$sql = "SELECT * FROM slider WHERE id='1'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image1=$row['image'];
         $title1=$row['title'];
      }
$sql = "SELECT * FROM slider WHERE id='2'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image2=$row['image'];
         $title2=$row['title'];
      }
      $sql = "SELECT * FROM slider WHERE id='3'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image3=$row['image'];
         $title3=$row['title'];
      }
      $sql = "SELECT * FROM slider WHERE id='4'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image4=$row['image'];
         $title4=$row['title'];
      }
      $sql = "SELECT * FROM slider WHERE id='5'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image5=$row['image'];
         $title5=$row['title'];
      }
      $sql = "SELECT * FROM slider WHERE id='6'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image6=$row['image'];
         $title6=$row['title'];
      }
      $sql = "SELECT * FROM slider WHERE id='7'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image7=$row['image'];
         $title7=$row['title'];
      }
      $sql = "SELECT * FROM slider WHERE id='8'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image8=$row['image'];
         $title8=$row['title'];
      }
      $sql = "SELECT * FROM slider WHERE id='9'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $image9=$row['image'];
         $title9=$row['title'];
      }

      //Getting Images for home page gallery from table front-gallery
      $sql = "SELECT * FROM frontgallery WHERE id='1'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage1=$row['image'];
         $gtitle1=$row['title'];
      }
$sql = "SELECT * FROM frontgallery WHERE id='2'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage2=$row['image'];
         $gtitle2=$row['title'];
      }
      $sql = "SELECT * FROM frontgallery WHERE id='3'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage3=$row['image'];
         $gtitle3=$row['title'];
      }
      $sql = "SELECT * FROM frontgallery WHERE id='4'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage4=$row['image'];
         $gtitle4=$row['title'];
      }
      $sql = "SELECT * FROM frontgallery WHERE id='5'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage5=$row['image'];
         $gtitle5=$row['title'];
      }
      $sql = "SELECT * FROM frontgallery WHERE id='6'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage6=$row['image'];
         $gtitle6=$row['title'];
      }
      $sql = "SELECT * FROM frontgallery WHERE id='7'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage7=$row['image'];
         $gtitle7=$row['title'];
      }
      $sql = "SELECT * FROM frontgallery WHERE id='8'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage8=$row['image'];
         $gtitle8=$row['title'];
      }
      $sql = "SELECT * FROM frontgallery WHERE id='9'";
       $result = mysqli_query($con, $sql);
       if(!$result){
      }
      while($row = mysqli_fetch_array($result)){
         $gimage9=$row['image'];
         $gtitle9=$row['title'];
      }

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
?>