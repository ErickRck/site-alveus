
<div class="login-box">
  <div class="login-logo">
    <a href="">Material<b>Admin</b>LTE</a>
  </div>
  
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    

    <form action="<?php echo base_url('auth/login_validation'); ?>" method="post">
    <span class="text-success"><?php echo $this->session->flashdata("success"); ?></span>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Name">
         
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger"><?php echo form_error('username') ;?></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
        
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span class="text-danger"><?php echo form_error('password'); ?></span>
      </div>
      <div class="row">
        <div class="col-xs-7">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        
        <div class="col-xs-5">

        
          <input type="submit" class="btn btn-primary btn-raised btn-block btn-flat" value="Login"  />
        
        </div>
      
      <span class="text-danger"><?php echo $this->session->flashdata("error"); ?></span>
      </div>
      </form>
    

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    

    <a href="#">I forgot my password</a><br>
    <span class="text-center"><?php echo anchor('Auth/register','Register a new membership'); ?></span>
    

  </div>
  
</div>
 


