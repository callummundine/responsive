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
          <p class="main-heading">My Schedule</p>
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
                  <th class="w-25">Class</th>
                  <th class="w-25">Studio</th>
                  <th class="w-10">Time</th>
                  <th class="w-7">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bikram Yoga</td>
                  <td>Geelong Yoga Studio</td>
                  <td>7:30PM</td>
                  <td>$15</td>
                  <td class="schedule-button align-right w-25">
                    <a href="#" rel="tooltip" title="Share This Class" data-placement="top" class="share-class"><button type="button" class="btn"><i class="icon-share"></i></button></a>                    
                    <a href="#" rel="tooltip" title="Remove From Schedule" data-placement="top" class="remove-schedule"><button type="button" class="btn"><i class="icon-calendar"></i></button></a>
                    <button type="button" class="btn">Book</button>
                  </td>
                </tr>

                <tr>
                  <td>Bikram Yoga</td>
                  <td>Geelong Yoga Studio</td>
                  <td>7:30PM</td>
                  <td>$15</td>
                  <td class="schedule-button align-right w-25">
                    <a href="#" rel="tooltip" title="Share This Class" data-placement="top" class="share-class"><button type="button" class="btn"><i class="icon-share"></i></button></a>                    
                    <a href="#" rel="tooltip" title="Download Pass" data-placement="top" class="download-pass"><button type="button" class="btn"><i class="icon-arrow-down"></i></button></a>
                    <button type="button" class="btn btn-success disabled">Booked</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>


          <script type="text/javascript">
            $(document).ready(function () {
              $('.unfollow-studio').tooltip();
              $('.remove-schedule').tooltip();
              $('.download-pass').tooltip();
              $('.share-class').tooltip();
            });
          </script>


          <div id="mobile-schedule">
            <p class="mobile-day">Monday, 25th</p>
                <a href="#" class="mobile-class-link">
                  <div class="mobile-class">
                    <p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
                    <p class="mb-1em">Geelong Yoga Studio<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
                    <a href="#" rel="tooltip" title="Unollow Studio" data-placement="top" class="unfollow-studio"><button type="button" class="btn"><i class="icon-heart-empty"></i></button></a>
                    <a href="#" rel="tooltip" title="Remove From Schedule" data-placement="top" class="remove-schedule"><button type="button" class="btn"><i class="icon-calendar"></i></button></a>
                    <button type="button" class="btn">Book</button>
                  </div>
                </a>
                <a href="#" class="mobile-class-link">
                  <div class="mobile-class">
                    <p id="m-class-name" class="mb-05em">Bikram Yoga<span class="pull-right black">$25</span></p>
                    <p class="mb-1em">Geelong Yoga Studio<span class="pull-right font-12em">7:30AM - 8:30PM</span></p>
                    <a href="#" rel="tooltip" title="Download Pass" data-placement="top" class="download-pass"><button type="button" class="btn"><i class="icon-arrow-down"></i></button></a>
                    <button type="button" class="btn btn-success">Booked</button>
                  </div>
                </a>


                <p class="mobile-day">Tuesday, 26th</p>


                <p class="mobile-day">Wednesday, 27th</p>


                <p class="mobile-day">Thursday, 28th</p>


                <p class="mobile-day">Friday, 29th</p>


                <p class="mobile-day">Saturday, 30th</p>


                <p class="mobile-day">Sunday, 31st</p>


                <ul class="pager" id="mobile-pager-bottom">
                <li id="earlier"><a href="#">Previous</a></li>
                <li id="later"><a href="#">Next</a></li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php include('footer.php'); ?>

  </body>
</html>
