  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('business_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

      <?php include('business_schedule.php'); ?>

    </div>
  </div>




    <?php include('footer.php'); ?>



    



  </body>
</html>
