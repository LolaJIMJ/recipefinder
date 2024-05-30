<?php

    error_reporting(E_ALL);
    require_once('Db.php');

    class Review extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn = $this->connect();
        }


        public function insert_review($review_comment,$recipe_id,$user_id){
            $sql = "INSERT INTO review(review_comment, recipe_id, user_id) VALUES (?,?,?)";
	$stmt = $this->dbconn->prepare($sql);
	$resp = $stmt->execute([$review_comment,$recipe_id,$user_id]);
		if($resp){
			return true;
		}else{
			return false;
		}
    }    


        public function fetch_review_by_id($recipe_id){
            $sql = 'SELECT * FROM review WHERE recipe_id=?';
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$recipe_id]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }

    


    public function fetch_review(){
        $sql = 'SELECT * FROM review';
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        
}



    }
        




    


      
    
