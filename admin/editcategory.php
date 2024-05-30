

<?php
session_start();
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Edit Category</title>
</head>

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
</body>
</html>


