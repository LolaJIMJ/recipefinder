
<?php
      error_reporting(E_ALL);
     session_start();
    
    //    echo password_hash('lolly15',PASSWORD_DEFAULT);
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RecipeFinder |Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/fa/css/all.css" rel="stylesheet">
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div>
                                    <div class="card-body">

                                        <?php
                                        if(isset($_SESSION['admin_errormsg'])){
                                            echo "<div class='alert alert-danger'>".$_SESSION['admin_errormsg']."</div>";
                                            unset($_SESSION['admin_errormsg']);
                                        }
                                        ?>

                                        <form action="process/process_adminlogin.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name= "email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword" name="password">Password</label>
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="btn btn-primary col-12" name="btnlogin" value="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">© 2024 Recipe Finder. All Rights Reserved</div>
                           </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="../assets/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
