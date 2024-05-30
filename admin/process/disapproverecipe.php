<?php
 session_start();
require_once "../classes/Recipe.php";
$recipe=new Recipe;
if(isset($_GET['id'])){

    $id=$_GET['id'];
     $status="NotPublished";

     $result=$recipe->update_recipe_status($status,$id);

     if($result){
       $_SESSION['feedback']="Not Published Successfully";
       header("location:../totalrecipes.php");
       exit();
     }else{
        $_SESSION['errormsg']="An error occured";
        header("location:../totalrecipes.php");
        exit();
     }

}else{
    header("location:../totalrecipes.php");
    exit();
}

