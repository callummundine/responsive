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
        <p class="main-heading">Checkout</p>
        <div class="p-1em align-center">
          <p class="f-12em">Congratulations!</p>
          <br>
          <p>Your booking was successful. We have email you the details.</p>
        </div>
      </div>
    </div>
    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
