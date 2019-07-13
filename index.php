<?php 
	require_once 'controllers/LoginController.php';
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	   <?php
    include('include/header.php');
    ?>
  <div class="container">
  	<div class="row">
  		<div class="col-md-6 offset-md-3 mt-5">
  			<div>
				<div class="text-center py-2 text-light">
					<h3>Login page</h3>
				</div>
					<?php 

		 if(isset($error))
            {
               
                  ?>
                  <div class="alert alert-danger">
                      <?php echo $error; ?>
                  </div>
                  <?php
           }
            ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-success" value="login" name="btn-login">
					</div>
				</form>
  			</div>
  		</div>
    
  	</div>
  </div>
</body>
</html>