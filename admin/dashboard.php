<?php

session_start();
require_once "admin_guard.php";

require_once "classes/Admin.php";
$admin = new Admin;
$countcategory=$admin->get_all_category();
$countrecipe=$admin->get_all_recipe();
$countuser=$admin->get_all_user();
$countadmin=$admin->get_all_admin();


$count_cat=count($countcategory);
$count_recipe=count($countrecipe);
$count_user=count($countuser);
$count_admin=count($countadmin);




?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/mein.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
        <img src="img/search.png" alt="recipe" height="30px" width="30px">
        
        </div>
        <div class="header-right">
         
          <img src="img/notify.png" alt="recipe" height="30px" width="30px">
         
          <img src="img/mail.png" alt="recipe" height="30px" width="30px">
          <img src="img/account.png" alt="recipe" height="30px" width="30px">
        
        

        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
          
        
             <img src="img/spoon.png" alt="recipe" height="30px" width="30px">RECIPEFINDER
            
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="dashboard.php">
              <img src="img/home.png" alt="recipe" height="30px" width="30px"> Dashboard  
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="recipes.php">
              <img src="img/fork3.png" alt="recipe" height="30px" width="30px"> Admin Recipes
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="add.php">
             <img src="img/new.png" alt="recipe" height="30px" width="30px"> Add New
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="totalrecipes.php">
              <img src="img/fork3.png" alt="recipe" height="30px" width="30px"> User Recipes
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="totalusers.php">
              <img src="img/user.png" alt="user" height="30px" width="30px"> Users
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="admin.php">
              <img src="img/person.png" alt="user" height="30px" width="30px"> Admin
            </a>
          </li>
          <li class="sidebar-list-item">
        
            <a href="categories.php">
              <img src="img/engineer.png" alt="user" height="30px" width="30px"> Maintenance
            </a>
          </li>
          <li class="sidebar-list-item">
            
            <a href="index.php" onClick="alertpop()">
  <script>
        function alertpop() {
            alert("Admin Successfully Logged out");

        }
    </script>
               <img src="img/logout.png" alt="user" height="30px" width="30px"> Logout
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
        </div>

        <div class="main-cards">
              
          <div class="card">
            <div class="card-inner">
              <h2>CATEGORIES</h2>
              
              <img src="img/nutrition.png" alt="" height="60px" width="50px">
            </div>
            <h1><?php print $count_cat ?></h1>
          </div>
            
          <div class="card">
            <div class="card-inner">
              <h2>TOTAL RECIPES</h2>
             
              <img src="img/fork3.png" alt="recipe" height="60px" width="50px">
            </div>
            <h1> <?php print $count_recipe ?></h1>
          </div>
            
          <div class="card">
            <div class="card-inner">
              <h2>USERS</h2>
             
              <img src="img/user.png" alt="recipe" height="60px" width="50px">
            </div>
            <h1> <?php print $count_user ?></h1>
          </div>
             
          <div class="card">
            <div class="card-inner">
              <h2>ADMIN AUTHORS</h2>
             
              <img src="img/user.png" alt="user" height="60px" width="50px">
            </div>
            <h1> <?php print $count_admin ?></h1>
           
          </div>
          

        </div>

      
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- Custom JS -->
    <script src="js/mein.js"></script>
  </body>
</html>