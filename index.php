<?php 
	ob_start();
	session_start();
 	include('util/main.php');
	include('model/database.php');
    include('util/security.php');
    include('util/valid_admin.php');
	include('model/admin_db.php');
	include('model/member_db.php');
	include('view/header_admin.php');
	include('model/category_db.php');
	include('util/pagination.php');


?>   
<?php
if (isset($_POST['action'])) 
{
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}elseif (isset($_GET['category_id'])) {
    $action = 'category';
}else{
	$action='view';
	}

switch ($action) {
	
	case 'view':
    include ('view/home.php');
    break;
	
	case 'edit':
	  	$id_member=$_GET['idmem'] ;
		$edit=get_detail_member($id_member);
		$category=get_category();
		include ('view/member_update.php');
	 break;
	 
	case 'update':
		$firstname = $_POST['firstname'];
	   	$lastname = $_POST['lastname'];
       	$email = $_POST['email'];
		$phone=$_POST['phone'];
		$date = $_POST['date'];
       	$level = $_POST['category'];
		$status=$_POST['stt'];
		$id_member=$_POST['idmem'];
		update_member($firstname, $lastname, $email,$phone, $date,$level,$status,$id_member);
		header('Location:' .$app_path);
	break;
	
	case 'delete':
		$id_member=$_GET['idmem'] ;
		delete_member($id_member);
		header('Location:'.$app_path.'?del=success');
		
	case 'category':
        // Get category data
        $category_id = intval($_GET['category_id']);
        $category = getcategory($category_id);
        $category_name = $category['level_name'];
        $member = get_member_by_category($category_id);
		//pagination
		$p = new Pager;
		$counts = count_member_by_category($category_id);
		$count=$counts[0];
		$limit = 2;
		$start = $p->findStart($limit);
    	$pages = $p->findPages($count,$limit);
		
		$result=member_on_page($category_id,$start,$limit);
        // Display product by category
        include('view/category.php');
        break;
		
	 case 'add':
	 	$category=get_category();
		include ('view/member_add.php');
	 break;
	case 'view_add':
		$firstname = $_POST['firstname'];
	   	$lastname = $_POST['lastname'];
       	$email = $_POST['email'];
		$phone=$_POST['phone'];
		$date = $_POST['date'];
       	$level = $_POST['level'];
		add_member($firstname, $lastname, $email,$phone, $date,$level);
		header('Location:'.$app_path.'?add=success');

	 break;
	 case 'logout':
        unset($_SESSION['admin']);
        header('Location:'.$app_path);
        break;

}

   
		
    
   

?>
<?php include('view/footer_admin.php');?>


