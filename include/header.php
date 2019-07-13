<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Reg System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    
    </ul>
    <div class="form-inline my-2 my-lg-0">

      <?php 
        if($user->is_loggedin()){
           echo '<a href="logout.php?logout=true" class="btn btn-danger">logout</a>';

        }elseif(!$user->is_loggedin() && $_SERVER['PHP_SELF']=='/oop-reg/index.php'){
          echo '<a href="register.php" class="btn btn-danger">Register</a>';

        }elseif(!$user->is_loggedin() &&  $_SERVER['PHP_SELF']=='/oop-reg/register.php'){
            echo '<a href="index.php" class="btn btn-danger">Login</a>';

        }
      ?>

    </form>
  </div>
</nav>