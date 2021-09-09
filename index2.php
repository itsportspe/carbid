<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.all.min.css">
    <link rel="stylesheet" href="./css/main.css">

    <title>(Workkng Title)</title>
  </head>
  <body>

    <!-- Begin Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">
      <img src="./pics/mustang.png" alt="" class="img-fluid">
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
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
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
        <li class="nav-item">
          <a class="nav-link" href="#loginModal" data-toggle="modal">Log in</a>        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Log out</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <!-- Collapsible Nav End -->
    </nav>

    <!-- Nav Hidden Login Modal -->
    <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                        <div class="form-group">
                            <a href="./registration/register.php" class="float-right">New user?</a>
                            <label for="uname1">Username</label>
                            <input type="text" class="form-control form-control-lg" name="uname1" id="uname1" required="">
                            <div class="invalid-feedback">Oops, you missed this one.</div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control form-control-lg" id="pwd1" required="" autocomplete="new-password">
                            <div class="invalid-feedback">Enter your password too!</div>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                        <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
                        </div>
                        <div class="form-group py-4">
                            <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Hidden Login Modal End -->

    <hr>
    <!-- End Nav -->

    <!-- Jumbotron -->
    <div  class="topborder container-fluid">
        <h2>(placeholder)</h2>
        <div class="jumbotron">
          <span>Trending</span>
        </div>
    </div>
    <!-- End Jumptron -->

    
    <!-- Footer -->
    <hr>
    <div class="container-fluid">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Us
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">placeholder1</a>
          <a class="dropdown-item" href="#">placeholder2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">placeholder3</a>
        </div>
      </ul>
    </div>
    <!-- End Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>