
<?php
//session_start();
require_once("classes/Recipe.php");
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
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>RecipeFinder | About </title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css" />
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
     <link rel="stylesheet" href="fontawesome/css/all.min.css" />
     <link rel="stylesheet" href="css/main2.css" />
      
   </head>



  
  <!-- <body> -->
  <body class="main-layout">
      <div class="container-fluid">
         <div class="row sticky-top">
            <div class="col" style="font-size:20px;">
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
                          <a class="nav-link" href="login.php">Login</a>
                        </li>

                       
						<li class="nav-item">
                          <a class="nav-link" href="register.php">Register</a>
                        </li>
						<li class="nav-item">
                          <a class="nav-link" href="contact.php">Contact</a>
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
    
    <br><br>
    <main class="page">
      <section class="about-page">
        <article>
          <h2>About Recipe Finder</h2>
          <p> Welcome to RecipeFinder - your ultimate destination for discovering delectable recipes from around the globe! Whether you're a seasoned chef or just starting out in the kitchen, RecipeFinder is here to inspire your culinary journey and make cooking an enjoyable adventure.</p>

           <p> At RecipeFinder, we understand the joy of exploring new flavors and cuisines. Our mission is to bring together a diverse collection of recipes that cater to every taste, dietary preference, and skill level. From mouthwatering mains to irresistible desserts, our extensive database is your one-stop solution for all your cooking needs.</p>
         
           <p>Embark on a flavorful journey like never before. Happy cooking!</p>
         
        </article>
        
        <img src="img/banner1.jpg" alt="about image" class="img about-img">
      </section>
      <br>
     
      
   
    </main>
    <footer class="page-footer" style="background-color: #582e26; font-size:30px">
      <p>
       
       2024 RecipeFinder.All Rights Reserved.
      </p>
    </footer>
      <!-- end footer -->
      </div>
     
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
       
   </body>
</html>