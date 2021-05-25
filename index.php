
<?php
include 'header.php';
include 'getting_slider_image.php';
?>
 
<div class="container-fluid" style="margin-top:-20px;margin-left:-15px;margin-right:-15px;">
<div class="col-md-2" id="leftt" style="min-height:600px;background:#ABC2CA">




<h4 style="color:maroon;"> Kibabii University Mentors club</h4>
Schools mentored within the Country
<div id="table-wrapper">
                  <div id="table-scroll" style="min-height:390px;">
                 <table  id="table_rc" class="table table-bordered table-striped table-hover table-responsive" >
             <thead>    
       <tr style="background-color:#286090; color:white;">
       <th>Pos.</th>
       <th>University</th>
       <th>Gold</th>
       <th>Silver</th>
       <th>Bronze</th>
       </tr>
       </thead>
                    <tbody>
            <tr id="tr">
         <td style=" background-color:white;" >1</td>
         <td style=" background-color:lightgreen;">Kibabii</td>
         <td style="background-color:lightyellow;">6</td>
         <td style="background-color:lightgrey;">1</td>
         <td style=" background-color:white;" >4</td>
            </tr>
            <tr id="tr">
         <td style=" background-color:white;" >2</td>
         <td style=" background-color:lightgreen;">Ndejje</td>
         <td style="background-color:lightyellow;">5</td>
         <td style="background-color:lightgrey;">4</td>
         <td style=" background-color:white;" >2</td>
          </tr>
          <tr id="tr">
         <td style=" background-color:white;" >3</td>
         <td style=" background-color:lightgreen;">U.O.N</td>
         <td style="background-color:lightyellow;">2</td>
         <td style="background-color:lightgrey;">1</td>
         <td style=" background-color:white;" >1</td>
          </tr>
          <tr id="tr">
         <td style=" background-color:white;" >4</td>
         <td style=" background-color:lightgreen;">T.U.K</td>
         <td style="background-color:lightyellow;">2</td>
         <td style="background-color:lightgrey;">1</td>
         <td style=" background-color:white;" >-</td>
          </tr>
          <tr id="tr">
         <td style=" background-color:white;" >5</td>
         <td style=" background-color:lightgreen;">Gulu</td>
         <td style="background-color:lightyellow;">1</td>
         <td style="background-color:lightgrey;">1</td>
         <td style=" background-color:white;" >4</td>
         </tr>
         <tr id="tr">
         <td style=" background-color:white;" >6</td>
         <td style=" background-color:lightgreen;">U.S.I.U</td>
         <td style="background-color:lightyellow;">-</td>
         <td style="background-color:lightgrey;">5</td>
         <td style=" background-color:white;" >3</td>
         </tr>
         <tr id="tr">
         <td style=" background-color:white;" >7</td>
         <td style=" background-color:lightgreen;">KEMU</td>
         <td style="background-color:lightyellow;">-</td>
         <td style="background-color:lightgrey;">1</td>
         <td style=" background-color:white;" >7</td>
          </tr>
          <tr id="tr">
         <td style=" background-color:white;" >8</td>
         <td style=" background-color:lightgreen;">Kenyatta</td>
         <td style="background-color:lightyellow;">-</td>
         <td style="background-color:lightgrey;">1</td>
         <td style=" background-color:white;" >1</td>
         </tr>
         <tr id="tr">
         <td style=" background-color:white;" >9</td>
         <td style=" background-color:lightgreen;">Busitema</td>
         <td style="background-color:lightyellow;">-</td>
         <td style="background-color:lightgrey;">-</td>
         <td style=" background-color:white;" >3</td>
           </tr>
           <tr id="tr">
         <td style=" background-color:white;" >10</td>
         <td style=" background-color:lightgreen;">Makerere</td>
         <td style="background-color:lightyellow;">-</td>
         <td style="background-color:lightgrey;">-</td>
         <td style=" background-color:white;" >-</td>
          </tr>
         
           </table>
           </div>
           </div>
<?php
//include 'portal/current_event_posting.php';
?>  

</div>

<div class="col-md-8">
  
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-left:-15px;margin-right:-15px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
    <div class="item active">
      <img src="front-end/slider_image/<?php echo $image1;?>" alt="..." style="width:100%;" id="img1">
      <div class="carousel-caption">
        
        <h4><a href="#" style="color:white;"><?php echo $title1;?></a></h4>
        <div class="row">
        <div class="col-md-6">
        
        </div>
        
        </div>
      </div>
    </div>
    <div class="item">
      <img src="front-end/slider_image/<?php echo $image2;?>" alt="..." style="width:100%;" id="img1">
      <div class="carousel-caption">
       
        <h4><a href="#" style="color:black;"><?php echo $title2;?></a></h4>
        <div class="row">
        <div class="col-md-6">
        
        </div>
        
        </div>
      </div>
    </div>
    <div class="item">
      <img src="front-end/slider_image/<?php echo $image3;?>" alt="..." style="width:100%;" id="img1">
      <div class="carousel-caption">
        <h4 style="color:black;"><?php echo $title3;?></h4>
         <div class="row">
        <div class="col-md-6">
        
        </div>
        
        </div>
      </div>
    </div>
  
    <div class="item ">
      <img src="front-end/slider_image/<?php echo $image4;?>" alt="..." style="width:100%;" id="img1">
      <div class="carousel-caption">
        <h4 style="color:black;"><?php echo $title4;?> </h4>
         <div class="row">
        <div class="col-md-6">
        
        </div>
        
        </div>
      </div>
    </div>
    <div class="item">
      <img src="front-end/slider_image/<?php echo $image5;?>" alt="..." style="width:100%;" id="img1">

      <div class="carousel-caption">
        <h4 style="color:black;"><?php echo $title5;?></h4>
         
      </div>
    </div>
    <div class="item">
      <img src="front-end/slider_image/<?php echo $image6;?>" alt="..." style="width:100%;" id="img1">

      <div class="carousel-caption">
        <h4 style="color:black;"><?php echo $title6;?> </h4>
      </div>
    </div>
    <div class="item">
      <img src="front-end/slider_image/<?php echo $image7;?>" alt="..." style="width:100%;height:" id="img1">

      <div class="carousel-caption">
        <h4 style="color:black;"><?php echo $title7;?> </h4>
         
      </div>
    </div>
    <div class="item">
      <img src="front-end/slider_image/<?php echo $image8;?>" alt="..." style="width:100%;" id="img1">

      <div class="carousel-caption">
        <h4 style="color:black;"><?php echo $title8;?> </h4>
      </div>
    </div>
    <div class="item">
      <img src="front-end/slider_image/<?php echo $image9;?>" alt="..." style="width:100%;" id="img1">

      <div class="carousel-caption">
        <h4 style="color:black;"><?php echo $title9;?> </h4>
      </div>
    </div>
    
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>
<div class="col-md-2" style="min-height:600px;background:#ABC2CA;" >
<h4 class="btn-info"><img src="Images/p.jpg" class="img-circle" style="width:20px;height:20px;"> Top Story</h4>
<h4 ><?php echo $topTitle?></h4>
<img src="front-end/slider_image/<?php echo $topImage;?>"  style="width:100%;height:150px;">
<p> <?php echo $topDescr?><a href="#">Read More</a></p>


</div>
</div>
<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;background:white;">

<p id="hotAdvert" class="marquee" style="width:100%;text-align:center;background:black;color:white;font-size:1.5em"><span><?php echo $hotAdvert;?></span></p>
<br>
<div class="row" style="background:url('Images/5.jpg');max-height:200px;">
 







 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="Images/bet.jpg" style="width:100%;height:200px;">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="Images/bet6.jpg" style="width:100%;height:200px;">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="Images/bet2.jpg" style="width:100%;height:200px;">
    <div class="text"></div>
  </div>

  <!-- Next and previous buttons 
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
</div>
<br>

<!-- The dots/circles 
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> -->










  
</div>


  </div>
<div class="container-fluid" style="text-align:center;color:green;">
<h2 style="color:green;text-align:center;">Annoucements</h2>
<h3 style="color:maroon;text-align:center;"><span style="background:maroon;" class="badge">Proposed athletes for national team!!</span></h3>
<p><span style="color:red;" class="glyphicon glyphicon-cog fa-spin"></span> Kenya Taekwondo Federation wishes to inform our athletes that we are in process of obtaining a national team in of one player in each category. <a href="#" style="color:red;">Click here</a> to view the proposed athletes to compete for selection of this team.</p>
<h3 style="color:maroon;text-align:center;"><span style="background:maroon;" class="badge">Athletes Registration!!</span></h3>
<p><span style="color:red;" class="glyphicon glyphicon-cog fa-spin"></span> Kenya Taekwondo Federation wishes to inform our athletes that we are in process registering all our members online. This will facilitate services delivery to our members across the country. <a href="#" style="color:red;">Click here</a> to register online.</p>
</div>
<br><br>

  <div class="container-fluid" id="gallery" style="margin-left:-15px;margin-right:-15px;background:white;">

   <div class="col-md-4" style="background:white;margin-top:0px;">
   <p class="thumbnail">
   <h3 style="color:green;"><span class="fa fa-newspaper-o"></span> News/Speeches</h3>
  <!-- news slide -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="gallery/Kenya_NOC_logo.jpg"  style="width:100%;height:300px;">
        <div class="carousel-caption">
          
        </div>
      </div>
      <div class="item">
        <img src="gallery/wt.png"  style="width:100%;height:300px;">
        <div class="carousel-caption">
          
          
        </div>
      </div>

      <div class="item">
        <img src="gallery/kenyaSport.jpg"  style="width:100%;height:300px;">
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="item">
        <img src="gallery/flag.jpg"  style="width:100%;height:300px;">
        <div class="carousel-caption">
          
        </div>
      </div>
      <br>
  <h5 style="color:green;">Want to be a KTF Members?<a href="">Join Us!!</a></h5>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</p>

<!-- end news slide -->
  </div>
  <div class="col-md-4" style="background:white;margin-top:0px;">
  <p class="thumbnail">
  <!-- Parliament Contribution-->
  
  <h3 style="color:#BB1919"><span class="fa fa-file-video-o"></span> KTF Videos</h3>
   
<div class="row">
<div class="col-xs-6">
<p>
 <iframe class="HbdVideo" src="https://www.youtube.com/embed/qXPRbyN5QT8?playlist=qXPRbyN5QT8&loop=1&controls=0&rel=0"  autoplay controls width="100%" height="100%"></iframe>
 Video 1
</p>
  
</div>
<div class="col-xs-6" >
<p>
<video width="100%" height="100%" controls style="background:black;">
  <source src="videos/3.mp4" type="video/mp4">
  
</video>
Video 2

  </p>
</div>
  
</div>
<div class="row">
<div class="col-xs-6">
<p>
<video width="100%" height="100%" controls>
  <source src="videos/3.mp4" type="video/mp4">
  
</video>
Video 3

  </p>
</div>
<div class="col-xs-6">
<p>
<video width="100%" height="100%" controls>
  <source src="videos/3.mp4" type="video/mp4">
  
</video>
Video 4

  </p>
</div>
  
</div>
</p>
    <!--End Parliament Contribution-->
  </div>
  <div class="col-md-4" style="background:white;margin-top:0px;">
  <!-- Twitter-->
  <p class="thumbnail">
  <h3 style="color:#1DA1F2;" > <span class="fa fa-twitter"></span> Twitter</h3>
   
     <a href="https://twitter.com/kenyataekwondo1"><img src="Images/twit.png" style="width:100%;height:280px;"></a>
     <h3 > <a href="https://twitter.com/kenyataekwondo1" style="color:#1DA1F2;">#KenyaTaekwondo</a></h3>
   
   
  
  </p>

</div>
</div>
<br><br>
<div class="container-fluid" style="margin-top:-30px;margin-left:-15px;margin-right:-15px;" id="image">

  <h3 style="text-align:center;color:#BB1919;background:#E6E6E6;"><br>Images  Gallery<br><br>
  <br></h3>
  
    
  </div>
  <div class="container-fluid" id="gallery" style="margin-left:-15px;margin-right:-15px;">

  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">

  <a href="front-end/slider_image/<?php echo $gimage1;?>" class="thumbnail">
  <p>Image One</p>
    <img src="front-end/slider_image/<?php echo $gimage1;?>" style="height:200px;width:100%">
  </a>
    
  </div>
  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">
  <a href="front-end/slider_image/<?php echo $gimage2;?>"  class="thumbnail">
  <p>Image Two</p>
    <img src="front-end/slider_image/<?php echo $gimage2;?>" style="height:200px;width:100%">
  </a>
    
  </div>
  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">
  <a href="front-end/slider_image/<?php echo $gimage3;?>" class="thumbnail">
  <p>Image Three</p>
    <img src="front-end/slider_image/<?php echo $gimage3;?>" style="height:200px;width:100%">
  </a>
    
  </div>
  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">
  <a href="front-end/slider_image/<?php echo $gimage4;?>" class="thumbnail">
  <p>Image Four</p>
    <img src="front-end/home-page-gallery/<?php echo $gimage4;?>" style="height:200px;width:100%">
  </a>
    
  </div>

</div>
 <div class="container-fluid" style="margin-left:-15px;margin-right:-15px;">
  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">
  <a href="front-end/slider_image/<?php echo $gimage5;?>" class="thumbnail">
  <p>Image Five</p>
    <img src="front-end/slider_image/<?php echo $gimage5;?>" style="height:200px;width:100%">
  </a>
    
  </div>
  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">
  <a href="front-end/slider_image/<?php echo $gimage6;?>"  class="thumbnail">
  <p>Image Six</p>
    <img src="front-end/slider_image/<?php echo $gimage6;?>" style="height:200px;width:100%">
  </a>
    
  </div>
  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">
  <a href="front-end/slider_image/<?php echo $gimage7;?>" class="thumbnail">
  <p>Image Seven</p>
    <img src="front-end/slider_image/<?php echo $gimage7;?>" style="height:200px;width:100%">
  </a>
    
  </div>
  <div class="col-md-3" style="background:#E6E6E6;margin-top:-40px">
  <a href="front-end/slider_image/<?php echo $gimage8;?>" class="thumbnail">
  <p>Image Eight</p>
    <img src="front-end/slider_image/<?php echo $gimage8;?>" style="height:200px;width:100%">
  </a>
    <a href="#" style="font-size:1em;color:maroon;">View More images</a>
  </div>

</div>


<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;" >
<div style="background:#BB1919;">
<h3 style="text-align:center;color:white;">Our affiliates</h3>
</div>
</div>

<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;" >

<div class="col-md-3" style="background:#E6E6E6;margin-top:-10px;">
<a href="www.worldtaekwondo.org/"><img src="Images/wt2.jpg" class="img-circle" style="width:100px;height:100px;margin-top:40px;">
<br>
<h4 style="color:green;width:100%">World Taekwondo <br>(WT)</a></h4>
</div>
<div class="col-md-3" style="background:#E6E6E6;margin-top:-10px;">
<a href="http://www.worldtaekwondo.org/about-wt/members/africa/"><img src="Images/wt.png" class="img-circle" style="width:100px;height:100px;margin-top:40px;">
<br>
<h4 style="color:green;width:100%">World Taekwondo Africa <br>(WTA)</a></h4>
</div>
<div class="col-md-3" style="background:#E6E6E6;margin-top:-10px;">
<a href="www.olympic.org/kenya"><img src="Images/Kenya_NOC_logo.jpg" class="img-circle" style="width:100px;height:100px;margin-top:40px;">
<br>
<h4 style="color:green;width:100%">Kenya National Olympic Council<br> (KNOC)</a></h4>
</div>
<div class="col-md-3" style="background:#E6E6E6;margin-top:-10px;">
<a href="http://sportskenya.co.ke/tag/kenya-national-sports-council/"><img src="Images/kenyaSport.jpg" class="img-circle" style="width:100px;height:100px;margin-top:40px;">
<br>
<h4 style="color:green;width:100%">Kenya National Sport Council <br>(KNSC)</a></h4>
</div>

</div>

<div class="container-fluid" style="margin-top:-20px;margin-left:-15px;margin-right:-15px;">
<div style="background:#BB1919;" >
<h3 style="text-align:center;color:white;">Leave a comment or question:</h3>
</div>
</div>
<div class="container-fluid" style="margin-left:-15px;margin-right:-15px;">
<form action="" method="POST" class="jumbotron" style="margin-top:-5px;">
<?php include 'postMessage.php'; ?>
 <div class="form-group">
                            <label for="Student_Adm">Subject:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-edit"></span>
                            </span>
                            <input class="form-control" placeholder="Enter subject to enquire about" type="text" name="subject"/>
                        </div>
                         </div>
 <div class="form-group">
                            <label for="Student_Adm">Question or Coment (Write your question or belief comment here)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-pencil"></span>
                            </span>
                            <textarea class="form-control"  name="comment" required="" ></textarea>
                        </div>
                         </div>
 <div class="form-group">
                            <label for="Student_Adm">Email: (We will get back to you through this email)</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input class="form-control" placeholder="Enter your email" required="" type="text" name="email"/>
                        </div>
                         </div> 

                         <input type="submit" name="submitcoment" value="Submit" class="btn btn-success">                                               
  
</form>
</div>

<div class="container-fluid" style="text-align:center;margin-left:-15px;margin-right:-15px;">
<div style="background:grey;color:white;margin-top:-15px;"" id="us">
<br>
<br>
<h2 style="color:maroon;textalign:center;margin-left:20px;">About Us</h2>
Kenya Taekwondo Federation (KTF) is a Federation established under constitution of Kenya, Sports Acts. It is recognized by the World Taekwondo, in managements of taekwondo sports in Kenya. KTF carry out trainings and seminars to educate taekwondo athletes in Kenya. KTF also Organizes competitions across the country for taekwondo. KTF also advocate for the rights of Kenyans Taekwondo athletee.
<br>
<br>
<br>
<br>
</div>
</div>
<?php
include 'footer.php';

?>
</body>
</html>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 12000); // Change image every 2 seconds
}
</script>