  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('user_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

      <div class="span9">
      <div class="wrapper">
        <p class="main-heading">Account Settings</p>
        <div id="my_account_settings">
          <form class="form-horizontal">
            <div class="control-group">
              <div class="controls no-margin">
                <input class="input-xlarge" type="text" placeholder="First Name">
              </div>
            </div>
            <div class="control-group">
              <div class="controls no-margin">
                <input class="input-xlarge" type="text" id="" placeholder="Surname">
              </div>
            </div>
            <div class="control-group">
              <div class="controls no-margin">
                <input class="input-xlarge" type="email" id="" placeholder="Email">
              </div>
            </div>
            <div class="control-group">
              <div class="controls no-margin">
                <input class="input-xlarge" type="password" id="#" placeholder="New Password">
              </div>
            </div>
            <div class="control-group">
              <div class="controls no-margin">
                <input class="input-xlarge" type="password" id="#" placeholder="Confirm New Password">
              </div>
            </div>
            <div class="control-group">
              <div class="controls no-margin">
                <button type="submit" class="btn btn-block" id="facebook-login"><i class="icon-facebook pull-left icon-15x"></i> Connect With Facebook</button>
              </div>
            </div>
            <div class="control-group">
              <div class="controls no-margin">
                <button type="submit" class="btn">Save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
