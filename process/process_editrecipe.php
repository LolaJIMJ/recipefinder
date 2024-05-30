<?php
   
  error_reporting(E_ALL);
  session_start();
  require_once "../classes/sanitize.php";
  require_once "../classes/Recipe.php";



   

    if(isset($_POST['sub'])){
        // var_dump($_POST);
 
        
         $name = sanitizer($_POST['fullname']);
         $desc = sanitizer($_POST['desc']);
         $instruction = sanitizer($_POST['instruction']);
         $ingredients = sanitizer($_POST['ingre']);
         $cooktime = sanitizer($_POST['time']);
         $catid = ($_POST['category_id']);
         $userid = ($_SESSION['useronline']);
          $recipe_id = $_POST["id"];

           //instantiate
          $user = new Recipe;

          // calling
          $response = $user->update_recipe($name,$desc,$instruction,$ingredients,$cooktime,$catid,$userid,$recipe_id);

          if($response){
            header("location:../userdashboard.php");
            exit();
        }else{
            echo "Unable to update recipe";
        }
       
    }

         
     
