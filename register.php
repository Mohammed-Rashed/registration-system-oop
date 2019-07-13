<?php 
  require_once 'controllers/RegisterController.php';


?>
<!DOCTYPE html>
<html>
<head>
  <title>register form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div>
    
     <?php
    include('include/header.php');
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="container mt-2 alert alert-danger">
                      <?php echo $error; ?>
                  </div>
                  <?php
               }
            }
            else if(isset($_GET['joined']))
            {
                

         ?>
          <div class="alert alert-info">
                      Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
            }
            ?>
            <div class="mt-5"> 
              <div class="container">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" placeholder="Username">
                      </div>
                        <div class="form-group">
                        <input type="email" class="form-control" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" name="email" placeholder="Email">
                      </div>
                        <div class="form-group">
                        <input type="password" class="form-control" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" name="password" placeholder="Password">
                      </div>
                        <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Register" name="btn-signup">
                      </div>
                    </form>
              </div>
            </div>
  </div>
</body>
</html>