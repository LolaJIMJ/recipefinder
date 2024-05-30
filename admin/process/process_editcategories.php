<?php
require_once '../classes/Db.php';
require_once '../classes/Category.php'; 



if (isset($_POST['update'])) {
    // Get category ID and name from the form
    $categoryId = $_POST['categoryid'];
    $categoryName = $_POST['categoryname'];

    // Create an instance of the Category class
    $category = new Category();

    // Call the updateCategory method to update the category
    $result = $category->updateCategory($categoryId, $categoryName);

    if ($result) {
        // Category successfully updated
        echo '<script>';
        echo 'alert("Category successfully edited")';
        echo '</script>';
        echo "<script> location.href='../categoriesdisplay.php';</script>";
    } else {
        // Error occurred while updating category
        echo '<script>';
        echo 'alert("Error updating category")';
        echo '</script>';
        echo "<script> location.href='../categoriesdisplay.php';</script>";
    }
}


