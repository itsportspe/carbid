<?php 

   // Set Root Path
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once("$path/projects/carauction/templateheader.php");
   // End Set Root Path

  session_start(); 

  /*if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header("location: ../index.php");
  }
  */

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ./index.php");
  }
?>


<body>
<?php include_once("$path/projects/carauction/templatenav.php"); ?>

<div class="container">
	<h2>Home Page</h2>

	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>
		<div class="error success" >
			<h3>
			<?php 
				echo $_SESSION['success']; 
				unset($_SESSION['success']);
			?>
			</h3>
		</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
</div>
		
<?php include_once("$path/projects/carauction/templatefooter.php");
?>