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
                            Recipes
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="nigerian.php">Nigerian Cuisine</a></li>
                            <li><a class="dropdown-item" href="italian.php">Italian Cuisine</a></li>
                            <li><a class="dropdown-item" href="chinese.php">Chinese Cuisine</a></li>
                            <li><a class="dropdown-item" href="appetizer.php">Appetizer</a></li>
                            <li><a class="dropdown-item" href="main.php">Main Cuisine</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="dessert.php">Desserts</a></li>
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
                      <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                </nav>
            </div>
         </div>

         <!--  -->

       <!-- banner -->
      <section class="banner_main">
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg">
                  <h1>Healthy Food Recipes</h1>
                  <p>Cook Like a Pro with Our Easy and Tasty Recipes. From quick and easy meals to gourmet delights, we have something for every taste and occasion</p>
                  <!-- <a class="read_more" href="about.html">Read More</a> -->

                
               </div>
            </div>

           

            <div class="col-md-6">
                <div class="hero-img col-md-12">
                    <img src="img/banner1.jpg" alt="banner image" width="">
                </div>
            </div>

         
      </section>
      <!-- end banner -->
      <!-- food -->
      <div class="food">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <strong class="yellow">Recipe</strong> Categories</h2>
                     <span>Explore our diverse collection of recipes, each meticulously categorized for your culinary delight. Discover your next kitchen masterpiece with our curated selection of recipes.</span>
                  </div>
               </div>
            </div>
           
            <div class="row fourthSectionCards">

               <div class="col-sm-4">
                  <div class="category">
                    <div class="card-container">
                      <div class="card-body">
                        <div class="card">
                          <div class="card-img">
                            <img src="img/salmon.jpg" alt="" />
                          </div>
                          <div class="card-content">
                           
                            <div class="card-title">
                              <h3>Creamy smoked salmon & lemon pasta</h3>
                              <br />
                              <p>
                                This salmon and lemon dish comes with a zingy lemon
                                twist -
                              </p>
        
                              <button class="btn">
                                <a href="creamysmoked.php">See Full Details</a>
                              </button>
                              <!-- <a href="">See Full Details</a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col-sm-4">
                  <div class="category">
                    <div class="card-container">
                      <div class="card-body">
                        <div class="card">
                          <div class="card-img">
                            <img src="img/rice.jpg" alt="" />
                          </div>
                          <div class="card-content">
                            <div class="card-title">
                              <h3>Chicken Jollof Rice</h3>
                              <br />
                              <p>
                                 Chicken jollof rice is a flavorful and spicy West African dish that's sure to satisfy. This dish is the ultimate comfort food.
                              </p>
                              <button class="btn">
                                <a href="jollof.php">See Full Details</a>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col-sm-4">
                  <div class="category">
                    <div class="card-container">
                      <div class="card-body">
                        <div class="card">
                          <div class="card-img">
                            <img src="img/citrus.jpg" alt="" />
                          </div>
                          <div class="card-content">
                            <div class="card-title">
                              <h3>Citrus and bay spritz</h3>
                              <br />
                              <p>
                                 Make up a this zesty, fresh non-alcoholic aperitivo with your pre-dinner nibbles and recreate that feeling at home. .
                              </p>
                              <button class="btn">
                                <a href="citrusbay.php">See Full Details</a>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
              
              
           
            
            </div>
         </div>
      </div>
      
      <!-- works -->
      <div class="works">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <span>How it works</span>
                     <h2> <strong class="yellow">3 Step For </strong>Healthy Eating</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="white_bg" class="works_box">
                     <h4>01</h4>
                     <p>Balance Your Plate: Fill half your plate with fruits and vegetables, one-quarter with lean proteins, and one-quarter with whole grains. this ensures a well-rounded meal with essential nutients.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="white_bg" class="works_box ">
                     <h4>02</h4>
                     <p>Portion Control: Be mindful of portion sizes to avoid overeating. Use smaller plates, bowls, and utensils to help control serving sizes and prevent excess calorie intake. Enjoy your favourite treats in moderation.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="white_bg" class="works_box">
                     <h4>03</h4>
                     <p>Choose Nutrient-Rich Foods:Opt for nutrient-dense foods such as fruits, vegetables, lean protein, whole grains, and healthy fats. Limit processed foods, sugary snacks, and high-fat foods to maintain a balanced diet.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end works -->
      
      <!--  footer -->

      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="cont">
                        <h3> Explore  <br> endless culinary possibilities with our recipe finder.</h3>
                        <p>Join us on a flavorful journey!</p>
                      </div>
                     <button class="sub_btn" href="#">Terms of Service</button>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                       
                        <p>2024 RecipeFinder. All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      </div>
      <!-- Javascript files-->
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
       
   </body>
</html>
     
   
