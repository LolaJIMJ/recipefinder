

<?php
session_start();
require_once "admin_guard.php";
require_once "classes/Admin.php";
require_once "classes/Recipe.php";

$admin = new Admin;


if(isset($_SESSION['adminonline']) && !empty($_SESSION['adminonline'])) {
    $admin_id = $_SESSION["adminonline"];
    // $fetches = $admin->fetch_admin_recipes($admin_id);
    // $data = $admin->get_admin_by_id($admin_id);

    
    $data = $admin->get_admin_by_id($_SESSION['adminonline']);
    $fetches = $admin->fetch_admin_recipes($_SESSION['adminonline']);

?>


<?php
   require_once "partials/recipes.php";
?>


<div id="page-container">
<div id="content-wrap">
    
<div class="row">
  <div class="col">
    <div class="card-body">
        <table class="table table-hover table-striped table-bordered">
            <colgroup>
                <col width="5%">
                <col width="10%">
                <col width="15%">
                <col width="10%">
                <col width="20%">
                <col width="20%">
                <col width="15%">
            </colgroup>
            <thead>
                <tr>
                    <th class="text-center p-0">#</th>
                    <th class="text-center p-0">Recipe Name</th>
                    <th class="text-center p-0">Image</th>
                    <th class="text-center p-0">Date</th>
                    <th class="text-center p-0">Description</th>
                     <th class="text-center p-0">Instruction</th>
                    <th class="text-center p-0">Ingredients</th> 
                   <th class="text-center p-0">Author</th>
                    <th class="text-center p-0">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
  if(isset($fetches)){
    $n=1;
    foreach($fetches as $f){
      // print_r($fetchAdmin);
    
              ?>
              <tr>
                    <td class="text-center p-0"><?php echo $n++ ?></td>
                    <td class="py-0 px-1"><?php echo $f['recipe_name'] ?></td>
                    <td class="py-0 px-1">
                        <center>
                            <img src="uploads/<?php echo $f['recipe_img'] ?>" alt="Sample Recipe 102 Image" width="50px" height="50px" class="my-1">
                        </center>
                    </td>
                    <td class="py-0 px-1 text-end"><?php echo $f['recipe_dateadded'] ?></td>
                    <td class="py-0 px-1">
                        <div class="fs-6 lh-1">
                            
                            <p class="fw-lighter truncate-1 m-0"><?php echo $f['recipe_desc'] ?></p>
                        </div>
                    </td>
                    <td class="py-0 px-1 text-center">
                   <span class="py-1 px-3 "><?php echo substr( $f['recipe_instruction'],1,  200) ?></span> </td>
                    <td class="py-0 px-1"><?php echo substr( $f['recipe_ingredient'],1, 100 )?></td>
                    <td class="py-0 px-1"><?php echo $f['author'] ?></td>


                    

                    
                    <td class="text-center py-0 px-1">
                       
                    <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle btn-sm rounded-0 py-0" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                            </button>
                           
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                        <li><a class="dropdown-item" href="../viewmore.php?id= <?php echo $f['recipe_id'] ?>" >View Details</a></li>
                        
                        <li><a class="dropdown-item"   href="editrecipe.php?id=<?php echo $f['recipe_id'] ?>">Edit</a></li>
                           
                           <li><a class="dropdown-item delete_data" href="deleterecipe.php?id=<?php echo $f['recipe_id'] ?>">Delete</a></li>
                            
                       </ul>
                        
                          </div>
                    </td>
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