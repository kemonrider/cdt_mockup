<?php include("_header.php") ?>

<div class="page page-login page-group-auth">
  
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="login-form box-shadow box-padding form-wrapper">
          <form action="dashboard.php" method="GET" class="form">
            <h2>Login</h2>
            <div class="form-group">
              <label for="" class="control-label">
                Email :
              </label>
              <input type="text" name="role" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="" class="control-label">
                Password :
              </label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-primary btn-block">
            </div>
          </form>
          <a href="auth.register.php">Register</a> <a href="auth.reset_password.php" class="pull-right">Reset Password</a>
        </div>
      </div>
    </div><!-- .row -->
  </div><!-- .container -->

</div><!-- .page-login -->

<?php include("_footer.php") ?>