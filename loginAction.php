<?php
	session_start();

		$username = $_POST['username'];
		$password = $_POST['password'];
	
		if($username=="sorsai" && $password=="sorsai"){ 
			header('Location: dashboard.php');
		} else {
			header('Location: login_error.php');
		}
?>