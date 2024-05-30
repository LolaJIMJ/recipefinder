<?php
error_reporting(E_ALL);
require_once("Db.php");



class Category extends Db{
    private $dbconn;

    public function __construct(){
        $this->dbconn = $this->connect();
    }

    public function addCategory($category_name) {
        $sql = 'INSERT INTO category (category_name) VALUES (?)';
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$category_name]);
        return "Category successfully saved";
    }

    public function deleteCategory($category_id) {
        $sql = 'DELETE FROM category WHERE category_id = ?';
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$category_id]);
        return "Category successfully deleted";
    }

    public function editCategory($category_id, $category_name) {
        $sql = 'UPDATE category SET category_name = ? WHERE category_id = ?';
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$category_name, $category_id]);
        return "Category successfully edited";
    }

    public function getAllCategories() {
        $sql = 'SELECT * FROM category';
        $stmt = $this->dbconn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   

    

    

       public function getCategoryById($categoryId) {
        try {
            $sql = "SELECT * FROM category WHERE category_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$categoryId]);
            $category = $stmt->fetch(PDO::FETCH_ASSOC);
            return $category;
        } catch(PDOException $e) {
           
            error_log("Error fetching category: " . $e->getMessage());
            return false;
        }
    }
    
    public function updateCategory($categoryId, $categoryName) {
        $sql = "UPDATE category SET category_name = :categoryName WHERE category_id = :categoryId";
        $stmt = $this->dbconn->prepare($sql);
        $result = $stmt->execute([':categoryName' => $categoryName, ':categoryId' => $categoryId]);

        return $result;
    }

    

    public function insertCategory($category_id, $category_name) {
    $sql = "INSERT INTO category(category_id, category_name) VALUES (?,?)";
	$stmt = $this->dbconn->prepare($sql);
	$resp = $stmt->execute([$category_id,$category_name]);
	return $resp;
    }

    public function get_all_category(){
        $sql = "SELECT * FROM category";
        $sql = $this->dbconn->prepare($sql);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_category_name_by_id($category_id) {
        $sql = "SELECT category_name FROM category WHERE category_id=?";
        $sql = $this->dbconn->prepare($sql);
        $sql->execute([$category_id]);
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result["category_name"];

    }


   
}
?>
