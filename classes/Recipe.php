<?php
require_once "Db.php";


class Recipe extends Db{
	private $dbconn;
	
	public function __construct(){
        $this->dbconn = $this->connect();
	}

	
public function insert_recipe($name,$desc,$instruction,$ingredients,$file,$cooktime,$catid,$userid,$author){
	$filename = $file['name'];
	$r = explode('.',$filename);
	$temp = $file['tmp_name'];
	$filename = time().rand().'.'.$r[1];
	if(!move_uploaded_file($temp, "../admin/uploads/".$filename)){
       
		return false;
	}

    



	$sql = "INSERT INTO recipe(recipe_name, recipe_desc, recipe_instruction, recipe_ingredient, recipe_img, recipe_cooktime, category_id, userid, author) VALUES (?,?,?,?,?,?,?,?,?)";
	$stmt = $this->dbconn->prepare($sql);
	$resp = $stmt->execute([$name,$desc,$instruction,$ingredients,$filename,$cooktime,$catid,$userid,$author]);
		if($resp){
			return true;
		}else{
			return false;
		}
	
}

		

public function get_recipe_by_id($id) {
	$sql='SELECT * FROM recipe  WHERE recipe_id=?';
	$stmt= $this->dbconn->prepare($sql);
	$stmt->execute([$id]);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	return $result;
}

public function delete_recipe($id){
    $sql = "DELETE FROM recipe WHERE recipe_id = ?";
    $stmt = $this->dbconn->prepare($sql);
    $result = $stmt->execute([$id]);
    return $result;
   }


public function update_recipe($name,$desc,$instruction,$ingredients,$cooktime,$catid,$user_id,$recipe_id){
    $sql = "UPDATE recipe SET recipe_name = ?, recipe_desc = ?, recipe_instruction = ?, recipe_ingredient = ?,  recipe_cooktime = ?, category_id = ?,  userid = ?  WHERE recipe_id = ?";
    $stmt = $this->dbconn->prepare($sql);
   
    $response = $stmt->execute([$name,$desc,$instruction,$ingredients,$cooktime,$catid,$user_id,$recipe_id]);
    return $response;
}





// public function searchRecipe($searchValue) {
//     $searchValue = trim(strtolower($searchValue));
//     $searchParam = "%" . $searchValue . "%";

//     $sql = "SELECT recipe.*, category.category_name 
//             FROM recipe 
//             JOIN category ON recipe.category_id = category.category_id
//             WHERE LOWER(recipe.recipe_name) LIKE :searchParam 
//             OR LOWER(recipe.author) LIKE :searchParam 
//             OR LOWER(category.category_name) LIKE :searchParam";

//     $stmt = $this->dbconn->prepare($sql);
//     $stmt->execute([':searchParam' => $searchParam]);

//     if ($stmt->rowCount() > 0) {
//         echo "Search Results:<br>";
//         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//             echo "Recipe Name: " . htmlspecialchars($row['recipe_name']) . "<br>";
//             echo "Author: " . htmlspecialchars($row['author']) . "<br>";
//             echo "Category: " . htmlspecialchars($row['category_name']) . "<br>";
//             echo "<br>";
//         }
//     } else {
//         echo "No results found.";
//     }
// }


public function searchRecipe($searchValue) {
    $searchValue = trim(strtolower($searchValue));
    $searchParam = "%" . $searchValue . "%";

    $sql = "SELECT recipe.*, category.category_name 
            FROM recipe 
            JOIN category ON recipe.category_id = category.category_id
            WHERE LOWER(recipe.recipe_name) LIKE :searchParam 
            OR LOWER(recipe.author) LIKE :searchParam 
            OR LOWER(category.category_name) LIKE :searchParam";

    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([':searchParam' => $searchParam]);

    if ($stmt->rowCount() > 0) {
        echo '<div class="search-results">';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="card" style="margin-bottom: 20px;  border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);">';
            echo '  <div class="card-body" style="padding:10px">';
            echo '    <h5 class="card-title text-center" style="font-size:1.5em; margin-bottom:15px;">';
            echo '      <a href="viewmore.php?id=' . htmlspecialchars($row['recipe_id']) . '">' . htmlspecialchars($row['recipe_name']) . '</a>';
            echo '    </h5>';
            echo '    <p class="card-text" style="margin-bottom:10px"><strong>Author:</strong> ' . htmlspecialchars($row['author']) . '</p>';
            echo '    <p class="card-text" style="margin-bottom:10px"><strong>Category:</strong> ' . htmlspecialchars($row['category_name']) . '</p>';
            echo '    <p class="card-text" style="margin-bottom:10px"><strong>Ingredients:</strong> ' . nl2br(htmlspecialchars($row['recipe_ingredient'])) . '</p>';
            echo '    <p class="card-text" style="margin-bottom:10px"><strong>Instructions:</strong> ' . nl2br(htmlspecialchars($row['recipe_instruction'])) . '</p>';
            echo '    <p class="card-text" style="margin-bottom:10px"><strong>Date Added:</strong> ' . htmlspecialchars($row['recipe_dateadded']) . '</p>';
            echo '  </div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "No results found.";
        
    }
}


}





