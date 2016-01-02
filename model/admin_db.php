<?php
function is_valid_admin_login($email, $password) { // kiem tra su ton tai cua admin
    global $db;
	 $query = '
        SELECT * FROM admin
        WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $valid = ($statement->rowCount() == 1);
    $statement->closeCursor();
    return $valid;
}
function get_admin_by_email ($email) {
    global $db;
    $query = 'SELECT * FROM admin WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $admin = $statement->fetchAll();
    $statement->closeCursor();
    return $admin;
}
















?>