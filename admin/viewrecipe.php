
<?php
session_start();
require_once("../classes/Category.php");
require_once("../classes/Recipe.php");
$category =New Category;
$cat = $category->getAllCategory();


if(isset($_GET["id"])){
$id = $_GET["id"];
$recipe_details=$category->get_recipe_by_id($id);   


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">    
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/custom.css">
   
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <title> Recipe Finder | recipe details</title>
    
</head>


 
<body>


<div class="container-fluid">
        <div class="row sticky-top">
           <div class="col" style="font-size: 20px;">
              <nav class="navbar navbar-expand-lg bg-warning">
                 <div class="container-fluid">
                 <img src="img/logo2.png" alt="#" height=40px width=30px />
                   <a class="navbar-brand" href="dashboard.php">RecipeFinder</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="about.php">About</a>
                       </li>
                      
                       
                      
                       <li class="nav-item">
                         <a class="nav-link" href="contact.php">Contact</a>
                       </li>
                     </ul>
                    

<form class="d-flex" role="search" style="padding-left:400px" action="search_results.php" method="POST">
<input class="form-control me-2" type="search" name="searchvalue" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-dark" type="submit">Search</button>
</form>


            </div>
                 </div>
               </nav>
           </div>
        </div>

   
    <!-- The navigation bar ending -->


    
    
    <!-- Display the recipe details  -->
    <div class="container my-5">
        <div class="row justify-content-center">
                <div class="col-sm-12">
                        <!-- Begin card details -->

                         
                        <div class="card">
                                <img class="card-img-top" style="max-height: 450px;" src="uploads/<?php print $recipe_details['recipe_img'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h1 class="card-title text-center h4 mb-4"><?php print $recipe_details['recipe_name'] ?>
                                            <small class="text-muted" style="font-size: 15px;">   
                                                <i class="ion ion-clock"></i>
                                                <?php print $recipe_details['recipe_cooktime'] ?>
                                            </small>
                                    </h1>
                                    <p class="text-center my-4">
                                    <?php print $recipe_details['recipe_desc'] ?>
                                    </p>
                                    <hr>
                                    
                                    
                                    <hr>


                                    <!-- Begin ingredients section -->
                                    <h3 class="mb-3 text-muted">Ingredients</h3>
                                    <ul class="list-group mt-3">
                                        <li class="list-group-item"><?php print $recipe_details['recipe_ingredient'] ?></li>
                                        
                                       
                                        
                                     </ul>
                                    <!-- End ingredients section -->

                                    <!-- Begin procedures section -->
                                    <h3 class="mb-3 mt-3 text-muted">Instruction</h3>
                                    <ul class="list-group my-3">
                                        <li class="list-group-item"><span class="badge badge-primary"></span><?php print $recipe_details['recipe_instruction'] ?></li>
                                        
                                     
                                    </ul>
                                    

                                   

                                </div>
                            </div>
                        <!-- End of card details  -->
                </div>
                
				
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->


    
</body>
</html>