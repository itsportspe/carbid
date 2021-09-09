<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once("../templateheader.php");
   // include_once("$path/projects/carauction/templatenav.php");
?>
<body>

<?php include_once("../templatenav.php"); ?>

  <div class="container">
  	<h2 class="text-center">Register</h2>

	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  	  <label for=user>Username</label>
  	  <input type="text" class="form-control" name="username" id="user" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group">
  	  <label for="email">Email</label>
  	  <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group">
  	  <label for="pwd">Password</label>
  	  <input type="password" class="form-control" id="pwd" placeholder="Password" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label for="confirmpwd">Confirm password</label>
  	  <input type="password" class="form-control" id="confirmpwd" placeholder="Confirm Password" name="password_2">
  	</div>
  	<button type="submit" class="btn btn-primary" name="reg_user">Register</button>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
  <?php include_once("../templatefooter.php");
?>