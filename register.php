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
         <title>Register </title>
    </head>
<body>
    
    


<!-- The register form -->
<br><br><br>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8 col-xs-12">
                <div class="card">
                    <div class="card-body">
                    <?php
    if(isset($_SESSION['errormsg'])){
      echo "<div class='alert alert-danger'>" .$_SESSION['errormsg']. "</div>";
      unset($_SESSION['errormsg']);
    }
  ?>

                            <form action="process/process_register.php" method="post">
                                <h3 class="text-center mb-3 mt-3">Create Account</h3>

     

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Firstname</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fname" id="name" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Lastname</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="lname" id="name"  class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                    <input type="password" name="pwd" id="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" name="btnregister" value="register" class="btn btn-primary form-control">Create Account</button>
                                        <p> Have an account? <a href="login.php">Login</a></p>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- End of the register form -->

<div class="row">
    <div class="col-md-12">
                       
       <p>2024 <a href="index.php">RecipeFinder.</a> All Rights Reserved.</p>
      </div>
         </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>