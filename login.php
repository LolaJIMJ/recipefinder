<?php
  session_start();

 
?>




<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
       <link rel="stylesheet" href="css/custom.css">
         <title>Login </title>
    </head>
<body>
    
    

<!-- The login form -->
<br><br><br>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-sm-8">
                <div class="card">
                    <div class="card-body">
                    <?php
    if(isset($_SESSION['errormsg'])){
      echo "<div class='alert alert-danger'>" .$_SESSION['errormsg']. "</div>";
      unset($_SESSION['errormsg']);
    }
  ?>


                            <form action="process/process_login.php" method="post">
                               
                            <h3 class="text-center mb-3 mt-3">Welcome back!</h3>

  
                                
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                    <input type="email" name="email" id="name"  class="form-control" placeholder="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                    <input type="password" name="pwd" id="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                            <label for="confirmPassword" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="confirm_pwd" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                        </div>
                               
                                
                               
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" name="btnlogin" value="login" class="btn btn-primary form-control">Login</button>
                                    </div>
                                </div>

                                <p>Don't have an account? <a href="register.php">Register Here</a></p>
                            </form>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- End of the login form -->

<div class="row">
    <div class="col-md-12">
                       
       <p>2024 <a href="index.php">RecipeFinder.</a> All Rights Reserved.</p>
      </div>
         </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
   
    </body>
    </html>