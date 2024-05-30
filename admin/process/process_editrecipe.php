<?php
   
  error_reporting(E_ALL);
  session_start();
  require_once "../classes/General.php";
  require_once "../classes/Recipe.php";



   

    if(isset($_POST['sub'])){
        // var_dump($_POST);
 
        
         $name = General::sanitize($_POST['fullname']);
         $desc = General::sanitize($_POST['desc']);
         $instruction = General::sanitize($_POST['instruction']);
         $ingredients = General::sanitize($_POST['ingre']);
         $cooktime = General::sanitize($_POST['time']);
         $catid = ($_POST['category_id']);
        // $userid = ($_SESSION['user_id']);
          $admin_id = ($_SESSION['adminonline']);
          $recipe_id = $_POST["id"];

           //instantiate
          $admin = new Recipe;

          // calling
          $response = $admin->update_recipe($name,$desc,$instruction,$ingredients,$cooktime,$catid,$admin_id,$recipe_id);

          if($response){
            header("location:../dashboard.php");
            exit();
        }else{
            echo "Unable to update recipe";
        }
       
    }

         
     
