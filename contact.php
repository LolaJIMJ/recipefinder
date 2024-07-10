
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
      <title>RecipeFinder</title>
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
     <section class="contact-container">
          <article class="contact-info">
            <h3>Want To Get In Touch?</h3>
            <p>
              Fill out the form to get regular updates on newly launched recipes
            </p>
            <p>Also get an exclusive chance of adding your recipes on the site.</p>
            <p>
              Share recipes with friends and family.
            </p>
          </article>
          <article>
            <form class="form contact-form" action="process/process_sendemail.php" method="POST">
              
              <div class="form-row">
                <label html="email" class="form-label">your email</label>
                <input type="email" name="email" id="email" class="form-input" />
              </div>
              <div class="form-row">
                <label html="message" class="form-label">message</label>
                <textarea name="message" id="message" class="form-textarea"></textarea>
              </div>
              <button type="submit" class="btn btn-block">
                submit
              </button>
            </form>
          </article>
        </section>
       <br>
       
     
    </main>
    
    <footer class="page-footer" style="background-color: #582e26; font-size:30px">
      <p>
       
        2024 Recipe Finder.All Rights Reserved
      </p>
    </footer>
      <!-- end footer -->
      </div>
     
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
       
   </body>
</html>