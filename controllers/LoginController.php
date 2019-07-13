<?php 
	require_once 'database.php';
	if($user->is_loggedin()!="")
	{
	 $user->redirect('home.php');
	}
	if(isset($_POST['btn-login']))
	{
		 $uname = $_POST['email'];
		 $umail = $_POST['email'];
		 $upass = $_POST['password'];
		  
		 if($user->login($uname,$umail,$upass))
		 {
		  $user->redirect('home.php');
		 }
		 else
		 {
		  $error = "Wrong Details !";
  		  $user->redirectBack();

		 } 
	}
?>
