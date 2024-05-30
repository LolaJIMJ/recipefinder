<?php

session_start();
error_reporting(E_ALL);
require_once "../classes/Review.php";

// Check if user is logged in
if (!isset($_SESSION['useronline'])) {
    $_SESSION['errormsg'] = "You must be logged in to submit a review.";
    header("location: ../login.php");
    exit();
}

$review = new Review();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $review_comment = $_POST["comment"];
    $recipe_id = $_POST['recipe_id'];
    $user_id = $_SESSION['useronline']; // Ensures that the user_id is taken from the session

   $resp = $review->insert_review($review_comment, $recipe_id, $user_id);

    if ($resp) {
        $_SESSION['feedback'] = "Review added Successfully";
        header("location:../viewmore.php?id=$recipe_id"); 
        exit();
    } else {
        $_SESSION['errormsg'] = "Failed to add review";
        header("location:../viewmore.php?id=$recipe_id"); 
        exit();
    }
    
    
}

