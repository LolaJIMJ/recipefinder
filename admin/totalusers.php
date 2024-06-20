

<?php
session_start();
require_once "admin_guard.php";
require_once "classes/Admin.php";
require_once "classes/Recipe.php";

$admin = new Admin;
$recipe=new Recipe;


if(isset($_SESSION['adminonline']) && !empty($_SESSION['adminonline'])) {
    $admin_id = $_SESSION["adminonline"];
    // $fetches = $admin->fetch_admin_recipes($admin_id);
    // $data = $admin->get_admin_by_id($admin_id);

    
    $data = $admin->get_admin_by_id($_SESSION['adminonline']);
    $fetches = $admin->fetch_admin_recipes($_SESSION['adminonline']);
     $user=$recipe->get_all_users();

?>

<?php
  require_once "partials/recipes.php";
?>


<div class="row">
  <div class="col">
    <div class="card-body">
        <table class="table table-hover table-striped table-bordered">
            <colgroup>
                <col width="5%">
                <col width="30%">
                <col width="25%">
                <col width="15%">
                
            </colgroup>
            <thead>
                <tr>
                    <th class="text-center p-0">#</th>
                    <th class="text-center p-0">FirstName</th>
                    <th class="text-center p-0">LastName</th>
                    <th class="text-center p-0">Email</th>
                   
                    
                </tr>
            </thead>
            <tbody>
              <?php
  if(isset($user)){
    $n=1;
    foreach($user as $u){
      // print_r($fetchAdmin);
    
              ?>
              <tr>
                    <td class="text-center p-0"><?php echo $n++ ?></td>
                    <td class="py-0 px-1"><?php echo $u['user_fname'] ?></td>
                    <td class="py-0 px-1">
                    <?php echo $u['user_lname'] ?>
                    </td>
                    <td class="py-0 px-1 text-end"><?php echo $u['user_email'] ?></td>

                    </tr>
                    <?php
                       }
                     }
                    ?>
            </tbody>
        </table></div>
</div>


    
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    

    


  </body>
</html>
<?php
}
?>