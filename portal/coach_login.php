<?php
include 'core/init.php';
include 'login_function.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taekwondo login</title>
        <link rel="stylesheet" href="bs/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="bs/css/bootstrap.min.css"/>
        <script src="bs/js/jquery-3.3.1.js"></script>
        <script src="bs/js/bootstrap.min.js"></script>
        <script src="bs/js/bootstrapValidator.min.js" type="text/javascript"></script>
        <link href="fa/css/font-awesome.css" rel="stylesheet" type="text/css"/>     
        <style>
            body{
                background-color: #ABC2CA;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"> 
                </div>
                <div class="col-md-4" style="margin-top:15px;">
                    
                    <form class="jumbotron" action=" " method="post">
                       <div style="width:100%;text-align:center"> <img src="Images/logo.jpg" style="height:100px;width:100px;border-radius:40px;border:none;"></div>
                        
                            <h5  style="text-align:center;" class="btn-info"><span class="glyphicon glyphicon-info-sign"></span> Coach login</h5>
                        <?php include 'coach_login_function.php';?>
                        <div class="form-group">
                            <label for="inputParent_name">KTF number</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input class="form-control" placeholder="Enter KTF number" type="text" name="email" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="Student_Adm">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input class="form-control" placeholder="Enter password" type="password" name="password"/>
                        </div>
                         </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success form-control" value="Sign In" name="coach_login" >
                        </div>
                       <a href="#"><span class="glyphicon glyphicon-lock"></span> Forgot password?</a>
                       <br>
                       <br>
                    <span class="glyphicon glyphicon-pencil"></span> Don't have account?<a href="coach_registration.php"> Register here</a>
                       
                        
                    </form>
                   <h5 style="color:red;"><i>@kenyataekwondofederation<i></h5>
                  
                </div>
                <div class="col-md-4"> </div>
            </div>
        </div>
    </body>
</html>