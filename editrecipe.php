<?php
session_start();
require_once("classes/Category.php");
require_once("classes/Recipe.php");
$category =New Category;
$cat = $category-> getAllCategory();

$recipe=new Recipe;


if($_GET['id']){

    $id=$_GET['id'];
    $res=$recipe->get_recipe_by_id($id);




}else{
    header("location:");
    exit();
}

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
                    <a class="navbar-brand" href="index2.php">RecipeFinder</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="userdashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="about.php">About</a>
                        </li>
                      
                       
						
            <li class="nav-item">
                <a class="nav-link" href="login.php" onclick="return alert('User Successfully Logged out')">Logout</a>
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
           <br><br>
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 bg-info">
                        <br>
                        <h2>Update Recipe</h2>
                        

                  
                    
                    <form action="process/process_editrecipe.php" method="post" id="message_form" enctype="multipart/form-data">

                   
                        
                    <div class="mb-3">
                            <input type="text" value="<?php print $res['recipe_name'] ?>" name="fullname" id="fullname" placeholder="Enter Recipe Name" class="form-control" >
                        </div>
                       <div class="mb-3">
                            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Description" class="form-control"> <?php print $res['recipe_desc'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <textarea name="instruction" id="instruction" cols="30" rows="10" placeholder="Instruction" class="form-control"> <?php print $res['recipe_instruction'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <textarea name="ingre" id="ingre" cols="30" rows="10" placeholder="Ingredients" class="form-control" > <?php print $res['recipe_ingredient'] ?></textarea>
                        </div>

                       
              
                <div class="mb-3">
                   
                 <input type="file" name="image" id="recipeimage" accept="image/*"  disabled>
             </div>  

             <div class="mb-3">
                  <input type="text" value="<?php print $res['recipe_cooktime'] ?>" name="time" id="time" placeholder="Cooking Time" class="form-control" >
              </div>
             
    <div class="mb-3">
        <select name="category_id" id="option">
          <?php
           foreach($cat as $category){
            if($category['category_id']==$res['category_id']){
            ?>
       <option selected value="<?php echo  $category["category_id"]?>"> <?php echo  $category["category_name"]?></option>
            <?php
            }else{
              ?>
              <option  value="<?php echo  $category["category_id"]?>"> <?php echo  $category["category_name"]?></option>
              <?php
            }
           }
          
          ?>
    </select>
</div>

    
                        <div class="mb-3">
                          <input type="hidden" name="id" value="<?php print $id ?>"  >
                            <input type="submit" value="submit" name="sub" id="sub_msg" class="btn btn-primary" >
                        </div>
                    </form>

                  
                </div>
            </div>
      </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>