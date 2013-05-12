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
        <p class="main-heading">My Courses</p>
        <div>
          <ul id="user-courses">
            <li>
                <p id="course-title">Introduction To Yoga</p>
                <p>Geelong Yoga Center</p>
                <p class="mb-1em">125, High St, Geelong, 3215</p>
                <p>Starts May 25th, 2013</p>
                <p>10 Week Course</p>
                <p class="bold">Attendees:</p>
                <p>Callum Mundine: Student - $150</p>
                <p>John Smith: Standard - $250</p>
                <br>
                <button type="button" class="btn"><i class="icon-arrow-down icon-1x"></i> Download Pass</button>  
                <button type="button" class="btn btn-success" disabled> Booked</button>  
            </li>
            <li>
                <p id="course-title">Introduction To Yoga</p>
                <p>Geelong Yoga Center</p>
                <p class="mb-1em">125, High St, Geelong, 3215</p>
                <p>Starts May 25th, 2013</p>
                <p>10 Week Course</p>
                <p class="bold">Attendees:</p>
                <p>Callum Mundine: Student - $150</p>
                <p>John Smith: Standard - $250</p>
                <br>
                <button type="button" class="btn"><i class="icon-arrow-down icon-1x"></i> Download Pass</button>  
                <button type="button" class="btn btn-success" disabled> Booked</button>  
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
