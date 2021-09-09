    <!-- Nav Hidden Login Modal -->
    <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="index.php">
                    <?php include('registration/errors.php'); ?>
                        <div class="form-group">
                            <a href="./registration/register.php" class="float-right">New user?</a>
                            <label for="uname1">Username</label>
                            <input type="text" class="form-control form-control-lg" name="username" id="uname1" required="">
                            <div class="invalid-feedback">Oops, you missed this one.</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd1">Password</label>
                            <input type="password" class="form-control form-control-lg" id="pwd1" name="password" required="" autocomplete="new-password">
                            <div class="invalid-feedback">Enter your password too!</div>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                        <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
                        </div>
                        <div class="form-group py-4">
                            <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
                            <button type="submit" class="btn btn-success btn-lg float-right" name="login_user" id="btnLogin">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Hidden Login Modal End -->