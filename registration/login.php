<?php include('server.php') ?>
<!DOCTYPE html>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once("../templateheader.php");
?>
<body
>
<?php
	include_once("../templatenav.php");
?>
  <div class="container">
  	<h2 class="text-center">Login</h2>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  		<label for="user">Username</label>
  		<input class="form-control" type="text" name="username" id="user">
  	</div>
  	<div class="form-group">
  		<label>Password</label>
  		<input for="passwordEntry" class="form-control" type="password" name="password" id="pwd">
  	</div>
  	<button type="submit" class="btn btn-primary" id="passwordEntry" name="login_user">Login</button>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
  <?php include_once("../templatefooter.php");
?>