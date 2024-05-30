
<?php
 session_start();
 require_once "partials/header.php";
?>
    
       <!-- banner -->
      <section class="banner_main">
         <div class="container">
         <div class="row d_flex">
            <div class="col-md-6">
               <div class="text-bg">
                  <h1>Healthy Food Recipes</h1>
                  <p>Cook Like a Pro with Our Easy and Tasty Recipes. From quick and easy meals to gourmet delights, we have something for every taste and occasion</p>
                 
                
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
                                <a href="viewmore.php?id=43">See Full Details</a>
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
                                <a href="viewmore.php?id=39">See Full Details</a>
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
                                <a href="viewmore.php?id=44">See Full Details</a>
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
     
      <?php
   require_once "partials/footer.php";
 ?>
     

