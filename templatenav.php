    <!-- Begin Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">
      <img src="./pics/mustang.png" alt="" class="img-fluid imgsize">
      CarBid
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Nav -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php 
        /* Check to see if management is logged in, and provide management options */
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['level'] >= 200) : ?> 
        <li class="nav-item">
          <a class="nav-link" href="manage.php">Manage Site</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <?php endif; 
        /* End check for management */?>      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <?php
        /* Check if logged or logged out and make the proper options avaliabe. */
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : // if logged in make a logout option?> 
        <li class="nav-item">
          <a class="nav-link" href="index.php?logout='1'">Log out</a>
        </li>
        <?php else : // Else if not logged in make a login option?>
        <li class="nav-item">
          <a class="nav-link" href="#loginModal" data-toggle="modal">Log in</a>        
        </li>
        <?php endif;
        /* End Check */?>        
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <!-- Collapsible Nav End -->
    </nav>
    <?php include('login.php') ?>
    <!-- End Nav -->