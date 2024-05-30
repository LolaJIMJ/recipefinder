<?php
session_start();
require_once("classes/Category.php");
$category =New Category;
$cat = $category->get_all_category();
// print_r($cat);
// die();

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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    
       <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                        </li>

        <li class="nav-item">
                          <a class="nav-link" href="recipes.php">Admin Recipes</a>
                        </li>
                       
                        <li class="nav-item">
                          <a class="nav-link" href="add.php">Add Recipe</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="totalrecipes.php">User Recipe</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="totalusers.php">Users</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="admin.php">Admin</a>
                        </li>


                       
                        <li class="nav-item">
                          <a class="nav-link" href="categories.php">Maintenance</a>
                        </li>
                       
              <li class="nav-item">
                <a class="nav-link" href="index.php" onclick="return alert('Admin Successfully Logged out')">Logout</a>
              </li>
		     </ul>
    </div>
  </div>
</nav>
</div>
         </div>
         </div>
   

         <!--  -->
           <br><br>
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 bg-info">
                        <br>
                        <h2>Add New Recipes</h2>
                        <p>Fill out the Form!</p>

                  
                    
                    <form action="process/process_recipe.php" method="post" id="message_form" enctype="multipart/form-data">

                   
                        
                    <div class="mb-3">
                            <input type="text" name="fullname" id="fullname" placeholder="Enter Recipe Name" class="form-control" >
                        </div>
                       <div class="mb-3">
                            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Description" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <textarea name="instruction" id="instruction" cols="30" rows="10" placeholder="Instruction" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <textarea name="ingre" id="ingre" cols="30" rows="10" placeholder="Ingredients" class="form-control" ></textarea>
                        </div>

                       
              
                <div class="mb-3">
                 <input type="file" name="image" id="recipeimage" accept="image/*" required>
             </div>  

             <div class="mb-3">
                  <input type="text" name="time" id="time" placeholder="Cooking Time" class="form-control" >
              </div>
             
    <div class="mb-3">
        <select name="category_id" id="option">
          <?php
           foreach($cat as $category){
            ?>
       <option value="<?php echo  $category["category_id"]?>"> <?php echo  $category["category_name"]?></option>
            <?php
           }
          
          ?>
    </select>
</div>

    
                        <div class="mb-3">
                            <input type="submit" value="submit" name="sub" id="sub_msg" class="btn btn-primary" >
                        </div>
                    </form>

                  
                </div>
            </div>
      </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>