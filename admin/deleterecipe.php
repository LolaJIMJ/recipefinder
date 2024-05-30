<?php
error_reporting(E_ALL);
require_once "classes/Recipe.php";
 
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $dell = new Recipe;
    $response = $dell->delete_recipe($id);

    if($response){
        $_SESSION['feedback']="Deleted Successfully";
        header("location:dashboard.php");
        exit();
      }else{
         $_SESSION['errormsg']="Failed to Delete";
         header("location:dashboard.php");
         exit();
      }
 }
?>

