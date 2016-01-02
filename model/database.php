<?php
$dsn = "mysql:host=localhost;dbname=pink";
									$username = "root";
									$password = "";
									$db = new PDO($dsn,$username,$password);
	$db->exec("set names utf8");	


 ?>