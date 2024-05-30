<?php

session_start();


require_once "classes/Category.php";

$category = new Category;

if(isset($_POST['send'])) {
    $result = $category->addCategory($_POST['category']);
    echo $result;
}
   
?>

 <?php
 require_once 'partials/recipes.php';
 ?>


<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   
     <style>



/* body {
    font-family: "Montserrat", sans-serif;
    background-repeat: no-repeat;
    background-position: center;
    margin: 0;
}

header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 25px;
    background-image: url("./assets/img/pasta.jpg");
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height:20px
}

.logo a {
    text-decoration: none;
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    font-family: Lucida Sans Typewriter;
}

ul {
    display: flex;
    flex-direction: row;
}

li {
    list-style-type: none;
    margin-left: 3px;
    color: #fff;
    font-size: 20px;
    font-family: Arial Black;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: calc(100vh - 200px); 
} */



.vertical-menu {
    width: 300px;
    justify-content:center;
    align-items:center;
    margin: 0 auto;
    display:block;
   
}

.vertical-menu a {
    display: block;
    padding: 15px;
    text-decoration: none;
    text-align: center;
    margin-top: 10px;
    margin: 5px auto;
    background-color: lightgrey;
    color: black;
  

}



.vertical-menu a:hover {
    background-color: #ccc;
}

@media screen and (max-width: 768px) {
  .vertical-menu a {
    width: 90%; 
  }
}


footer {
    width: 100%;
    height: 80px;
    background: linear-gradient(180deg, #313131, #384043 100%);
    text-align: center;
    font-size: 21px;
    font-family: Arial Black;
    color: #fff;
    position: fixed;
    bottom: 0;
    left: 0;
}

    </style> 
</head>
<body>

<!-- <header>
    <div class="logo"><a href="dashboard.php">Home</a></div>
    <nav>
        <ul>
            <li> Welcome Admin</li>
        </ul>
    </div>
    </nav>

    
    <br>
</header> -->
  <br><br><br> <br><br><br>


<div class="vertical-menu">

<a href="categories.php">Manage Categories</a>
<form class="forma" action="process/process_category.php" method="post">
 <h1>Add Category</h1>

 <label for="Name">Category Name</label>
 
 <input type="text"  name="category" placeholder="Category name"><br><br>
   <input type="submit" value="Save" name="send"><br>


   <a href="categoriesdisplay.php" style="text-decoration:none;">Display Categories</a>

</form>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>