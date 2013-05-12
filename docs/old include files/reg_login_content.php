<div class="span6">
  <div class="wrapper">
  	<p class="main-heading">Login</p>
    <form class="form-horizontal" id="login_form">
    	<div class="control-group">
	    <div class="controls no-margin">
	      <button type="submit" class="btn btn-block" id="facebook-login"><i class="icon-facebook pull-left icon-15x"></i> Login With Facebook</button>
	    </div>
	  </div>
	  <div class="control-group mb-10px">
	    <div class="controls no-margin">
	      <input type="text" id="user" name="user" placeholder="Email" class="w-92">
	    </div>
	  </div>
	  <div class="control-group mb-10px">
	    <div class="controls no-margin">
	      <input type="password" id="" placeholder="Password" id="password" name="password" class="w-92">
	    </div>
	    <a href="#myModal" role="button" data-toggle="modal" class="link pull-right mt-1em">Forgot Password</a>
	  </div>

 
	  <div class="control-group">
	    <div class="controls no-margin">
	      <label class="checkbox">
	        <input type="checkbox"> Remember me
	      </label>
	      <button type="submit" class="btn btn-block">Sign in</button>
	      <input type="hidden" name="process" value="yes">
	    </div>
	  </div>
	</form>
  </div>
</div>

<div class="span6">
  <div class="wrapper">
  	<p class="main-heading">Register</p>
    <form class="form-horizontal" id="registration_form">
	  <div class="control-group mb-10px">
	    <div class="controls no-margin">
	      <input type="text" id="firstname" name="firstname" placeholder="First Name" class="w-92">
	    </div>
	  </div>
	  <div class="control-group mb-10px">
	    <div class="controls no-margin">
	      <input type="text" id="lastname" name="lastname" placeholder="Surname" class="w-92">
	    </div>
	  </div>
	  <div class="control-group mb-10px">
	    <div class="controls no-margin">
	      <input type="text" id="register_email"  name="register_email" placeholder="Email" class="w-92">
	    </div>
	  </div>
	  <div class="control-group mb-10px">
	    <div class="controls no-margin">
	      <input type="text" id="register_password" name="register_password" placeholder="Password" class="w-92">
	    </div>
	  </div>
	  <div class="control-group mb-10px">
	    <div class="controls no-margin">
	      <input type="text" id="confirm_password"  name="confirm_password" placeholder="Repeat Password" class="w-92">
	      <input type="hidden" name="studentOrModerator" value="0">
	    </div>
	  </div>
	  <label class="checkbox f-08em" id="terms-cond">
        <input type="checkbox"> I agree to the <a href="#">Terms & Conditions</a>
      </label>
	  <div class="control-group">
	    <div class="controls no-margin">
	      <button type="submit" class="btn btn-block">Register</button>
	    </div>
	  </div>
	  <p><a href="#">Click here</a> to register a businesss.</p>
	</form>
  </div>
</div>

<!-- Forgot Password Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Forgot Password</h3>
  </div>
  <div class="modal-body">
    <p>Please enter your email and we will re-send your password.</p>
    <br>
    <div class="control-group">
	    <div class="controls">
	      <input type="text" id="forgot_password" name="forgot_password" placeholder="Email" class="input-xlarge">
	    </div>
  	</div>
  </div>

  <div class="modal-footer">
    <button class="btn btn-primary btn-block">Resend Password</button>
  </div>
</div>