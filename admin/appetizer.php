<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
       <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/style.css">
         <title>Appetizer </title>
    </head>
<body>
    
    <div class="container-fluid">
        <div class="row sticky-top">
           <div class="col"  style="font-size: 20px;">
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
                            <li><a class="dropdown-item" href="nigerian.html">Nigerian Cuisine</a></li>
                            <li><a class="dropdown-item" href="italian.html">Italian Cuisine</a></li>
                            <li><a class="dropdown-item" href="chinese.html">Chicken Cuisine</a></li>
                            <li><a class="dropdown-item" href="appetizer.html">Appetizer</a></li>
                            <li><a class="dropdown-item" href="main.html">Main Cuisine</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="dessert.html">Desserts</a></li>
                          </ul>
                        </li>
                       <!-- <li class="nav-item">
                         <a class="nav-link" href="add.php">Add Recipe</a>
                       </li> -->
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

   
    <!-- The navigation bar ending -->

    <!-- The recipes page body -->
    <br><br>
    <div class="container-fluid my-5">
        <!-- Header -->
        <h1 class="text-center display-3 my-5">Appetizers</h1>
        <!-- End Header -->
        
        <div class="container-fluid px-5">
                <div class="row">
                  
					
<div class="col-sm-6">
                           
    <select id="mealTypeSelect" class="form-control mb-3" onchange="redirectToMealPage()">
    <option value="">Meal Type</option>
    <option value="main.php">Main Dishes</option>
    <option value="appetizer.php">Appetizers</option>
    <option value="dessert.php">Desserts</option>
</select>
</div>
                   
<div class="col-sm-6">
    <select class="form-control mb-5" onchange="redirectToCategoryPage(this.value)">
    <option value="">Categories</option>
    <option value="italian.php">Italian Cuisine</option>
    <option value="nigerian.php">Nigerian Cuisine</option>
    <option value="chinese.php">Chinese Cuisine</option>
</select>
 </div>
</div>
</div>

        
        <div class="row justify-content-center mt-3">
         <div class="col-sm-10 mb-5">

                <!-- List of filtered recipes -->
                <div class="card-deck wow fadeIn" data-wow-duration="4s">
                        <div class="card mb-3">
                            <div class="img-zoom">
                                <img class="card-img-top" style="height: 250px;" src="img/lemoncake.jpg" alt="Card image cap">                

                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <a href="cherrylemon.php">Cherry, lemon and polenta cake recipe</a>
                                </h5>
                                <hr>
                                <p class="text-sm mb-5">
                                    <small><span class="text-muted">by</span>Blessing George</small>
                                    <span class="text-muted float-right">
                                            <i class="ion ion-clock"></i>
                                        50mins</span>
                                </p>
                                
                               
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="img-zoom">
                                <img class="card-img-top" style="height: 250px;" src="img/spring.jpg" alt="Card image cap">                

                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <a href="vegetable.php">Vegetable curry spring rolls</a>
                                </h5>
                                <hr>
                                <p class="text-sm mb-5">
                                    <small><span class="text-muted">by</span>Ololade Adeniji</small>
                                    <span class="text-muted float-right">
                                            <i class="ion ion-clock"></i>
                                         30mins</span>
                                </p>
                                
                            </div>
                        </div>
                       
					   <div class="card mb-3">
                            <div class="img-zoom">
                                <img class="card-img-top" style="height: 250px;" src="img/puff.jpg" alt="Card image cap">                

                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    <a href="puff.php">Peppered Puff Puff</a>
                                </h5>
                                <hr>
                                <p class="text-sm mb-5">
                                    <small><span class="text-muted">by</span>Ololade Adeniji</small>
                                    <span class="text-muted float-right">
                                            <i class="ion ion-clock"></i>
                                        1hr 25mins</span>
                                </p>
								 <p class="h6 text-center">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </p>

                                
                            </div>
                        </div>
                    </div>
                <!-- End List of filtered recipes -->
                    <br>
                    
                <!-- Pagination links  -->
                <nav class="row mt-5 justify-content-center">
                    <ul class="pagination pagination-sm-8">
                        <li class="page-item disabled">
                         <a class="page-link" href="" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="main.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="appetizer.php">2</a></li>
                        <li class="page-item active"><a class="page-link" href="dessert.php">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- End of pagination links -->

            </div>
        </div>

    </div>
    <!-- End of The recipes page body -->

 <script src="bootstrap/js/bootstrap.min.js"></script>


<script>
    function redirectToMealPage() {
        var selectBox = document.getElementById("mealTypeSelect");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        if (selectedValue) {
            window.location = selectedValue;
        }
    }

    function redirectToCategoryPage(url) {
        if (url) {
            window.location.href = url;
        }
    }
</script>
</body>
</html>