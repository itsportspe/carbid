<?php
   //$path = $_SERVER['DOCUMENT_ROOT'];
   include_once("templateheader.php");
   include('registration/server.php');
   if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION);
    header("location: ./index.php");
  }
   if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['level'] < 200 || !$_SESSION) {
    session_destroy();
    unset($_SESSION);
    header("location: ./index.php");
  }

   include_once("templatenav.php");
?>
<hr>

    <!-- Management System -->
    <div  class="topborder container-fluid">
        <h2>(Management)</h2>
        <div class="">
          <a href="addproduct.php">Add Product</a>
          
        </div>
    </div>
    <!-- End -->

<?php include_once("templatefooter.php");
?>