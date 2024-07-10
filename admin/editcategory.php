
<?php
//    require_once "partials/recipes.php";
?>


<?php
// session_start();
require_once 'classes/Db.php';
require_once 'classes/Category.php';

$category = new Category;

if(isset($_GET['editid'])) {
    $categoryId = $_GET['editid'];
    $row = $category->getCategoryById($categoryId);
} else {
    header("location:categories.php");
    exit();
}

if (isset($_SESSION['admin_errormsg']) && is_array($_SESSION['admin_errormsg'])) {
    $errors = $_SESSION['admin_errormsg'];
}
if (isset($_SESSION['admin_errormsg']) && !is_array($_SESSION['admin_errormsg'])) {
    echo "<div class='alert alert-danger'>".$_SESSION['admin_errormsg']."</div>";
    unset($_SESSION['admin_errormsg']);
}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>RecipeFinder | Edit Category</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css" />
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
     <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
      
     <style>

* {
      padding: 0;
       margin: 0;
      box-sizing: border-box;
       
}

.container {
  border-radius: 10px;
  background-color: lightgrey;
  padding: 40px;
  max-width: 70%;
  margin: 40px auto;
  box-sizing: border-box;
}

.container h3,
.container p {
  color: white;
}

@media screen and (max-width: 768px) {
  .container {
    padding: 20px;
  }
}

@media screen and (max-width: 576px) {
  .container {
    padding: 10px;
  }

  .container h3 {
    font-size: 18px;
  }

  .container p {
    font-size: 24px;
  }
}
        


/* form{
	padding:10px;
	border-radius:10px;
	border:solid;
	margin-top:20px;
} */
</style> 
   </head>
   <!-- body -->
   <div class="main-layout">
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


<div class="container"> 
   <div class="row">
    <div class="col-md-6">
         
    <form action="process/process_editcategories.php" method="post">
  
        <div class="mb-3">
        <h3>Category ID</h3>
    <input type="text" name="categoryid" value="<?php echo $row['category_id']; ?>">
    </div>
    
      <div class="mb-3">
         <h3>Category Name</h3>
         <input type="text" name="categoryname" value="<?php echo $row['category_name']; ?>"><br>
        </div>
       
        <div class="mb-3">
      <input type="submit" name="update" value="update">
      </div>
</form>
</div>
</div>

</div>


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


