<?php 
	require_once 'database.php';
	if(!$user->is_loggedin()){
	 $user->redirect('index.php');
	}
	$user_id = $_SESSION['user_session'];
	$stmt = $DB_con->prepare("SELECT * FROM users WHERE id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);


?>
