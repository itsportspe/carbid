<?php
   ////$path = $_SERVER['DOCUMENT_ROOT'];
   include('registration/server.php');
   include_once("templateheader.php");

   if (isset($_GET['logout'])) {
    echo "<BR><p>logout processed</p><BR>";
  	session_destroy();
  	unset($_SESSION);
    header("location: ./index.php");
  }

   include_once("templatenav.php");
?>
<hr>

    <!-- Jumbotron -->
    <div  class="topborder container-fluid">
    <?php //var_dump(mysqli_fetch_assoc($results)); ?>
        <h2>(placeholder)</h2>
        <div class="jumbotron">
          <span>Trending</span>
        </div>
    </div>
    <!-- End Jumptron -->

<?php include_once("templatefooter.php");
?>

<?php // include("templatenav.php");?>
<?php // include("templateheader.php");?>
<?php // include("templatefooter.php");?>