<?php
session_start();
include('../util/main.php');
include('../model/database.php');
include('../util/security.php');
include('../model/admin_db.php');

if (!isset($_SESSION['admin'])) {
		$action='view_login';
		}
 if (isset($_POST['action']) == 'login') {$action = 'login';}

		


switch ($action) {
	
    case 'view_login':
        include './account_login.php';
        break;
    case 'login':
        $email = $_POST['email'];
        $password = $_POST['password'];
		$return_url= base64_decode($_POST["return_url"]); //return url
		if (is_valid_admin_login($email, $password)) {
		
		$_SESSION['admin'] = get_admin_by_email($email);
		header('Location:'.$app_path)	;	 
		} else {
		header('Location:'.$return_url.'?msg=false');

	       }
        break;
  
    case 'logout':
        unset($_SESSION['admin']);
        redirect($app_path . 'admin/account');
        break;
   
}
?>