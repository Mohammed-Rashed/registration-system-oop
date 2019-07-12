<?php 
	require_once 'database.php';
	
	if(!$user->is_loggedin()){
	 $user->redirect('index.php');
	}else{
		if(isset($_GET['logout']) && $_GET['logout'] ==true){
		$user->logout();
		$user->redirect('index.php');
		}	
	}	





?>

