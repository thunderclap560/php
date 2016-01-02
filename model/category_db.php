<?php 
	function get_category() {
		global $db;
		$query = 'SELECT *,
                (SELECT COUNT(*)
                 FROM member
                 WHERE member.level = level.id)
                 AS idCount
              FROM level
              ORDER BY id';
		try {
			$statement=$db->prepare($query);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
		}
		catch (PDOException $e){
			$error_message=$e->getMassage();
			display_db_error($error_message);
		
		}
	}
	function getcategory($category_id) {
    global $db;
    $query = '
        SELECT *
        FROM level
        WHERE id = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}



?>