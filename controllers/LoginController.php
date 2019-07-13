<?php 
	require_once 'database.php';
	if($user->is_loggedin()!="")
	{
	 $user->redirect('home');
	}
	if(isset($_POST['btn-login']))
	{
		 $uname = $_POST['email'];
		 $umail = $_POST['email'];
		 $upass = $_POST['password'];
		  
		 if($user->login($uname,$umail,$upass))
		 {
		  $user->redirect('home');
		 }
		 else
		 {
		  $error = "Wrong Details !";
  		  $user->redirectBack();

		 } 
	}
?>
