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
        <p class="page-heading">Teachers</p>
          <ul>
            <li class="teacher-profile">
                <p id="teacher-name">Callum Mundine</p>
                <div id="teacher-photo">

                </div>
                <div id="teacher-content">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  <a href="#" class="link">Read More</a>
                </div>
                <p id="teacher-classes">Classes Taken</p>
                <ul>
                  <li class="taken-li"><a href="#">Yoga</a></li>
                  <li class="taken-li"><a href="#">Yoga</a></li>
                  <li class="taken-li"><a href="#">Yoga</a></li>
                </ul>
            </li>
            <li class="teacher-profile">
                <p id="teacher-name">Callum Mundine</p>
                <div id="teacher-photo">

                </div>
                <div id="teacher-content">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  <a href="#" class="link">Read More</a>
                </div>
                <p id="teacher-classes">Classes Taken</p>
                <ul>
                  <li class="taken-li"><a href="#">Yoga</a></li>
                  <li class="taken-li"><a href="#">Yoga</a></li>
                  <li class="taken-li"><a href="#">Yoga</a></li>
                </ul>
            </li>
          </ul>
      </div>
    </div>

    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
