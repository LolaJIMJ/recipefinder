<?php
session_start();
error_reporting(E_ALL);
require_once "../classes/General.php";
require_once "../classes/Recipe.php";
require_once "../classes/Admin.php";
$admin = new Recipe;
    if($_POST['sub']){
       // var_dump($_POST);

       $add=new Admin;

       
        $name = General::sanitize($_POST['fullname']);
        $desc = General::sanitize($_POST['desc']);
        $instruction = General::sanitize($_POST['instruction']);
        $ingredients = General::sanitize($_POST['ingre']);
        $file = $_FILES['image'];
        $cooktime = General::sanitize($_POST['time']);
        $catid = ($_POST['category_id']);
       // $userid = ($_SESSION['user_id']);
       $authorid=$add->get_admin_by_id($_SESSION['adminonline']);
         $author = $authorid['admin_name'];
        
         if($authorid){
            $role="Admin";
         }
         
   $admin_id=$_SESSION['adminonline'];

   $recipe_status="Published";
        
    }


       
        $check = $admin->insert_recipe($name,$desc,$instruction,$ingredients,$file,$cooktime,$catid,$author,$role,$admin_id,$recipe_status);
        if($check){
            $_SESSION['feedback'] = 'Successfully added!';
            header ("location:../dashboard.php"); 
      
}




