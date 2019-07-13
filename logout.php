<?php 
	require_once 'controllers/database.php';
	
	if(!$user->is_loggedin()){
	 $user->redirect('index');
	}else{
		if(isset($_GET['logout']) && $_GET['logout'] ==true){
		$user->logout();
		$user->redirect('index');
		}	
	}	





?>

