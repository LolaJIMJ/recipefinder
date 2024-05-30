<?php
 session_start();
require_once "../classes/Recipe.php";
$recipe=new Recipe;
if(isset($_GET['id'])){

    $id=$_GET['id'];
     $status="Published";

     $result=$recipe->update_recipe_status($status,$id);

     if($result){
       $_SESSION['feedback']="Published Successfully";
       header("location:../totalrecipes.php");
       exit();
     }else{
        $_SESSION['errormsg']="Failed to publish";
        header("location:../totalrecipes.php");
        exit();
     }

}else{
    header("location:../totalrecipes.php");
    exit();
}

