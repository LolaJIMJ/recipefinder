



<?php
session_start();
require_once("classes/Recipe.php");


if (isset($_POST['searchvalue']) && !empty($_POST['searchvalue'])) {
    $searchValue = $_POST['searchvalue'];

    
    $recipe = new Recipe;

    
    $recipe->searchRecipe($searchValue);
} else {
    echo "Please enter a search term.";
}
?>
