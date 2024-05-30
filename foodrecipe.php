<?php
session_start();
require_once("classes/Category.php");
$category =New Category;
$cat = $category->getAllCategory();


if(isset($_GET["id"])){
  $gotten_cat=$category->getCategoryById($_GET['id']);
  $cat_name=$category-> get_category_name_by_id($_GET["id"]);
  // print_r($cat_name);
//   print "<pre>";
//   print_r($gotten_cat);
//   print "</pre>";
// die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">    
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/style.css">
        <title> Recipe Finder | <?php echo $cat_name?> </title>
    </head>
<body>
    

    <div class="container-fluid">
        <div class="row sticky-top">
           <div class="col" style="font-size: 20px;">
              <nav class="navbar navbar-expand-lg bg-warning">
                 <div class="container-fluid">
                 <img src="img/logo2.png" alt="#" height=40px width=30px />
                   <a class="navbar-brand" href="index.php">RecipeFinder</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link" href="about.php">About</a>
                       </li>
                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categories
                        </a>
                        <ul class="dropdown-menu">
                          <?php foreach($cat as $categories){
                            ?>
                            <li><a class="dropdown-item" href="foodrecipe.php?id=<?php echo $categories['category_id'] ?>"><?php echo $categories['category_name'] ?></a></li>
                            <?php 
                          }?>

                          
                        </ul>
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
    <br><br>

    <!-- The recipes page body -->
    <div class="container-fluid my-5">
        <!-- Header -->
        <h1 class="text-center display-3 my-5"><?php echo $cat_name ?></h1>
        <!-- End Header -->
        
        <div class="container-fluid px-5">
                <div class="row">
                  
					
 
</div>
 </div>

        
<div class="row justify-content-center mt-3">
 <div class="col-sm-10 mb-5">
 <!-- List of filtered recipes -->
                <div class="row">


                <?php 
                  foreach($gotten_cat as $got){
                    // print "<pre>";
                    // print_r($got);
                    // print "</pre>";
           
                    ?>

                      <div class="col-md-4">
                  <div class=" card card-deck wow fadeIn" data-wow-duration="4s">
                        <div class="card mb-3 ">
                            <div class="img-zoom">
                                <img class="card-img-top" style="height: 250px;" src="admin/uploads/<?php print $got['recipe_img'] ?>" alt="Card image">                

                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <a href="viewmore.php?id=<?php echo $got['recipe_id'] ?>"><?php echo $got['recipe_name'] ?></a>
                                </h5>
                                <hr>
                                <p class="text-sm mb-5">
                                    <small><span class="text-muted">Posted by</span> <?php  echo $got['author'] ?></small>
                                    
                                    
                                    <span class="text-muted float-right">
                                            <i class="ion ion-clock"></i>
                                        <?php echo $got['recipe_cooktime'] ?></span>
                                </p>
                               
                                 </div>
                           </div>


                        </div>
                    </div>
                     
                    <?php
                   }
                
                ?>
           </div>

          </div>
                <!-- End List of filtered recipes -->
                    <br>
            </div>
        </div>

    </div>
    <!-- End of The recipes page body -->

    <script src="bootstrap/js/bootstrap.min.js"></script>

   
</body>
</html>