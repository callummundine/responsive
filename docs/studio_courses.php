  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('studio_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

      <div class="span9">
        <div class="wrapper">
          <?php include('studio-header.php') ?>
          <?php include('cover-photo.php'); ?>
          <p class="page-heading">Courses</p>
          <div>
            <ul id="business-courses-ul">
              <li>
                <p><a href="studio_coursepage.php" id="course-title">Introduction To Yoga</a><span class="pull-right black normal">Starts May 25th, 2013</span></p>
                <p>Geelong Yoga Center<span class="pull-right">Wednesday's, Thursday's: 5:30PM - 6:30PM</span></p>
                <p>125 High St, Geelong, 3215<span class="pull-right">10 Week Course</span></p>
              </li>
              <li>
                <p><a href="#" id="course-title">Introduction To Yoga</a><span class="pull-right black normal">Starts May 25th, 2013</span></p>
                <p>Geelong Yoga Center<span class="pull-right">Wednesday's, Thursday's: 5:30PM - 6:30PM</span></p>
                <p>125 High St, Geelong, 3215<span class="pull-right">10 Week Course</span></p>
              </li>
              <li>
                <p><a href="#" id="course-title">Introduction To Yoga</a><span class="pull-right black normal">Starts May 25th, 2013</span></p>
                <p>Geelong Yoga Center<span class="pull-right">Wednesday's, Thursday's: 5:30PM - 6:30PM</span></p>
                <p>125 High St, Geelong, 3215<span class="pull-right">10 Week Course</span></p>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
