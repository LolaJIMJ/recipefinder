
<?php
session_start();
  require_once "user_guard.php";
  
  require_once "classes/Recipe.php";
  require_once "classes/User.php";

 $user = new User;
  $data = $user->get_user_by_id($_SESSION['useronline']);
  
  $id=$data['user_id'];
  $fetches = $user->fetch_user_recipes($id);
  
 ?>



<?php
//session_start();
require_once("classes/Category.php");
$category =New Category;
$cat = $category->getAllCategory();


if(isset($_GET["id"])){
  $gotten_cat=$category->getCategoryById($_GET['id']);
  $cat_name=$category-> get_category_name_by_id($_GET["id"]);
  
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RecipeFinder - User Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   <!-- Icon Font Stylesheet -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
   
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index2.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img src="img/cat2.png" alt="recipe" height="30px" width="30px">RecipeFinder</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                       
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> Hi <?php echo ucfirst($data['user_fname']);  ?>!</h6>
                        <span>User</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="userdashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="img/cat.png" alt="recipe" height="30px" width="30px"></i>Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        
                          <?php foreach($cat as $categories){
                            ?>
                            <li><a href="foodrecipe.php?id=<?php echo $categories['category_id'] ?>"><?php echo $categories['category_name'] ?></a></li>
                            <?php 
                          }?>

                          
                        </div>
                    </div>
                    
                    <a href="index2.php" class="nav-item nav-link"><img src="img/home.png" alt="recipe" height="30px" width="30px">Home</a>
                     <a href="about.php" class="nav-item nav-link"><img src="img/about.png" alt="recipe" height="30px" width="30px">About Us</a>
                    <a href="add.php" class="nav-item nav-link"><img src="img/food.png" alt="recipe" height="30px" width="30px">Add New</a>

                    <a href="logout.php" onclick="return alert('User Successfully Logged Out')" class="nav-item nav-link"><img src="img/logout.png" alt="recipe" height="30px" width="30px">Logout</a>
                   
                    

                    

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
             <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
               
                 
            </nav> 
            <!-- Navbar End -->


            


            


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">My Recipe List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                        

                        <colgroup>
                <col width="5%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="20%">
                <col width="20%">
                <col width="15%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
            </colgroup>
                            <thead>
                                <tr class="text-dark">
                                   
                                    <th scope="col">#</th>
                                    <th scope="col">Recipe Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Instruction</th>
                                    <th scope="col">Ingredients</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if(isset($fetches)){
                                $n=1;
                                foreach($fetches as $f){
                                        ?>
                                <tr>
                                    <td><?php echo $n++ ?> </td>
                                    <td><?php echo $f['recipe_name'] ?></td>
                                    <td> <img src="admin/uploads/<?php echo $f['recipe_img'] ?>" alt="Sample Recipe Image" width="50px" height="50px" class="my-1"></td>
                                    <td><?php echo $f['recipe_dateadded'] ?></td>
                                    <td><?php echo substr( $f['recipe_desc'],1, 100) ?></td>
                                    <td><?php echo substr( $f['recipe_instruction'],1,  100) ?></td>
                                    <td><?php echo substr( $f['recipe_ingredient'],1, 100) ?></td>
                                   
                                    <td>
                                        <?php
                                        if($f['recipe_status']=="Published"){
                                            ?>
                                             <span class="py-1 px-3 badge rounded-pill bg-success"><small><?php echo $f['recipe_status'] ?></small></span> 
                                            <?php
                                        }
                                        if($f['recipe_status']=="Pending"){
                                            ?>
                                             <span class="py-1 px-3 badge rounded-pill bg-warning"><small><?php echo $f['recipe_status'] ?></small></span> 
                                            <?php
                                        }
                                        if($f['recipe_status']=="NotPublished"){
                                            ?>
                                             <span class="py-1 px-3 badge rounded-pill bg-danger"><small>Not Published</small></span> 
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $f['author'] ?></td>
                                   



                                <td class="text-center py-0 px-1">
                                
                       
                        <div class="btn-group" role="group">
                               <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle btn-sm rounded-0 py-0" data-bs-toggle="dropdown" aria-expanded="false">
                               Action
                               </button>
                              
                           <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                               
                               <li><a class="dropdown-item" href="viewmore.php?id= <?php echo $f['recipe_id'] ?>">View Details</a></li>
                               
                               <li><a class="dropdown-item"  href="editrecipe.php?id=<?php echo $f['recipe_id'] ?>">Edit</a></li>
                               
                               <li><a class="dropdown-item delete_data"  href="deleterecipe.php?id=<?php echo $f['recipe_id'] ?>">Delete</a></li>
                          </ul>
                           
                             </div>
                       </td>
                       </tr>


                       
                  
                       <?php
                       }
                     }
                    ?>

                    
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
         </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><img src="img/arrow.png" alt="recipe" height="30px" width="30px"></a>
    </div>

   
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
    <script src="js/main.js"></script>
</body>

</html>