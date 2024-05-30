

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>RecipeFinder</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css" />
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
     <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
      
     <style>

* {
      padding: 0;
       margin: 0;
      box-sizing: border-box;
       
}

        body {
            font-family: "Montserrat", sans-serif;
            background-repeat: no-repeat;
            background-position: center;
            overflow: scroll;
            background-image: url("./assets/recipes/pasta.jpg");
        }

         header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 25px;
            position: sticky;
            top: 0;
            background-color: #333;
            color: #fff;
        }

       

        #page-container {
            position: relative;
            min-height: 100vh;
        }

        #content-wrap {
            padding-bottom: 2.5rem; 
        }

        
     
      .container {
  border-radius: 10px;
  background-color: lightgrey;
  padding: 40px;
  max-width: 100%;
  margin: 40px auto;
  box-sizing: border-box;
}

.container h3,
.container p {
  color: white;
}

@media screen and (max-width: 768px) {
  .container {
    padding: 20px;
  }
}

@media screen and (max-width: 576px) {
  .container {
    padding: 10px;
  }

  .container h3 {
    font-size: 18px;
  }

  .container p {
    font-size: 24px;
  }
}
        
#footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-repeat: no-repeat;
    text-align: center;
    font-size: 21px;
    font-family: Arial Black;
    color: white;
    padding: 20px;
    background-color:black; 
    position: sticky;
  top: 0;
}

form{
	padding:10px;
	border-radius:10px;
	border:solid;
	margin-top:20px;
}
</style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <div class="container-fluid">
         <div class="row sticky-top">
            <div class="col" style="font-size: 20px;">
              <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
  <img src="img/logo2.png" alt="#" height=40px width=30px />
    <a class="navbar-brand" href="dashboard.php">RecipeFinder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    
       <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                        </li>

        <li class="nav-item">
                          <a class="nav-link" href="recipes.php">Admin Recipes</a>
                        </li>
                       
                        <li class="nav-item">
                          <a class="nav-link" href="add.php">Add Recipe</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="totalrecipes.php">User Recipe</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" href="totalusers.php">Users</a>
                        </li>


                        <li class="nav-item">
                          <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="categories.php">Maintenance</a>
                        </li>
                       
              <li class="nav-item">
                <a class="nav-link" href="index.php" onclick="return alert('Admin Successfully Logged out')">Logout</a>
              </li>
		     </ul>
    </div>
  </div>
</nav>
</div>
         </div>
         </div>