  <?php include('header.php'); ?>
  <div class="container">
    <div class="row-fluid">
      <?php include('studio_admin_sidebar.php') ?>

      <script>
        $('#drop-button').click(function() {
          $('#business-selection').toggle()
        });
      </script>

      <div class="span9">
        <div class="wrapper">
          <p class="main-heading">Weekly Schedule</p>
          <ul class="pager">
          <li id="earlier"><a href="#">Previous</a></li>
          <li id="later"><a href="#">Next</a></li>
        </ul>

        <div id="block-schedule">
              <ul id="schedule-list">
                <li id="day-active"><a href="#">Mon, 5th</a></li>
                <li><a href="#">Tue, 6th</a></li>
                <li><a href="#">Wed, 7th</a></li>
                <li><a href="#">Thu, 8th</a></li>
                <li><a href="#">Fri, 9th</a></li>
                <li><a href="#">Sat, 10th</a></li>
                <li><a href="#">Sun, 11th</a></li>
              </ul>
            <table class="table">
              <thead>
                <tr>
                  <th>Class</th>
                  <th>Studio</th>
                  <th>Time</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td class="w-25"><a href="#" class="c-blue">Bikram Yoga</a></td>
                  <td class="w-25">Geelong Yoga Studio</td>
                  <td class="w-15">7:30PM</td>
                  <td class="w-10">$15</td>
                  <td class="schedule-button align-right w-25">
                    <a href="#" rel="tooltip" title="5 Bookings" data-placement="top" class="number-bookings"><button type="button" class="btn" id="bookings-num-button"><i class="icon-user"></i> 5</button></a>
                  </td>
                </tr>
                <td colspan="5" id="class-attendees-td">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Booking Type</th>
                        <th>Booking #</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Student: $15</td>
                        <td>#54637</td>
                        <td><a href="#" rel="tooltip" title="Check this customer in!" data-placement="top" class="check-in"><button type="button" class="btn btn-mini">Check In</button></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Student: $15</td>
                        <td>#54637</td>
                        <td><button type="button" class="btn btn-mini btn-success disabled">Checked In</button></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                



              </tbody>
            </table>
          </div>
        </div>
        <br>
        
        <div class="wrapper">
          <p class="main-heading">Courses</p>
          <ul id="courses-ul">
            <li>
              <p><a href="#" id="course-title">Introduction To Yoga</a><span class="pull-right black normal">Starts May 25th, 2013</span></p>
              <p>Geelong Yoga Center<span class="pull-right">Wednesday's, Thursday's: 5:30PM - 6:30PM</span></p>
              <p>125 High St, Geelong, 3215<span class="pull-right">10 Week Course</span></p>
              <br>
              <a rel="tooltip" title="5 Bookings" data-placement="top" class="number-bookings"><button type="button" class="btn" id="bookings-num-button-course"><i class="icon-user"></i> 5</button></a>
            </li>
            <div id="courses-bookings-table-div">
              <table class="table courses-bookings-table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Booking Type</th>
                        <th>Booking #</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Student: $15</td>
                        <td>#54637</td>
                        <td><a href="#" rel="tooltip" title="Check this customer in!" data-placement="top" class="check-in"><button type="button" class="btn btn-mini">Check In</button></a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Student: $15</td>
                        <td>#54637</td>
                        <td><button type="button" class="btn btn-mini btn-success disabled">Checked In</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            <li>
              <p><a href="#" id="course-title">Introduction To Yoga</a><span class="pull-right black normal">Starts May 25th, 2013</span></p>
              <p>Geelong Yoga Center<span class="pull-right">Wednesday's, Thursday's: 5:30PM - 6:30PM</span></p>
              <p>125 High St, Geelong, 3215<span class="pull-right">10 Week Course</span></p>
              <br>
              <a href="#" rel="tooltip" title="5 Bookings" data-placement="top" class="number-bookings"><button type="button" class="btn"><i class="icon-user"></i> 5</button></a>
            </li>
          </ul>
        </div>
        <br>

        <div class="wrapper">
          <p class="main-heading">Templates</p>
          <ul class="templates">
            <p class="template-sub-heading">Weekly Repeating Classes</p>
            <li>
              <p id="class-name" class="mb-1em">Bikram Yoga</p>
              <button type="button" class="btn btn-success disabled">Published</button>
              <button type="button" class="btn black disabled"><i class="icon-retweet"></i> 5 Weekly Cycles Scheduled</button>
              <button type="button" class="btn black pull-right"><i class="icon-plus"></i> Add New Cycle</button>
              
            </li>
            <li>
              <p id="class-name" class="mb-1em">Bikram Yoga</p>
              <button type="button" class="btn btn-warning disabled">Draft</button>
              <button type="button" class="btn btn-success">Publish</button>
              <button type="button" class="btn black disabled"><i class="icon-retweet"></i> 5 Weekly Cycles Unpublished</button>
              <button type="button" class="btn black pull-right"><i class="icon-plus"></i> Add New Cycle</button>
            </li>
          </ul>
          <!-- end of weekly templates -->

          <ul class="templates">
            <p class="template-sub-heading" style="border-top:1px solid #ddd;">Courses</p>
            <li>
              <p id="class-name" class="mb-1em">Beginners Yoga</p>
              <button type="button" class="btn btn-success disabled">Published</button>
              <button type="button" class="btn black disabled"><i class="icon-retweet"></i> 5 Courses Scheduled</button>
              <button type="button" class="btn black pull-right"><i class="icon-plus"></i> Add Another Course Occurance</button>
            </li>
            <li>
              <p id="class-name" class="mb-1em">Beginners Yoga</p>
              <button type="button" class="btn btn-warning disabled">Draft</button>
              <button type="button" class="btn btn-success">Publish</button>
              <button type="button" class="btn black disabled"><i class="icon-retweet"></i> 5 Courses Unpublished</button>
              <button type="button" class="btn black pull-right"><i class="icon-plus"></i> Add Another Course Occurance</button>

            </li>
          </ul>
          <!-- end of courses templates -->
        </div>

      </div>
    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>

    <!-- Tooltip -->
   
  <script type="text/javascript">
    $(document).ready(function () {
      $('.number-bookings').tooltip();
      $('.edit-cog').tooltip();
      $('.check-in').tooltip();
    });
  </script>


  <script>
    $("#bookings-num-button").click(function () {
    $("#class-attendees-td").toggle();
    });
  </script>

  <script>
    $("#bookings-num-button-course").click(function () {
    $("#courses-bookings-table-div").toggle();
    });
  </script>