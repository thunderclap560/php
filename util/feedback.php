<?php 
session_start(); 
include('main.php');
include('../model/database.php');
include('../model/product_db.php');
$tenKH="";
$feedback="";
$vote="";
$uploaddir = '../images/thanhvien/';
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
                $image = $_FILES['file']['name'];
if (isset($_POST['tenKH'])) {$tenKH = $_POST['tenKH'];}
if (isset($_POST['feedback'])) {$feedback = $_POST['feedback'];}
if (isset($_POST['vote'])) {$vote = $_POST['vote'];}

if($_POST['txtCaptcha'] != $_SESSION['security_code'])
		{
		
	header("Location: ../index.php?msg=del");
		}
else{
$feed=add_feedback($tenKH,$feedback, $image,$vote);
header("Location: ../index.php?msg=ok");}

?>