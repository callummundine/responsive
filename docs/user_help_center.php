  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('user_help_center_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

      <div class="span9">
      <div class="wrapper">
        <p class="main-heading">Help Center</p>

        <ul id="help-ul">
          <li>
            <p class="help-headings">Heading 1</p>
            <p class="help-content">Content</p>
          </li>
          <li>
            <p class="help-headings">Heading 1</p>
            <p class="help-content">Content</p>
          </li>
        </ul>
      </div>
    </div>


    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
