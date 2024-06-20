




<!DOCTYPE html>
<html lang="en">
   <head>
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>search_results</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css" />
      <link rel="stylesheet" href="..css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
     <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
      
   </head>
   <!-- body -->
   <body class="main-layout">
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
                          <a class="nav-link" href="../about.php">About</a>
                        </li>
                       
					        	
						<li class="nav-item">
                          <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                      </ul>
                      <form class="d-flex" role="search"  action="search_results.php" method="POST">
              <input class="form-control me-2" type="search" name="searchvalue" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
              </form>
                      
                    </div>
                  </div>
                </nav>
            </div>
         </div>
         <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
       
       </body>
       </html>






<?php
session_start();

require_once("classes/Recipe.php");


if (isset($_POST['searchvalue']) && !empty($_POST['searchvalue'])) {
    $searchValue = $_POST['searchvalue'];

    
    $recipe = new Recipe;

    
    $recipe->searchRecipe($searchValue);
} else {
    echo "Please enter a search term.";
}
?>