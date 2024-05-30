<?php
session_start();
error_reporting(E_ALL);
require_once "../classes/sanitize.php";
require_once "../classes/Recipe.php";
require_once "../classes/User.php";
$user = new Recipe;
    if($_POST['sub']){

        $add=new User;
       
        $name = sanitizer($_POST['fullname']);
        $desc = sanitizer($_POST['desc']);
        $instruction = sanitizer($_POST['instruction']);
        $ingredients = sanitizer($_POST['ingre']);
        $file = $_FILES['image'];
        $cooktime = sanitizer($_POST['time']);
        $catid = ($_POST['category_id']);
        $userid = ($_SESSION['useronline']);
        $authorid=$add->get_user_by_id($_SESSION['useronline']);
         $author = $authorid['user_fname'];
        
        
    }
     $id= [$_SESSION];

       
        $check = $user->insert_recipe($name,$desc,$instruction,$ingredients,$file,$cooktime,$catid,$userid,$author);
        if($check){
            $_SESSION['feedback'] = 'Successfully added!';
            header ("location:../userdashboard.php"); 
      





    }

?>


