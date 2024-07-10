
<?php

session_start();
require_once "admin_guard.php";

require_once "classes/Admin.php";
$admin = new Admin;


$admin->mark_notifications_as_read();

$notifications = $admin->get_all_notifications();

?>





<?php
require_once "partials/recipes.php";
?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard |Notification</title>

    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/mein.css">
  </head>
  <body>
   <!-- Main -->
   <main class="main-container">
       
         

           <div class="notifications">
                <h2>Notifications</h2>
                <ul>
                    <?php foreach ($notifications as $notification): ?>
                        <li><?= htmlspecialchars($notification['message']) ?> </li>
                        <li>Created date: <?= $notification['created_at'] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

           
      </main>
      <!-- End Main -->
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   

</body>
</html>