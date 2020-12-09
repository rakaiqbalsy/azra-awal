<?php if ($this->session->userdata('email') == null) { ?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Azra</b>Member</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?= base_url('auth/login'); ?>" method="post">
        <div class="form-group input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
           <!-- error message -->
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="form-group input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <!-- error message -->
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
      </div>
      <!-- /.social-auth-links -->

     <!--  <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php } 
	else {
      redirect('landpage');
    }


?>