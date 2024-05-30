
<?php

error_reporting(E_ALL);
session_start();
require_once "classes/Category.php";
require_once 'classes/Db.php';



$category = new Category;
$result = $category->getAllCategories();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Categories Page</title>
</head>

<body>
    <br>
    <h1>Categories of Recipes</h1>
    <table class="table table-responsive table-striped">
        <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    

        <?php
    $counter = 1;
    foreach ($result as $row) {
    ?>
    




        <tr>
          
            <td><?php echo $row['category_id'] ?></td>
            <td><?php echo $row['category_name']?></td>
            <td><button><a onclick="return confirm('Are you sure you want to delete?')" href="deletecategory.php?deleteid=<?php echo $row['category_id']?>">Delete</a></button></td>
            <td><button><a href="editcategory.php?editid=<?php echo $row['category_id']?>">Edit</a></button></td>
        </tr>
       

        <?php
       $counter ++;
      }
   
    
      ?>
  



    </table>

    <button><a href="categories.php">Back</a></button>
</body>
</html>
