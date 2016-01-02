<?php 
	function get_member_by_category($category_id) {
    global $db;
    $query='select * from member where level=:category_id';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function count_member_by_category($category_id) {
    global $db;
    $query='select count(id) as count from member where level=:category_id';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
      	$products=$statement->fetchAll(PDO::FETCH_COLUMN, 0);
		$statement->closeCursor();
		return $products;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function member_on_page($category_id,$start,$limit) {
   global $db;
			$query='SELECT *
				FROM member
				where level=:category_id
				limit :start , :limit';
			try{
			$statement=$db->prepare($query);
       		$statement->bindValue(':start', $start,PDO::PARAM_INT);
	        $statement->bindValue(':category_id', $category_id);
			$statement->bindValue(':limit', $limit,PDO::PARAM_INT);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}

	function get_member() {
    global $db;
    $query = 'SELECT * FROM member';
    $statement = $db->prepare($query);
    $statement->execute();
    $admin = $statement->fetchAll();
    $statement->closeCursor();
    return $admin;
}

function get_detail_member($id_member){
			global $db;
			$query='select * from member where id=:id_member';
			try{
			$statement=$db->prepare($query);
			$statement->bindvalue(':id_member',$id_member);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;
				}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);}
		}
function update_member($firstname, $lastname, $email,$phone, $date,$level,$status,$id_member){
    global $db;
	
	
    $query = 'UPDATE member   
		   SET 
            firstname = :firstname,
			lastname = :lastname,
		  	email = :email,
			phonenumber=:phone,
            date = :date,
          	level = :level,
			status=:status
        WHERE id = :id_member';
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':firstname', $firstname);     
	 $statement->bindValue(':lastname', $lastname);
   	 $statement->bindValue(':email', $email);
     $statement->bindValue(':phone', $phone);
 	 $statement->bindValue(':date', $date);
	 $statement->bindValue(':level', $level);
	 $statement->bindValue(':status', $status);
	 $statement->bindValue(':id_member', $id_member);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function delete_member($id_member) {
    global $db;
    $query = 'DELETE FROM member WHERE id = :id_member';
    $statement = $db->prepare($query);
    $statement->bindValue(':id_member', $id_member);
    $statement->execute();
    $statement->closeCursor();
}
function add_member($firstname, $lastname, $email,$phone, $date,$level){
    global $db;
	
    $query = 'INSERT INTO member
                 (firstname, lastname, email, phonenumber, date,
                  level)
              VALUES
                 (:firstname, :lastname, :email, :phone, :date,
                  :level)';
    try {
     $statement = $db->prepare($query);
	$statement->bindValue(':firstname', $firstname);     
	 $statement->bindValue(':lastname', $lastname);
   	 $statement->bindValue(':email', $email);
     $statement->bindValue(':phone', $phone);
 	 $statement->bindValue(':date', $date);
	 $statement->bindValue(':level', $level);
	 $statement->execute(); 
     $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}


?>
